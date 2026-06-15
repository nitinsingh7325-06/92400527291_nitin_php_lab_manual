<?php
// 2.2 Sorting an array entered by user

// Check if form is submitted
if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST['submit'])) {
    // Get the input string and convert to array
    $input_string = $_POST['user_array'];
    
    // Remove extra spaces and split by comma
    $user_array = array_map('trim', explode(',', $input_string));
    
    // Remove empty values if any
    $user_array = array_filter($user_array);
    
    // Get sorting type
    $sort_type = $_POST['sort_type'];
    
    // Display original array
    echo "<h3>Original Array:</h3>";
    echo "<pre>";
    print_r($user_array);
    echo "</pre>";
    
    // Perform sorting based on user selection
    echo "<h3>Sorted Array ($sort_type):</h3>";
    
    switch($sort_type) {
        case "ascending":
            sort($user_array);
            echo "<pre>";
            print_r($user_array);
            echo "</pre>";
            break;
            
        case "descending":
            rsort($user_array);
            echo "<pre>";
            print_r($user_array);
            echo "</pre>";
            break;
            
        case "assoc_asc":
            asort($user_array);
            echo "<pre>";
            print_r($user_array);
            echo "</pre>";
            break;
            
        case "assoc_desc":
            arsort($user_array);
            echo "<pre>";
            print_r($user_array);
            echo "</pre>";
            break;
            
        case "key_asc":
            ksort($user_array);
            echo "<pre>";
            print_r($user_array);
            echo "</pre>";
            break;
            
        case "key_desc":
            krsort($user_array);
            echo "<pre>";
            print_r($user_array);
            echo "</pre>";
            break;
            
        default:
            echo "Invalid sorting option";
    }
    
    echo '<br><a href="' . $_SERVER['PHP_SELF'] . '">Try Again</a>';
    
} else {
    // Display form for user input
    ?>
    <!DOCTYPE html>
    <html>
    <head>
        <title>Array Sorting Program</title>
        <style>
            body {
                font-family: Arial, sans-serif;
                margin: 50px;
                background-color: #f4f4f4;
            }
            .container {
                background-color: white;
                padding: 30px;
                border-radius: 10px;
                box-shadow: 0 0 10px rgba(0,0,0,0.1);
                max-width: 500px;
                margin: auto;
            }
            input, select {
                width: 100%;
                padding: 10px;
                margin: 10px 0;
                border: 1px solid #ddd;
                border-radius: 5px;
            }
            input[type="submit"] {
                background-color: #4CAF50;
                color: white;
                cursor: pointer;
            }
            input[type="submit"]:hover {
                background-color: #45a049;
            }
            label {
                font-weight: bold;
            }
        </style>
    </head>
    <body>
        <div class="container">
            <h2>Array Sorting Program</h2>
            <form method="POST" action="">
                <label>Enter array elements (separated by commas):</label>
                <input type="text" name="user_array" placeholder="e.g., apple, banana, cherry, date" required>
                
                <label>Select sorting method:</label>
                <select name="sort_type" required>
                    <option value="ascending">Sort Ascending (Indexed)</option>
                    <option value="descending">Sort Descending (Indexed)</option>
                    <option value="assoc_asc">Sort Ascending (Preserve Keys - Values)</option>
                    <option value="assoc_desc">Sort Descending (Preserve Keys - Values)</option>
                    <option value="key_asc">Sort Ascending by Keys</option>
                    <option value="key_desc">Sort Descending by Keys</option>
                </select>
                
                <input type="submit" name="submit" value="Sort Array">
            </form>
            
            <div style="margin-top: 20px; padding: 10px; background-color: #e7f3ff; border-radius: 5px;">
                <strong>Example Input:</strong><br>
                Numbers: 5, 2, 8, 1, 9<br>
                Words: mango, apple, banana, cherry
            </div>
        </div>
    </body>
    </html>
    <?php
}
?>