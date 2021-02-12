<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Pages extends Controller
{
    /**
     * index
     *
     * @return void
     */
    public function index()
    {
        return view('pages.index');
    }
    /**
     * about
     *
     * @return void
     */
    public function about()
    {
        return view('pages.about');
    }

    /**
     * contact
     *
     * @return void
     */
    public function contact()
    {
        return view('pages.contact');
    }

    /**
     * blog
     *
     * @return void
     */
    public function blog()
    {
        return view('pages.blog');
    }

    /**
     * service
     *
     * @return void
     */
    public function service()
    {
        return view('pages.services');
    }
    /**
     * singleservice
     *
     * @return void
     */
    public function singleservice()
    {
        return view('pages.singleservice');
    }
    /**
     * blogpost
     *
     * @return void
     */
    public function blogpost()
    {
        return view('pages.blogcontent');
    }

}
