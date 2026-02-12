<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PagesController extends Controller
{
    public function home()
    {
        $pageData = [
            'pageTitle' => 'Devita Properties — Official Website',
            'pageCode' => 'Home',
        ];
        
        return view('homepage.indexPage')->with($pageData);
    }

    public function about()
    {
        $pageData = [
            'pageTitle' => 'About — Devita Properties',
            'pageCode' => 'About',
        ];
        
        return view('homepage.about')->with($pageData);
    }

    public function team()
    {
        $pageData = [
            'pageTitle' => 'Team — Devita Properties',
            'pageCode' => 'Team',
        ];
        
        return view('homepage.team')->with($pageData);
    }

    public function news()
    {
        $pageData = [
            'pageTitle' => 'News — Devita Properties',
            'pageCode' => 'News',
        ];

        // $news = News::where('deleted_at', null)->get();
        
        return view('homepage.news', compact('news'))->with($pageData);
    }

    public function contact()
    {
        $pageData = [
            'pageTitle' => 'Contact — Devita Properties',
            'pageCode' => 'Contact',
        ];
        
        return view('homepage.contact')->with($pageData);
    }    
}
