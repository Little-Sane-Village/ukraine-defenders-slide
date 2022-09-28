<?php

namespace App\Actions;

use Twig\Environment;
use Twig\TwigFunction;

class ApplyTwigFunctions
{
    static function run(Environment $twig): void
    {
        $twig->addFunction(new TwigFunction('tailwind', fn() => str_replace('module.exports', 'tailwind.config', file_get_contents(BASE_FILEPATH.'/tailwind.config.js'))));
        $twig->addFunction(new TwigFunction('css', fn() => file_get_contents(BASE_FILEPATH.'/resources/css/app.css')));
    }
}