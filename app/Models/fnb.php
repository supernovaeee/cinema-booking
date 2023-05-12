<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class fnb extends Model
{
    use HasFactory;
    protected $table = "fnb";
    protected $primaryKey = "id_fnb";
    protected $guarded = ['id_fnb'];
    public $timestamps = false;

    public function order_detail()
    {
        return $this->belongsTo(order_detail::class, 'id_order_detail', 'id_order_detail');
    }
 
}
