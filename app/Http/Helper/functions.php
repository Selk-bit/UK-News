<?php

use Illuminate\Contracts\Container\BindingResolutionException;
use Illuminate\Database\QueryException;
use Illuminate\Support\Arr;
use Illuminate\Support\Collection;
use Illuminate\Support\Str;
use JetBrains\PhpStorm\ArrayShape;


function logo(){
    return asset('/images/logo.png');
}

function cover(){
    return asset('/cover.jpeg');
}

function favicon(){
    return asset('/images/favicon.png');
}








