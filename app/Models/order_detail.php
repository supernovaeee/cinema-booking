<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class order_detail extends Model
{
    use HasFactory;
    protected $table = "order_detail";
    protected $primaryKey = "id_order_detail";
    protected $guarded = ['id_order_detail'];
    public $timestamps = false;
//
   public function orders()
   {
       return $this->belongsTo(orders::class, 'id_order', 'id_order');
   }

   public function fnb()
   {
       return $this->hasOne(fnb::class, 'id_fnb', 'id_fnb');
   }
}
