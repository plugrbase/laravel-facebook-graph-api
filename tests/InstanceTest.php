<?php

namespace Plugrbase\FacebookGraphApi\Tests;

use Plugrbase\FacebookGraphApi\FacebookGraphApi;

class InstanceTest extends TestCase
{
    public function test_facebooh_graph_api_should_be_instance_of_facebooh_graph_api()
    {
        $facebookGraphApi = $this->facebookGraphApi();
        $this->assertInstanceOf(FacebookGraphApi::class, $facebookGraphApi);
    }

    public function test_facebooh_graph_api_user()
    {
        $facebookGraphApi = $this->facebookGraphApi();
        dd($facebookGraphApi->user());
    }
}
