<?php

namespace App\Services;

use Illuminate\Support\Facades\Http;
use App\Models\Entity;

class EntityService
{

    public function getEntitiesByCategoryId($categoryId)
    {
        return Entity::query()
              ->where('category_id', $categoryId)
              ->with('category:id,category')
              ->select('api', 'description', 'link', 'category_id') //category_id needed to fulfill the relation with Category
              ->get()
              ->map(function ($entity) {
                unset($entity->category_id);
                return $entity;
            });
    }

    public function fetchEntities()
    {
        $entriesUrl = env('ENTRIES_URL');
        $response = Http::get($entriesUrl);
        $entries_json = json_decode($response);
        return $entries_json->entries;
    }

}
