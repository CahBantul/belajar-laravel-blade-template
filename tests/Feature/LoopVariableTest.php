<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class LoopVariableTest extends TestCase
{
    public function test_loop_variable()
    {
        $this->view('loopvariable', ["hobbies" => ["gaming", "coding"]])
            ->assertSeeText('1.gaming')
            ->assertSeeText('2.coding');
    }
}
