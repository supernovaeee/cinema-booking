<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class orders extends Model
{
    use HasFactory;
    protected $table = "orders";
    protected $primaryKey = "id_order";
    protected $guarded = ['id_order'];
    public $timestamps = false;

    public function users()
    {
        return $this->belongsTo(users::class, 'id_user', 'id_user');
    }
}
