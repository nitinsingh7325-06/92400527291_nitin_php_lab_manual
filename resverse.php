<?php
if(isset($_POST['submit'])) {
    $arr = explode(',', $_POST['values']);
    $arr = array_map('trim', $arr);
    
    echo "Original: ";
    print_r($arr);
    
    echo "<br>Reversed: ";
    print_r(array_reverse($arr));
}
?>

<form method="POST">
    <input type="text" name="values" placeholder="10,20,30,40">
    <input type="submit" name="submit" value="Reverse">
</form>