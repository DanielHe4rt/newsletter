<?php

namespace Tests\Feature\app\Http\Controllers;

use Tests\TestCase;

class ViewControllerTest extends TestCase
{
    public function testTheMainPageShowsCorrectInfo()
    {
        $response = $this->get('/');

        $response->assertOk();
    }
}
