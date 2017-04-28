<template>
  <!-- This component is a collapsible info modal that gives the viewer guidance on how to use the app -->
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
      easier, so you can focus on what you love — great tasting food
      Started by a baker with a home cupcake business and a knack for
      coding, OrderUp! helps small food business owners manage and
      track orders through a simple digital interface.
    </p>
    <p>To begin, fill out the information for your cupcake or dessert order under the "create a new order header."
      Be sure your form inputs match the type shown in the placeholder text. After you press the "create order"
      button, your order will appear in the "orders" list below. Use the pencil icon to edit orders and the "x" icon
      to remove an order from your list. Happy baking!
    </p>

  </div>
  <!---</div> -->
</template>

<script>
export default {
}
</script>

<style scoped>
h2 {
  font-size: 40px;
  font-family: 'Open Sans Condensed', sans-serif;
}
p {
  text-align: left;
  padding-left: 15%;
  padding-right: 15%;
  padding-top: 20px;
  font-size: 14pt;
  font-family: 'Open Sans Condensed', sans-serif;
}
.close {
  size: 40px;
}
.name {
font-size: 40pt ;
text-align: center;
font-family: 'Francois One', sans-serif;
padding-top: 10px;
}
.pic{
  width: 200px;
  padding-left: 50px;
  text-align: center;
  align-items: center;
}
.tag {
  font-size: 18pt ;
  text-align: center;
}
.Welcome {
  padding-top: 5%;
  padding-bottom: 10%;
  text-align: center;
}
</style>
