<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('index', [
        'title' => 'Xoni Agency - Beranda',
        'activePage' => 'index'
    ]);
});

Route::get('/about', function () {
    return view('about', [
        'title' => 'Xoni Agency - about',
        'activePage' => 'about'
    ]);
});

Route::get('/project', function () {
    return view('project', [
        'title' => 'Xoni Agency - project',
        'activePage' => 'project'
    ]);
});

Route::get('/contact', function () {
    return view('contact', [
        'title' => 'Xoni Agency - contact',
        'activePage' => 'contact'
    ]);
});
