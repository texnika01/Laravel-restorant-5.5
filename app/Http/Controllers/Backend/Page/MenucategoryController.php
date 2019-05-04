<?php

namespace App\Http\Controllers\Backend\Page;

use App\Http\Requests\Backend\PageRequest\MenucategoruRequest;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\PageModels\MenuCategory;

class MenucategoryController extends Controller
{
    /**
	 * @var Menucategory
	 */
    protected   $menu_category;
    /**
	 * MenucategoryController constructor.
	 * @param MenuCategory $menu_category
	 */
    public function __construct(MenuCategory $menu_category)
    {
        $this->menu_category = $menu_category;
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data = $this->menu_category->where('active', 1)->orderBy('created_at', 'desc')->get();
		return view('backend.menu_category.index', compact('data'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('backend.menu_category.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\MenucategoruRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(MenucategoruRequest $request)
    {
        $data = $this->validate($request,[
			'name' => 'required|min:6|max:20|unique:categories',
			'description' => 'required|min:6|max:255',
		]);
        $this->menu_category->create($data);
        return redirect()->route('admin.menu_category')->withFlashSuccess('Upload sucssess !!');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $data = $this->Menu_category->where('id','=',$id)->firstOrFail();
        return view('backend.menu_category.show',compact('data'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
