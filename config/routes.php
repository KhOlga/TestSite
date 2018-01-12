<?php

return array(

    // загальний список новин
    'news/([0-9]+)' => 'news/view/$1',
    'news' => 'news/index',

    // Home
    'index.phtml' => 'site/index',
    '' => 'site/index',

    // модальнe вікно
    'subscription' => 'site/subscription',


    // останні новини
    'lastnews/([0-9]+)' => 'lastnews/view/$1',
    'lastnews' => 'lastnews/index',


);