<template>

  <section>
    <div class="row row-cols-1 row-cols-sm-2 row-cols-md-3 g-3" >
      <div class="col" v-for='val in events'>
        <div class="card shadow-sm">
          <img :src="val.img" alt="" class="img-fluid">
          <div class="card-body">
            <p class="card-text">{{val.hotel.hotelName}}</p>
            <p class="card-text">{{val.type}}</p>
            <div class="d-flex justify-content-between align-items-center">
              <div class="btn-group">
                <welcomemodalevent :idEvent='val.idEvent'></welcomemodalevent>
                <button type="button" class="btn btn-sm btn-outline-secondary"><i class="fas fa-euro-sign"></i> &nbsp;{{val.price}}</button>
              </div>

              <small class="text-muted">  {{ moment(val.created_at).startOf('hour').fromNow()  }}</small>
            </div>
          </div>
        </div>
      </div>

    </div>

  </section>

</template>
<script>
var moment = require('moment');

export default {
  data() {
    return {
      moment:moment,

      events: {}
    }
  },
  methods: {

    Load1(){
      axios.get('http://127.0.0.1:8000/eventVue')
      .then(response => this.events = response.data)
      .catch(error => console.log(error));
    }
  },

  created() {
    this.Load1();
  },


  mounted() {
    console.log('Component mounted.')
  }
}
</script>
