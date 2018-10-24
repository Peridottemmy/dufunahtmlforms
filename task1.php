<?php

$data = $_POST;
@file_put_contents('hello.txt',  json_encode($data));
?>