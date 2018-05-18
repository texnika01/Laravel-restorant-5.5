<?php

namespace App\Http\Controllers\Backend\Page;

use App\Http\Requests\Backend\PageRequest\BlogRequest;
use App\Models\PageModels\Blog;
use App\Http\Controllers\Controller;
use App\Models\PageModels\Category;
use Illuminate\Support\Facades\Auth;

class BlogController extends Controller {
	/**
	 * @var Blog
	 */
	protected $blog;

	/**
	 * BlogController constructor.
	 * @param Blog $blog
	 */
	public function __construct(Blog $blog) {
		$this->blog = $blog;
	}

	/**
	 * Display a listing of the resource.
	 *
	 * @return \Illuminate\Http\Response
	 */
	public function index() {
		$data = $this->blog->where('active',1)->orderBy('created_at','desc')->get();
		return view('backend.blog.index', compact('data'));
	}

	/**
	 * Show the form for creating a new resource.
	 *
	 * @return \Illuminate\Http\Response
	 */
	public function create() {
		$category = Category::pluck('name', 'id');
		return view('backend.blog.create', compact('category'));
	}

	/**
	 * Store a newly created resource in storage.
	 *
	 * @param  \Illuminate\Http\Request $request
	 * @return \Illuminate\Http\Response
	 */
	public function store(BlogRequest $request) {
		$data = $request->validate([
			'title' => 'required|min:6|max:20|unique:blogs',
			'text' => 'required|min:6',
			'image' => 'mimes:jpeg',
			]);
		//dd($data);
		$data = $request->except('image');
		$fileName = rand(11111111, 99999999) . '.' . $request->file('image')->getClientOriginalExtension(); // renameing image
		$request->file('image')->move(public_path('upload/blog_image'), $fileName);
		$data['image'] = $fileName;
		$article = Auth::user()->blog()->create($data);
		$article->category()->attach($request->input('category'));
		return redirect()->route('admin.blog')->withFlashSuccess('Upload sucssess !!');

	}

	/**
	 * Display the specified resource.
	 *
	 * @param  int $id
	 * @return \Illuminate\Http\Response
	 */
	public function show($id) {
		$blog = $this->blog->where('id', '=', $id)->firstOrFail();
		return view('backend.blog.show', compact('blog'));
	}

	/**
	 * Show the form for editing the specified resource.
	 *
	 * @param  int $id
	 * @return \Illuminate\Http\Response
	 */
	public function edit($id) {
		$blog = $this->blog->where('id', '=', $id)->firstOrFail();
		return view('backend.blog.edit', compact('blog'));
	}

	/**
	 * Update the specified resource in storage.
	 *
	 * @param  \Illuminate\Http\Request $request
	 * @param  int $id
	 * @return \Illuminate\Http\Response
	 */
	public function update(BlogRequest $request, $id) {
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
