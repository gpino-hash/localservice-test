<?php

namespace App\LocalService\Infrastructure\Resources;

use Illuminate\Http\Resources\Json\ResourceCollection;

class SettlementResource extends ResourceCollection
{
    use ReplaceStr;

    private array $data;
    /**
     * Transform the resource collection into an array.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array|\Illuminate\Contracts\Support\Arrayable|\JsonSerializable
     */
    public function toArray($request)
    {
        foreach($this->collection as $collection) {
            $this->data[] = [
                "key" => intval($collection->id),
                "name" => $this->replaceStr($collection->name),
                "zone_type" => $this->replaceStr($collection->zone_type),
                "settlement_type" => [
                    "name" => $collection->settlement_type
                ],
            ];
        }

        return $this->data;
    }
}
