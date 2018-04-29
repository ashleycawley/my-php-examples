<?php

$number = 8;

# If you want to test for example less than < with a switch statement you have to change
# tactic somewhat, instead of specifying the variable name in the first line of the
# switch statement you use 'true' and then mention the variable name later like this:

switch ( true ) # Note the use of 'true'
{
    case $number <= 10: # Note that the variable name is specified on this line.
        echo "The number is LESS than 10";
        break;

    default:
        echo "The number is OVER 10";
        break;
}

?>