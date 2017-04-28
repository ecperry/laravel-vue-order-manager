<template>
  <div class="Order">
  <div class="Order panel panel-default">
<div class="row">
  <div class="panel-heading">
      <div class="col-md-11">
        <h3></h3>
        <h3 v-show="!editing">{{ this.customer }}</h3>
      </div>
      </div>

    <div class="col-md-1 cush">
      <a class="tool " href="#" @click.prevent="editing = true" v-show="!editing">
        <img style="width:20px;" src="edit.png">
      </a>

      <a class="tool" href="#" @click.prevent="remove" v-show="!editing">
        <img style="width:30px;" src="remove.png">
      </a>
    </div>
      </div>

    <div class="panel-body">
      <div class="live" v-show="!editing">
        <p class="bold" v-if="!completed">DUE  {{ order.deadline }}</p>

      </div>
      <div v-if="completed">
        <p class = "done"> COMPLETED! </p>
      </div>

      <div class="editing" v-show="editing">
        <p>
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
              <input  class="form-control" id="number" type="text" v-model="number" placeholder="ex.) 15"/>
            </div>
          </div>

          <div class="col-sm-12">
          <div class="form-group">
            <label for="completed">completed?</label>
            <input id="completed" type="checkbox" v-model="completed" />
          </div>
          </div>
        </p>
        <p>
          <button class="btn btn-success" @click="save">Save</button>
          <button class="btn btn-default" @click="cancel">Cancel</button>
        </p>
      </div>
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
      customer: this.order.customer,
      deadline: this.order.deadline,
      flavor: this.order.flavor,
      number: this.order.number,
      size: this.order.size,
      completed: this.order.completed,
      editing: false,
      loading: false
    }
  },
  methods: {
    remove () {
      console.log('Order -> remove');
      this.loading = true;
      axios.delete(`/orders/${this.order.id}`)
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
      this.editing = false;
    }
  }
}
</script>

<style>

.tool {
  padding-left: 0px;
}

.right {
float:right;
}

.cush {
  padding-left: 80px;
}

.panel {
padding: 10px;
margin: 15px;
}

.bold {
font-weight:;
color: #BA4620;
font-size: 12pt;
font-family: 'Francois One', sans-serif;
}

.done {
color:  #F57B31;
font-size: 12pt;
font-family: 'Francois One', sans-serif;
}

.panel-default {
border-color: #F57B31;
}

.btn-success {
background-color: #F57B31;
}

.btn-default{
  font-size: 14pt;
}


</style>
