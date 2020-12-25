<?
$car = array (
    "BMW" => array("model"=>"X5", "price"=>"16000$","year"=>"2015"),
    "Toyota" => array("model"=>"RAV4", "price"=>"14000$", "year"=>"2017"),
    "Skoda" => array("model"=>"Fabia", "price"=>"9000$", "year"=>"2016")
);

echo"</br> Информация  об автопарке:</br>";
foreach ($car as $k => $v) {
    echo "<div> Car #".(++$i).':'."</div>";
    foreach($v as $k1=>$v1){
        echo "$k1 - $v1, ";
    }
}