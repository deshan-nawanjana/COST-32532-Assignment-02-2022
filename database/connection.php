<?php

    // credentials for sql server
    $hostname = "localhost";
    $username = "root";
    $password = "";

    // database and table names
    $dbs_name = "regdb_PE_2017_027";
    $log_name = "tbl_log_PE_2017_027";
    $reg_name = "tbl_reg_PE_2017_027";

    // request sql connection
    $dbmysqli = new mysqli($hostname, $username, $password);
    // if any connection error
    if($dbmysqli->connect_error) { echo "SQL_CONNECT_ERROR"; exit(); };

    // sql command run method
	function sql_run($commands, $devmode = false) {
		global $dbmysqli;
		if($dbmysqli->query($commands) === TRUE) {
            if($devmode) {
                echo("DONE : {$commands}" . "<hr>");
            } else { return 1; }
        }
		else {
            if($devmode) {
                echo("FAIL : {$commands}" . "<br>${$dbmysqli->error}" . "<hr>");
            } else { return $dbmysqli->error; }
        }
	};

    // sql result get method
	function sql_get($commands) {
		global $dbmysqli;
		$res = mysqli_query($dbmysqli, $commands);
		if(!$res) { return mysqli_error($dbmysqli); }
		else {
			$out = array();
			while($row = $res->fetch_assoc()) { array_push($out, $row); }
			return $out;
		}
	};

?>