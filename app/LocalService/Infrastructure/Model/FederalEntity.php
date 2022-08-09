<?php

namespace App\LocalService\Infrastructure\Model;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasOne;

class FederalEntity extends Model
{
    use HasFactory;

    public $incrementing = false;

    protected $keyType = "string";

    protected $fillable = [
        "name",
    ];

    protected $hidden = [
        "created_at",
        "updated_at",
    ];

    /**
     * @return HasOne
     */
    public function municipality(): HasOne
    {
        return $this->hasOne(Municipality::class);
    }
}
