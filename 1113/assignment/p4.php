<?php

$arrays = array(
    "Kim" => "Seoul",
    "Lee" => "Pusan, Daegu",
    "Choi" => "Inchon",
    "Park" => "Suwon, Daejon",
    "Jung" => "Kwangju, Chunchon, Wonju"
);

unset($arrays["Choi"]);

foreach ($arrays as $person => $cities) {
    echo $person." : ".$cities."\n";
}
?>
