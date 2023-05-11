<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class branch extends Model
{
    use HasFactory;
    protected $table = "branch";
    protected $primaryKey = "id_branch";
    protected $guarded = ['id_branch'];
    public $timestamps = false;
}
