<?php

namespace App\Data\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use App\Traits\HasUuid;
use Database\Factories\VocationFactory;

class Vocation extends Model
{
    use HasFactory, HasUuid;

    protected $fillable = [
        'title',
        'company_id',
        'workplace_type',
        'location',
        'employment_type',
        'discription',
        'notification',
    ];

    protected static function newFactory()
    {
        return VocationFactory::new();
    }        
}
