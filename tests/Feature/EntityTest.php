<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;
use App\Services\EntityService;

class EntityTest extends TestCase
{

    public function testGetEntitiesByExternalAPI(): void
    {
        $entityService = new EntityService();
        $entities = $entityService->fetchEntities();
        $expectedKeys = [
            'API',
            'Description',
            'Auth',
            'HTTPS',
            'Cors',
            'Link',
            'Category'
        ];
        foreach ($entities as $entity) {
            $this->assertInstanceOf(\stdClass::class, $entity);
            foreach ($expectedKeys as $key) {
                $this->assertTrue(property_exists($entity, $key), "Object does not have attribute '$key'");
            }
        }
    }

    public function testGetAnimalEntities(): void
    {
        // Get Animal entities (id = 1)
        $response = $this->get('/api/1');
        $response->assertJsonStructure([
            'data' => [
                '*' => [
                    'api',
                    'description',
                    'link',
                ],
            ],
        ]);
        foreach ($response['data'] as $entity) {
            $this->assertEquals('Animals', $entity['category']['category']);
        }
        $response->assertStatus(200);
    }
}
