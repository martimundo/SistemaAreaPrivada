<?php

namespace App\Classes;


class Classe{

    public function checkSession(){

        return session()->has('usuario');
    }
}