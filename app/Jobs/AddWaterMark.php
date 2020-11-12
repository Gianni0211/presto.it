<?php

namespace App\Jobs;

use Spatie\Image\Image;
use Illuminate\Bus\Queueable;
use App\Models\AnnouncementImages;
use Illuminate\Queue\SerializesModels;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Foundation\Bus\Dispatchable;
use Illuminate\Contracts\Queue\ShouldBeUnique;

class AddWaterMark implements ShouldQueue
{
    use Dispatchable, InteractsWithQueue, Queueable, SerializesModels;

    private $announcement_image_id;

    public function __construct($announcement_image_id)
    {
        $this->announcement_image_id = $announcement_image_id;
     
    }

    /**
     * Execute the job.
     *
     * @return void
     */
    public function handle()
    {
       // var_dump($this->announcement_image_id);
        $i = AnnouncementImages::find($this->announcement_image_id);
        if(!$i) {
            return;
        }

        $srcPath = storage_path('/app/' . $i->file);
        $image = file_get_contents($srcPath);

           
      

        
            $image=Image::load($srcPath);
            $image->watermark(base_path('resources/img/marker.png'))
            ->watermarkPosition('top-left');
           
           
            $image->save($srcPath);
            
        }
    }
