<?php

namespace App\Models;


use App\Models\Announcement;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Category extends Model
{
    use HasFactory;


    public function announcements(){

        return $this->hasMany(Announcement::class);
    }

    public function announcementCount(){
        return Announcement::where('category_id', $this->id)->count();
    }
}
