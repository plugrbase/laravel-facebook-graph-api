<?php

namespace Plugrbase\FacebookGraphApi\Api;

class User extends ApiEntity
{
    /**
     * Get me.
     *
     * @return object
     *
     * @throws \GuzzleHttp\Exception\GuzzleException
     */
    public function me(string $token)
    {
        return json_decode(
            $this->facebookGraphApi->get('/me', $token)
                ->getGraphUser()
        );
    }
}
