<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Create a node - The know path</title>
    <link href="https://fonts.googleapis.com/css?family=Roboto:300" rel="stylesheet">
    <link rel="stylesheet" href="global.css">
    <link rel="stylesheet" href="createNode.css">
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

    <main>
      <form>
        <input id="name" type="text" placeholder="Name of the node" />
        <input id="duration" type="number" placeholder="Duration" />
        <input id="difficulty" type="number" placeholder="Difficulty" />
        <input id="color" type="text" placeholder="Color" />
        <textarea id="shortDesc" placeholder="Short description"></textarea>
        <textarea id="links" placeholder="links"></textarea>
        <button id="submitButton" type="button">Submit the node</button>
      </form>
    </main>

    <?php require("../footer.php"); ?>
    <script>
    </script>
  </body>
</html>
<input type="text" placeholder="Name of the node" />
