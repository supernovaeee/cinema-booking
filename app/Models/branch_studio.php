<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class branch_studio extends Model
{
    use HasFactory;

    protected $table = "branch_studio";
    protected $primaryKey = "id_branch_studio";
    protected $guarded = ['id_branch_studio'];
    public $timestamps = false;
}
