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
      <div id="drop_file_zone" ondrop="upload_file(event)" ondragover="return false">
        <div id="drag_upload_file">
          <p>Upload your work here</p>
          <p><input type="hidden" value="Select File" onclick="file_explorer();"></p>
          <input type="file" id="selectfile">
        </div>
      </div>
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
    <script type="text/javascript">
      var fileobj;
      function upload_file(e) {
        e.preventDefault();
        fileobj = e.dataTransfer.files[0];
        ajax_file_upload(fileobj);
      }

      function file_explorer() {
        document.getElementById('selectfile').click();
        document.getElementById('selectfile').onchange = function() {
            fileobj = document.getElementById('selectfile').files[0];
          ajax_file_upload(fileobj);
        };
      }

      function ajax_file_upload(file_obj) {
        if(file_obj != undefined) {
            var form_data = new FormData();
            form_data.append('file', file_obj);
          $.ajax({
            type: 'POST',
            url: 'ajax.php',
            contentType: false,
            processData: false,
            data: form_data,
            success:function(response) {
              alert(response);
              $('#selectfile').val('');
            }
          });
        }
      }
    </script>
  </body>
</html>
