<?php

namespace App\Http\Controllers;

use App\Http\Requests\ProjectRequest;
use App\Http\Requests\UpProjectsRequest;
use App\Models\Category;
use App\Models\Projects;
use Illuminate\Http\Request;

class ProjectsController extends Controller
{
    public function index()
    {
        $projects = Projects::all();
        $breadcrumbs = [
            ['link' => "dashboard/projects-list", 'name' => "Projects List"], ['name' => "Projects List"]
        ];
        return view('/admin/content/projects/index', compact('breadcrumbs', 'projects'));
    }

    public function create()
    {
        $categories = Category::all();
        $breadcrumbs = [
            ['link' => "dashboard/home-page", 'name' => "Home page"], ['name' => "Home page"]
        ];
        return view('/admin/content/projects/create',compact('categories','breadcrumbs'));
    }

    public function edit($id)
    {
        $categories = Category::all();
        $project = Projects::find($id);
        $breadcrumbs = [
            ['link' => "dashboard/home-page", 'name' => "Home page"], ['name' => "Home page"]
        ];
        return view('/admin/content/projects/edit', compact('breadcrumbs', 'project','categories'));
    }

    public function store(ProjectRequest $request)
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
