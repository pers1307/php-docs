<?php

/**
 * Дополнить массив определённым значением до указанной длины
 */

$input = [12, 10, 9];

$result = array_pad($input, 5, 0);
// результат: array(12, 10, 9, 0, 0)

$result = array_pad($input, -7, -1);
// результат: array(-1, -1, -1, -1, 12, 10, 9)

$result = array_pad($input, 2, "noop");
// операция не произведена
