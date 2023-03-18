<?php

namespace App\Http\Controllers;

use App\Http\Requests\SlidersRequest;
use App\Models\Slider;
use Illuminate\Http\Request;

class SliderController extends Controller
{
    // Slides List
    public function sliders()
    {
        $sliders = Slider::all();
        $breadcrumbs = [
            ['link' => "dashboard/slides-list", 'name' => "Slides List"], ['name' => "Slides List"]
        ];
        return view('/admin/content/sliders/slides-list', compact('breadcrumbs', 'sliders'));
    }

    public function create()
    {
        $breadcrumbs = [
            ['link' => "dashboard/home-page", 'name' => "Home page"], ['name' => "Home page"]
        ];
        return view('/admin/content/sliders/create', ['breadcrumbs' => $breadcrumbs]);
    }

    public function edit($id)
    {
        $slider = Slider::find($id);
        $breadcrumbs = [
            ['link' => "dashboard/home-page", 'name' => "Home page"], ['name' => "Home page"]
        ];
        return view('/admin/content/sliders/edit', compact('breadcrumbs', 'slider'));
    }

    public function store(SlidersRequest $request)
    {
        Slider::create($request->all());
        return redirect()->back()->with('msg', 'Slider created Successfully!');
    }

    public function update(SlidersRequest $request, $id)
    {
        $slider = Slider::find($id);
        $input = $request->all();
        $slider->update($input);
        return redirect()->back()->with('msg', 'Slider updated Successfully!');
    }

    public function destroy($id)
    {
        $slider = Slider::find($id);
        $slider->delete();
        return redirect()->back()->with('msg', 'Slider deleted Successfully!');
    }

}
