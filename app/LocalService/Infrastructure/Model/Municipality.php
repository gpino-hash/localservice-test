<?php

namespace App\LocalService\Infrastructure\Model;

use App\LocalService\Infrastructure\Model\Builder\MunicipalityBuilder;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Municipality extends Model
{
    use HasFactory;

    public $incrementing = false;

    protected $keyType = "string";

    protected $fillable = [
        "name",
        "federal_entity_id",
    ];

    protected $hidden = [
        "created_at",
        "updated_at",
    ];

    /**
     * @return MunicipalityBuilder|Builder
     */
    public static function query(): MunicipalityBuilder|Builder
    {
        return parent::query();
    }

    /**
     * @param $query
     * @return MunicipalityBuilder
     */
    public function newEloquentBuilder($query): MunicipalityBuilder
    {
        return new MunicipalityBuilder($query);
    }
}
