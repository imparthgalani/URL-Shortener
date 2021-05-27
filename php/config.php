<?php 
    /* if you're working on localhost then you don't need to change anything
       but if you're thinking to upload it to live server then you've to edit something
    1. Paste your website url with forward slash(/) in the domain variable, you don't need 
       to write https://wwww. before the domain name if you have domain redirection setup
    2. Change user, pass, db values accordingly mentioned in the comments below
    3. Go to JavaScript file and search this keyword - let domain - then paste your url there 
    4. After all changes you've to wait because javascript file save changes may take time to reflect */ 

    $domain = "localhost/url/"; //like this: parthgalani.me/
    $host = "localhost";
    $user = "root"; //Database username
    $pass = ""; //Database password
    $db = "urlShortener"; //Database name

    $conn = mysqli_connect($host, $user, $pass, $db);
    if(!$conn){
        echo "Database connection error".mysqli_connect_error();
    }
?>