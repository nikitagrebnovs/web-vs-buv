<?php

namespace Tests\Feature\Team;

use App\Models\Team;
use App\Models\User;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class TeamTest extends TestCase
{
    use RefreshDatabase;

    public function test_TeamHasName()
    {
        $team =  new Team(['name' => 'Acme']);

        $this->assertEquals('Acme', $team->name);
    }

    public function test_TeamCanAddMembers()
    {
        $team = Team::factory()->create();

        $user = User::factory()->create();
        $userTwo = User::factory()->create();

        $team->add($user);
        $team->add($userTwo);

        $this->assertEquals(2, $team->count());

    }

    public function test_TeamMaximumSize()
    {
        $team = Team::factory()->create(['size' => 2]);

        $userOne = User::factory()->create();
        $userTwo = User::factory()->create();

        $team->add($userOne);
        $team->add($userTwo);

        $this->assertEquals(2, $team->count());

        $this->expectException('Exception');
        $userThree = User::factory()->create();
        $team->add($userThree);
    }

    public function test_AddingManyMembers()
    {
        $team = Team::factory()->create(['size' => 2]);

        $users = User::factory(3)->create();

        $this->expectException('Exception');

        $team->add($users);

    }




    public function test_TeamAddMultipleUsers()
    {
        $team = Team::factory()->create();

        $users = User::factory(2)->create();

        $team->add($users);

        $this->assertEquals(2, $team->members()->count());
    }

    public function test_TeamRemoveOne()
    {
        $team = Team::factory()->create(['size' => 10]);

        $users = User::factory(10)->create();

        $team->add($users);

        $team->removeOne();

        $this->assertEquals(9, $team->members()->count());

    }

    public function test_TeamGetOutAll()
    {
        $team = Team::factory()->create(['size' => 10]);

        $users = User::factory(10)->create();

        $team->add($users);

        $team->removeAllUsers();

        $this->assertEquals(0, $team->members()->count());

    }

}
