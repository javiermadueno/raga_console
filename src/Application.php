<?php

namespace Raga;

/**
 * Created by PhpStorm.
 * User: javier.madueno
 * Date: 27/04/2017
 * Time: 17:25
 */
use Symfony\Component\Console\Application as Console;

class Application extends Console
{
    /**
     * Application constructor.
     */
    public function __construct($name = 'UNKNOW', $version = "UNKNOWN")
    {
        parent::__construct($name, $version);
    }

}