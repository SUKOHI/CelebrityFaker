<?php namespace Sukohi\CelebrityFaker\Facades;

use Illuminate\Support\Facades\Facade;

class CelebrityFaker extends Facade {

    /**
    * Get the registered name of the component.
    *
    * @return string
    */
    protected static function getFacadeAccessor() { return 'celebrity-faker'; }

}