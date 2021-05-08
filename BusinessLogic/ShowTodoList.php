<?php

function showTodoList()
{
    global $todolist;

    echo "To do List" . PHP_EOL;

    if (sizeof($todolist) < 1) {
        echo "Tidak ada To Do List" . PHP_EOL;
    } else {
        foreach ($todolist as $number => $value) {
            echo "$number. $value" . PHP_EOL;
        }
    }
}
