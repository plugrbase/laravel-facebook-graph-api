<?php

namespace Plugrbase\FacebookGraphApi;

use Facebook\Facebook;
use Plugrbase\FacebookGraphApi\Api\Page;
use Plugrbase\FacebookGraphApi\Api\User;

class FacebookGraphApi
{
    /**
     * The Facebook App instance.
     *
     * @var \Facebook\Facebook
     */
    protected $facebook;

    /**
     * The configuration options for the Facebook instance.
     *
     * @var array
     */
    protected $config = [];

    /**
     * Create a new FacebookGraphApi instance.
     *
     * @param  array  $config
     * @return void
     */
    public function __construct(array $config = [])
    {
        $this->config = $config;

        if (! $this->facebook) {
            $this->facebook = new Facebook($this->config);
        }
    }

    /**
     * Return the page object.
     *
     * @return \Plugrbase\FaceboohGraphApi\Api\Page
     */
    public function page()
    {
        return new Page($this->facebook);
    }

    /**
     * Return the user object.
     *
     * @return \Plugrbase\FaceboohGraphApi\Api\User
     */
    public function user()
    {
        return new User($this->facebook);
    }
}
