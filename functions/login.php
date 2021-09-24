<?php
const RA = '200546375';
const SENHA = 'jose';

function login($ra, $senha) : bool  
{
    if($ra == RA && $senha == SENHA) {
        $_SESSION['logged'] = true;
        return true;
    }
    return false;
}