<?php
/*
    it'smalmost the Summer sales
    You work for a shop that wishes to give a discount of discount% to the most expensive item purchased by a given 
    customer during the sales period.
    
    Your are tasked by the shop owner to implement the function calculateTotalPrice($prices, $discount)() wich take 
    the list of prices of the products purchased by a customer and the percentage discount as parameters and returns
    the total purchase price as an integer(rounded down if the total is a float number).

    constraints 

    0 <= discount <= 100
    0 < price of a product < 100000
    0 < number of products < 100

    1- identificar el mayor valor pagado de la lista de precios
    2- aplicar el descuento al valor identificado en el paso anterior calculando el nuevo valor
    3- sumar el total pagado y entregar el resultado


*/

    function calculateTotalPrice(array $prices, $discount){
      rsort($prices);
      $mayor=$prices[0];
      $prices[0]=$mayor-($mayor*($discount/100));
      //echo $prices[0];  
      $sum=0;
      $len=count($prices);
      for($i=0; $i<$len; $i++){
          $sum=$sum+$prices[$i];
      }
      //echo $sum." \n";
      $round=round($sum, 0, PHP_ROUND_HALF_DOWN);
      //echo $round;
      return $round;
    }

    $prices= [3,7,0.5,4.3,10];
    $total= calculateTotalPrice($prices, 5);
    echo "El total a pagar es: ".$total;
?>