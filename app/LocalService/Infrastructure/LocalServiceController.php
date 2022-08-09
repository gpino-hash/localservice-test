<?php

namespace App\LocalService\Infrastructure;

use App\Http\Controllers\Controller;
use App\LocalService\Application\LocalServiceRecord;
use App\LocalService\Infrastructure\Resources\LocalityResource;
use Illuminate\Http\Response;
use Illuminate\Support\Facades\Cache;
use Illuminate\Support\Facades\Log;

class LocalServiceController extends Controller
{

    public function __construct(private readonly LocalServiceRecord $record) {}

    /**
     * @param int $code
     * @return \Illuminate\Http\JsonResponse
     */
    public function show(int $code): \Illuminate\Http\JsonResponse
    {

        try {
            if (Cache::has($code)) {
                return \response()->json(Cache::get($code));
            }
            $local = $this->record->search($code);
            Cache::put($code, new LocalityResource($local));
            return \response()->json(Cache::get($code));
        } catch (\Throwable $exception) {
            Log::error(self::class, [$exception]);
            return response()->json(["message" => $exception->getMessage()], Response::HTTP_NOT_FOUND);
        }
    }
}
