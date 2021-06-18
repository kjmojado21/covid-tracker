<?php 

$jsonData = file_get_contents("https://pomber.github.io/covid19/timeseries.json");


$data = json_decode($jsonData,TRUE);

// echo "<pre>";
// print_r($data);
// echo "</pre>";

$latest_data = 0;
$latest_deaths = 0;
$latest_recovered = 0;
foreach ($data as $key => $value){
    $latest_data = count($value) - 1;
    $prev_latest_data = $latest_data -1;
}

$total_recovery = 0;
$total_deaths = 0;
$total_cases = 0;
foreach($data as $key=> $value){
        $total_recovery = $total_recovery + $value[$latest_data]['recovered'];
        $total_deaths = $total_deaths + $value[$latest_data]['deaths'];
        $total_cases = $total_cases + $value[$latest_data]['confirmed'];
     


}

// echo $data[$latest];


?>