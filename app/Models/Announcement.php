<?php

namespace App\Models;

use App\Models\User;
use App\Models\Category;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Announcement extends Model
{
    use HasFactory;



    protected $fillable = [
         'title', 'body',     //protezione per il Models per evitare dati indesiderati
    ];                   

     public function user()
      {
          return $this->belongsTo(User::class);
      }

      public function category()
      {
          return $this->belongsTo(Category::class);
      }
}
