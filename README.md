# yii2-authclient
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