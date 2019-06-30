<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Tutorial - The know path</title>
    <link href="https://fonts.googleapis.com/css?family=Roboto:300" rel="stylesheet">
    <link rel="stylesheet" href="global.css">
    <link rel="stylesheet" href="tutorial.css">
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
      <h1 id="title"></h1>
      <p id="description"></p>
      <h2 id="titleNode"></h2>
      <p id="author"></p>
      <p id="ratings"></p>
      <p id="difficulty"></p>
      <p id="links"></p>
      <div id="nodes"></div>
      <a id="back" href="index.php"></a>
    </main>

    <?php require("../footer.php"); ?>
    <script>
    $.urlParam = function(name) {
      var results = new RegExp('[\?&]' + name + '=([^&#]*)').exec(window.location.href);
      if (results==null) {
         return null;
      }
      return decodeURI(results[1]) || 0;
    }


    $.getJSON( ("https://hackathon.meteors.io/tutorials/"+$.urlParam('id')), function( data ) {
      var items = [];
      $.each(data, function(i) {
        $('#title').html(data[i].name);
        $('#description').html(data[i].description);
        $('#titleNode').html("Title of the selected node");
        $('#links').html('Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.');
        $('#type').html("Tutorial");
        $('#author').html(data[i].author);
        numberOfStars((data[i].ratings), '#ratings');
        $('#ratings').html(data[i].difficulty);
        $('#nodes').html("NODES : TODO AFFICHAGE "+data[i].nodes);
        $('#back').html("Return back");
      });
    })
    .fail(function() {
      console.log( "error" );
    });
    </script>
  </body>
</html>
