<?php

use App\Domain\Feedbacks\Models\Feedbacks;
use App\Http\ApiV1\Support\Tests\ApiV1ComponentTestCase;

use function Pest\Laravel\assertDatabaseHas;
use function Pest\Laravel\getJson;
use function Pest\Laravel\postJson;

uses(ApiV1ComponentTestCase::class);
uses()->group('component');

test('POST /api/v1/feedbacks/feedbacks create success', function () {
    $request = [
        'name' => 'Test name',
        'body' => 'test feedbacks body',
    ];

    postJson('/api/v1/feedbacks/feedbacks', $request)
        ->assertStatus(201)
        ->assertJsonPath('data.name', $request['name'])
        ->assertJsonPath('data.body', $request['body']);


    assertDatabaseHas(Feedbacks::class, [
        'name' => $request['name'],
    ]);
});

test('GET /api/v1/feedbacks/feedbacks/{id} get feedbacks success', function () {
    /** @var Feedbacks $feedback */
    $feedbacks = Feedbacks::factory()->create();

    getJson("/api/v1/feedbacks/feedbacks/{$feedbacks->id}")
        ->assertStatus(200)
        ->assertJsonPath('data.name', $feedbacks->name)
        ->assertJsonPath('data.body', $feedbacks->body);
});