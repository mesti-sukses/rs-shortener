<?php
    require 'vendor/autoload.php';
    require 'controller/redirect.php';

    $f3 = \Base::instance();

    $f3->route('GET /',
        function() {
            echo 'Hello, world!';
        }
    );

    // URL Shortener
    $f3->route('GET /hukum-tidak-korupsi', 'Redirect->hukumTidakKorupsi');

    $f3->run();
?>