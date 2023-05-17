<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class orders extends Model
{
    use HasFactory;
    protected $table = "orders";
    protected $primaryKey = "id_order";
    protected $guarded = ['id_order'];
    public $timestamps = false;

    public function users() : BelongsTo
    {
        return $this->belongsTo(users::class, 'id_user', 'id_user');
    }

    public function order_detail()
    {
        return $this->hasMany(order_detail::class, 'id_order_detail', 'id_order_detail');
    }
}
