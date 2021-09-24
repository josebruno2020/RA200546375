<?php

const ROUTES = [
    'cursos',
    'alunos',
    'novo-aluno',
    'login'
];


function setPage($routes) {
    $page = 'alunos';
    if(isset($_GET['p']) && !empty($_GET['p'])) {
        $page = $_GET['p'];
        if(!in_array($page, $routes)) {
            $page = '404';
        }
    }
    return $page;
}
