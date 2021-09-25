<?php

const ROUTES = [
    'cursos',
    'novo-curso',
    'ver-curso',
    'alunos',
    'novo-aluno',
    'ver-aluno',
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
