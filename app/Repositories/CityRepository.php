<?php
/**
 * Created by PhpStorm.
 * User: jason
 * Date: 2018/5/4
 * Time: 上午11:08
 */

namespace App\Repositories;

use App\Models\City;

/**
 * Class CityRepository
 * @package App\Repositories
 */
class CityRepository
{
	/**
	 * @var city
	 */
	private $city;

	/**
	 * CityRepository constructor.
	 * @param $city $city
	 */
	public function __construct(City $city)
	{
		$this->city = $city;
	}

	/**
	 * @return \Illuminate\Database\Eloquent\Collection|static[]
	 */
	public function getAll()
	{
		return $this->city->all()->toArray();
	}

	public function getCityById($id)
	{
		return $this->city->where('province_id' , $id)->get()->toArray();
	}

	public function getCityByIdToHtml($id)
	{
		$list = $this->city->where('province_id' , $id)->get()->toArray();
		$html = '';
		foreach ($list as $value) {
			$html .= '<option value="' . $value[ 'id' ] . '">' . $value[ 'name' ] . '</option>';
		}
		return $html;
	}

}