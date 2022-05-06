<?php

namespace Plugrbase\Facades\FacebookGraphApi;

use Illuminate\Support\Facades\Facade;

/**
 * @see \Plugrbase\FacebookGraphApi\Skeleton\SkeletonClass
 */
class FacebookGraphApiFacade extends Facade
{
    /**
     * Get the registered name of the component.
     *
     * @return string
     */
    protected static function getFacadeAccessor()
    {
        return 'facebook-graph-api';
    }
}
