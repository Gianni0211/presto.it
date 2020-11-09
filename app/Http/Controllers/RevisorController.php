<?php

namespace App\Http\Controllers;



    use App\Models\Announcement;
    use Illuminate\Http\Request;

    class RevisorController extends Controller
    {

        public function __construct()
        {
            $this->middleware('auth.revisor');
        }

        public function index()
        {
             session()->push('lastAnnouncemetRevsioned',0);
            $announcement= Announcement::where('is_accepted',null)
            ->orderBy('created_at','desc')
            ->first();
            return view('revisor.home', compact('announcement'));
        }


        private function setAccepted($announcement_id,$value)
        {
            $announcement = Announcement::find($announcement_id);
            $announcement->is_accepted =$value;
            $announcement->save();
           
            session()->push('lastAnnouncemetRevsioned',$announcement_id);
            
            return redirect(route('revisor.home'));

        }

        
        public function accept($announcement_id)
        {
            return $this->setAccepted($announcement_id, true);
        }
        public function reject($announcement_id)
        {
            return $this->setAccepted($announcement_id, false);
        }


        public function unDo()
        {    

        if(session()->get('lastAnnouncemetRevsioned')){

        
            $lastAnnouncemetRevsioned=session()->get('lastAnnouncemetRevsioned');
            $count = count($lastAnnouncemetRevsioned)-1;
            $idAnnouncement=$lastAnnouncemetRevsioned[$count];
           
            $announcement= Announcement::find($idAnnouncement);
            
            return view('revisor.home', compact('announcement'));
        }
            
        
        }
}
