<?php
$row = 1;
if (($handle = fopen("src.csv", "r")) !== FALSE) {
    while (($data = fgetcsv($handle, 1000, ",")) !== FALSE) {
        $num = count($data);
        echo "<p> $num fields in line $row: <br /></p>\n";
        $row++;
        for ($c=0; $c < $num; $c++) {
            echo "$c : ".$data[$c] . "<br />\n";
            if ($c==17){
              $url=$data[$c];
              $d=explode("/",$url);
              $im=array_pop($d);

              copy($url, "images/$im");

            }




        }
    }
    fclose($handle);
}
 ?>
