<?php

namespace Plugrbase\FacebookGraphApi\Tests;

use Dotenv\Dotenv;
use Orchestra\Testbench\TestCase as Orchestra;
use Plugrbase\FacebookGraphApi\FacebookGraphApi;

class TestCase extends Orchestra
{
    public function setUp(): void
    {
        // Load env files
        (Dotenv::createImmutable(__DIR__.'/..', '.env'))->safeLoad();

        parent::setUp();

        $this->app['config']->set('facebook-graph-api.app_id', env('FACEBOOK_GRAPH_API_APP_ID'));
        $this->app['config']->set('facebook-graph-api.app_secret', env('FACEBOOK_GRAPH_API_APP_SECRET'));
        $this->app['config']->set('facebook-graph-api.default_graph_version', env('FACEBOOK_GRAPH_API_GRAPH_VERSION'));
        $this->app['config']->set('facebook-graph-api.default_access_token', env('FACEBOOK_GRAPH_API_DEFAULT_TOKEN'));
    }

    protected function facebookGraphApi($config = [])
    {
        if (count($config) == 0) {
            $config = [
                'app_id' => config('facebook-graph-api.app_id'),
                'app_secret' => config('facebook-graph-api.app_secret'),
                'default_graph_version' => config('facebook-graph-api.default_graph_version'),
                'default_access_token' => config('facebook-graph-api.default_access_token'),
            ];
        }

        return new FacebookGraphApi($config);
    }
}
