<?php

namespace App\Models;

use App\Models\Announcement;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Storage;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class AnnouncementImages extends Model
{

    
    use HasFactory;
    protected $casts = ['labels' => 'array'];

    
    protected $fillable = [
        'file', 'announcement_id'   //protezione per il Models per evitare dati indesiderati
    ];    
    public function announcement()
    {
        return $this->belongsTo(Announcement::class);
    }

    static public function getUrlByFilePath($filePath, $w = null, $h = null)
    {
        if(!$h && !$w){
            return Storage::url($filePath);
        }
        $path = dirname($filePath);
        $fileName = basename($filePath);

        $file = "{$path}/crop{$w}x{$h}_{$fileName}";

        return Storage::url($file);
    }

    public function getUrl($w = null, $h = null)
    {
        return AnnouncementImages::getUrlByFilePath($this->file, $w, $h);
    }

}
