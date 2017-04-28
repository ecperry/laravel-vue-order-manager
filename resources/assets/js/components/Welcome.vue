<template>
  <div class="Welcome" data-dismiss="alert">
    <link href="https://fonts.googleapis.com/css?family=Cuprum:700|Francois+One|Jura:600|Russo+One|Open+Sans+Condensed:300" rel="stylesheet">
    <!--<div class="ok" v-show="ok"> -->
    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
      <span aria-hidden="true">  <img style="width:50px;" src="remove.png"></span>
    </button>
    <img class = "pic" src = "logo.png">
    <h1 class="name"> OrderUp! </h1>
    <h2 class ="tag"> serve it better </h2>
    <p> In the food business, 'just okay' won't cut it.
      OrderUp! makes tracking orders and managing customers
      easier, so you can focus on what you love — great tasting food.
    </p>
    <p>
      Started by a baker with a home cupcake business and a knack for
      coding, OrderUp! helps small food business owners manage and
      track orders through a simple digital interface, without having to deal with the messy
      backend of a database.
    </p>
  </div>
  <!---</div> -->
</template>

<script>
export default {
}
</script>

<style scoped>
.name {
font-size: 48pt ;
text-align: center;
font-family: 'Francois One', sans-serif;
padding-top: 10px;

}
.tag {
  font-size: 18pt ;
  text-align: center;

}
.pic{
  width: 200px;
  padding-left: 50px;
  text-align: center;
  align-items: center;
}
.Welcome {
  padding-top: 5%;
  padding-bottom: 10%;
  text-align: center;
}
p {
  text-align: left;
  padding-left: 20%;
  padding-right: 20%;
  padding-top: 20px;
  font-size: 14pt;
  font-family: 'Open Sans Condensed', sans-serif;
}
.close {
  size: 40px;
}

h2 {
  font-size: 40px;
  font-family: 'Open Sans Condensed', sans-serif;
}


</style>
