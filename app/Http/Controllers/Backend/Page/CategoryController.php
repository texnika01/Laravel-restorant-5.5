<?php

namespace App\Http\Controllers\Backend\Page;

use App\Http\Requests\Backend\PageRequest\CategoryRequest;
use App\Models\PageModels\Category;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class CategoryController extends Controller
{
	/**
	 * @var Category
	 */
	protected $category;

	/**
	 * CategoryController constructor.
	 * @param Category $category
	 */
	public function __construct(Category $category) {
		$this->category = $category;
	}

	/**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data = $this->category->where('active',1)->orderBy('created_at','desc')->get();
        return view('backend.category.index');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('backend.category.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(CategoryRequest $request)
    {
        $data = $this->validate($request,[
			'name' => 'required|min:6|max:20|unique:categories',
			'description' => 'required|min:6|max:255',
		]);
		dd($data);
        $this->category->save($data);
        return redirect()->route('admin.category')->withFlashSuccess('Upload successful.');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $data = $this->category->where('id','=',$id)->firstOrFail();
        return view('backend.category.show',compact('data'));
    }

    /**
     * Show the form for editing the category resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
         $data = $this->category->where('id','=',$id)->firstOrFail();
        return view('backend.category.edit',compact('data'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(CategoryRequest $request, $id)
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
