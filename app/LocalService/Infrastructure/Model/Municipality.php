<?php

namespace App\LocalService\Infrastructure\Model;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Municipality extends Model
{
    use HasFactory;

    public $incrementing = false;

    protected $fillable = [
        "id",
        "name",
        "federal_entity_id",
    ];

    protected $hidden = [
        "created_at",
        "updated_at",
    ];


}
