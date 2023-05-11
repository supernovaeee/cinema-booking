<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class studio_movies extends Model
{
    use HasFactory;
    protected $table = "studio_movies";
    protected $primaryKey = "id_studio_movies";
    protected $guarded = ['id_studio_movies'];
    public $timestamps = false;

//    public function studio()
//    {
//        return $this->belongsTo(studio::class, 'id_studio', 'id_studio');
//    }
//    public function movies()
//    {
//        return $this->belongsTo(movies::class, 'id_movies', 'id_movies');
//    }
}
