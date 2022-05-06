<?php

namespace Plugrbase\FacebookGraphApi\Api;

class Page extends ApiEntity
{
    /**
     * Get many pages.
     *
     * @return object
     *
     * @throws \GuzzleHttp\Exception\GuzzleException
     */
    public function getMany(string $token)
    {
        return json_decode(
            $this->facebookGraphApi->get('/me/accounts', $token)
                ->getGraphEdge()
        );
    }
}
