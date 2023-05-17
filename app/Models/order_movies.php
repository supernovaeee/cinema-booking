<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class order_movies extends Model
{
    use HasFactory;
    protected $table = "order_movies";
    protected $primaryKey = "id_order_movies";
    protected $guarded = ['id_order_movies'];
    public $timestamps = false;

    public function orders()
    {
        return $this->belongsTo(orders::class, 'id_order', 'id_order');
    }
 
    public function studio_movies()
    {
        return $this->hasOne(fnb::class, 'id_studio_movies', 'id_studio_movies');
    }
}
