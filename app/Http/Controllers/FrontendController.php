<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class FrontendController extends Controller
{
    public function index() {
        return view('frontend.index');
    }
    public function contact() {
        return view('frontend.page.contact');
    }

    public function about() {
        return view('frontend.page.about');
    }

    public function service() {
        return view('frontend.page.service');
    }

    public function portfolio() {
        return view('frontend.page.portfolio');
    }

    public function ticket() {
        return view('frontend.page.ticket');
    }

    public function faq() {
        return view('frontend.page.faq');
    }

    public function career() {
        return view('frontend.page.career');
    }

    public function softwareDevelopment() {
        return view('frontend.page.software_development');
    }

    public function mobileApp() {
        return view('frontend.page.mobile_app');
    }

    public function softwareService() {
        return view('frontend.page.software_service');
    }

    public function webDesign() {
        return view('frontend.page.web_design');
    }

    public function seo() {
        return view('frontend.page.seo');
    }

    public function marketing() {
        return view('frontend.page.marketing');
    }


    public function login() {
        return view('frontend.page.login');
    }


}
