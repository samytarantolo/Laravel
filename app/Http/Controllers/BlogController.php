<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class BlogController extends Controller
/**
* Create a new controller instance
*
* @return void
*/
public function __construct()
{
    $this->middleware('auth')->only('AddArticle');
}
    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        return view('blog');
    }

        /**
     * Show the application add page.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function addArticle()
    {
        return view('blog.add');
    }

