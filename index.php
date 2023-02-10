<?php

$json_object = json_decode(file_get_contents("my_data.json"), true);

var_dump($json_object);