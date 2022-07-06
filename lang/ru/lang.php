<?php

return [
    'plugin' => [
        'name' => 'Robots',
        'description' => 'Добавляет robots.txt для вашего сайта.',
    ],
    'settings' => [
        'menu_label' => 'Robots',
        'menu_desc' => 'Редактирование robots.txt',
        'comment_rules_decs' => "<style>code{padding:1px 3px;background:#f2f1f1;color:#008080}</style>
                                <p>Директивы:</p>
                                <ul>
                                    <li><code>User-agent</code> - определяет к какому именно поисковому роботу относятся правила в группе.</li>
                                    <li><code>Allow</code> - указывает на каталог или страницу относительно корневого домена, которые <strong>разрешено сканировать</strong>.</li>
                                    <li><code>Disallow</code> - указывает на каталог или страницу относительно корневого домена, которые <strong>запрещено сканировать</strong>.</li>
                                    <li><code>Sitemap</code> - указывает на расположение карты сайта.</li>
                                    <li><code>#</code> - начало комментария.</li>
                                </ul>",
    ],
    'permissions' => [
        'access' => 'Управление robots.txt',
    ],
];
