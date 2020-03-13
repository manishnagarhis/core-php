<?php
    echo "Hello";
?>

<style type="text/css">
    .block{height:70px;width:70px;border:1px solid #ccc;display: inline-block;}
    .black{background:#000;}
    .white{background:#fff;}
</style>
<?php

$black = "<span class='block black'></span>";
$white = "<span class='block white'></span>";

 for ($i=0; $i < 8 ; $i++) { 
    for ($j=0; $j < 8 ; $j++) { 
        if($i%2){
           echo ($j%2) ? $black : $white;
        }else{
           echo ($j%2) ? $white : $black;
        }

    }
    echo "</br>";
 }   


    /*$k = 2 * 6 - 2; 
    for ($i = 0; $i < 6; $i++) 
    { 
        for ($j = 0; $j < $k; $j++) 
            echo "&nbsp"; 
        $k = $k - 1; 
        for ($j = 0; $j <= $i; $j++ ) 
        { echo "*"; 
        } 
  
        echo "";
        echo "</br>";
    } */
/*$username = "root";
$password = "";
$dbname_new = "nccaadb";
$dbname_old = "nccaa_profile";

// Create connection
$conn_new = new mysqli($servername, $username, $password, $dbname_new);
$conn_old = new mysqli($servername, $username, $password, $dbname_old);

// Check connection
if ($conn_new->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}


$final_account_security_information_sql = "SELECT `COLUMN_NAME` FROM `INFORMATION_SCHEMA`.`COLUMNS` WHERE `TABLE_SCHEMA`=$dbname_old AND `TABLE_NAME`='	final_account_security_information';";

$final_account_security_information_sql_result = $conn_old->query($final_account_security_information_sql);

        print_r($final_account_security_information_sql_result);
        

$conn_new->close();*/
?>