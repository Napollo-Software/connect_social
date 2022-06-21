<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Storage;

class PostAssets extends Model
{
    use HasFactory;
    public function data(){
        if ($this->type=='link'){
            return $this->file;
        }
        return Storage::disk('local')->url('/a/posts/'.$this->file);

    }
}
