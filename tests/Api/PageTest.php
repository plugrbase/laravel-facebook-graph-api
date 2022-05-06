<?php

namespace Plugrbase\FacebookGraphApi\Tests\Feature;

use Plugrbase\FacebookGraphApi\Tests\TestCase;

class PageTest extends TestCase
{
    public function test_get_many_pages_should_return_data()
    {
        $pages = $this->facebookGraphApi()->page()->getMany(config('facebook-graph-api.default_access_token'));
        
        $this->assertNotEmpty($pages);
    }
}
