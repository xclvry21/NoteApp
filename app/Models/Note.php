<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Note extends Model
{
    use HasFactory;

    protected $fillable = [
        'user_id', 'title', 'body', 'created_at', 'updated_at'
    ];


    /**
     * By default, Eloquent expects created_at and updated_at columns 
     * to exist on your model's corresponding database table.
     * 
     */
    //(1) - By default this is true
    public $timestamps = false;

    //(2)
    /* protected static function booted(): void
    {
        static::creating(function (self $model) {
            $model->updated_at = null;
        });
    } */
}
