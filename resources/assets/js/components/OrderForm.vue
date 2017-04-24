<template>
  <div class="OrderForm">
    <input type="text" v-model="customer" />
    <input type="text" v-model="deadline" />
    <input type="text" v-model="flavor" />
    <input type="text" v-model="size" />
    <input type="text" v-model="number" />
    <input type="checkbox" v-model="completed" />
    <button class="btn btn-primary" @click="create" :disabled="loading">Create Order</button>
  </div>
</template>

<script>
import axios from 'axios';
import Loader from './Loader';
export default {
  components: {
    Loader
  },
  data() {
    return {
      customer: '',
      deadline: '',
      flavor: '',
      size: '',
      number: '',
      completed: false,
      loading: false
    }
  },
  methods: {
    create () {
      console.log('OrderForm -> create');
      if (this.loading) {
        alert('request is already being made');
        return false;
      }
      this.loading = true;
      this.sendRequest();
    },
    sendRequest () {
      axios.post('/orders', {
        customer: this.customer,
        deadline: this.deadline,
        flavor: this.flavor,
        size: this.size,
        number: this.number,
        completed: this.completed
      })
      .then((response) => {
        console.log('OrderForm -> sendRequest success');
        console.log(response.data);
        this.loading = false;
        this.reset();
        this.$emit('created');
      })
      .catch((error) => {
        console.error('OrderForm -> sendRequest error');
        // show an error message
      });
    },
    reset () {

      this.customer,
      this.deadline,
      this.flavor,
      this.size,
      this.number,
      this.completed
    }
  }
};
</script>

<style scoped>
</style>
