<template>
<!-- vue component to define the footer section of the page-->
  <div class="Bottom">
    <link href="https://fonts.googleapis.com/css?family=Cuprum:700|Francois+One|Jura:600|Russo+One" rel="stylesheet">
    <div class="links">
      <a class="bottom" href="https://www.emilythecopywriter.com">Portfolio</a>
      <a class="bottom" href="https://ecperry.gitbooks.io/orderup-api-documentation/">API Documentation</a>
      <a class="bottom" href="https://github.com/ecperry/food-api">Credits</a>
      <a class="bottom" href="/style">Style Guide</a>
    </div>
    <div class="bottom"></div>
  </div>
</template>

<script>
//no methods

export default {
}
</script>

<style scoped>
.bottom {
  padding:0 5px 0 5px;
  color: darkgrey;
}
.Bottom {
  padding-top: 5%;
}
.links {
color: grey;
text-align: center;
font-size: 12pt;
}
.links :hover {
text-decoration: none;
color: #5C6D78;
}
</style>
