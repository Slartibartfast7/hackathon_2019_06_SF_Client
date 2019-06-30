// Typical INDEX functions
function getAllTutorials() {
  $.getJSON( "https://hackathon.meteors.io/tutorials", function( data ) {
    var items = [];
    $.each(data, function(i) {

      items.push("<a href='tutorial.php?id="+data[i].id+"'><table><tr id='"+data[i].id+"'><td><h2>"+data[i].name+"</h2></td><td>"+data[i].author+"</td><td>"+data[i].ratings+"/5</td></tr><tr id='"+data[i].id+"IMG'><td colspan='3'>"+data[i].nodes /* INSERER ICI LES NOEUDS */+"</td></tr></table></a>");

    });

    $("#results").empty();
    $( "<ul/>", {
      html: items.join( "" )
    }).appendTo( $("#results") );
  })
  .fail(function() {
    console.log( "error" );
  });
}

function getTutorialByName() {
  $.getJSON( ("https://hackathon.meteors.io/query/"+$('#searchBar').val()), function( data ) {
    var items = [];
    $.each(data, function(i) {
      items.push("<a href='tutorial.php?id="+data[i].id+"'><table><tr id='"+data[i].id+"'><td><h2>"+data[i].name+"</h2></td><td>"+data[i].author+"</td><td>"+data[i].ratings+"/5</td><td colspan='3'>"+data[i].nodes /* INSERER ICI LES NOEUDS */+"</td></table></a>");
    });

    $("#results").empty();
    $( "<ul/>", {
      html: items.join( "" )
    }).appendTo( $("#results") );
  });
}

// Typical MY COURSES functions
function getTutorialsFollowed() {
  $("#results").empty();
  for (var i = 1 ; i < 3 ; i++)
  {
    $.getJSON( ("https://hackathon.meteors.io/tutorials/"+i), function( data ) {
      var items = [];
      $.each(data, function(i) {
        items.push("<a href='tutorial.php?id="+data[i].id+"'><table><tr id='"+data[i].id+"'><td><h2>"+data[i].name+"</h2></td><td>"+data[i].author+"</td></table></a> Finished at 40%");
      });

      $( "<ul/>", {
        html: items.join( "" )
      }).appendTo( $("#results") );
    });
  }
}

// Typical TUTORIAL functions
function getNodeById(id) {
  $.getJSON( ("https://hackathon.meteors.io/nodes/"+id), function( data ) {
    var items = [];
    $.each(data, function(i) {
      items.push("<a href='tutorial.php?id="+data[i].id+"'><table><tr id='"+data[i].id+"'><td><h2>"+data[i].name+"</h2></td><td>"+data[i].author+"</td><td>"+data[i].ratings+"/5</td><td colspan='3'>"+data[i].nodes /* INSERER ICI LES NOEUDS */+"</td></table></a>");
    });

    $("#results").empty();
    $( "<ul/>", {
      html: items.join( "" )
    }).appendTo( $("#results") );
  });
}




function numberOfStars(rating, DOM)
{
  var chain = [];
  var i;
  var intPart = Math.floor(rating);
  for (i = 0; i < intPart; i++)
  {
    chain.push('<img src="full_star.png" alt="full star" />');
  }
  if (rating != intPart && rating != 5)
  {
    chain.push('<img src="partial_star.png" alt="full star" />');
    i++;
  }
  for (;i < 5; i++)
  {
    chain.push('<img src="empty_star.png" alt="full star" />');
  }

  $( DOM ).html(chain.join(""))
}
