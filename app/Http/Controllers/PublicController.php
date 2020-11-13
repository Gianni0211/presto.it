<?php

namespace App\Http\Controllers;

use App\Models\Category;

use App\Models\Announcement;
use Illuminate\Http\Request;

use Illuminate\Support\Facades\View;
use Illuminate\Support\Facades\Schema;

class PublicController extends Controller
{
    public function index(){

        $announcements = Announcement::where('is_accepted',1)->orderBy('created_at', 'desc')->take(5)->get();

        return view('welcome', compact('announcements'));
    }

    public function search(Request $request) 
    {
    
        $q = $request->input('q');
        
        
        $announcements = Announcement::search($q)->where('is_accepted',1)->get();
        
        if (count($announcements) == 0) {
            
            $announcements = Announcement::where('is_accepted',1)->orderBy('created_at', 'desc')->take(5)->get();
        
            $q = 'Non ci sono risultati per : '. $q; 
        }
    
        return view('search', compact('q','announcements'));

        

    }


    public function announcementsByCategory($name, $category_id){
        
        $category = Category::find($category_id);
        $announcements = $category->announcements()->orderBy('created_at', 'desc')->paginate(5);
        return view('category.announcements' , compact('category', 'announcements'));
        
    }

    

    public function countCategory()
    {
        if(Schema::hasTable('categories')){
            $categories = Category::all();
            foreach($categories as $category){
                /* $myCategory = Category::find($category->id); */
                $announcements = $category->announcements()->get();
                $category->announcementCount=count($announcements);
                
            }
            View::share('categories', $categories);
        }
    }

}
