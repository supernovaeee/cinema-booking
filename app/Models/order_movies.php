<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class order_movies extends Model
{
    use HasFactory;
    protected $table = "orders_movies";
    protected $primaryKey = "id_order_movies";
    protected $guarded = ['id_order_movies'];
    public $timestamps = false;
}
