<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Services\EntityService;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;

class EntityController extends Controller
{
    protected $entityService;

    public function __construct(EntityService $entityService)
    {
        $this->entityService = $entityService;
    }

    public function getEntitiesByCategoryId($categoryId)
    {
        try{
            $entities = $this->entityService->getEntitiesByCategoryId($categoryId);
            return response()->json([
                'success' => true,
                'data' => $entities,
            ], 200);
        }catch(Exception $e) {
            Log::error('Error fetching entities: ' . $e->getMessage());
            return response()->json([
                'success' => false,
                'message' => 'An error occurred while fetching entities',
            ], 500);
        }
    }
}
