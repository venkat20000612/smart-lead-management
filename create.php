<?php

require_once "config.php";

if($_SERVER["REQUEST_METHOD"] === "POST"){

}
?>

<!DOCTYPE html>

<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Add New Lead</title>
    <link rel="stylesheet" href="style.css">
</head>

<body>
    
    <h1>Add new Lead</h1>

    <form method="POST" action="create.php">
        <label>Name</label>  
        <input type="text" name="name" required/>

        <label>Email</label>  
        <input type="email" name="email" required/>

        <label>Company</label>  
        <input type="text" name="company" required/>

        <label>Phone</label>  
        <input type="text" name="phone" required/>

        <label>Source</label>  
        <select name="source" required>
            <option value="">Select source</option>
            <option value="Website">Website</option>
            <option value="Referral">Referral</option>
            <option value="LinkedIn">LinkedIn</option>
            <option value="Other">Other</option>
        </select>


        <label>Deal Value</label>
        <input type="number" name="deal_value min="0" step="0.01" required>
        <button type="submit">Save Lead</button>
    </form>
</body>

</html>