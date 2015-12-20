<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Config;

class HomeController extends Controller
{
    public function __construct()
    {
        
    }

    /**
     * Show the Homepage
     */
    public function index()
    {
        return view('pages/home')
            ->with('pageVars', array(
                'title'         => Config::get('app.title'),
                'angularAppName'=> 'appMy'
            ));
        
    }

    /**
     * Show the About
     */
    public function about()
    {
        return view('pages/about')
            ->with('pageVars', array(
                'title'         => Config::get('app.title'),
                'angularAppName'=> 'appMy'
            ));

    }

    /**
     * Show the disclaimer
     */
    public function privacy()
    {
        return view('pages/privacy-policy')
            ->with('pageVars', array(
                'title'         => Config::get('app.title'),
                'angularAppName'=> 'appMy'
            ));

    }

    public function test()
    {
        return view('pages/test')
            ->with('pageVars', array(
                'title'         => Config::get('app.title'),
                'angularAppName'=> 'appMy'
            ));

    }
    
}
