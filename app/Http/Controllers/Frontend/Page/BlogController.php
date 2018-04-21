<?php

namespace App\Http\Controllers\Frontend\Page;

use App\Models\PageModels\Blog;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class BlogController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
    	$blogs = Blog::where('active',1)
					->orderBy('created_at','desc')
					->paginate(10);
        return view('frontend.blog.index',compact('blogs'));
    }

	/**
	 * Display the specified resource.
	 *
	 * @param Blog $id
	 * @return \Illuminate\Http\Response
	 */
    public function show(Blog $id)
    {
		$blog = Blog::where('id' , '=' , $id)->firstOrFail();
        return view('frontend.blog.show',compact('blog'));
    }

}
