<?php

namespace Tests\Unit;

use Tests\TestCase;
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Foundation\Testing\RefreshDatabase;
use App\Car;

class InsertioncarTest extends TestCase
{
    /**
     * A basic test example.
     *
     * @return void
     */
    public function testExample()
    {
        $user=new Car();
        $user->make='toyota';
        $user->model='prius';
        $user->year='2016';
        //$user->save();
        $this->assertTrue($user=!NULL);
    }
}
