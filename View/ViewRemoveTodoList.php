<?php

require_once __DIR__ . "/../Model/TodoList.php";
require_once __DIR__ . "/../Helper/Input.php";
require_once __DIR__ . "/../BusinessLogic/RemoveTodoList.php";

function viewRemoveTodoList()
{
    $input = input("Hapus No. To do (x untuk batalkan)");

    if ($input == 'x') {
        echo "Gagal Menghapus To do" . PHP_EOL;
    } else {
        $success = removeTodoList($input);
        if (!$success) {
            echo "Gagal Menghapus To do" . PHP_EOL;
        }
    }
}
