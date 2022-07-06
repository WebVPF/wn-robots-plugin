<?php

return [
    'plugin' => [
        'name' => 'Robots',
        'description' => 'Adds robots.txt for your site.',
    ],
    'settings' => [
        'menu_label' => 'Robots',
        'menu_desc' => 'Editing robots.txt',
        'comment_rules_decs' => "<style>code{padding:1px 3px;background:#f2f1f1;color:#008080}</style>
                                <p>Directives:</p>
                                <ul>
                                    <li><code>User-agent</code> - The directive specifies the name of the automatic client known as search engine crawler that the rule applies to.</li>
                                    <li><code>Allow</code> - A directory or page, relative to the root domain, that may be crawled by the user agent just mentioned.</li>
                                    <li><code>Disallow</code> - A directory or page, relative to the root domain, that you don't want the user agent to crawl.</li>
                                    <li><code>Sitemap</code> - The location of a sitemap for this website.</li>
                                    <li><code>#</code> - marks the beginning of a comment.</li>
                                </ul>",
    ],
    'permissions' => [
        'access' => 'Control robots.txt',
    ],
];
