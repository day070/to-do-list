<?php
include("conn.php");

// Show Data
if (isset($_POST["add"])) {
  $task = $_POST["task"];
  if (!empty($task)) {
    mysqli_query($conn, "INSERT INTO task (tabel,status) VALUES ('$task','open')") or die(mysqli_error($conn));
  }
}

// Hapus task
if (isset($_GET["delete"])) {
  $id = $_GET["delete"];
  mysqli_query($conn, "DELETE FROM task WHERE id=$id");
  header("Refresh:0;url=index.php");
}

// Update data
if (isset($_GET['done'])) {
  $status = 'close';
  if ($_GET['status'] == 'open') {
    $status = 'close';
  } else {
    $status = 'open';
  }

  mysqli_query($conn, "UPDATE task SET status ='" . $status . "' WHERE id='" . $_GET['done'] . "' ");
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
        <i class='bx bx-sun'></i>
        <span>To Do List</span>
      </div>
      <div class="description">
        <?= date("l, d M Y") ?>
      </div>
    </div>
    <div class="content">
      <div class="card">
        <form action="" method="post">
          <input type="text" class="input-control" name="task" placeholder="Add task">
          <div class="text-right">
            <button type="submit" name="add">Add</button>
          </div>
        </form>
      </div>

      <?php
      $result = mysqli_query($conn, "SELECT * FROM task ORDER BY id DESC");
      if (mysqli_num_rows($result) > 0) {
        while ($row = mysqli_fetch_assoc($result)) {

      ?>
          <div class="card">
            <div class="task-items <?= $row['status'] == 'close' ? 'done' : '' ?>">
              <div>
                <input type="checkbox" onclick="window.location.href='?done=<?= $row['id'] ?>&status=<?= $row['status'] ?>'" <?= $row['status'] == 'close' ? 'checked' : '' ?>>
                <span><?= $row['tabel'] ?></span>
              </div>
              <div>
                <a href="edit.php?id=<?= $row['id'] ?>" class="text-edit" title="Edit"><i class='bx bx-edit'></i></a>
                <a href="?delete=<?= $row['id'] ?>" class="text-delete" title="Delete" onclick="return confirm('are you sure?')"><i class='bx bx-trash'></i></a>
              </div>
            </div>
          </div>
        <?php }
      } else {
        ?>
        <div class="pesan">
          <h3>Tidak ada Task</h1>
        </div>
      <?php
      } ?>

    </div>
  </div>
</body>

</html>