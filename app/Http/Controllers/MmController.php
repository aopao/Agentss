<?php

namespace App\Http\Controllers;

use DB;
use App\Models\Province;
use App\Models\College;
use App\Models\City;
use App\Models\Batch;
use App\CollegeCategory;
use Illuminate\Http\Request;

class MmController extends Controller
{
	private $category = [
		'工科类' => 1 , '艺术类' => 2 , '军事类' => 3 , '综合类' => 4 , '农林类' => 5 , '理工类' => 6 , '医学类' => 7 , '财经类' => 8 , '医药类' => 9 , '师范类' => 10 , '政法类' => 11 , '林业类' => 12 , '语言类' => 13 , '体育类' => 14 , '民族类' => 15 , '农业类' => 16 ,
	];
	private $province = [ '北京市' => 1 ,
		'天津市' => 2 ,
		'河北省' => 3 ,
		'山西省' => 4 ,
		'内蒙古自治区' => 5 ,
		'辽宁省' => 6 ,
		'吉林省' => 7 ,
		'黑龙江省' => 8 ,
		'上海市' => 9 ,
		'江苏省' => 10 ,
		'浙江省' => 11 ,
		'安徽省' => 12 ,
		'福建省' => 13 ,
		'江西省' => 14 ,
		'山东省' => 15 ,
		'河南省' => 16 ,
		'湖北省' => 17 ,
		'湖南省' => 18 ,
		'广东省' => 19 ,
		'广西壮族自治区' => 20 ,
		'海南省' => 21 ,
		'重庆市' => 22 ,
		'四川省' => 23 ,
		'贵州省' => 24 ,
		'云南省' => 25 ,
		'西藏自治区' => 26 ,
		'陕西省' => 27 ,
		'甘肃省' => 28 ,
		'青海省' => 29 ,
		'宁夏回族自治区' => 30 ,
		'新疆维吾尔自治区' => 31 ,
		'台湾省' => 32 ,
		'澳门特别行政区' => 33 ,
		'香港特别行政区' => 34 , ];

	public function index(Request $request)
	{
		$allcount = 4491;
		$num = 100;
		$page = $request->page ? $request->page : 0;
		$offset = $page * $num;
		$all_page = ceil($allcount / $num);
		if (isset($page)) {
			if ($page <= $all_page) {
				$res = DB::connection('mongodb')->collection('list')->skip($offset)->take($num)->get()->Toarray();
				$page++;
			}
		} else {
			$res = DB::connection('mongodb')->collection('list')->take($num)->get()->Toarray();
		}
		if (isset($res)) {
			foreach ($res as $key => $value) {
				if (isset($value[ 'provinces' ])) {
					$province_id = $this->province[ $value[ 'provinces' ] ];
				} else {
					$province_id = 0;
				}
				if (isset($value[ 'type' ])) {
					$genre_id = $this->category[ $value[ 'type' ] ];
				} else {
					$genre_id = 0;
				}
				if (isset($value[ '﻿or985' ])) {
					$or985 = $value[ '﻿or985' ];
				} else {
					$or985 = 0;
				}
				if (isset($value[ '﻿admit' ])) {
					$﻿admit = $value[ '﻿admit' ];
				} else {
					$﻿admit = 0;
				}
				if (isset($value[ '﻿admit_info' ])) {
					$﻿admit_info = $value[ '﻿admit_info' ];
				} else {
					$﻿admit_info = 0;
				}
				if (isset($value[ '﻿scale' ])) {
					$﻿﻿scale = $value[ '﻿scale' ];
				} else {
					$﻿﻿scale = 0;
				}
				if (isset($value[ 'city' ])) {
					$cityModel = new City;
					$res = $cityModel->where('name' , $value[ 'city' ])->first();
					if (isset($res[ 'id' ])) {
						$﻿city = isset($res[ 'id' ]) ? $res[ 'id' ] : 0;
					} else {
						$﻿city = 0;
					}
				} else {
					$﻿city = 0;
				}
				$data = [
					'province_id' => $province_id ,
					'college_name' => $value[ 'school' ] ,
					'genre_id' => $genre_id ,
					'﻿or985' => $or985 ,
					'﻿city' => $﻿city ,
					'﻿admit' => $﻿admit ,
					'﻿admit_info' => $﻿admit_info ,
					'﻿scale' => $﻿﻿scale ,
				];
//				$college = new College();
//				$college->create($data)->save();
			}
		} else {
			dd('导入完毕啦!');
		}

		$next_url = 'http://dahan.io/mm?page=' . $page;
		return view('re' , compact('next_url' , 'page'));
	}

	public function mysqlToMongo(Request $request)
	{
		$allcount = 363217;
		$num = 500;
		$page = $request->page ? $request->page : 0;
		$offset = $page * $num;
		$all_page = ceil($allcount / $num);
		if (isset($page)) {
			if ($page <= $all_page) {
				$res = DB::connection('mongodb')->collection('back')->skip($offset)->take($num)->get()->Toarray();
				$page++;
			}
		} else {
			$res = DB::connection('mongodb')->collection('back')->take($num)->get()->Toarray();
		}
		if (isset($res)) {
			foreach ($res as $key => $value) {
				$provinces_id = isset($value[ 'provinces_id' ]) ? $value[ 'provinces_id' ] : 0;
				$year_id = isset($value[ 'year_id' ]) ? $value[ 'year_id' ] : 0;
				$college_id = isset($value[ 'college_id' ]) ? $value[ 'college_id' ] : 0;
				$stream = isset($value[ 'stream' ]) ? $value[ 'stream' ] : 0;
				$name = isset($value[ 'name' ]) ? $value[ 'name' ] : 0;
				$planNumber = isset($value[ 'planNumber' ]) ? $value[ 'planNumber' ] : 0;
				$lowest = isset($value[ 'provinces_id' ]) ? $value[ 'provinces_id' ] : 0;
				$lowRank = isset($value[ 'lowRank' ]) ? $value[ 'lowRank' ] : 0;
				$lowLine = isset($value[ 'lowLine' ]) ? $value[ 'lowLine' ] : 0;
				$desc = isset($value[ 'desc' ]) ? $value[ 'desc' ] : 0;
				$data = [
					'provinces_id' => $provinces_id ,
					'year_id' => $year_id ,
					'college_id' => $college_id ,
					'name' => $name ,
					'stream' => $stream ,
					'planNumber' => $planNumber ,
					'lowest' => $lowest ,
					'lowRank' => $lowRank ,
					'lowLine' => $lowLine ,
					'desc' => $desc ,
				];
				$batch = new Batch();
				$batch->create($data)->save();
			}
		} else {
			dd('导入完毕啦!');
		}
		$next_url = 'http://dahan.io/tm?page=' . $page;
		return view('re' , compact('next_url' , 'page','all_page'));
	}
}
