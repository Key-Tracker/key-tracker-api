<?php
namespace App\Traits;

use Illuminate\Support\Str;

trait HasUuid
{

    protected static function booted()
    {
        parent::booted();
        static::creating(function($model){
            $model->uuid = (string) Str::uuid();
        });
    }

    public static function findUuid($uuid)
    {
        return static::whereUuid($uuid)->firstOrFail();
    }
}