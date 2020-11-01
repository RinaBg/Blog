<?php include("../../path.php") ?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">

<!---Font Awesome-->
  <script src="https://kit.fontawesome.com/e21174bd33.js" crossorigin="anonymous"></script>
<!---- CKEDITOR ----->
  <script src="https://cdn.ckeditor.com/ckeditor5/22.0.0/classic/ckeditor.js"></script>
<!---Google Fonts--->
  <link href="https://fonts.googleapis.com/css2?family=Candal&family=Lora&display=swap" rel="stylesheet">
<!---CSS--->
  <link rel="stylesheet" href="../../assets/css/style.css">

<!---ADMIN CSS--->
<link rel="stylesheet" href="../../assets/css/admin.css">

  <title>Admin Section - Edit Topics</title>
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
          <a href="create.topics.php" class="btn btn-big">Add Topic</a>
          <a href="index.topics.php" class="btn btn-big">Manage Topics</a>
      </div>

      <div class="content">

        <h2 class="page-title">Edit Topic</h2>

        <form action="edit.topics.php" method="POST">
            <div>
                <label>Name</label>
                <input type="text" name="title" class="text-input">
            </div>
            <div>
                <label>Description</label>
                <textarea name="body" id="body"></textarea>
                <script>
                  ClassicEditor.create(document.querySelector("#body")).catch(
                    (error) => {
                      console.error(error);
                    }
                  );
                </script>
            </div>
            <div>
                <button type="submit" class="btn btn-big">Update Topic</button>
            </div>
        </form>
        

      </div>
  </div>

  <!-- // ADMIN CONTENT -->

</div>
<!--- // PAGE WRAPPER--->  


  <!----- JQUERY ------>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <!-----CUSTOM SCRIPT ------>
  <script src="../../assets/js/scripts.js"></script>
</body>
</html>