<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class movies extends Model
{
    use HasFactory;
    protected $table = "movies";
    protected $primaryKey = "id_movies";
    protected $guarded = ['id_movies'];
    public $timestamps = false;
}
