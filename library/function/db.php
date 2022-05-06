<?php
function sql_connect($a,$b,$c){
    return  mysqli_connect($a,$b,$c); // connect  database
}

function sql_connect_db($a,$b,$c,$d){
    return  mysqli_connect($a,$b,$c,$d); // connect  database 
}

function delete_db($a){
    return  "DROP DATABASE $a"; // delete database
}
 
function create_db($a){
     return  "CREATE DATABASE $a"; // create  database
}
function delete($a, $b, $c){
    return  "DELETE FROM $a WHERE $b = $c"; // delete database 
}
function insert($a, $b, $c ){
     return "INSERT INTO $a($b) VALUES ($c)"; // create  database
}
function fetch($a, $b, $c, $d ){
    return "SELECT $a INTO $b VALUES $c = $d "; // create  database
}

function update($a, $b, $c, $d, $e ){
    return "UPDATE $a SET $b = $c WHERE $d = $e"; // create  database
}

function limit($a, $b, $c){
    return "SELECT $a FROM $b Orders LIMIT $c"; // create  database
}

function limit_offset($a, $b, $c, $d=10){
    return "SELECT $a FROM $b LIMIT $c  OFFSET $d"; // create  database
}

?>