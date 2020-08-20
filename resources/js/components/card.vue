
<template>

  <section>

    <div class="container">
      <div class="row ">

        <div class="col-md-3 pb-2" v-for='val in card'>
          <div class="card">
            <img class="card-img-top" src='img/bg1.jpg' alt="Card image cap">
            <div class="card-body">
              <h5 class="card-title">{{val.hotelName}}</h5>
              <h5 class="card-title"><i class="fas fa-map-pin"></i>   &nbsp;{{val.region}}</h5>
              <h5 class="card-title"><i class="fas fa-map-pin"></i>   &nbsp;{{val.stars}}</h5>

              <p class="card-text is-marginless">
                <span v-if=" val.roomCategory == 'single'">
                  <p class=" color-four is-size-7  " >1 night, 2 adults</p>
                  <p class=" color-four is-size-7  " >Single Room</p>
                </span>
                <span v-if="val.prices.roomCategory == 'double'">
                <p class=" color-four is-size-7  " >1 night, 2 adults</p>
                <p class=" color-four is-size-7  " >Double Room</p>
                </span>
                <span v-if="val.prices.roomCategory == 'communicatingRoom'">
                <p class=" color-four is-size-7  " >1 night, 4 adults</p>
                <p class=" color-four is-size-7  " >Communicating Room</p>
                </span>

              </p>

            </div>
            <div class="card-footer">
              <div class="folat-right">
                <a href='#' class="button  noDeco color-four   bg-vue">More Info   &nbsp;<i class="fas fa-chevron-right "></i></a>
              </div>

            </div>
          </div>
        </div>
         <br>

      </div>
      <br>

    </div>

  </section>


</template>

<script>
var moment = require('moment');

export default {
  props: ['card'],
  data() {
    return {
      card: [],
      q: ""
    }
  },
  methods: {
    // Load(){
    //   axios.get('http://127.0.0.1:8000/card')
    //   .then(response => this.card = response.data)
    //   .catch(error => console.log(error));
    // },

  },
  created(){
    this.Load();
  }
  ,
  mounted() {

  },
};
</script>

<style>
body {
  font-family: sans-serif;
  padding: 1em;
}
</style>
