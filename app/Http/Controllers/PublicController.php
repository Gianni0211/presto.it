<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Announcement;
use Illuminate\Http\Request;

class PublicController extends Controller
{
    public function index(){

        $announcements = Announcement::orderBy('created_at', 'desc')->take(5)->get();

        return view('welcome', compact('announcements'));
    }

    public function announcementsByCategory($name, $category_id){
        
        $category = Category::find($category_id);
        $announcements = $category->announcements()->orderBy('created_at', 'desc')->paginate(5);
        return view('category.announcements' , compact('category', 'announcements'));
        
    }
}
