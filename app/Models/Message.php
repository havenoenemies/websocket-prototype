<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

/**
 * @method static create(mixed $data)
 * @method static latest()
 */
class Message extends Model
{
    use HasFactory;

    protected $guarded = false;
}
