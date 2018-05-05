<?php
/**
 * Created by PhpStorm.
 * User: jason
 * Date: 2018/5/4
 * Time: 上午11:08
 */

namespace App\Repositories;

use App\Models\Area;

/**
 * Class AreaRepository
 * @package App\Repositories
 */
class AreaRepository
{
	/**
	 * @var area
	 */
	private $area;

	/**
	 * AreaRepository constructor.
	 * @param $area $area
	 */
	public function __construct(Area $area)
	{
		$this->area = $area;
	}

	/**
	 * @return \Illuminate\Database\Eloquent\Collection|static[]
	 */
	public function getAll()
	{
		return $this->area->all()->toArray();
	}

	public function getAreaById($id)
	{
		return $this->area->where('city_id' , $id)->get()->toArray();
	}

	public function getAreaByIdToHtml($id)
	{
		$list = $this->area->where('city_id' , $id)->get()->toArray();
		$html = '';
		foreach ($list as $value) {
			$html .= '<option value="' . $value[ 'id' ] . '">' . $value[ 'name' ] . '</option>';
		}
		return $html;
	}

}