<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class FailTest extends TestCase
{
    /**
     * @test
     */
    public function 失敗()
    {
        $this->assertTrue(false);
    }
}
