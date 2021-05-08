<?php

require_once __DIR__ . "/Model/TodoList.php";
require_once __DIR__ . "/View/ViewTodoList.php";
require_once __DIR__ . "/View/ViewAddTodoList.php";
require_once __DIR__ . "/View/ViewRemoveTodoList.php";

echo "Aplikasi To Do List" . PHP_EOL;

viewTodoList();
