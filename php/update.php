<?php 

if ($_SERVER["REQUEST_METHOD"] === "POST") {
    $fname = $_POST[$fname];
    echo $fname; // Output: Hello World
}




?>