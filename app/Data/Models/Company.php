<?php

namespace App\Data\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use App\Traits\HasUuid;
use Database\Factories\CompanyFactory;

class Company extends Model
{
    use HasFactory, HasUuid;

    protected $fillable = [
        'name',
        'overview',
        'address',
        'industry',
        'specialties'
    ];

    protected static function newFactory()
    {
        return CompanyFactory::new();
    }       
}
