<?php

namespace App\Http\Controllers;


use App\Models\Category;
use App\Models\Announcement;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\View;
use App\Http\Requests\AnnouncementRequest;

class AnnouncementController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */

    public function create()
    {
        $uniqueSecret = base_convert(sha1(uniqid(mt_rand())), 16, 36);
        return view('announcement.new', compact('uniqueSecret'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(AnnouncementRequest $request)
    {

        $title = $request->input('title');
        $body = $request->input('body');
        $category_id = $request->input('category_id');
        $img = $request->file('img')->store('public/img');
        $price = $request->input('price');

       
            $post = Announcement::create([
            

           'title' => $title,
           'body' => $body,
           'category_id' => $category_id,
           'user_id' => Auth::user()->id,
           'img' => $img,
           'price' => $price
           ]);
    
        

        return redirect(route('home'))->with('message', "il tuo post è stato aggiunto all' elenco");
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\announcement  $announcement
     * @return \Illuminate\Http\Response
     */
    public function show(announcement $announcement)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\announcement  $announcement
     * @return \Illuminate\Http\Response
     */
    public function edit(announcement $announcement)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\announcement  $announcement
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, announcement $announcement)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\announcement  $announcement
     * @return \Illuminate\Http\Response
     */
    public function destroy(announcement $announcement)
    {
        //
    }


    public function single () {
        return view ('announcement.single');
    }


      public function imagesUpload(Request $request)
      {
        $uniqueSecret = $request->input('uniqueSecret');
        $fileName = $request->file('file')->store("public/media/{$uniqueSecret}");  
        session()->push("images.{$uniqueSecret}", $fileName);

        return response()->json(
            session()->get("images.{$uniqueSecret}")
        );
      }

    }
