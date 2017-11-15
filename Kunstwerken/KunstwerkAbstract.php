<?php

namespace Kunstwerken;

abstract class KunstwerkAbstract
{
    public $title;
    public $jaar;
    public $kunstenaar;

    function __construct() 
    {
        $this->date = new \DateTime(); 
    }
}