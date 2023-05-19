<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class tickets extends Model
{
    use HasFactory;
    protected $table = "tickets";
    protected $primaryKey = "id_ticket_type";
    protected $guarded = ['id_ticket_type'];
    public $timestamps = false;

//    public function users()
//    {
//        return $this->belongsTo(users::class, 'id_user', 'id_user');
//    }
//    public function studio_movies()
//    {
//        return $this->belongsTo(studio_movies::class, 'id_studio_movies', 'id_studio_movies');
//    }
}
