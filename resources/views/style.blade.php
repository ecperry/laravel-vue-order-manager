<!DOCTYPE html>
<!--This view hosts the style guid, accessible at the /style URL -->
<html lang="{{ config('app.locale') }}">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Style Guide</title>
</head>
<body>
  <div class="Top">
    <link href="https://fonts.googleapis.com/css?family=Cuprum:700|Francois+One|Jura:600|Russo+One" rel="stylesheet">
<div class ="row">
  <a href= "../">
    <img class = "logo col-sm-2" src = "logo.png">
  </a>
    <div class= "col-sm-6">
    <h1 class="title"> OrderUp!</h1>
    <h2 class ="subtitle"> serve it better </h2>
  </div>
    </div>

  </div>

  <div class="left">
    <h1>COLOR</h1>
  </div>
  <div class="content">
    <div class="row">
    <div class= "col-sm-3 color1">
      <p>HEX #5C6D78</p>
    </div>
    <div class= "col-sm-3 color2">
      <p class="white">HEX #78909C</p>
    </div>
    <div class= "col-sm-3 color3">
      <p class="white">HEX #BEE1F7 </p>
    </div>
    <div class= "col-sm-3 color4">
      <p class="white">HEX #BA4620</p>
    </div>
    <div class= "col-sm-3 color5">
      <p class="white">HEX #F57B31</p>
    </div>
    <div class= "col-sm-3 color6">
      <p >HEX #FFFFFF</p>
    </div>
    <div class= "col-sm-3 color7">
      <p class="white">HEX #000000</p>
    </div>
    <div class= "col-sm-3 color8">
      <p class="white">HEX #636B6F</p>
    </div>
    <div class= "col-sm-3 color9">
      <p class="white">HEX #D3D3D3</p>
    </div>
    </div>
  </div>

  <div class="left">
      <h1> TYPE </h1>
  </div>
  <div class="content">
    <div class="row">
    <div class= "col-md-12">
    <h1> FRANCOIS ONE </h1>
    <h2> A B C D E F G H I J K L M N O P Q R S T U V W X Y Z
      <br>
        a b c d e f g h i j k l m n o p q r s t u v w x y z
      <br>
        ! @ # $ % ^ * . , ? ( )
      <br>
      <br>
    </h2>
    <h1 class= "Open">OPEN SANS CONDENSED</h1>
    <h2 class = "Open"> A B C D E F G H I J K L M N O P Q R S T U V W X Y Z
      <br>
      a b c d e f g h i j k l m n o p q r s t u v w x y z
      <br>
      ! @ # $ % ^ * . , ? ( )
    </h2>
    </div>
    </div>
    </div>

    <div class="left">
      <h1> TEXT </h1>
    </div>

    <div class="content">
    <h1> HEADER 1 </h1>
    <h2> Header 2 </h2>
    <h3> Header 3 </h3>
    <h4> Header 4 </h4>
    <h5> Header 5 </h5>
    <br>
      <p class="lead"> p.lead </p>
      <p class="lead">
        Eating is a necessity, but cooking is an art.
      </p>
      <p> p</p>
      <p>
        In the food business, 'just okay' won't cut it. OrderUp! makes tracking
        orders and managing customers easier, so you can focus on what you love
        — great tasting food.
      </p>
    <br>
      <p class="light"> p.light </p>
      <p class="light">
        Started by a baker with a home cupcake business and a knack for coding,
        OrderUp! helps small food business owners manage and track orders
        through a simple digital interface, without having to deal with the
        messy backend of a database.
      </p>
    </div>

    <div class="left">
    <h1> BUTTONS </h1>
    </div>

    <div class ="content">
    <button class="btn btn-sm small">small button</button>
    <br>
    <br>
    <button class="btn btn-md medium">medium button</button>
    <br>
    <br>
    <button class="btn btn-lg large">large button</button>
  </div>

    <div class="left">
    <h1> LISTS </h1>
    </div>

    <div class="content">
    <div class = "col-sm-6">
      <h3> ordered list </h3>
        <ol>
          <li>item 1</li>
          <li>item 2</li>
          <li>item 3</li>
          <li>item 4</li>
        </ol>
    </div>
    <div class = "col-sm-6">
      <h3> unordered list </h3>
        <ul>
          <li>item 1</li>
          <li>item 2</li>
          <li>item 3</li>
          <li>item 4</li>
        </ul>
    <br>
    </div>
    </div>

    <div class="left">
      <h1> FORMS </h1>
    </div>

    <div class="content">
    <div class="col-lg-8">
      <div class="form-group">
        <label for="contact_first">Form</label>
        <input class="form-control" type="text" name="form" id="contact_first" value="" placeholder="example form text" />
      </div>
    </div>

    <div class="col-lg-8">
    <div class="form-group">
      <label for="contact_state">Select Input</label>
      <select class="form-control" type="text" name="state"  id="contact_state" value="" placeholder="contact state">
        <option>option 1</option>
        <option>option 2</option>
        <option>option 3</option>
        <option>option 4</option>
        <option>option 5</option>
      </select>
    </div>
    </div>

  <!--ideas from http://stackoverflow.com/questions/14404157/multiline-input-form-field-using-bootstrap-->
  <div class="form-group">
    <div class="col-lg-8">
      <label for="formGroupExampleInput">Text Form</label>
      <textarea class="form-control" rows= "3" placeholder="example text form input" required></textarea>
    <br>
    <br>
    <br>
    </div>
    </div>
  </div>

</body>
<div class = "row">
<div class = "col-lg-12">
<div class="Bottom">
  <div class="links">
    <a class="bottom" href="https://www.emilythecopywriter.com">Portfolio</a>
    <a class="bottom" href="https://ecperry.gitbooks.io/orderup-api-documentation/">API Documentation</a>
    <a class="bottom" href="https://github.com/ecperry/food-api">Credits</a>
    <a class="bottom" href="/style">Style Guide</a>
  </div>
  <div class="bottom"></div>
</div>
</div>
</div>
  </div>
</body>
</html>
    <script>
        window.Laravel = {!! json_encode([
            'csrfToken' => csrf_token(),
        ]) !!};
    </script>
    <link rel="stylesheet" href="{{ mix('css/app.css') }}">

    <script src="{{ mix('js/app.js') }}"></script>


<style scoped>
@import url(https://fonts.googleapis.com/css?family=Raleway:300,400,600);@charset "UTF-8";
@import url(https://fonts.googleapis.com/css?family=Cuprum:700|Francois+One|Jura:600|Russo+One);@charset "UTF-8";
a :hover {
  color: black;
  text-decoration: none;
}
body {
background-color: white;
}
h1 {
  font-family: 'Francois One', sans-serif;
}
h2 {
  font-family: 'Francois One', sans-serif;
}
h3 {
  font-weight: bold;
}
h4 {
}
h5 {
}
p {
  font-family: 'Open Sans Condensed', sans-serif;
  font-size: 14pt;
}
p.lead {
  font-family: 'Francois One', sans-serif;
  font-size: 14pt;
}
p.light {
  font-family: 'Open Sans Condensed', sans-serif;
  font-weight: lighter;
  font-size: 14pt;
}
.bottom {
  padding:0 5px 0 5px;
  color: darkgrey;
}
.Bottom {
  padding-top: 5%;
  padding-bottom: 1%;
}
.color1 {
  background-color: #5c6d78;
}
.color2 {
  background-color: #78909c;
}

.color3 {
  background-color:#bee1f7 ;
}
.color4 {
  background-color: #BA4620;
}
.color5{
  background-color: #F57B31;
  color: black;
}
.color6 {
  background-color: #FFFFFF;
  border:solid;
  border-color: black ;
  border-width: thin;
  color: black;
}
.color7 {
  background-color: black;
}
.color8 {
  background-color: grey;
}
.color9 {
  background-color: lightgrey;
}
.color1 , .color2 , .color3, .color4, .color5, .color6, .color7, .color8, .color9 {
  padding: 50px 30px 30px 30px;
  margin: 15px 30px 15px 15px;
  border-radius: 5px;
  text-align: center;
  font-family: 'Open=', sans-serif;
}
.color1 , .color2 , .color3, .color4, .color7, .color8, .color9 {
color: white;
}
.content {
  padding-left: 20%;
}
.form-control:focus {
  border-color: #78909C;
}
.large {
  background-color: #BEE1F7;
  border-color: #BEE1F7;
  color:#636b6f;
  margin-left: 10px;
  font-size: 18pt;
  padding-right: 30px;
  padding-left: 30px;
  border-radius: 5px;
}
.large:hover {
  background-color: #636b6f;
  border-color: #636b6f;
  color: white;
}
.left {
  padding-left: 8%;
}
.links {
color: grey;
text-align: center;
}
.links :hover {
text-decoration: none;
color: black;
}
.logo {
  width: 200px;
  float: left;
  text-align: left;
}
.medium {
  background-color:  #78909C;
  border-color: #78909C;
  color: white;
  margin-left: 10px;
  font-size: 12pt;
  padding-right: 30px;
  padding-left: 30px;
}
.medium:hover {
  background-color: #BEE1F7;
  border-color: #BEE1F7;
  color: white;
}
.Open {
  font-size: 18pt;
  font-family: 'Open Sans Condensed', sans-serif;
  font-weight: lighter;
}
.small {
  font-size: 10pt;
  border-color: #636b6f;
  background-color: #636b6f;
  color: white;
  padding-right: 30px;
  padding-left: 30px;
  margin-left: 10px;
}
.small:hover {
  border-color: #D3D3D3;
  background-color: #D3D3D3;
  color: #636b6f;
}
.style {
background-color: white;
}
.subtitle {
  margin-left: 10px;
  font-size: 18pt ;
  text-align: left;
  padding-left: 8px;
  font-family: 'Open Sans Condensed', sans-serif;
  font-weight: lighter;
}
.Top {
  padding-bottom: 5%;
  padding-left: 5%;
}
.title {
font-size: 36pt ;
text-align: left;
font-family: 'Francois One', sans-serif;
padding-top: 20px;
padding-bottom: 0px;
margin-bottom: 0px;
}
.white {
  color: white;
}
</style>
