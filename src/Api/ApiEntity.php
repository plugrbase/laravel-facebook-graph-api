<?php

namespace Plugrbase\FacebookGraphApi\Api;

class ApiEntity
{
    /**
     * The facebookGraphApi object.
     */
    public object $facebookGraphApi;

    /**
     * Create a new object instance.
     *
     * @return void
     */
    public function __construct(object $facebookGraphApi)
    {
        $this->facebookGraphApi = $facebookGraphApi;
    }
}
