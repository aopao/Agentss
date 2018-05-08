<?php
/**
 * 网站所有配置字段共享变量传递到模板中
 * User: jason
 * Date: 2018/5/4
 * Time: 上午11:02
 */

namespace App\ViewComposers;

use Cache;
use Illuminate\View\View;
use App\Repositories\SettingRepository;

/**
 * Class SeetingComposer
 * @package App\ViewComposers
 */
class SeetingComposer
{
	/**
	 * @var SettingRepository
	 */
	public $setting;

	/**
	 * SeetingComposer constructor.
	 * @param SettingRepository $settingRepository
	 */
	public function __construct(SettingRepository $settingRepository)
	{
		$this->setting = $settingRepository;
	}

	/**
	 * @param View $view
	 */
	public function compose(View $view)
	{
		$view->with('setting' , $this->changeToArray());
	}

	/**
	 * @return array|mixed
	 */
	public function changeToArray()
	{
		if (Cache::get('setting')) {
			return Cache::get('setting');
		} else {
			$data = $this->setting->getAll()->toArray();
			$info = [];
			foreach ($data as $value) {
				$info[ $value[ 'key' ] ] = $value[ 'value' ];
			}
			Cache::forever('setting' , $info);
			return $info;
		}
	}
}