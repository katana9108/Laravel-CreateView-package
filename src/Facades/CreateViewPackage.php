<?php

namespace Katana9108\CreateViewPackage\Facades;

use Illuminate\Support\Facades\Facade;

/**
 * @see \Katana9108\CreateViewPackage\CreateViewPackage
 */
class CreateViewPackage extends Facade
{
    protected static function getFacadeAccessor()
    {
        return \Katana9108\CreateViewPackage\CreateViewPackage::class;
    }
}
