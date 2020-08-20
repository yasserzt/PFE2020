<template>

  <section>
    <div class="row row-cols-1 row-cols-sm-2 row-cols-md-3 g-3" >

      <div class="col" v-for='val in Data.data'>

        <div class="card shadow-sm">
          <span hidden>{{i=1}}{{url = 'img/h/h'+ i +'.jpg'}}</span>
          <img :src="val.img" alt="" class="img">
          <span hidden >{{i++}}</span>
          <div class="card-body">
            <p class="card-text">{{val.hotelName}}.</p>
            <p class="card-text">{{val.description}}.</p>
            <div class="d-flex justify-content-between align-items-center">
              <div class="btn-group">
                <modal :idPrice='val.idPrice'></modal>
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
      url: "",
      moment:moment,
      i:0,
      Data: [],
    }
  },
  methods: {

    Load1(){
      axios.get('http://127.0.0.1:8000/HomeSearchD')
      .then(response => this.Data = response.data)
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
