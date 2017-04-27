<!DOCTYPE html>
<html lang="{{ config('app.locale') }}">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Style Guide</title>
</head>
<body>
  <link href="https://fonts.googleapis.com/css?family=Cuprum:700||Open+Sans|Francois+One|Jura:600|Russo+One" rel="stylesheet">
    <div id="style">
    <div class="Top">
    <a class="bottom" href="../">
    <img class = "logo" src = "logo.png">
    </a>
    <h1 class="title"> OrderUp!</h1>
  </div>

  <div class="left">
    <h1>COLOR</h1>
  </div>
  <div class="content">
    <div class="row">
    <div class= "col-sm-3 color1">
      <p>HEX #7A241E</p>
    </div>
    <div class= "col-sm-3 color2">
      <p class="white">HEX #BA4620</p>
    </div>
    <div class= "col-sm-3 color3">
      <p class="white">HEX #F57B31</p>
    </div>
    <div class= "col-sm-3 color4">
      <p class="white">HEX #3FABA4</p>
    </div>
    <div class= "col-sm-3 color5">
      <p class="white">HEX #75BAB5</p>
    </div>
    <div class= "col-sm-3 color6">
      <p class="white">HEX #FFFFFF</p>
    </div>
    <div class= "col-sm-3 color7">
      <p class="white">HEX #000000</p>
    </div>
    <div class= "col-sm-3 color8">
      <p class="white">HEX #808080</p>
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
    <h1 class= "Open">OPEN SANS</h1>
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
      <p class="lead">People, even more than things, have to be restored, renewed, revived,
      reclaimed, and redeemed; never throw out anyone.
      </p>
      <p> p</p>
      <p>
        WithIt is a contact manager for smart, savvy, stylish millennial women.
        Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod
        tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim
        veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea
        commodo consequat.
      </p>
    <br>
      <p class="light"> p.light </p>
      <p class="light">
        Get WithIt to keep up with all the people you meet and friends you make.
        Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod
        tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim
        veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea
        commodo consequat.
      </p>
    </div>

    <div class="left">
    <h1> BUTTONS </h1>
    </div>

    <div class ="content">
    <button class="btn btn-sm delete">small button</button>
    <br>
    <br>
    <button class="btn btn-md new">medium button</button>
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


<style>
@import url(https://fonts.googleapis.com/css?family=Raleway:300,400,600);@charset "UTF-8";
@import url(https://fonts.googleapis.com/css?family=Cuprum:700|Francois+One|Jura:600|Russo+One);@charset "UTF-8";

.color1 {
  background-color: #7A241E;
}
.color2 {
  background-color: #BA4620;
}

.color3 {
  background-color: #F57B31;
}

.color4 {
  background-color: #3FABA4;
}

.color5{
  background-color: #75BAB5;
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
  margin: 15px 15px 15px 15px;
  border-radius: 5px;
  text-align: center;
  font-family: 'Open-Sans', sans-serif;
}
.color1 , .color2 , .color3, .color4, .color7, .color8, .color9 {
color: white;
}

.left {
  padding-left: 5%;
}

.content {
  padding-left: 20%;

}

font-size: 48px ;
text-align: left;
font-family: 'Francois One', sans-serif;
padding-top: 10px;
padding-bottom: 0px;
margin-bottom: 0px;
}
.subtitle {
  font-size: 18px ;
  margin-left: 10px;

}
.logo {
  width: 100px;
  float: left;
}
.Top {
  padding-bottom: 5%;
  padding-left: 5%;
}
.style {
background-color: white;
}
body {
background-color: white;
}

.links {
color: grey;
text-align: center;
}

.links :hover {
text-decoration: none;
color: black;
}

.bottom {
  padding:0 5px 0 5px;
  color: darkgrey;
}
.Bottom {
  padding-top: 5%;
  padding-bottom: 1%;
}

a :hover {
  color: black;
  text-decoration: none;
}

h1 {
  font-family: 'Francois One', sans-serif;
}
h2 {
  font-family: 'Francois One', sans-serif;
}
h3 {
}
h4 {
}
h5 {
}
p {
}
p.lead {
}
p.light {
}
.small {
}
.medium {
}
.large {
}
.text {
}
.select {
}
.textarea {
}
ul {
}
ol {
}
.Open {
  font-size: 20pt;
  font-family: 'Open Sans', sans-serif;

}


</style>
