<?php

    // import sql handler
    require "connection.php";

    // use database
    sql_run("USE ${dbs_name}");

    // set content type
    header('Content-Type:application/json');

    // get post data
    $post = json_decode(file_get_contents('php://input'));

    // check if post params exists
    if(isset($post->name) && isset($post->password)) {
        $sqlarray = sql_get("SELECT * FROM ${log_name} 
        WHERE name = '{$post->name}' AND password = '{$post->password}'");
        if(count($sqlarray) === 1) {
            // show login success
            echo('{ "success" : true }');
        } else {
            // show login error
            echo('{ "success" : false, "message" : "Invalid Username or Password" }');
        }
    } else {
        // show login error
        echo('{ "success" : false, "message" : "No Username or Password" }');
    }

?>