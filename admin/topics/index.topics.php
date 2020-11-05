<?php include("../../path.php") ?>
<?php include(ROOT_PATH . "/app/controllers/topics.php"); ?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">

<!---Font Awesome-->
  <script src="https://kit.fontawesome.com/e21174bd33.js" crossorigin="anonymous"></script>
<!---Google Fonts--->
  <link href="https://fonts.googleapis.com/css2?family=Candal&family=Lora&display=swap" rel="stylesheet">
<!---CSS--->
  <link rel="stylesheet" href="../../assets/css/style.css">

<!---ADMIN CSS--->
<link rel="stylesheet" href="../../assets/css/admin.css">
<!--- // ADMIN CSS--->
  <title>Admin Section - Manage Topics</title>
</head>

<body>

<!--HEADER-->
<?php include(ROOT_PATH . "/app/includes/adminHeader.inc.php") ?>
<!-- // HEADER-->

<!---ADMIN PAGE WRAPPER--->
<div class="admin-wrapper">

  <!---LEFT SIDEBAR-->
  <?php include(ROOT_PATH . "/app/includes/adminSidebar.inc.php") ?>
  <!-- // LEFT SIDEBAR -->


  <!--ADMIN CONTENT -->
  <div class="admin-content">
      <div class="button-group">
          <a href="create.topics.php" class="btn btn-big">Create Topic</a>
          <a href="index.topics.php" class="btn btn-big">Manage Topics</a>
      </div>

      <div class="content">

        <h2 class="page-title">Manage Topics</h2>

        <?php include(ROOT_PATH . "/app/includes/messages.inc.php"); ?>

        <table>
            <thead>
                <th>SN</th>
                <th>Name</th>
                <th colspan="2">Action</th>
            </thead>
            <tbody>
                <?php foreach ($topics as $key => $topic): ?>
                  <tr>
                      <td><?php echo $key +1; ?></td>
                      <td><?php echo $topic['name']; ?></td>
                      <td><a href="edit.topics.php?id=<?php echo $topic['id']; ?>" class="edit">edit</a></td>
                      <td><a href="index.topics.php?del_id=<?php echo $topic['id']; ?>" class="delete">delete</a></td>
                  </tr>
                <?php endforeach; ?>
            </tbody>
        </table>

      </div>
  </div>

  <!-- // ADMIN CONTENT -->

</div>
<!--- // PAGE WRAPPER--->  


  <!-----JQUERY------>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <!-----CUSTOM SCRIPT ------>
  <script src="../../assets/js/scripts.js"></script>
</body>
</html>
