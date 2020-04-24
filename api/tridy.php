<?php 

Class Covid_19
{
public $url = "https://api.apify.com/v2/key-value-stores/qAEsnylzdjhCCyZeS/records/LATEST?disableRedirect=true";

public function celkem()
{
$data = file_get_contents($this->url); // získá nám obsah API
$data_to_array = json_decode($data); // dekoduje javascript, abychom s ním mohli pracovat v PHP

$infikovani = 0;
foreach ($data_to_array->data as $cas) {

foreach ($cas as $kazdy_den) {
$infikovani++;
}

}
return $infikovani;
}

public function podle_pohlavi()
{
$data = file_get_contents($this->url); // získá nám obsah API
$data_to_array = json_decode($data); // dekoduje javascript, abychom s ním mohli pracovat v PHP

$prepinac = false;

$podle_pohlavi = 0;

foreach ($data_to_array->data as $cas) {

foreach ($cas as $kazdy_den) {

if ($kazdy_den[1] == "muž" && $prepinac == true) {

$podle_pohlavi++; // +1

} elseif ($kazdy_den[1] == "žena" && $prepinac == false) {

$podle_pohlavi++;

}

}

}
if ($prepinac == true){
    return $podle_pohlavi . " mužů";
}elseif ($prepinac == false) {
    return $podle_pohlavi . " žen";
}

return $podle_pohlavi;

}

public function prumerny_vek()
{
$data = file_get_contents($this->url); // získá nám obsah API
$data_to_array = json_decode($data); // dekoduje javascript, abychom s ním mohli pracovat v PHP
$prumerny_vek = array();

foreach ($data_to_array->data as $cas) {
foreach ($cas as $kazdy_den) {
$prumerny_vek[] .= $kazdy_den[0] . ", ";
}
}
return round(array_sum($prumerny_vek) / count($prumerny_vek));
}

}

?>
