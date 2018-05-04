<?php
/**
 * Created by PhpStorm.
 * User: jason
 * Date: 2018/5/4
 * Time: 上午11:08
 */

namespace App\Repositories;

use App\Models\Setting;

/**
 * Class SettingRepository
 * @package App\Repositories
 */
class SettingRepository
{
	/**
	 * @var Setting
	 */
	private $setting;

	/**
	 * SettingRepository constructor.
	 * @param Setting $setting
	 */
	public function __construct(Setting $setting)
	{
		$this->setting = $setting;
	}

	/**
	 * @return \Illuminate\Database\Eloquent\Collection|static[]
	 */
	public function getAll()
	{
		return $this->setting->all();
	}


}