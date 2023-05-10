<?php

// Handling errors

$num = 9;

try {
    echo '<p>' . $num / 0 . '</p>';
} catch (Error $e) {
    echo '<p> ERROR, you can\'t divide by zero, Dave</p>';
} catch (Exception $e) {
    echo '<p> EXCEPTION, you can\'t divide by zero, Dave</p>';
} finally {
    echo '<p> Sure I\'ll keep running</p>';
}

