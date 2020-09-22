$(document).ready(function(){
  getData();

  $(document).on('change','#select-id',function(){
    var thisAuthor = $(this).val();
    $.ajax(
      {
        url: "http://localhost/php-ajax-dischi/server.php",
        method: "GET",
        data: {
          author: thisAuthor
        },
        success: function(risposta){
          $(".container-cd").html('');
          printaData(risposta);
        },
        error: function(){
          alert("È avvenuto un errore");
       }
      }
    );
  });

});

function getData(){ // La chiamata AJAX spostata in una funzione
  $.ajax(
    {
      url: "http://localhost/php-ajax-dischi/server.php",
      method: "GET",
      success: function(risposta){
        printaData(risposta);
        printSelect(risposta);
      },
      error: function(){
        alert("È avvenuto un errore");
     }
    }
  );
}

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
    $('.container-cd').append(html);
  }

}

function printSelect(data){
  var source = document.getElementById("option-template").innerHTML;
  var template = Handlebars.compile(source);

  var arrayAuthor = []; // Un array vuoto che si popolerà

  for (var i = 0; i < data.length; i++){
    if (!arrayAuthor.includes(data[i].author)){ // Se arrayAuthor NON include l'autore (data[i].author)...
      arrayAuthor.push(data[i].author); // Eseguo il push dell'autore non incluso in arrayAuthor.
    }
  }

  for (var i = 0; i < arrayAuthor.length; i++){ // Ciclo su arrayAuthor che si è popolato.
    var context = {
      'author': data[i].author
    };
    var html = template(context);
    $('#select-id').append(html);
  }

}
