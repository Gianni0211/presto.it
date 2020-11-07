<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Mail\RevisorMail;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\View;

class AuthController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
   
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function toBerevisor()
    {
        return view('revisor.ackToBerevisor');
    }


    public function sedMessageToBeRevisor(Request $request)
    { 
      
        $revisorMessage= $request->input('message');
        //dd($message);
        Mail::to('accetazioneRevisor@presto.it')->send(new RevisorMail(Auth::User(),$revisorMessage));

        return  view('revisor.thankyou')->with('message', "La tua richiesta è stata presa in carico");
    }





}
