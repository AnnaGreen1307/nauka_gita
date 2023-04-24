function srednia($tablica) {
  $suma = array_sum($tablica);
  $liczba_elementow = count($tablica);
  if ($liczba_elementow > 0) {
    return $suma / $liczba_elementow;
  } else {
    return 0;
  }
}
