<?php

namespace App\Http\Controllers;

use App\Http\Requests\PageRequest;
use App\Http\Requests\UpProjectsRequest;
use App\Models\Category;
use App\Models\Page;
use App\Models\Projects;
use Illuminate\Http\Request;

class PagesController extends Controller
{


    public function edit($id)
    {
        $categories = Category::all();
        $project = Projects::find($id);
        $breadcrumbs = [
            ['link' => "dashboard/home-page", 'name' => "Home page"], ['name' => "Home page"]
        ];
        return view('/admin/content/projects/edit', compact('breadcrumbs', 'project', 'categories'));
    }

    public function store(PageRequest $request)
    {
        $input = $request->all();
        $file = $request->file('img');
        if (!empty($file)) {
            $filename = time() . '.' . $file->getClientOriginalExtension();
            request()->img->move(public_path('/uploads/images/projects'), $filename);
            $input['img'] = $filename;
        }
        Projects::create($input);
        return redirect()->back()->with('msg', 'project created Successfully!');
    }

    public function update(UpProjectsRequest $request, $id)
    {
        $project = Projects::find($id);
        $input = $request->all();
        $file = $request->file('img');
        if (!empty($file)) {
            $filename = time() . '.' . $file->getClientOriginalExtension();
            request()->img->move(public_path('/uploads/images/projects'), $filename);
            $input['img'] = $filename;
        }
        $project->update($input);
        return redirect()->back()->with('msg', 'project updated Successfully!');
    }

    public function destroy($id)
    {
        $project = Projects::find($id);
        $project->delete();
        return redirect()->back()->with('msg', 'project deleted Successfully!');
    }
}
