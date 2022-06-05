<?php

    // import sql handler
    require "connection.php";

    // use database
    sql_run("USE ${dbs_name}");

    // set content type
    header('Content-Type:application/json');

    // select details type
    if(isset($_GET['selected'])) {
        $command = "SELECT * FROM {$reg_name} WHERE age < 40";
    } else {
        $command = "SELECT * FROM {$reg_name}";
    }

    // return result
    echo(json_encode(sql_get($command)));

?>