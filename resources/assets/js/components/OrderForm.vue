<template>
  <div class="OrderForm">
    <link href="https://fonts.googleapis.com/css?family=Cuprum:700|Francois+One|Jura:600|Russo+One" rel="stylesheet">
    <h3>create a new order</h3>
    <div class="col-sm-6">
      <div class="form-group">
        <label for="customer">customer</label>
        <input class="form-control" type="text" name="last" id="customer" v-model="customer" placeholder="ex.) Jane Doe and Co." />
      </div>
    </div>

    <div class="col-sm-6">
      <div class="form-group">
        <label for="deadline">deadline</label>
        <input class="form-control" id="deadline" type="text" v-model="deadline" placeholder="ex.) 02/14/18 @ 2pm"/>
      </div>
    </div>

    <div class="col-sm-4">
      <div class="form-group">
        <label for="flavor">flavor</label>
        <input  class="form-control" id="flavor" type="text" v-model="flavor" placeholder="ex.) vanilla"/>
      </div>
    </div>

    <div class="col-sm-4">
      <div class="form-group">
        <label for="size">size</label>
        <input class="form-control" id="size" type="text" v-model="size" placeholder="ex.) mini"/>
      </div>
    </div>

    <div class="col-sm-4">
      <div class="form-group">
        <label for="number">number</label>
        <input  class="form-control" id="number" type="text" v-model="number" placeholder="ex.) 15 boxes"/>
      </div>
    </div>

    <div class="col-sm-12">
    <div class="form-group">
      <label for="completed">completed?</label>
      <input id="completed" type="checkbox" v-model="completed" />
    </div>
    </div>

<button class="btn btn-primary" @click="create" :disabled="loading">create order</button>

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
      this.customer = '';
      this.deadline = '';
      this.flavor = '';
      this.size = '';
      this.number = '';
      this.completed = false;
    }
  }
};
</script>

<style scoped>
label {
font-weight: lighter;
}

h3 {
font-family: 'Francois One', sans-serif;
text-align: left;
background-color: darkgrey;
color: white;
padding-left: 15px;
padding-top: 5px;
padding-bottom: 5px;
}

btn-primary {
float: right;
}

</style>
