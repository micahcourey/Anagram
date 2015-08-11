<?php
    require_once __DIR__."/../vendor/autoload.php";
    require_once __DIR__."/../src/Anagram.php";

    $app = new Silex\Application();

    $app->register(new Silex\Provider\TwigServiceProvider(), array(
        'twig.path' => __DIR__.'/../views'
    ));

    $app->get("/", function() use ($app) {
        return $app['twig']->render('form.html.twig');
    });

    $app->get("/view_anagrams", function() use ($app) {
        $my_Anagram = new Anagram;
        $input_word = $my_Anagram->makeAnagram($_GET['word'], $_GET['list']);
        return $app['twig']->render('anagram.html.twig', array('result' => $input_word));
    });

    return $app;

?>
