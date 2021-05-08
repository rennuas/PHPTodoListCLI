<?php

require_once __DIR__ . "/../BusinessLogic/AddTodoList.php";
require_once __DIR__ . "/../Helper/Input.php";
require_once __DIR__ . "/../Model/TodoList.php";

function viewAddTodoList()
{
    $input = input('Tambah (x untuk batalkan)');

    if ($input == 'x') {
        echo "Gagal Menambah To do" . PHP_EOL;
    } else {
        addTodoList($input);
    }
}
