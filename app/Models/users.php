<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasOne;

class users extends Model
{
    use HasFactory;
    protected $fillable = ['Name', 'Email', 'Username','Password','Role','Status'];
    protected $guarded = ['_token'];


    public function updateInput($id, $data)
    {
        $users = users::findOrFail($id);
        $users->update($data);
    }

    public function orders() : HasOne
    {
        return $this->hasOne(orders::class, 'id_user', 'id_user');

    }
}
