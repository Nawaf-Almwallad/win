<?php

$conn = mysqli_connect('localhost','root','root','pj');

if(!$conn){
    echo 'Error: ' . mysqli_connect_error();
}
