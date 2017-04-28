<template>
  <div id="app">
  <div class="container">
    <Welcome class="alert"></Welcome>
    <Top></Top>
    <OrderForm @created="fetch"></OrderForm>

    <div v-show="orders.length > 0">
      <Order v-for="(customer, index) in orders" :key="index" :order="customer" @updated="update" @deleted="remove(index)"></Order>
    </div>
    <p class="message" v-show="orders.length === 0">You do not have any orders yet.</p>

    <Bottom></Bottom>

    <transition name="fade">
      <MainLoader v-if="loading"></MainLoader>
    </transition>

  </div>
</div>
</template>

<script>
import axios from 'axios';
import Welcome from './Welcome';
import Top from './Top';
import Order from './Order';
import OrderForm from './OrderForm';
import MainLoader from './MainLoader';
import Bottom from './Bottom'
export default {
  components: {
    Welcome,
    Top,
    Order,
    OrderForm,
    MainLoader,
    Bottom

  },
  data () {
    return {
      orders: [],
      loading: false
    }
  },
  mounted () {
    this.fetch();
  },
  methods: {
    fetch () {
      console.log('App -> fetch');
      this.loading = true;
      axios.get('/orders')
        .then((response) => {
          console.log('App -> fetch success');
          console.log(response.data);
          this.orders = response.data;
          this.loading = false;
        })
        .catch((response) => {
          console.log('App -> fetch error');
          // show error
          this.loading = false;
        })
    },
    update (data) {
      // this.fetch();
      var i = this.orders.indexOf(data.order);
      for (var d in data) {
        this.orders[i][d] = data[d];
      }
    },
    remove (i) {
      console.log(`App -> remove ID: ${i}`);
      this.orders.splice(i, 1);
    }
  }
}
</script>

<style>
#app {
  background-color: white;
}
.fade-enter-active, .fade-leave-active {
  transition: opacity .5s
}
.fade-enter, .fade-leave-to {
  opacity: 0
}
.container  {

  font-family: 'Open Sans Condensed', sans-serif;
  font-weight: 200;
}

.message {
  font-size: 16pt;
}
</style>
