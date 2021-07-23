<?php

  $hunberger = 4.95;
  $chocoMilkShake = 1.95;
  $cola = 0.85;

  $sumEat = 2 * $hunberger + $chocoMilkShake + $cola;

  $tax = $sumEat * 0.075;
  $chipDinner = $sumEat * 0.16;

  $sumAll = $sumEat + $tax + $chipDinner;

  print $sumAll;

?>