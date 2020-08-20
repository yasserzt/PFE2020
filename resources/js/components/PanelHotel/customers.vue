<template>
  <section>

    <!-- <table class="table is-fullwidth is-narrowed is-bordered">
      <thead>
        <tr>
          <th class='text-center'>Client Name</th>
          <th class='text-center'>Room Category</th>
          <th class='text-center'>Room Number</th>
          <th class='text-center'>Start Date</th>
          <th class='text-center'>End Date</th>
        </tr>
      </thead>
      <tbody>
        <tr v-for="val in booking">
          <td class='text-center'>{{val.client.first_name}} {{val.client.last_name}}</td>
          <td class='text-center'>{{val.price.roomCategory}}</td>
          <td class='text-center'>{{val.roomNumber}}</td>
          <td class='text-center'><span class="tag is-info is-medium">{{moment(val.startDate).format('MMMM Do YYYY') }}</span></td>
          <td class='text-center'><span class="tag is-danger is-medium">{{moment(val.endDate).format('MMMM Do YYYY') }}</span></td>
        </tr>
      </tbody>
    </table> -->

    {{booking}}

  </section>
</template>
<script>
var moment = require('moment');

export default {
  props: ['booking'],
  data(){
    return {
       moment:moment,
    }
  },
  methods: {

  },

  mounted() {
    $('table').cardtable();
    console.log('Component mounted.')
  }

}
</script>
