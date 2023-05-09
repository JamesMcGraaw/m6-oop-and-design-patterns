<?php

for ($i = 1; $i <= 100; $i++) {
    if ($i % 3 === 0 && $i % 5 === 0) {
        echo '<p>' . 'FizzBuzz' . '</p>';
    } elseif ($i % 5 === 0) {
        echo '<p>' . 'Buzz' . '</p>';
    } elseif ($i % 3 === 0 ) {
        echo '<p>' . 'Fizz' . '</p>';
    } else {
        echo '<p>' . $i . '</p>';
    }
}
