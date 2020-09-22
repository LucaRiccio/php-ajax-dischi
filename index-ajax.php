<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>php-ajax-dischi</title>
    <link rel="stylesheet" href="dist/app.css">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js" integrity="sha512-bLT0Qm9VnAYZDflyKcBaQ2gg0hSYNQrJ8RilYldYQ1FxQYoCLtUjuuRuZo+fjqhx/qtq/1itJ0C2ejDxltZVFg==" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/handlebars.js/4.7.6/handlebars.min.js" integrity="sha512-zT3zHcFYbQwjHdKjCu6OMmETx8fJA9S7E6W7kBeFxultf75OPTYUJigEKX58qgyQMi1m1EgenfjMXlRZG8BXaw==" crossorigin="anonymous"></script>
  </head>
  <body>

    <header>
      <img src="logo.png" alt="">
      <select class="" name="author" id="select-id">
        <option value="">All</option>
      </select>
    </header>

    <div class="container-cd">

    </div>

    <script id="entry-template" type="text/x-handlebars-template">
      <div class="cd">
        <img src="{{poster}}" alt="">
        <h3>{{title}}</h3>
        <p>{{author}}</p>
        <strong>{{year}}</strong>
      </div>
    </script>

    <script id="option-template" type="text/x-handlebars-template">
      <option value="{{author}}">{{author}}</option>  
    </script>

    <script src="src/app.js" charset="utf-8"></script>
  </body>
</html>
