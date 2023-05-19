<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class studio extends Model
{
    use HasFactory;
    protected $table = "studio";
    protected $primaryKey = "id_studio";
    protected $guarded = ['id_studio'];
    public $timestamps = false;

}
