<template>
  <section>

    <eventmodal @event-added="refresh(events)"></eventmodal>



    <table id="tab2" class="table table-dark table-sm  table-bordered text-white">
      <thead>
        <tr>
          <th class='text-center text-white'>Event Type</th>
          <th class='text-center text-white'>Price </th>
          <th class='text-center text-white'>Start Date</th>
          <th class='text-center text-white'>End Date</th>
          <th class='text-center text-white'>Created at</th>
          <th class='justify-content-center text-center text-white'></th>
        </tr>
      </thead>
      <tbody>
        <tr v-for="val in events">
          <td>{{val.type}}</td>
          <td>{{val.price}}</td>
          <td>{{ moment(val.startDate).format("MMMM Do YYYY, h:mm:ss ")  }}</td>
          <td>{{ moment(val.endDate).format("MMMM Do YYYY, h:mm:ss ")  }}</td>
          <td>{{ moment(val.created_at).startOf('hour').fromNow()}}</td>
          <td></td>
        </tr>
      </tbody>
    </table>
  </section>
</template>


<script>
var moment = require('moment');
export default {
  props: ['events'],
  data() {
    return {
      moment:moment,
      event: {}
    }
  },
  methods: {

    refresh(events){
      this.events = events.data;
    }
  },
  created () {
      this.refresh();
      setInterval(function(){this.refresh()},2000)
  },
  mounted() {
    console.log('Component mounted.')
  }
}
</script>
