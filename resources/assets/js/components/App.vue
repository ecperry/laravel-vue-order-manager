<template>
  <div class="container">
    <h4>Test</h4>

    <OrderForm @created="fetch"></OrderForm>

    <div class="ContactList" v-show="orders.length > 0">
      <Order v-for="(customer, index) in orders" :key="index" :order="customer" @updated="update" @deleted="remove(index)"></Order>
    </div>
    <p v-show="orders.length === 0">You do not have any orders yet.</p>

    <transition name="fade">
      <MainLoader v-if="loading"></MainLoader>
    </transition>
  </div>
</template>

<script>
import axios from 'axios';
import Order from './Order';
import OrderForm from './OrderForm';
import MainLoader from './MainLoader';
export default {
  components: {
    Order,
    OrderForm,
    MainLoader
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
.fade-enter-active, .fade-leave-active {
  transition: opacity .5s
}
.fade-enter, .fade-leave-to {
  opacity: 0
}
</style>
