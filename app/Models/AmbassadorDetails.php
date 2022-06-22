<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Storage;

class AmbassadorDetails extends Model
{
    use HasFactory;
    public function coverPhoto(){
        if ($this->cover_photo){
             return Storage::disk('local')->url('/a/covers/'.$this->user_id.'/'.$this->cover_photo);

        }
        return 'ambassador_assets/images/cover/cover-bg.svg';
    }
}
