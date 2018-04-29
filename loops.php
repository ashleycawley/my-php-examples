<?php

// Create for loop to say hi Ashley 5 times
for ( $i = 1; $i < 6; $i++ )
{
    echo "Hi Ashley!";
    echo " ($i)";
    echo "<br>";
}
// Create foreach loop to create strings telling us people and favorite colours

# Yet to do

echo "<br>";

// Create a coin flipping while loop looking for three heads
echo "<h2>Coin Flipping Routine</h2><p>I'm looking for three heads:</p>";
$heads_count = 0;
$total_count = 0;
while ($heads_count < 3)
{
   $flip = rand( 0, 1 );
   if ( $flip )
   {
       $heads_count++;
       echo "Heads<br>";
   } else {
       echo "Tails<br>";
   }
   $total_count++;
   if ( $total_count > 20)
   {
      break; 
   }
}
?>