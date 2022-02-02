<?php
namespace App;
use Illuminate\Database\Eloquent\Model;

class Log extends Model
{
    public $timestamps = false;

    public function library()
    {
        return $this->belongsTo('App\Library');
    }
}