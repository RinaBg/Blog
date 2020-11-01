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

  <title>Admin Section - Manage Posts</title>
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
          <a href="create.posts.php" class="btn btn-big">Add Post</a>
          <a href="index.posts.php" class="btn btn-big">Manage Posts</a>
      </div>

      <div class="content">

        <h2 class="page-title">Manage Posts</h2>

        <table>
            <thead>
                <th>SN</th>
                <th>Title</th>
                <th>Author</th>
                <th colspan="3">Action</th>
            </thead>
            <tbody>
                <tr>
                    <td>1</td>
                    <td>This is the first post</td>
                    <td>Marina</td>
                    <td><a href="#" class="edit">edit</a></td>
                    <td><a href="#" class="delete">delete</a></td>
                    <td><a href="#" class="publish">publish</a></td>
                </tr>
                <tr>
                  <td>2</td>
                  <td>This is the second post</td>
                  <td>Boangher</td>
                  <td><a href="#" class="edit">edit</a></td>
                  <td><a href="#" class="delete">delete</a></td>
                  <td><a href="#" class="publish">publish</a></td>
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