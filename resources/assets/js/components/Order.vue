<template>
  <!-- The order vue component controls the list of orders as they're created-->
  <div class="Order">
  <div class="Order panel panel-default">
<div class="row">
  <div class="panel-heading">
      <div class="col-sm-10">
        <h3></h3>
          <h3 v-show="!editing">{{ this.customer }}</h3>
            <div class="live" v-show="!editing">
              <p class="bold" v-if="!completed">DUE  {{ order.deadline }}</p>
            </div>
          <div class="live" v-show="!editing">
            <div v-if="completed">
              <p class = "done"> COMPLETED! </p>
            </div>
        </div>
      </div>
      </div>

    <div class="col-sm-2 cush">
      <a class="tool " href="#" @click.prevent="editing = true" v-show="!editing">
        <img style="width:20px;" src="edit.png">
      </a>

      <a class="tool" href="#" @click.prevent="remove" v-show="!editing">
        <img style="width:30px;" src="remove.png">
      </a>
    </div>
      </div>

    <div class="panel-body">


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
          <button class="btn btn-save" @click="save">save</button>
          <button class="btn btn-default" @click="cancel">cancel</button>
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

<style scoped>
h3 {
  font-size: 18pt;
  font-weight: lighter;
}
label {
  font-size: 16pt;
  font-weight: lighter;
}
.btn-default{
  font-size: 14pt;
  border-color: #636b6f;
  background-color: #636b6f;
  color: white;
  padding-right: 30px;
  padding-left: 30px;
  margin-left: 10px;
}
.btn-default:hover {
  border-color: #D3D3D3;
  background-color: #D3D3D3;
  color: #636b6f;
}
.btn-save {
  background-color:  #78909C;
  border-color: #78909C;
  color: white;
  margin-left: 10px;
  font-size: 14pt;
  padding-right: 30px;
  padding-left: 30px;
}
.btn-save:hover {
  background-color: #BEE1F7;
  border-color: #BEE1F7;
  color: white;
}
.bold {
font-weight:lighter;
color: #BA4620;
font-size: 14pt;
font-family: 'Francois One', sans-serif;
}
.cush {
  padding-left: 10%;
}
.done {
color:  #F57B31;
font-size: 14pt;
font-family: 'Francois One', sans-serif;
font-weight:lighter;
}
.form-control:focus {
  border-color: #78909C;
}
.right {
float:right;
}
.tool {
  padding-left: 0px;
}
.panel {
padding: 10px;
margin: 15px;
}
</style>
