<?php


if ($_SERVER["REQUEST_METHOD"] == "POST") {
    
    $input = $_POST['values'];
    
    $array = explode(',', $input);
    
    $array = array_map('trim', $array);
    
    echo "Array Values:<br>";
    print_r($array);
}
?>

<form method="POST">
    Enter values (comma separated): 
    <input type="text" name="values">
    <input type="submit" value="Submit">
</form>