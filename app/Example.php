<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Example
{
    protected $api_key = '123123123123';

    public function __construct(Foo $foo)
    {
        $this->foo = $foo;
    }

}
