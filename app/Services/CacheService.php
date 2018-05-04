<?php
/**
 * Created by PhpStorm.
 * User: jason
 * Date: 2018/5/4
 * Time: 下午12:06
 */

namespace App\Services;

use Cache;

class CacheService
{

	public function flushOneCache($cache_name)
	{
		Cache::get();
	}

	public function flushCache()
	{
		return Cache::flush();
	}

	public function d()
	{
		
	}

}