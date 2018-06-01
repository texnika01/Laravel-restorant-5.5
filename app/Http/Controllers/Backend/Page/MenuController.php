<?php

namespace App\Http\Controllers\Backend\Page;

use App\Http\Requests\Backend\PageRequest\MenuRequest;
use App\Models\PageModels\Category;
use App\Http\Controllers\Controller;
use App\Models\PageModels\Menu;

class MenuController extends Controller {
	/**
	 * @var Menu
	 */
	protected $menu;

	/**
	 * MenuController constructor.
	 * @param Menu $menu
	 */
	public function __construct(Menu $menu) {
		$this->menu = $menu;
	}

	/**
	 * Display a listing of the resource.
	 *
	 * @return \Illuminate\Http\Response
	 */
	public function index() {
		$data = $this->menu->where('active', 1)->orderBy('created_at', 'desc')->get();
		return view('backend.menu.index', compact('data'));
	}

	/**
	 * Show the form for creating a new resource.
	 *
	 * @return \Illuminate\Http\Response
	 */
	public function create() {
		$category = Category::pluck('name', 'id');
		return view('backend.menu.create', compact('category'));
	}

	/**
	 * Store a newly created resource in storage.
	 *
	 * @param  \Illuminate\Http\Request $request
	 * @return \Illuminate\Http\Response
	 */
	public function store(MenuRequest $request) {

		$data = $request->validate([
			'title' => 'required|min:6|unique:menus',
			'menu' => 'required|min:6',
			'price' => 'required|numeric|between:0,99.99',
			'image' => 'required|mimes:jpeg',
			]);

		//dd($data);
		$data = $request->except('image');
		$fileName = rand(11111111, 99999999) . '.' . $request->file('image')->getClientOriginalExtension(); // renameing image
		$request->file('image')->move(public_path('upload/menu'), $fileName);
		$data['image'] = $fileName;
		$article = $this->menu->create($data);
		$article->category()->attach($request->input('category'));
		return redirect()->route('admin.menu')->withFlashSuccess('Upload sucssess !!');

		//return redirect()->back()->withFlashSuccess;
	}

	/**
	 * Display the specified resource.
	 *
	 * @param  int $id
	 * @return \Illuminate\Http\Response
	 */
	public function show($id) {
		$data = $this->menu->where('id', '=', $id)->firstOrFail();
		return view('back.menu.show', compact('data'));
	}

	/**
	 * Show the form for editing the specified resource.
	 *
	 * @param  int $id
	 * @return \Illuminate\Http\Response
	 */
	public function edit($id) {
		$data = $this->menu->where('id', '=', $id)->firstOrFail();
		return view('back.menu.edit', compact('data'));
	}

	/**
	 * Update the specified resource in storage.
	 *
	 * @param  \Illuminate\Http\Request $request
	 * @param  int $id
	 * @return \Illuminate\Http\Response
	 */
	public function update(MenuRequest $request, $id) {
		//
	}

	/**
	 * Remove the specified resource from storage.
	 *
	 * @param  int $id
	 * @return \Illuminate\Http\Response
	 */
	public function destroy($id) {
		//
	}
}
