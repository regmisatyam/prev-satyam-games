<?php 

# server name
$sName = "sql101.epizy.com";
# user name
$uName = "epiz_34259072";
# password
$pass = "7pYTVsKk9IKTzAN";

# database name
$db_name = "epiz_34259072_contact_us_satyambyte";

#creating database connection
try {
    $conn = new PDO("mysql:host=$sName;dbname=$db_name", 
                    $uName, $pass);

    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

}catch(PDOException $e){
  echo "Connection failed : ". $e->getMessage();
}