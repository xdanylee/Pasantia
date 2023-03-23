<?php
$primos = array();
$no_es = false;

for ($i = 2; $i<100; $i++) {
     $no_es = true; 
        for ($j = 2; $j<=($i/2); $j++) {
                if ($i%$j==0) {
                          $no_es = false;
                                  break;
                                }
                   }
        if ($no_es) {
               array_push($primos,$i);
                  }
        if (count($primos)==100) {
               break;
                  }
}
echo array_sum($primos)."\n";
?>