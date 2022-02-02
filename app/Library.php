<?php
namespace App;
use Illuminate\Database\Eloquent\Model;

class Library extends Model
{
    public $timestamps = false;

    protected $fillable = [
        "name"
    ];

    public function logs()
    {
        return $this->hasMany('App\Log');
    }
}