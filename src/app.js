$(document).ready(function(){

  $.ajax(
    {
      url: "http://localhost/php-ajax-dischi/server.php",
      method: "GET",
      success: function(risposta){
        printaData(risposta);
      },
      error: function(){
        alert("È avvenuto un errore");
     }
    }
  );

});

function printaData(data){
  var source = document.getElementById("entry-template").innerHTML;
  var template = Handlebars.compile(source);

  for (var i = 0; i < data.length; i++){
    var context = {
      'poster': data[i].poster,
      'title': data[i].title,
      'author': data[i].author,
      'year': data[i].year,
    };
    var html = template(context);
    $('.cd').append(html);
  }

}
