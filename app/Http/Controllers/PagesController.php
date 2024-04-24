<?php

namespace App\Http\Controllers;

ini_set('memory_limit', '-1');
ini_set('max_execution_time', '0');

use App\Models\{Attendance, Campaign, Category, Classes, Contact, Conversation, Courses, Customer, Degree, Email_Campaign, Fee, Group, Level_Two, Plan, Program, Report, Subcategory, Teacher_Salary, User};
use Carbon\Carbon;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;

class PagesController extends Controller
{
    public function signin()
    {
        if (session()->has('user_added')) {
            return redirect('/dashboard');
        } else {
            return view('authentication.signin');
        }
    }
    public function signup()
    {
        return view('authentication.signup');
    }
    public function logout()
    {
        if (session()->has('user_added')) {
            session()->forget('user_added');
            return view('authentication.logout');
        } else {
            return redirect('/');
        }
    }
    public function otp()
    {
        if (session('admin_check') != '') {
            return view('authentication.otp');
        } else {
            return redirect('/')->with('error', 'Please Enter The Credentials First..!');
        }
    }
    public function forget()
    {
        return view('authentication.forget');
    }
    public function reset()
    {
        return view('authentication.reset');
    }
    public function offline()
    {
        return view('authentication.offline');
    }
    public function dashboard()
    {
        $user = DB::table('users')->where("id", session()->get('user_added'))->first();
        return view('Pages.dashboard', compact("user"));
    }
    public function profile()
    {
        $user = DB::table('users')->where("id", session()->get('user_added'))->first();
        return view('Pages.profile', compact("user"));
    }
    public function getGmailPage()
    {
        return view('authentication.gmail');
    }
    public function updateProfile(Request $request, $id)
    {
        $user = User::find($id);
        $user->update($request->all());
        return response()->json([
            "message" => 200,
        ]);
    }
    public function home()
    {
        $allcategory = Category::where('category_status', 1)->get();
        $allsubcateory = Subcategory::whereIn('category', $allcategory->pluck('id')->all())->get();
        $alltwolevel = Level_Two::whereIn('subcategory', $allsubcateory->pluck('id')->all())->get();
        return view('Frontend.home', compact("allcategory", "allsubcateory", "alltwolevel"));
    }
    public function category($value)
    {
        $category = Category::where('category_slug', $value)->first();
        $allcategory = Category::where('category_status', 1)->get();
        $allsubcateory = Subcategory::whereIn('category', $allcategory->pluck('id')->all())->get();
        $alltwolevel = Level_Two::whereIn('subcategory', $allsubcateory->pluck('id')->all())->get();
        return view('Frontend.Category.category', compact("allcategory","category","allsubcateory", "alltwolevel"));
    }
    public function subcategory($value)
    {
        $subcategory = Subcategory::where('subcategory_slug', $value)->first();
        $allcategory = Category::where('category_status', 1)->get();
        $allsubcateory = Subcategory::whereIn('category', $allcategory->pluck('id')->all())->get();
        $alltwolevel = Level_Two::whereIn('subcategory', $allsubcateory->pluck('id')->all())->get();
        return view('Frontend.Subcategory.subcategory', compact("allcategory", "subcategory", "allsubcateory", "alltwolevel"));
    }
    public function leveltwo($value)
    {
        $leveltwo = Level_Two::where('level_two_slug', $value)->first();
        $allcategory = Category::where('category_status', 1)->get();
        $allsubcateory = Subcategory::whereIn('category', $allcategory->pluck('id')->all())->get();
        $alltwolevel = Level_Two::whereIn('subcategory', $allsubcateory->pluck('id')->all())->get();
        return view('Frontend.LevelTwo.leveltwo', compact("allcategory", "leveltwo", "allsubcateory", "alltwolevel"));
    }
}
