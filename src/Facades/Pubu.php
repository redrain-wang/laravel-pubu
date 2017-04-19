<?php namespace Redrain\Pubu\Facades;

use Illuminate\Support\Facades\Facade;

class Pubu extends Facade
{
    protected static function getFacadeAccessor()
    {
        return 'pubu';
    }
}