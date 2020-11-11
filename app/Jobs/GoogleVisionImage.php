<?php

namespace App\Jobs;

use Illuminate\Bus\Queueable;
use App\Models\hp ;
use Illuminate\Queue\SerializesModels;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Foundation\Bus\Dispatchable;
use Illuminate\Contracts\Queue\ShouldBeUnique;
use Google\Cloud\Vision\V1\ImageAnnotatorClient;

class GoogleVisionImage implements ShouldQueue
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
       $i=AnnouncementImages::find($this->announcement_image_id);
        if(!$i){return;}
        $image=file_get_contents(storage_path('/app/'. $i->file));

        putenv('GOOGLE_APPLICATION_CGRDENTIALS=' . base_path('google_credential.json'));

        $imageAnnotator=new ImageAnnotatorClient();
        $response=$imageAnnotator->safeSerchDetection($image);
        $imageAnnotator->close();

        $safe=$response->getSafeSearchAnnotation();
    
        $audlt=$safe->getAdult();
        $spoof=$safe->getSpoof();
        $medical=$safe->getMedical();
        $violence=$safe->getViolence();
        $racy=$safe->getRacy();

        echo json_encode([$audlt, $spoof,$medical,$violence,$racy]);
        $likelihoodName=[
            'UNKNOW','VERY_UNLIKELY','UNLIKELY','POSSIBLE','LIKELY','VERY_LIKELY'
        ];

         $i->audlt=$likelihoodName[$audlt];
         $i->spoof=$likelihoodName[$spoof];
         $i->medical=$likelihoodName[$medical];
         $i->violence=$likelihoodName[$violence];
         $i->racy=$likelihoodName[$racy];

         $i->save();

    }
}
