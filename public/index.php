<?php

require __DIR__ . '/../vendor/autoload.php';

const BASE_FILEPATH = __DIR__.'/..';


$twig = \App\Actions\GetPreparedTwig::run(__DIR__ . '/../templates');

$path = str_replace('/index.php', '', $_SERVER['REQUEST_URI']);
if (empty($path)) {
    $path = '/';
}

// Handle images
if (str_starts_with($path, '/images/')) {
    $filepath = __DIR__ . '/../resources'.$path;
    if (is_file($filepath)) {
        header('Content-type: '.mime_content_type($filepath));
        echo file_get_contents($filepath);
    } else {
        header("HTTP/1.0 404 Not Found");
    }
    exit;
}

// Create template path
$templatePath = (substr($path, 1) ?: 'index').'.html.twig';

// Render template if found
try {
    $template = $twig->resolveTemplate($templatePath);
    echo $twig->render($template, array_merge(include('../data.php'), [
        'current_uri' => $path,
    ]));
} catch (\Twig\Error\LoaderError|\Twig\Error\RuntimeError|\Twig\Error\SyntaxError $e) {
    echo $twig->render('twig-error.html.twig', [
        'message' => $e->getMessage(),
        'line' => $e->getLine(),
        'name' => $e->getSourceContext()?->getName() ?? 'N/A',
        'code' => $e->getSourceContext()?->getCode() ?? '',
    ]);
}
