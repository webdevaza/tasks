<?php

namespace Tests\Feature;

// use Illuminate\Foundation\Testing\RefreshDatabase;
use Tests\TestCase;

class TaskControllerTest extends TestCase
{
    public function testIndexMethod()
    {
        $response = $this->get(route('tasks.index'));

        $response->assertStatus(302);
    }

    public function testDoneIndexMethod()
    {
        $response = $this->get(route('tasks.index'));

        $response->assertStatus(302);
    }

    public function testToDoIndexMethod()
    {
        $response = $this->get(route('tasks.index'));

        $response->assertStatus(302);
    }

    public function testStoreMethod()
    {
        $response = $this->post(route('tasks.store'), [
            'task' => 'Do sth',
            'toDoDate' => '2023-03-03',
            'doneDate' => '2023-02-02',
            'editDate' => null,
        ]);

        $response->assertSessionHasNoErrors();
        
        $this->assertEquals(302, $response->getStatusCode());

        $this->assertDatabaseHas('tasks.tasks', [
            'task' => 'Aza\'s task',
            'toDoDate' => '2023-02-02',
            'doneDate' => '2023-02-02',
            'editDate' => null,
        ]);
    }
}
