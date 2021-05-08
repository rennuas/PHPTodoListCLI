<?php

function removeTodoList(int $number): bool
{
    global $todolist;

    if ($number > sizeof($todolist)) {
        return false;
    } else {
        for ($i = $number; $i < sizeof($todolist); $i++) {
            $todolist[$i] = $todolist[$i + 1];
        }

        unset($todolist[sizeof($todolist)]);

        return true;
    }
}
