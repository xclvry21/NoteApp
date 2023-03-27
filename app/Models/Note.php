<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Note extends Model
{
    use HasFactory;

    /**
     *  It takes care of defining which fields are to be considered when the user will 
     * insert or update data. Only the fields marked as fillable are used in the mass 
     * assignment.
     */
    protected $fillable = [
        'user_id', 'title', 'body'
    ];


    /**
     * By default, Eloquent expects created_at and updated_at columns 
     * to exist on your model's corresponding database table.
     * 
     */
    protected static function booted(): void
    {
        static::creating(function (self $model) {
            $model->updated_at = null;
        });

        static::updating(function (self $model) {
            $model->updated_at = now()->toTimeString();
        });
    }
}
