# yii2-authclient

[![Latest Stable Version](https://poser.pugx.org/zacksleo/yii2-authclient/version)](https://packagist.org/packages/yii2-authclient/phpsms)
[![Total Downloads](https://poser.pugx.org/zacksleo/yii2-authclient/downloads)](https://packagist.org/packages/yii2-authclient/phpsms)
[![License](https://poser.pugx.org/zacksleo/yii2-authclient/license)](https://packagist.org/packages/yii2-authclient/phpsms)
[![StyleCI](https://styleci.io/repos/100697365/shield?branch=master)](https://styleci.io/repos/100697365)
[![Build Status](https://travis-ci.org/monster-hunter/yii2-authclient.svg?branch=master)](https://travis-ci.org/monster-hunter/yii2-authclient)
[![Scrutinizer Code Quality](https://scrutinizer-ci.com/g/monster-hunter/yii2-authclient/badges/quality-score.png?b=master)](https://scrutinizer-ci.com/g/monster-hunter/yii2-authclient/?branch=master)


Yii AuthClient for Lianluo ( mops-ucenter.lianluo.com)

## Demo
https://mops-push.lianluo.com

## Config Setting

```
'components' => [
    'authClientCollection' => [
        'class' => 'yii\authclient\Collection',
        'clients' => [
            'lianluo' => [
                'class' => 'zacksleo\yii2\authclient\clients\Lianluo',
                'clientId' => 'appkey',
                'clientSecret' => 'appsecret'
            ]
        ],
    ],
    // other components
]
```

## More

More Docs at [yii2-authclient](https://github.com/yiisoft/yii2-authclient/tree/master/docs)