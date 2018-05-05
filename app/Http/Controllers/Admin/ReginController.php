<?php

namespace App\Http\Controllers\Admin;


use Illuminate\Http\Request;
use App\Repositories\AreaRepository;
use App\Repositories\CityRepository;
use App\Repositories\ProvinceRepository;

class ReginController extends BaseController
{

	private $province;
	private $city;
	private $area;

	public function __construct(ProvinceRepository $provinceRepository , CityRepository $cityRepository , AreaRepository $areaRepository)
	{
		parent::__construct();
		$this->province = $provinceRepository;
		$this->city = $cityRepository;
		$this->area = $areaRepository;
	}

	public function getCityById(Request $request)
	{
		$id = $request->id;
		$html = $request->html;
		if (isset($id) && is_numeric($id)) {
			if($html){
				return $this->city->getCityByIdToHtml($id);
			}else{
				return $this->city->getCityById($id);
			}
		}
	}

	public function getAreaById(Request $request)
	{
		$id = $request->id;
		$html = $request->html;
		if (isset($id) && is_numeric($id)) {
			if($html){
				return $this->area->getAreaByIdToHtml($id);
			}else{
				return $this->area->getAreaById($id);
			}
		}
	}

}
