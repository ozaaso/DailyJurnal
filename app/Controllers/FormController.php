<?php

namespace App\Controllers;

class FormController
{
    public function showForm()
    {
        // Muat file tampilan formulir
        require_once __DIR__ . '/../Views/form.php';
    }
}
?>
