<?php

namespace App\Data\Models;

use App\Traits\HasUuid;
use Database\Factories\VocationFactory;
use App\Data\Models\Company;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Casts\Attribute;
use Illuminate\Database\Eloquent\Model;


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
        return VocationFactory::new ();
    }

    public function company()
    {
        return $this->belongsTo(Company::class);
    }

}
