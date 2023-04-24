function srednia($tablica) {
  $suma = array_sum($tablica);
  $liczba_elementow = count($tablica);
  if ($liczba_elementow > 0) {
    return $suma / $liczba_elementow;
  } else {
    return 0;
  }
}

function weighted_average($values, $weights) {
    // upewniamy się, że liczba wartości i wag jest taka sama
    if(count($values) != count($weights)) {
        return null;
    }
    
    $sum = 0;
    $weight_sum = 0;
    for($i=0; $i<count($values); $i++) {
        $sum += $values[$i] * $weights[$i];
        $weight_sum += $weights[$i];
    }
    
    // zabezpieczamy się przed dzieleniem przez zero
    if($weight_sum == 0) {
        return null;
    }
    
    return $sum / $weight_sum;
}

