<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>The know path</title>
    <link href="https://fonts.googleapis.com/css?family=Roboto:300" rel="stylesheet">
    <link rel="stylesheet" href="global.css">
    <link rel="stylesheet" href="index.css">
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
      <div id="searchContainer">
        <div id="searchContainerObscur">
          <form>
            <input id="searchBar" type="text" placeholder="What do you want to learn today ?" value="" />
          </form>
            Or
          <form action="contribute.php">
            <button type="submit">Contribute</button>
          </form>
        </div>
      </div>

      <div id="results">
      </div>
    </main>

    <?php require("../footer.php"); ?>
    <script type="text/javascript">
    // Actualisation
    $(function() {
      getAllTutorials();

      // Actualisation
      $('#searchBar').on('input', function() {
        if ($('#searchBar').val() == "")
        {
          $('#searchContainerObscur').removeClass('reduced');
          getAllTutorials();
        }
        else {
          $('#searchContainerObscur').addClass('reduced');
          getTutorialByName();
        }
      });
    });
    </script>
  </body>

</html>
