<?php
/**
 * Created by PhpStorm.
 * User: owonnarr
 * Date: 16.08.18
 * Time: 16:11
 */
return [
    'menu' => [
        'characteristic' => [
            'route' => false,
            'title' => 'Характеристики',
            'icon' => 'fa fa-map',
            'subs' => [
                'list' => [
                    'route' => false,
                    'title' => 'Список',
                    'icon' => 'fa fa-th-list',
                ],
                'add' => [
                    'route' => false,
                    'title' => 'Добавить',
                    'icon' => 'fa fa-plus-circle',
                ],
            ]
        ],
        'personal' => [
            'route' => false,
            'title' => 'Персонал',
            'icon' => 'fa fa-address-card-o',
            'subs' => [
                'list' => [
                    'route' => false,
                    'title' => 'Список',
                    'icon' => 'fa fa-th-list',
                ],
                'add' => [
                    'route' => false,
                    'title' => 'Добавить персонал',
                    'icon' => 'fa fa-plus-circle',
                ],
            ]
        ],
        'revision' => [
            'route' => false,
            'title' => 'Рев. Комиссия',
            'icon' => 'fa fa-suitcase',
            'subs' => [
                'list' => [
                    'route' => false,
                    'title' => 'Состав',
                    'icon' => 'fa fa-th-list',
                ],
                'add' => [
                    'route' => false,
                    'title' => 'Добавить',
                    'icon' => 'fa fa-plus-circle',
                ],
            ]
        ],
        'reports' => [
            'route' => false,
            'title' => 'Отчетность',
            'icon' => 'fa fa-folder-open',
            'subs' => [
                'list' => [
                    'route' => false,
                    'title' => 'Список',
                    'icon' => 'fa fa-th-list',
                ],
                'add' => [
                    'route' => false,
                    'title' => 'Добавить',
                    'icon' => 'fa fa-plus-circle',
                ],
            ]
        ],
        'tariff' => [
            'route' => false,
            'title' => 'Тарифы',
            'icon' => 'fa fa-credit-card-alt',
            'subs' => [
                'list' => [
                    'route' => false,
                    'title' => 'Список',
                    'icon' => 'fa fa-th-list',
                ],
                'add' => [
                    'route' => false,
                    'title' => 'Добавить',
                    'icon' => 'fa fa-plus-circle',
                ],
            ]
        ],
        'bid' => [
            'route' => false,
            'title' => 'Заявки на ремонт',
            'icon' => 'fa fa-handshake-o',
            'subs' => [
                'list' => [
                    'route' => false,
                    'title' => 'Список',
                    'icon' => 'fa fa-th-list',
                ],
            ]
        ],
        'debtors' => [
            'route' => false,
            'title' => 'Должники',
            'icon' => 'fa fa-money',
            'subs' => [
                'list' => [
                    'route' => false,
                    'title' => 'Список',
                    'icon' => 'fa fa-th-list',
                ],
                'add' => [
                    'route' => false,
                    'title' => 'Добавить',
                    'icon' => 'fa fa-plus-circle',
                ],
            ]
        ],
        'deffective-act' => [
            'route' => false,
            'title' => 'Деффектные акты',
            'icon' => 'fa fa-exclamation-circle',
            'subs' => [
                'list' => [
                    'route' => false,
                    'title' => 'Список',
                    'icon' => 'fa fa-th-list',
                ],
                'add' => [
                    'route' => false,
                    'title' => 'Добавить',
                    'icon' => 'fa fa-plus-circle',
                ],
            ]
        ],
        'users' => [
            'route' => false,
            'title' => 'Пользователи',
            'icon' => 'fa fa-users',
            'subs' => [
                'list' => [
                    'route' => false,
                    'title' => 'Список',
                    'icon' => 'fa fa-th-list',
                ],
                'add' => [
                    'route' => false,
                    'title' => 'Добавить',
                    'icon' => 'fa fa-plus',
                ],
            ],
        ],
        'report' => [
            'route' => false,
            'title' => 'Отчеты',
            'icon' => 'fa fa-files-o',
            'subs' => [
                'list' => [
                    'route' => false,
                    'title' => 'Список',
                    'icon' => 'fa fa-th-list',
                ],
                'add' => [
                    'route' => false,
                    'title' => 'Добавить',
                    'icon' => 'fa fa-plus'
                ]
            ],
        ],
        'comments' => [
            'route' => false,
            'title' => 'Комментарии',
            'icon' => 'fa fa-commenting-o',
        ],
        'offers' => [
            'route' => false,
            'title' => 'Предложения',
            'icon' => 'fa fa-bullseye',
            'subs' => [
                'list' => [
                    'route' => false,
                    'title' => 'Список',
                    'icon' => 'fa fa-th-list',
                ],
            ],
        ],
        'news' => [
            'route' => false,
            'title' => 'Новости',
            'icon' => 'fa fa-newspaper-o',
            'subs' => [
                'list' => [
                    'route' => false,
                    'title' => 'Список',
                    'icon' => 'fa fa-th-list',
                ],
                'add' => [
                    'route' => false,
                    'title' => 'Добавить',
                    'icon' => 'fa fa-plus',
                ],
            ],
        ],
        'votes' => [
            'route' => false,
            'title' => 'Голосования',
            'icon' => 'fa fa-bar-chart',
            'subs' => [
                'list' => [
                    'route' => false,
                    'title' => 'Список',
                    'icon' => 'fa fa-th-list',
                ],
                'add' => [
                    'route' => false,
                    'title' => 'Добавить',
                    'icon' => 'fa fa-plus',
                ],
            ],
        ],
        'settings' => [
            'route' => false,
            'title' => 'Настройки сайта',
            'icon' => 'fa fa-cogs',
        ]
    ]
];