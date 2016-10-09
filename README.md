Service Mode
============
Расширение для включения режима сервисного обслуживания проектов на Yii Framework 2

Установка
=========
Для установки расширения добавить в composer:

```
"georgynet/service-mode": "*"
```

Сконфигурировать расширение:

```
'bootstrap' => ['log', 'serviceMode'],
```

```
'components' => [
    // ...
    'serviceMode' => [
        'class' => 'georgynet\serviceMode\ServiceMode',
        'serviceMode' => false
    ],
    // ...
]
```
