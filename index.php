<?php
    require 'vendor/autoload.php';
    require 'controller/redirect.php';

    $f3 = \Base::instance();

    $f3->set('base', 'https://info.ruangseminar.id/');
    $f3->set('DB', new DB\SQL('sqlite:database/data.db'));

    $f3->route('GET /', 'Tampilan->info');
    $f3->route('GET /loginPage', 'Tampilan->login');
    $f3->route('POST /login', 'Input->login');
    $f3->route('POST /simpan', 'Input->simpan');
    $f3->route('GET /admin', 'Admin->index');
    $f3->route('GET /admin/edit/@id', 'Admin->edit');
    $f3->route('GET /seminar/@slug', 'Tampilan->redirect');
    $f3->route('GET /logout', 'Admin->logout');

    $f3->run();
?>