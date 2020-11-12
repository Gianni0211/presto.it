<?php

namespace App\Jobs;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldBeUnique;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Foundation\Bus\Dispatchable;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Queue\SerializesModels;

class GoogleVisionRemoveFaces implements ShouldQueue
{
    use Dispatchable, InteractsWithQueue, Queueable, SerializesModels;
    private $announcement_image_id;
    /**
   
     * Create a new job instance.
     *
     * @return void
     */
    public function __construct($announcement_image_id)
    { 
        $this->announcement_image_id=$announcement_image_id;

    }
   

    /**
     * Execute the job.
     *
     * @return void
     */
    public function handle()
    {
        $i = AnnouncementImages::find($this->announcement_image_id);
        if(!$i){return;}
        $srcPaht=storage_path('/app/'. $i->file);
        $image = file_get_contents($srcPaht);

        putenv('GOOGLE_APPLICATION_CREDENTIALS=' . base_path('google_credential.json'));


        $imageAnnotator=new ImageAnnotatorClient();
        $response=$imageAnnotator->FaceDetection($image);
        $faces->$response->getFaceAnnotations();

        foreach($faces as $face){
            $vertices = $face->getBoudingPoly()->getVertices();
            echo"face\n";
            foreach($vertices as $vertex){
                echo $vertex->getX . "," .$vertex->getY . "\n";
            }
        }
        

    }


    }

