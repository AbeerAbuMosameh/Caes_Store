<?php

namespace App\Http\Controllers;

use App\Http\Requests\ServicesRequest;
use App\Http\Requests\UpServicesRequest;
use App\Models\Services;
use Illuminate\Http\Request;

class ServicesController extends Controller
{
    public function index()
    {
        $services = Services::all();
        $breadcrumbs = [
            ['link' => "dashboard/services-packages-list", 'name' => "Services Packages List"], ['name' => "Services List"]
        ];
        return view('/admin/content/services/index', compact('breadcrumbs', 'services'));
    }

    public function create()
    {
        $breadcrumbs = [
            ['link' => "dashboard/home-page", 'name' => "Home page"], ['name' => "Home page"]
        ];
        return view('/admin/content/services/create', ['breadcrumbs' => $breadcrumbs]);
    }

    public function edit($id)
    {
        $service = Services::find($id);
        $breadcrumbs = [
            ['link' => "dashboard/home-page", 'name' => "Home page"], ['name' => "Home page"]
        ];
        return view('/admin/content/services/edit', compact('breadcrumbs', 'service'));
    }

    public function store(ServicesRequest $request)
    {
        $input = $request->all();
        $file = $request->file('img');
        if (!empty($file)) {
            $filename = time() . '.' . $file->getClientOriginalExtension();
            request()->img->move(public_path('/uploads/images/services'), $filename);
            $input['img'] = $filename;
        }
        Services::create($input);
        return redirect()->back()->with('msg', 'Services created Successfully!');
    }

    public function update(UpServicesRequest $request, $id)
    {
        $service = Services::find($id);
        $input = $request->all();
        $file = $request->file('img');
        if (!empty($file)) {
            $filename = time() . '.' . $file->getClientOriginalExtension();
            request()->img->move(public_path('/uploads/images/services'), $filename);
            $input['img'] = $filename;
        }
        $service->update($input);
        return redirect()->back()->with('msg', 'Services updated Successfully!');
    }

    public function destroy($id)
    {
        $service = Services::find($id);
        $service->delete();
        return redirect()->back()->with('msg', 'Services deleted Successfully!');
    }

}
