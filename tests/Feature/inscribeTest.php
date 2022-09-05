<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;
use App\Models\Event;
use App\Models\User;

use function PHPUnit\Framework\isFalse;

class inscribeTest extends TestCase
{
    /**
     * A basic feature test example.
     *
     * @return void
     *
     */
    use RefreshDatabase;
    public function test_inscribe_in_event(){
        $this->withExceptionHandling();
        $event = Event::factory()->create();
        $this->assertCount(1, Event::all());
        $userNoAdmin = User::factory()->create(['isAdmin'=>false]);
        $this->actingAs($userNoAdmin);
        $eventPlaces=Event::first()->sub_people;
        $response = $this->get(route('inscribeEvent', $event->id));
        $this->assertEquals($eventPlaces +1, Event::first()->sub_people);


    }

}
