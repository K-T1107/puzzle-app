<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class UserItem extends Model
{
    protected $table = 'user_items';
    protected $fillable = ['user_id', 'item_id', 'amount'];
}
