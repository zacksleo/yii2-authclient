# yii2-authclient
Yii AuthClient for Lianluo ( mops-ucenter.lianluo.com)

**Demo**
https://mops-ucenter.lianluo.com

**Config Setting**

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
