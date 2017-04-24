<template>
  <div class="Order panel panel-default">
    <div class="panel-heading">
      <a :href="'tel:' + order.deadline">
        <i class="glyphicon glyphicon-earphone"></i>
      </a>

      <a class="tool" href="#" @click.prevent="remove">
        <i class="glyphicon glyphicon-remove pull-right"></i>
      </a>

      <a class="tool" href="#" @click.prevent="editing = true" v-show="!editing">
        <i class="glyphicon glyphicon-pencil pull-right"></i>
      </a>
    </div>
    <div class="panel-body">
      <div class="live" v-show="!editing">
        {{ order.customer }} {{ order.deadline }}
      </div>
      <div class="editing" v-show="editing">
        <p>
          <input type="text" v-model="customer" />
          <input type="text" v-model="deadline" />
          <input type="text" v-model="flavor" />
        </p>
        <p>
          <button class="btn btn-success" @click="save">Save</button>
          <button class="btn btn-default" @click="cancel">Cancel</button>
        </p>
      </div>
    </div>
  </div>
</template>

<script>
import axios from 'axios';
export default {
  props: [
    'order'
  ],
  data () {
    return {
      customer: this.customer,
      deadline: this.deadline,
      flavor: this.flavor,
      editing: false,
      loading: false
    }
  },
  methods: {
    remove () {
      console.log('Order -> remove');
      this.loading = true;
      axios.delete(`/orders/${this.orders.id}`)
        .then((response) => {
          console.log('Order -> remove success');
          this.$emit('deleted')
          this.loading = false;
        })
        .catch((error) => {
          console.log('Order -> remove error');
          // stop deleting and dont remove from the dom
          // tell the user deletion failed
        });
    },
    save () {
      console.log('Order -> save');
      axios.put(`/orders/${this.order.id}`, {
        customer: this.customer,
        deadline: this.deadline,
        flavor: this.flavor
        })
        .then((response) => {
          console.log('Order -> save success');
          this.$emit('updated', {
            order: this.order,
            customer: this.customer,
            deadline: this.deadline,
            flavor: this.flavor
          });
          this.editing = false;
        })
        .catch((error) => {
          console.log('Order -> save error');
          //show the user that it couldn't be updated
        });
    },
    cancel () {
      console.log('Order -> cancel');
      this.customer = this.order.customer;
      this.deadline = this.order.deadline;
      this.flavor =  this.order.flavor;
    }
  }
}
</script>

<style>
.tool > i {
  margin-left: 15px;
}
</style>
