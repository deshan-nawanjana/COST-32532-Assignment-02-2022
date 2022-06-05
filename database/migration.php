<?php

    include "connection.php";

    // delete database if exists
    sql_run("DROP DATABASE IF EXISTS ${dbs_name}", true);

    // create database
    sql_run("CREATE DATABASE ${dbs_name}", true);

    // use database
    sql_run("USE ${dbs_name}", true);

    // create login table
    sql_run("CREATE TABLE ${log_name}(name varchar(50), password varchar(20))", true);

    // add sample data
    sql_run("INSERT INTO ${log_name}(name, password) VALUES('admin', 'admin@123')", true);
    sql_run("INSERT INTO ${log_name}(name, password) VALUES('rochell', 'rochell@123')", true);

    // create registration table
    sql_run("CREATE TABLE ${reg_name}(
        fname varchar(50),
        lname varchar(20),
        age int,
        email varchar(50),
        contact char(12)
    )", true);

?>