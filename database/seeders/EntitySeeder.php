<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use App\Models\Entity;
use App\Services\EntityService;

class EntitySeeder extends Seeder
{
    public function run()
    {
        $entityService = new EntityService();
        $entities = $entityService->fetchEntities();
        $serializedEntities = [];
        foreach($entities as $entity){
            if (in_array($entity->Category, ['Animals', 'Security'])) {
                array_push($serializedEntities, [
                    "api" => $entity->API,
                    "description" => $entity->Description,
                    "link" => $entity->Link,
                    "category_id" => $entity->Category === 'Animals' ? 1 : 2,
                    'created_at' => now(),
                    'updated_at' => now()
                ]);
            }
        }
        Entity::insert($serializedEntities);
    }
}
