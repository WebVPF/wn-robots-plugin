<?php

return [
    'plugin' => [
        'name' => 'Robots',
        'description' => 'Добавляє robots.txt для вашого сайту.',
    ],
    'settings' => [
        'menu_label' => 'Robots',
        'menu_desc' => 'Редагування robots.txt',
        'comment_rules_decs' => "<style>code{padding:1px 3px;background:#f2f1f1;color:#008080}</style>
                                <p>Директиви:</p>
                                <ul>
                                    <li><code>User-agent</code> - визначає до якого саме пошукового роботу відносяться правила у групі.</li>
                                    <li><code>Allow</code> - вказує на каталог або сторінку щодо кореневого домену, які заборонено сканувати.</li>
                                    <li><code>Disallow</code> - вказує на каталог або сторінку щодо кореневого домену, які дозволено сканувати.</li>
                                    <li><code>Sitemap</code> - вказує на розташування карти сайту.</li>
                                    <li><code>#</code> - початок коментаря.</li>
                                </ul>",
    ],
    'permissions' => [
        'access' => 'Керування robots.txt',
    ],
];
