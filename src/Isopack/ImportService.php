<?php

namespace Raga\Isopack;

/**
 * Created by PhpStorm.
 * User: javier.madueno
 * Date: 28/04/2017
 * Time: 8:32
 */

use Raga\ImportSevice;

class ImportService implements ImportSevice
{
    public function execute()
    {
        echo (new \DateTime('now'))->format('d/m/Y');
    }

}