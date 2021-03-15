<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class todo extends Model
{
    // use HasFactory;

    /**
     * 複数代入する属性
     *
     * @var array
     */
    protected $fillable = ['category_id', 'todo', 'deadline'];
}
