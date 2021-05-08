<?php

require_once __DIR__ . "/../Model/TodoList.php";
require_once __DIR__ . "/ViewAddTodoList.php";
require_once __DIR__ . "/ViewRemoveTodoList.php";
require_once __DIR__ . "/../BusinessLogic/ShowTodoList.php";
require_once __DIR__ . "/../Helper/Input.php";

function viewTodoList()
{
    while (true) {

        showTodoList();

        echo PHP_EOL;
        echo "MENU : " . PHP_EOL;
        echo "1 : Tambah To do List" . PHP_EOL;
        echo "2 : Remove To do List" . PHP_EOL;
        echo "x : Keluar" . PHP_EOL;

        $choiced = input("Pilihan");

        if ($choiced == 'x') {
            break;
        } else if ($choiced == 1) {
            viewAddTodoList();
        } else if ($choiced == 2) {
            viewRemoveTodoList();
        } else {
            echo "Pilihan anda tidak dimengerti" . PHP_EOL;
        }
    }

    echo "Sampai Jumpa Lagi" . PHP_EOL;
}
