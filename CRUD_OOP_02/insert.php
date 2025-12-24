<?php
// include database connection file
require_once 'function.php';

// Object Creation
$insertdata = new DB_con();

if(isset($_POST['insert'])){
    $fname = $_POST['firstname'];
    $lname = $_POST['LastName'];
    $emailid = $_POST['emailid'];
    $contactno = $_POST['contactno'];
    $address = $_POST['address'];

    // Insert record
    $result = $insertdata->insert($fname, $lname, $emailid, $contactno, $address);

    if($result){
        echo "<script>alert('Record inserted successfully');</script>";
        echo "<script>window.location.href='index.php'</script>";
    } else {
        echo "<script>alert('Something Went Wrong');</script>";
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Insert Record</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f4f4f4;
            margin: 0;
            padding: 0;
        }
        .container {
            width: 500px;
            margin: 50px auto;
            background-color: #fff;
            padding: 30px;
            box-shadow: 0 2px 8px rgba(0,0,0,0.2);
            border-radius: 8px;
        }
        h2 {
            text-align: center;
            margin-bottom: 25px;
        }
        label {
            font-weight: bold;
            display: block;
            margin-bottom: 5px;
        }
        input[type="text"],
        input[type="email"],
        textarea {
            width: 100%;
            padding: 10px;
            margin-bottom: 15px;
            border: 1px solid #ccc;
            border-radius: 4px;
            box-sizing: border-box;
            font-size: 14px;
        }
        textarea {
            resize: vertical;
        }
        .form-row {
            display: flex;
            justify-content: space-between;
            gap: 15px;
        }
        .form-row .form-group {
            flex: 1;
        }
        .button-row {
            display: flex;
            justify-content: space-between;
            align-items: center;
        }
        .back-button {
            padding: 12px 20px;
            background-color: #2196F3;
            color: white;
            text-decoration: none;
            border-radius: 5px;
            font-size: 16px;
        }
        .back-button:hover {
            background-color: #1976D2;
        }
        .submit-button {
            flex: 1;
            padding: 12px;
            background-color: #4CAF50;
            color: white;
            border: none;
            border-radius: 5px;
            font-size: 16px;
            cursor: pointer;
            margin-left: 15px;
        }
        .submit-button:hover {
            background-color: #45a049;
        }
    </style>
</head>
<body>
<div class="container">
    <h2>Insert New User</h2>

    <form name="insertrecord" method="post" action="insert.php">
        <div class="form-row">
            <div class="form-group">
                <label for="firstname">First Name</label>
                <input type="text" name="firstname" id="firstname" required>
            </div>
            <div class="form-group">
                <label for="lastname">Last Name</label>
                <input type="text" name="LastName" id="LastName" required>
            </div>
        </div>

        <div class="form-row">
            <div class="form-group">
                <label for="emailid">Email ID</label>
                <input type="email" name="emailid" id="emailid" required>
            </div>
            <div class="form-group">
                <label for="contactno">Contact Number</label>
                <input type="text" name="contactno" id="contactno" maxlength="10" required>
            </div>
        </div>

        <div class="form-group">
            <label for="address">Address</label>
            <textarea name="address" id="address" rows="3" required></textarea>
        </div>

        <!-- Buttons Row -->
        <div class="button-row">
            <a href="index.php" class="back-button">← Back</a>
            <button type="submit" name="insert" class="submit-button">Submit</button>
        </div>
    </form>
</div>
</body>
</html>
