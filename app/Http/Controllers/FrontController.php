<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Contact;
use App\Models\Page;
use App\Models\PageSetting;
use App\Models\Projects;
use App\Models\Services;
use App\Models\Setting;
use App\Models\Slider;
use Illuminate\Http\Request;

class FrontController extends Controller
{
    public function home()
    {
        $services = services::all();
        $sliders = Slider::all();
        $setting = Setting::find(1);
        $page_setting = PageSetting::find(1);
        return view('frontend.home', compact('setting', 'sliders', 'page_setting', 'services'));
    }

    public function services()
    {
        $page_setting = PageSetting::find(1);
        $services = services::all();
        return view('frontend.services', compact('services', 'page_setting'));
    }

    public function aboutUs()
    {
        $services = services::all();
        $sliders = Slider::all();
        $setting = Setting::find(1);
        $page_setting = PageSetting::find(1);
        return view('frontend.about', compact('setting', 'services', 'sliders',
            'page_setting'));
    }

    public function projects()
    {
        $page_setting = PageSetting::find(1);
        $projects = Projects::all();
        $categories = Category::all();
        return view('frontend.projects', compact('projects', 'categories', 'page_setting'));
    }

    public function pageDetails($link)
    {
        $page = Page::where('link', $link)->first();
        if ($page) {
            return view('frontend.page_details', compact('page'));
        } else {
            return redirect('/');
        }
    }

    public function projectDetails($id)
    {
        $page_setting = PageSetting::find(1);
        $proj = Projects::find($id);
        if ($proj) {
            $projects = Projects::all();
            $categories = Category::all();
            return view('frontend.project_details', compact('projects', 'categories',
                'proj', 'page_setting'));
        } else {
            return redirect('/');
        }
    }

    public
    function contact()
    {
        $page_setting = PageSetting::find(1);
        $sliders = Slider::all();
        $setting = Setting::find(1);
        return view('frontend.contact', compact('setting', 'sliders', 'page_setting'));
    }

    public function send(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'email' => 'required|email',
            'captcha' => 'required|captcha'
        ]);
        Contact::create($request->all());
        return redirect()->back()->with('msg', 'your message sent Successfully!');
    }

    public function sendM(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'email' => 'required|email',
        ]);
        Contact::create($request->all());
        return redirect()->back()->with('msg', 'your message sent Successfully!');
    }

}
