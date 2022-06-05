<?php

    // import sql handler
    require "connection.php";

    // use database
    sql_run("USE ${dbs_name}");

    // set content type
    header('Content-Type:application/json');

    // get post data
    $post = json_decode(file_get_contents('php://input'));

    // add record into table
    $resp = sql_run("
        INSERT INTO ${reg_name}(fname, lname, age, email, contact)
        VALUES(
            '{$post->fname}',
            '{$post->lname}',
            '{$post->age}',
            '{$post->email}',
            '{$post->contact}'
        )
    ");

    // return message
    if($resp) {
        echo('{ "success" : true, "message" : "Applicant Registerd" }');
    } else {
        echo('{ "success" : false, "message" : "Registration Failed" }');
    }

?>