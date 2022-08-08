<?php

namespace App\LocalService\Infrastructure\Model;

use App\LocalService\Infrastructure\Model\Builder\LocalityBuilder;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Locality extends Model
{
    use HasFactory;

    protected $primaryKey = "zip_code";

    public $incrementing = false;

    protected $fillable = [
        "zip_code",
        "city",
        "federal_entity_id",
        "municipality_id",
    ];

    protected $hidden = [
        "created_at",
        "updated_at",
    ];

    /**
     * @return BelongsTo
     */
    public function federalEntity(): BelongsTo
    {
        return $this->belongsTo(FederalEntity::class);
    }

    /**
     * @return BelongsTo
     */
    public function municipality(): BelongsTo
    {
        return $this->belongsTo(Municipality::class);
    }

    /**
     * @return HasMany
     */
    public function settlement(): HasMany
    {
        return $this->hasMany(Settlement::class, "zip_code_id");
    }

    /**
     * @return LocalityBuilder|Builder
     */
    public static function query(): LocalityBuilder|Builder
    {
        return parent::query();
    }

    /**
     * @param $query
     * @return LocalityBuilder
     */
    public function newEloquentBuilder($query): LocalityBuilder
    {
        return new LocalityBuilder($query);
    }
}
