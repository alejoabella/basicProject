<?php

namespace Lib;

class Hello {

    public function __construct()
    {
        echo "__construct Loaded ";
    }

    public function testFunction()
    {
        return 'Hello world!!! ';
    }

}
