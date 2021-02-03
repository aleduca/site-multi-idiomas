<?php

function changeLanguage($language)
{
    $_SESSION['language'] = $language;
    echo json_encode('changed');
}

function getPageLanguage($page)
{
    $data = [
        'home' => [
            'ptBR' => ['title' => 'Teste', 'content' => 'Minha Home'],
            'enUS' => ['title' => 'Test', 'content' => 'My Home']
        ]
    ];

    if (isset($data[$page])) {
        return $data[$page][$_SESSION['language']];
    }
}

function initLanguage()
{
    if (!isset($_SESSION['language'])) {
        $_SESSION['language'] = 'ptBR' ;
    }

    define('LANGUAGE', $_SESSION['language']);
}
