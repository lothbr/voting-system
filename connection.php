<?php
error_reporting(1);

//Get Heroku ClearDB connection information
// $cleardb_url = parse_url(getenv("CLEARDB_DATABASE_URL"));
// $cleardb_server = $cleardb_url["host"];
// $cleardb_username = $cleardb_url["user"];
// $cleardb_password = $cleardb_url["pass"];
// $cleardb_db = substr($cleardb_url["path"],1);
// $active_group = 'default';
// $query_builder = TRUE;
// // Connect to DB
// $mysqli = mysqli_connect($cleardb_server, $cleardb_username, $cleardb_password, $cleardb_db);
$mysqli= mysqli_connect('sql11.freesqldatabase.com', 'sql11458714', 'MiCZYjztyY', 'sql11458714');


if ($mysqli -> connect_errno){
    echo "failed to connect".$mysqli -> connect_errno;
    exit();

}
?>
