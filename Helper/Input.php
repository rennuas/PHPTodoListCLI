<?php

function input(string $info): string
{
    echo "$info :";
    $input = fgets(STDIN);
    return trim($input);
}
