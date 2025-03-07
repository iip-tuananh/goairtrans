<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\models\product\Category;
use App\models\product\Product;
use App\models\blog\Blog;
use Session;
use App\models\website\Partner;
use App\models\blog\BlogCategory;
use App\models\CarType;
use App\models\ReviewCus;
use App\models\PageContent;
use App\models\Project;
use Illuminate\Support\Facades\DB;

class HomeController extends Controller
{
    public function home()
    {
        $data['hotnews'] = Blog::where([
            ['status','=',1]
        ])->orderBy('id','DESC')->limit(6)->get(['id','title','slug','created_at','image','description']);

        $data['gioithieu'] = PageContent::where(['slug'=>'gioi-thieu','language'=>'vi'])->first(['id','title','content','image']);
        $data['partner'] = Partner::where(['status'=>1])->get();
        $data['reviewcus'] = ReviewCus::where(['status'=>1])->get();
        $data['carTypes'] = CarType::all();


        $carTypes = CarType::with(['carServicePrices' => function ($query) {
            $query->with('province')->where('province_id',2);
        }])->get();
        $carTypes->map(function ($carType) {
            $newRecords = [];
            foreach ($carType->carServicePrices as $index1 => $carServicePrice1) {
                foreach ($carType->carServicePrices as $index2 => $carServicePrice2) {
                    if ($carServicePrice1->car_type_id == $carServicePrice2->car_type_id && $carServicePrice1->province_id == $carServicePrice2->province_id && $carServicePrice1->place_from == $carServicePrice2->place_to && $carServicePrice1->place_to == $carServicePrice2->place_from) {
                        if (isset($carServicePrice2->price_2_way) && $carServicePrice2->price_2_way > 0) {
                            $key1 = $index1 . '_' . $index2;
                            $key2 = $index2 . '_' . $index1;
                            if (!isset($newRecords[$key1]) && !isset($newRecords[$key2])) {
                                $newRecords[$key1] = [
                                    "type" => 'two_way',
                                    'parent_id' => $carServicePrice2->id,
                                    "car_type_id" => $carType->id,
                                    "province_id" => $carServicePrice1->province_id,
                                    "province_name" => $carServicePrice1->province->province_name,
                                    "place_from" => 'Hai chiều ('.$carServicePrice1->place_from.' <=> '.$carServicePrice1->place_to.')',
                                    "place_to" => 'Hai chiều ('.$carServicePrice1->place_to.' <=> '.$carServicePrice1->place_from.')',
                                    "price_min" => $carServicePrice2->price_2_way,
                                    "price_max" => $carServicePrice2->price_2_way,
                                    "price_2_way" => $carServicePrice2->price_2_way,
                                ];
                            }
                        }
                    }
                }
            }
            foreach ($newRecords as $newRecord) {
                $carType->carServicePrices->push(collect($newRecord));
            }

            // Sắp xếp lại theo `parent_id`
            $carType->sortedCarServicePrices = $carType->carServicePrices->sortBy(function ($item) {
                return $item['parent_id'] ?? $item['id'];
            })->values();
        });

        $data['groupCarTypes'] = $carTypes;
        return view('home',$data);
    }
}
