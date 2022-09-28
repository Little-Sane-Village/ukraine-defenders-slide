<?php

namespace App\Actions;

use Twig\Environment;
use Twig\Loader\FilesystemLoader;

class GetPreparedTwig
{
    static function run(string $path): Environment
    {
        $twig = new Environment(new FilesystemLoader($path));

        ApplyTwigFunctions::run($twig);

        return $twig;
    }

}