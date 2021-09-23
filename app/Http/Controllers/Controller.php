<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Http\Request;
use DB;
use Mail;
use Illuminate\Support\Facades\Input;
use Illuminate\Support\Facades\Response;

class Controller extends BaseController
{
    use AuthorizesRequests, DispatchesJobs, ValidatesRequests;

    public function home()
	{
        $menu = "home";

        $company = DB::table('company')->whereNull('deleted_at')->orderby('id', 'asc')->get();
        $slider = DB::table('slider')->whereNull('deleted_at')->orderby('id', 'asc')->get();
        
        return view('home', ['menu' => $menu, 'company' => $company, 'slider' => $slider]);
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
