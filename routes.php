<?php
include_once 'config/static.php';
include_once 'controller/main.php';
include_once 'function/main.php';

Router::url('/', 'get', function () { return view('home'); });
Router::url('login', 'get', 'AuthController::login');
Router::url('register', 'get', 'AuthController::register');
Router::url('dashboard', 'get', 'DashboardController::index');
Router::url('dashboard/admin', 'get', 'DashboardController::admin');
Router::url('dashboard/contacts', 'get', 'DashboardController::contacts');
Router::url('dashboard/logout', 'get', 'AuthController::logout');
Router::url('contacts/tambah', 'get', 'ContactController::add');
Router::url('contacts/ubah', 'get', 'ContactController::edit');
Router::url('contacts/hapus', 'get', 'ContactController::remove');


Router::url('login', 'post', 'AuthController::saveLogin');
Router::url('register', 'post', 'AuthController::saveRegister');
Router::url('contacts/tambah', 'post', 'ContactController::saveAdd');
Router::url('contacts/ubah', 'post', 'ContactController::saveEdit');

new Router();
