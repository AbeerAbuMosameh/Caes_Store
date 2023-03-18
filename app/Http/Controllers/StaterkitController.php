<?php

namespace App\Http\Controllers;

use App\Http\Requests\AboutSettingRequest;
use App\Http\Requests\PageRequest;
use App\Http\Requests\PageSettingRequest;
use App\Http\Requests\SettingRequest;
use App\Models\Contact;
use App\Models\Page;
use App\Models\PageSetting;
use App\Models\Setting;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Session;

class StaterkitController extends Controller
{
    // home
    public function home()
    {
        $breadcrumbs = [
            ['link' => "home", 'name' => "Home"], ['name' => "Index"]
        ];
        return view('/admin/content/home', ['breadcrumbs' => $breadcrumbs]);
    }

    // home_page
    public function home_page()
    {
        $page_setting = PageSetting::find(1);
        $breadcrumbs = [
            ['link' => "dashboard/home-page", 'name' => "Home page"], ['name' => "Home page"]
        ];
        return view('/admin/content/home/home-page',
            compact('page_setting', 'breadcrumbs'));
    }

    // projects list
    public function projects_list()
    {
        $breadcrumbs = [
            ['link' => "dashboard/projects-list", 'name' => "Projects List"], ['name' => "Projects List"]
        ];
        return view('/admin/content/projects/projects-list', ['breadcrumbs' => $breadcrumbs]);
    }

    //contact mails
    public function contact_mails()
    {
        $contacts = Contact::all();
        $breadcrumbs = [
            ['link' => "dashboard/contact-mails", 'name' => "Contact Mails"], ['name' => "Contact Mails"]
        ];
        return view('/admin/content/contact-mails', compact('breadcrumbs', 'contacts'));
    }


    public function destroy($id)
    {
        $contact = Contact::find($id);
        $contact->delete();
        return redirect()->back()->with('msg', 'Contact deleted Successfully!');
    }


    // about
    public function about()
    {
        $page_setting = PageSetting::find(1);
        $breadcrumbs = [
            ['link' => "dashboard/about", 'name' => "About"], ['name' => "About"]
        ];
        return view('/admin/content/about/about', compact('breadcrumbs', 'page_setting'));
    }

    //projects_page
    public function projects_page()
    {
        $breadcrumbs = [
            ['link' => "dashboard/projects", 'name' => "Projects"], ['name' => "Projects"]
        ];
        return view('/admin/content/projects/projects-page', ['breadcrumbs' => $breadcrumbs]);
    }

    //All_page
    public function all_pages()
    {
        $pages = Page::all();
        $breadcrumbs = [
            ['link' => "dashboard/all-pages", 'name' => "All Pages"], ['name' => "All Pages"]
        ];
        return view('/admin/content/pages/pages', compact('breadcrumbs', 'pages'));
    }

    //Add
    public function add_page()
    {
        $breadcrumbs = [
            ['link' => "dashboard/add-pages", 'name' => "Add Page"], ['name' => "Add Page"]
        ];
        return view('/admin/content/pages/add-page', ['breadcrumbs' => $breadcrumbs]);
    }

    public function store(Request $request)
    {
        $input = $request->all();
        $file = $request->file('cover_img');
        if (!empty($file)) {
            $filename = time() . '.' . $file->getClientOriginalExtension();
            request()->cover_img->move(public_path('/uploads/images/pages'), $filename);
            $input['cover_img'] = $filename;
        }
        Page::create($input);
        return redirect()->back()->with('msg', 'Page created Successfully!');
    }

    public function edit($id)
    {
        $page = Page::find($id);
        $breadcrumbs = [
            ['link' => "dashboard/home-page", 'name' => "Home page"], ['name' => "Home page"]
        ];
        return view('/admin/content/pages/edit', compact('breadcrumbs', 'page'));
    }

    public function updatePage(Request $request, $id)
    {
        $page = Page::find($id);
        $input = $request->all();
        $file = $request->file('cover_img');
        if (!empty($file)) {
            $filename = time() . '.' . $file->getClientOriginalExtension();
            request()->cover_img->move(public_path('/uploads/images/pages'), $filename);
            $input['cover_img'] = $filename;
        }
        $page->update($input);
        return redirect()->back()->with('msg', 'page updated Successfully!');
    }

    public function delete($id)
    {
        $page = Page::find($id);
        $page->delete();
        return redirect()->back()->with('msg', 'page deleted Successfully!');
    }

    /**
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View
     */
    public
    function settings()
    {
        $breadcrumbs = [
            ['link' => "dashboard/settings", 'name' => "Settings"], ['name' => "Settings"]
        ];
        $setting = Setting::find(1);
        $set = PageSetting::find(1);

        return view('admin.content.settings', compact('setting', 'breadcrumbs', 'set'));
    }

    /**
     * @param Request $request
     */
    public function update(SettingRequest $request)
    {
        $setting = Setting::find(1);
        $input = $request->all();
        $file1 = $request->file('logo');
        $file2 = $request->file('background');
        if (!empty($file1)) {
            $filename = time() . '.' . $file1->getClientOriginalExtension();
            request()->logo->move(public_path('/uploads/images/logo'), $filename);
            $input['logo'] = $filename;
        }
        if (!empty($file2)) {
            $filename1 = time() . '.' . $file2->getClientOriginalExtension();
            request()->background->move(public_path('/uploads/images/background'), $filename1);
            $input['background'] = $filename1;
        }
        $setting->update($input);
        return redirect()->back()->with('msg', 'Settings updated Successfully!');
    }

    public function changePassword(Request $request)
    {
        $validatedData = $request->validate([
            "password" => "required",
            "newPassword" => "required|min:6"
        ]);

        $user = User::find(Auth::user()->id);
        if (Hash::check($validatedData['password'], $user->password) == false) {
            return redirect()->back()->with('msg', 'e:Old password un correct!');
        }
        $newPass = bcrypt($validatedData['newPassword']);
        $user->update(['password' => $newPass]);
        return redirect()->back()->with('msg', 'password changed successfully!');
    }

    public function projDetails(Request $request)
    {
        $validatedData = $request->validate([
            "project_details_description" => "required",
            "project_details_img" => "required"
        ]);
        $setting = PageSetting::find(1);
        $input = $validatedData;
        $file = $request->file('project_details_img');
        if (!empty($file)) {
            $filename = time() . '.' . $file->getClientOriginalExtension();
            request()->project_details_img->move(public_path('/uploads/images'), $filename);
            $input['project_details_img'] = $filename;
        }
        $setting->update($input);
        return redirect()->back()->with('msg', 'Advertising updated Successfully!');
    }


    public function updateHome(PageSettingRequest $request)
    {
        $setting = PageSetting::find(1);
        $input = $request->all();
        $file1 = $request->file('home_img');
        $file2 = $request->file('video');
        $file3 = $request->file('home_section_img');

        //  'home_title', 'home_description',
        if (!empty($file1)) {
            $filename = time() . '.' . $file1->getClientOriginalExtension();
            request()->home_img->move(public_path('/uploads/images'), $filename);
            $input['home_img'] = $filename;
        }
        if (!empty($file2)) {
            $filename1 = time() . '.' . $file2->getClientOriginalExtension();
            request()->video->move(public_path('/uploads/images'), $filename1);
            $input['video'] = $filename1;
        }
        if (!empty($file3)) {
            $filename2 = time() . '.' . $file3->getClientOriginalExtension();
            request()->home_section_img->move(public_path('/uploads/images'), $filename2);
            $input['home_section_img'] = $filename2;
        }
        $setting->update($input);
        return redirect()->back()->with('msg', 'Home Page Settings updated Successfully!');
    }

    public
    function updateAbout(AboutSettingRequest $request)
    {
        $setting = PageSetting::find(1);
        $input = $request->all();
        $file1 = $request->file('about_cover_img');
        $file2 = $request->file('about_img');

        //  'home_title', 'home_description',
        if (!empty($file1)) {
            $filename = time() . '.' . $file1->getClientOriginalExtension();
            request()->about_cover_img->move(public_path('/uploads/images'), $filename);
            $input['about_cover_img'] = $filename;
        }
        if (!empty($file2)) {
            $filename1 = time() . '.' . $file2->getClientOriginalExtension();
            request()->about_img->move(public_path('/uploads/images'), $filename1);
            $input['about_img'] = $filename1;
        }

        $setting->update($input);
        return redirect()->back()->with('msg', 'About Page Settings updated Successfully!');
    }

    public
    function updateCover(Request $request)
    {
        $setting = PageSetting::find(1);
        $input = $request->all();
        $file1 = $request->file('services_cover_img');
        $file2 = $request->file('projects_cover_img');
        $file3 = $request->file('contacts_cover_img');
        $file4 = $request->file('project_details_cover');
        $file5 = $request->file('contacts_img');
        if (!empty($file1)) {
            $filename = time() . '.' . $file1->getClientOriginalExtension();
            request()->services_cover_img->move(public_path('/uploads/images'), $filename);
            $input['services_cover_img'] = $filename;
        }
        if (!empty($file2)) {
            $filename1 = time() . '.' . $file2->getClientOriginalExtension();
            request()->projects_cover_img->move(public_path('/uploads/images'), $filename1);
            $input['projects_cover_img'] = $filename1;
        }
        if (!empty($file3)) {
            $filename2 = time() . '.' . $file3->getClientOriginalExtension();
            request()->contacts_cover_img->move(public_path('/uploads/images'), $filename2);
            $input['contacts_cover_img'] = $filename2;
        }
        if (!empty($file4)) {
            $filename3 = time() . '.' . $file4->getClientOriginalExtension();
            request()->project_details_cover->move(public_path('/uploads/images'), $filename3);
            $input['project_details_cover'] = $filename3;
        }
        if (!empty($file5)) {
            $filename4 = time() . '.' . $file5->getClientOriginalExtension();
            request()->contacts_img->move(public_path('/uploads/images'), $filename4);
            $input['contacts_img'] = $filename4;
        }

        $setting->update($input);
        return redirect()->back()->with('msg', 'Covers Settings updated Successfully!');
    }

// Layout collapsed menu
    public
    function collapsed_menu()
    {
        $pageConfigs = ['sidebarCollapsed' => true];
        $breadcrumbs = [
            ['link' => "home", 'name' => "Home"], ['link' => "javascript:void(0)", 'name' => "Layouts"], ['name' => "Collapsed menu"]
        ];
        return view('/admin/content/layout-collapsed-menu', ['breadcrumbs' => $breadcrumbs, 'pageConfigs' => $pageConfigs]);
    }

// layout boxed
    public
    function layout_full()
    {
        $pageConfigs = ['layoutWidth' => 'full'];

        $breadcrumbs = [
            ['link' => "home", 'name' => "Home"], ['name' => "Layouts"], ['name' => "Layout Full"]
        ];
        return view('/admin/content/layout-full', ['pageConfigs' => $pageConfigs, 'breadcrumbs' => $breadcrumbs]);
    }

// without menu
    public
    function without_menu()
    {
        $pageConfigs = ['showMenu' => false];
        $breadcrumbs = [
            ['link' => "home", 'name' => "Home"], ['link' => "javascript:void(0)", 'name' => "Layouts"], ['name' => "Layout without menu"]
        ];
        return view('/admin/content/layout-without-menu', ['breadcrumbs' => $breadcrumbs, 'pageConfigs' => $pageConfigs]);
    }

// Empty Layout
    public
    function layout_empty()
    {
        $breadcrumbs = [['link' => "home", 'name' => "Home"], ['link' => "javascript:void(0)", 'name' => "Layouts"], ['name' => "Layout Empty"]];
        return view('/admin/content/layout-empty', ['breadcrumbs' => $breadcrumbs]);
    }

// Blank Layout
    public
    function layout_blank()
    {
        $pageConfigs = ['blankPage' => true];
        return view('/admin/content/about', ['pageConfigs' => $pageConfigs]);
    }

}
