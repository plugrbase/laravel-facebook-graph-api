<?php

namespace Plugrbase\FacebookGraphApi\Tests\Feature;

use Plugrbase\FacebookGraphApi\Tests\TestCase;

class UserTest extends TestCase
{
    public function test_get_me_should_return_data()
    {
        $user = $this->facebookGraphApi()->user()->me(config('facebook-graph-api.default_access_token'));

        $this->assertNotEmpty($user);
        $this->assertEquals('100965035871891', $user->id);
    }
}
