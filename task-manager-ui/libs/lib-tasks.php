<?php

function getTasks($inputArray = [1, 2, 3, 4, 5])
{
    return print_r(implode(' , ', $inputArray) . "  --->  " . rand(999, 9999));
}
