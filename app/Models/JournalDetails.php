<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class JournalDetails extends Model
{
    use HasFactory;
    public function chartOfAccount(){
        return $this->belongsTo(ChartOfAccount::class,'account');
    }
    public function journal(){
        return $this->belongsTo(Journal::class,'journal_id');
    }

}
