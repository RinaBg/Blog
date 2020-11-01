<?php include("../../path.php") ?>
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

  <title>Admin Section - Manage Users</title>
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
          <a href="create.users.php" class="btn btn-big">Create User</a>
          <a href="index.users.php" class="btn btn-big">Manage Users</a>
      </div>
      <div class="content">
        <h2 class="page-title">Manage Users</h2>
        <table>
            <thead>
                <th>SN</th>
                <th>Name</th>
                <th>Role</th>
                <th colspan="2">Action</th>
            </thead>
            <tbody>
                <tr>
                    <td>1</td>
                    <td>Marina</td>
                    <td>Admin</td>
                    <td><a href="#" class="edit">edit</a></td>
                    <td><a href="#" class="delete">delete</a></td>
                </tr>
                <tr>
                  <td>2</td>
                  <td>Boangher</td>
                  <td>Author</td>
                  <td><a href="#" class="edit">edit</a></td>
                  <td><a href="#" class="delete">delete</a></td>
                </tr>
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