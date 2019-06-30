<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>The know path</title>
    <link href="https://fonts.googleapis.com/css?family=Roboto:300" rel="stylesheet">
    <link rel="stylesheet" href="global.css">
    <link rel="stylesheet" href="my_courses.css">
    <link rel="stylesheet" href="animate.css">

    <meta name="description" content="">
    <meta name="keywords" content="knowledge, free">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="robots" content="index, follow, noarchive, nocache">
    <link type="text/plain" rel="author" href="https://cyph.ai/humans.txt">
    <link rel="shortcut icon" href="favicon.png">
    <?php require("../head.php"); ?>
  </head>

  <body>
    <?php require("../header.php"); ?>

    <div id="container">
      <main>
        <h1>My courses</h1>
        <div id="results">
        </div>
      </main>
    </div>

    <?php require("../footer.php"); ?>
    <script>
    $(function() {
      getTutorialsFollowed();
    });
    </script>
  </body>

</html>
