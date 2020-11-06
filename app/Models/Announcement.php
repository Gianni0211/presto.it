<?php

namespace App\Models;

use App\Models\User;
use App\Models\Category;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Laravel\Scout\Searchable;

class Announcement extends Model
{
    use Searchable;

    use HasFactory;


    protected $fillable = [
        'title', 'body', 'category_id', 'user_id' , 'img', 'price'   //protezione per il Models per evitare dati indesiderati
    ];             
    
    public function toSearchableArray()
    {
        
        /* $announcements = $this->announcements->pluck('title')->join(' , '); */
        
        $array = [
            'id' => $this->id,
            'title' => $this->title,
            'body' => $this->body,
            'altro' => 'annunci',
        ];

        return $array;
    }
         
                    

     public function user()
      {
          return $this->belongsTo(User::class);
      }

      public function category()
      {
          return $this->belongsTo(Category::class);
      }

      static public function ToBeRevisionedCount () {

        return Announcement::where('is_accepted',null)->count();

      }
}
