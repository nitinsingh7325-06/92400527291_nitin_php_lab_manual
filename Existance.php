<?php

function welcomeStudent() {
    echo "Welcome Student! Glad to have you here.";
}

if (function_exists('welcomeStudent')) {
    echo "Function exists! Calling it...\n";
    welcomeStudent();
} else {
    echo "Error: Function 'welcomeStudent' does not exist!";
}
?>