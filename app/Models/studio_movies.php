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
}
