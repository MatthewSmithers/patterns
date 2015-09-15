<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;

class TemplatesController extends Controller
{
    /**
    *	Show the index page.
    */
    public function index()
    {
    	return view('templates.index');
    }

    /**
    *	Show the banded template.
    */
    public function banded()
    {
    	return view('templates.banded');
    }

    /**
    *	Show the blog template.
    */
    public function blog()
    {
    	return view('templates.blog');
    }

    /**
    *	Show the feed template.
    */
    public function feed()
    {
    	return view('templates.feed');
    }

    /**
    *	Show the grid template.
    */
    public function grid()
    {
    	return view('templates.grid');
    }

    /**
    *	Show the orbit template.
    */
    public function orbit()
    {
    	return view('templates.orbit');
    }

    /**
    *	Show the banner template.
    */
    public function banner()
    {
    	return view('templates.banner');
    }

    /**
    *	Show the sidebar template.
    */
    public function sidebar()
    {
    	return view('templates.sidebar');
    }

    /**
    *	Show the contact template.
    */
    public function contact()
    {
    	return view('templates.contact');
    }

    /**
    *	Show the marketing template.
    */
    public function marketing()
    {
    	return view('templates.marketing');
    }

    /**
    *	Show the realty template.
    */
    public function realty()
    {
    	return view('templates.realty');
    }

    /**
    *	Show the soboxy template.
    */
    public function soboxy()
    {
    	return view('templates.soboxy');
    }

    /**
    *	Show the store template.
    */
    public function store()
    {
    	return view('templates.store');
    }

    /**
    *	Show the workspace template.
    */
    public function workspace()
    {
    	return view('templates.workspace');
    }

    /**
    *	Show the marketing2 template.
    */
    public function marketing2()
    {
    	return view('templates.marketing2');
    }

    /**
    *	Show the product template.
    */
    public function product()
    {
    	return view('templates.product');
    }

    /**
    *	Show the portfolio template.
    */
    public function portfolio()
    {
    	return view('templates.portfolio');
    }

    /**
    *	Show the portfoliotheme template.
    */
    public function portfoliotheme()
    {
    	return view('templates.portfoliotheme');
    }

    /**
    *	Show the dogs template.
    */
    public function dogs()
    {
    	return view('templates.dogs');
    }
}
