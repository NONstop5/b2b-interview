<?php

require_once __DIR__ . '/vendor/autoload.php';

try {
    $board = new Board();

    $args = $argv;
    array_shift($args);

    foreach ($args as $key => $move) {
        $isBlackMove = $key % 2 !== 0;

        $board->move($move, $isBlackMove);
    }

    $board->dump();
} catch (\Exception $e) {
    echo $e->getMessage() . "\n";
    exit(1);
}
