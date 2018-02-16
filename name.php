<?php

$name = $_POST['name'] or null;

if(empty(trim($name))){
    header('Location: http://localhost/Submitting-a-form_CharlesValerioHowlader/index.php');
}
echo "Hi there, {$_POST['name']}!";
