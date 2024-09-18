<?php

use App\Controllers\FormController;

// Tentukan semua rute di sini
$uri = trim($_SERVER['REQUEST_URI'], '/');

// Rute untuk halaman formulir
if ($uri === 'form') {
    $controller = new FormController();
    $controller->showForm();
} else {
    echo "Halaman tidak ditemukan!";
}
?>
