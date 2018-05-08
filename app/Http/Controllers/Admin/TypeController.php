<?php

namespace App\Http\Controllers\Admin;

use App\Http\Requests\TypeRequest;
use App\Repositories\TypeRepository;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

/**
 * Class TypeController
 * @package App\Http\Controllers\Admin
 */
class TypeController extends Controller
{
	private $type;

	public function __construct(TypeRepository $typeRepository)
	{
		$this->type = $typeRepository;
	}

	/**
	 * Display a listing of the resource.
	 *
	 * @return \Illuminate\Http\Response
	 */
	public function index()
	{
		$types = $this->type->getAll();
		return view('admin.type.index' , compact('types'));
	}


	public function store(TypeRequest $typeRequest)
	{
		if ($this->type->store($typeRequest->all())) {
			return redirect(route('admin.type.index'))->with('message','添加成功!');
		}
	}

	/**
	 * Show the form for editing the specified resource.
	 *
	 * @param  int $id
	 * @return \Illuminate\Http\Response
	 */
	public function edit($id)
	{
		$types = $this->type->getAll();
		$info = $this->type->getById($id);
		if (!isset($info))
			abort(404);
		return view('admin.type.edit' , compact('types' , 'info'));
	}


	public function update(TypeRequest $typeRequest , $id)
	{
		if ($this->type->update($typeRequest->all() , $id)) {
			return redirect(route('admin.type.index'))->with('message','修改成功!');
		}
	}

	/**
	 * Remove the specified resource from storage.
	 *
	 * @param  int $id
	 * @return \Illuminate\Http\Response
	 */
	public function destroy($id)
	{
		return $this->type->destroy($id);
	}
}
