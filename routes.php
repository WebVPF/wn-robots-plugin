<?php

Route::get('robots.txt', function () {
    $robotstxt = \WebVPF\Robots\Models\Txt::get('txt');

    if (!$robotstxt) {
        $robotstxt = "User-agent: *\nAllow: /";
    }

    $txt = Twig::parse($robotstxt);

    return Response::make($txt)->header('Content-Type', 'text/plain');
});
