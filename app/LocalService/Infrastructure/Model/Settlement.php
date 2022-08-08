<?php

namespace App\LocalService\Infrastructure\Model;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Settlement extends Model
{
    use HasFactory;

    public $incrementing = false;

    protected $fillable = [
        "id",
        "name",
        "zone_type",
        "settlement_type",
        "zip_code_id",
    ];

    protected $hidden = [
        "created_at",
        "updated_at",
    ];
}
