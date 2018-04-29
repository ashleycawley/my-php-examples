<?php

$name = 'Ashley';

switch ( $name )
{
case 'Ashley':
    echo 'Hey Ashley';
    break; # This stops the switch statement from proceeding on the next one

case 'Justin':
    echo 'Hey Justin';
    break;

case 'Tom':
    echo 'Hey Tom';
    break;

default: # This handles any other names not specified above.
    echo "Hey Anonymous";
}

?>