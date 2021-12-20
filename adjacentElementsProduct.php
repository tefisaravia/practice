
<?php

/*
FROM CODESIGNAL 

Given an array of integers, find the pair of adjacent elements that has the largest product and return that product.

Example

For inputArray = [3, 6, -2, -5, 7, 3], the output should be
solution(inputArray) = 21.

7 and 3 produce the largest product.

*/

function solution(array $inputArray) {
   
   $products = array ();
   $i = 0;
   $j = 1;
   $length = count($inputArray);

   while ($j < $length) {
       $product = $inputArray[$i] * $inputArray[$j];
       $products [] = $product;
       $i++;
       $j++;
   }
   return max($products);
}
