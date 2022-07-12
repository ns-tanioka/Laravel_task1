<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class TranTable extends Model
{
    use HasFactory;
    public $timestamps = false;

    public function office_masters()
    {
    //子テーブルはbelongsTo or belongsToMany
    return $this->belongsTo('App\Models\OfficeMaster','id','id')->withDefault();
    }


}
