<?php

namespace App\Models;

use App\Models\Announcement;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class AnnouncementImages extends Model
{
    use HasFactory;


    
    protected $fillable = [
        'file', 'announcement_id'   //protezione per il Models per evitare dati indesiderati
    ];    
    public function announcement()
    {
        return $this->belongsTo(Announcement::class);
    }

}
