<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Routing\Controller as BaseController;

class Controller extends BaseController
{
    use AuthorizesRequests, DispatchesJobs, ValidatesRequests;

    public function home()
	{
        $menu = "home";
        
        return view('home', ['menu' => $menu]);
    }

    public function product()
	{
        $menu = "product";
        
        return view('product', ['menu' => $menu]);
    }

    public function article()
	{
        $menu = "article";
        
        return view('article', ['menu' => $menu]);
    }

    public function article_detail($id)
	{
        $menu = "article";
        
        return view('article_detail', ['menu' => $menu]);
    }

    public function about()
	{
        $menu = "about";
        
        return view('about', ['menu' => $menu]);
    }

    public function contact()
	{
        $menu = "contact";
        
        return view('contact', ['menu' => $menu]);
    }

}
