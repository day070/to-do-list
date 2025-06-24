<?php
include("conn.php");

$id = $_GET['id'];

$data = mysqli_query($conn, "SELECT * FROM task WHERE id='$id'") or die(mysqli_error($conn));
$r = mysqli_fetch_assoc($data);
// Show Data
if (isset($_POST["edit"])) {
    $task = $_POST["task"];
    if (!empty($task)) {
        mysqli_query($conn, "UPDATE task SET tabel = '$task' WHERE id='$id' ");
        echo "<script>window.location='index.php'</script>";
    }
}


?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>To Do List</title>
    <link rel="stylesheet" href="style.css">
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
</head>

<body>
    <div class="container">
        <div class="header">
            <div class="title">
                <a href="index.php"><i class='bx bx-chevron-left'></i></a>
                <span>Back</span>
            </div>
            <div class="description">
                <?= date("l, d M Y") ?>
            </div>
        </div>
        <div class="content">
            <div class="card">
                <form action="" method="post">
                    <input type="text" class="input-control" name="task" placeholder="edit task" value="<?= $r['tabel'] ?>">
                    <div class="text-right">
                        <button type="submit" name="edit">Edit</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</body>

</html>