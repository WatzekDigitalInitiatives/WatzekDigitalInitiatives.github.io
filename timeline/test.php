<?php

$json=array();



$row = 0;
if (($handle = fopen("src.csv", "r")) !== FALSE) {
    while (($data = fgetcsv($handle, 1000, ",")) !== FALSE) {
        $num = count($data);
        //echo "<p> $num fields in line $row: <br /></p>\n";
        if ($row==1){
          $json["title"]["media"]["url"]=$data[17];
          $json["title"]["text"]["headline"]=$data[9];
          $json["title"]["text"]["text"]=$data[10];




        }
        if ($row>1){

          $array=array();

          $json["events"][$row]["media"]["url"]=$data[17];

          //use this https://stackoverflow.com/questions/20372982/removing-array-index-reference-when-using-json-encode-in-php




        }

        for ($c=0; $c < $num; $c++) {





            echo "$c : ".$data[$c] . "<br />\n";
            if ($c==17){
              $url=$data[$c];
              $d=explode("/",$url);
              $im=array_pop($d);

              //copy($url, "images/$im");

            }




        }

        $row++;

    }
    fclose($handle);
}
echo "JSON:".json_encode($json);

 ?>
