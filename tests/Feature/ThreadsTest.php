<?php

namespace Tests\Feature;

use Tests\TestCase;

//use Illuminate\Foundation\Testing\DatabaseTransactions;
use Illuminate\Foundation\Testing\DatabaseMigrations;

//use Illuminate\Foundation\Testing\RefreshDatabase;


class ThreadsTest extends TestCase
{
    use DatabaseMigrations;
    /**
     * A basic test example.
     *
     * @return void
     */
    public function test_a_user_can_view_all_threads()
    {
        $thread = factory('App\Thread')->create();


        $response = $this->get('/threads');

        $response -> assertSee($thread->title);

        //$response = $this->get('/threads'.$thread->id);

        //$response -> assertSee($thread->title);

    }

    function test_a_user_can_view_single_thread()
    {
        $thread = factory('App\Thread')->create();


        $response = $this->get('/threads/'.$thread->id);
        $response -> assertSee($thread->title);

        

    }
}
