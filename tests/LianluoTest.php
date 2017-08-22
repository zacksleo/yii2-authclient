<?php
/**
 * Created by PhpStorm.
 * User: zjw
 * Date: 2017/8/22
 * Time: 下午12:26
 */

namespace zacksleo\yii2\authclient\tests;

use yii;
use yii\authclient\InvalidResponseException;
use yii\authclient\OAuthToken;
use yii\authclient\signature\RsaSha;
use yii\web\HttpException;
use zacksleo\yii2\authclient\clients\Lianluo;

class LianluoTest extends TestCase
{
    public function setUp()
    {
        parent::setUp();
        $this->mockWebApplication();
    }

    public function testAuthenticateClient()
    {
        $params = $this->getParam();
        if (empty($params->clientId)) {
            $this->markTestSkipped("clientID is not configured.");
        }
        if (empty($params->clientSecret)) {
            $this->markTestSkipped("clientSecret is not configured.");
        }
        $oauthClient = Yii::$app->authClientCollection->clients['lianluo'];
        try{
            $token = $oauthClient->authenticateClient(['code'=>'1xxxxx']);
            $this->assertTrue($token instanceof OAuthToken);
        }catch (InvalidResponseException $e){
           return;
        }
    }
}
