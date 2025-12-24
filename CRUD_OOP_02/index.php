<?php
include('function.php');
$fetchdata = new DB_con();

// Delete record if 'del' parameter is set
if (isset($_GET['del'])) {
    $rid = intval($_GET['del']);
    $fetchdata->delete($rid);
    echo "<script>window.location.href='index.php'</script>";
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>User Records</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f4f4f4;
            padding: 20px;
        }
        h2 {
            text-align: center;
            margin-bottom: 20px;
        }
        table {
            width: 100%;
            border-collapse: collapse;
            background-color: #fff;
            box-shadow: 0 2px 8px rgba(0,0,0,0.1);
        }
        th, td {
            padding: 12px 15px;
            border: 1px solid #ddd;
            text-align: left;
        }
        th {
            background-color: #4CAF50;
            color: white;
        }
        tr:nth-child(even) {
            background-color: #f9f9f9;
        }
        tr:hover {
            background-color: #f1f1f1;
        }
        .btn {
            padding: 5px 10px;
            text-decoration: none;
            border-radius: 4px;
            font-size: 14px;
            color: white;
            display: inline-block;
        }
        .btn-primary {
            background-color: #4CAF50;
        }
        .btn-edit {
            background-color: #2196F3;
        }
        .btn-delete {
            background-color: #f44336;
        }
        /* Optional: float insert button to the right */
        .insert-button {
            margin-bottom: 20px;
            text-align: right;
        }
    </style>
</head>
<body>

<h2>User Records</h2>

<!-- Insert Data Button -->
<div class="insert-button">
    <a href="insert.php" class="btn btn-primary">Insert Data</a>
</div>

<table>
    <thead>
        <tr>
            <th>#</th>
            <th>First Name</th>
            <th>Last Name</th>
            <th>Email</th>
            <th>Contact</th>
            <th>Address</th>
            <th>Posting Date</th>
            <th>Edit</th>
            <th>Delete</th>
        </tr>
    </thead>
    <tbody>
        <?php
        $sql = $fetchdata->fetchdata();
        $cnt = 1;
        while ($row = mysqli_fetch_array($sql)) {
        ?>
        <tr>
            <td><?php echo htmlentities($cnt); ?></td>
            <td><?php echo htmlentities($row['FirstName']); ?></td>
            <td><?php echo htmlentities($row['LastName']); ?></td>
            <td><?php echo htmlentities($row['EmailId']); ?></td>
            <td><?php echo htmlentities($row['ContactNumber']); ?></td>
            <td><?php echo htmlentities($row['Address']); ?></td>
            <td><?php echo htmlentities($row['PostingDate']); ?></td>
            <td>
                <a href="update.php?id=<?php echo htmlentities($row['id']); ?>" class="btn btn-edit">
                    Edit
                </a>
            </td>
            <td>
                <a href="index.php?del=<?php echo htmlentities($row['id']); ?>" 
                   class="btn btn-delete" 
                   onclick="return confirm('Do you really want to delete?');">
                    Delete
                </a>
            </td>
        </tr>
        <?php $cnt++; } ?>
    </tbody>
</table>

</body>
</html>
