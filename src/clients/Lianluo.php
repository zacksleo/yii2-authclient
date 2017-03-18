<?php
namespace zacksleo\yii2\authclient\clients;

use yii\authclient\OAuth2;

class Lianluo extends OAuth2
{
    public $authUrl = 'https://mops-ucenter.lianluo.com/oauth2/auth';
    public $tokenUrl = 'https://mops-ucenter.lianluo.com/oauth2/token';
    public $apiBaseUrl = 'https://mops-ucenter.lianluo.com/api/oauth2/v1';

    protected function initUserAttributes()
    {
        return $this->api('users', 'GET');
    }

    protected function defaultName()
    {
        return '联络互动';
    }

    protected function defaultTitle()
    {
        return '联络互动';
    }

    protected function defaultViewOptions()
    {
        return [
            'popupWidth' => 800,
            'popupHeight' => 500
        ];
    }
}
