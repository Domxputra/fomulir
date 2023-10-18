<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
$routes->get('/', 'Home::index');
$routes->group('jurusan', function($routes){
    $routes->get('/', 'Jurusan::index');
    $routes->add('tambah', 'Jurusan::tambah');
    $routes->add('ubah/(:any)', 'Jurusan::ubah/$1');
    $routes->add('hapus/(:any)', 'Jurusan::hapus/$1');
});

$routes->group('orang_tua', function($routes){
    $routes->get('/', 'OrangTua::index');
    $routes->add('tambah', 'OrangTua::tambah');
    $routes->add('ubah/(:any)', 'OrangTua::ubah/$1');
    $routes->add('hapus/(:any)', 'OrangTua::hapus/$1');
});

$routes->group('alamat_tinggal', function($routes){
    $routes->get('/', 'Alamattinggal::index');
    $routes->add('tambah', 'AlamatTinggal::tambah');
    $routes->add('ubah/(:any)', 'AlamatTinggal::ubah/$1');
    $routes->add('hapus/(:any)', 'AlamatTinggal::hapus/$1');
});

$routes->group('mahasiswa', function($routes){
    $routes->get('/', 'mahasiswa::index');
    $routes->add('tambah', 'mahasiswa::tambah');
    $routes->add('ubah/(:any)', 'mahasiswa::ubah/$1');
    $routes->add('hapus/(:any)', 'mahasiswa::hapus/$1');
});

