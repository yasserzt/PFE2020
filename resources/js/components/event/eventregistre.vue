<template>

  <section>
    <div v-show="display" class="conatiner">
      <div class="mx-auto" style="width: 50vh;">
        <div class="notification " :class="res.color == 'red' ?'is-danger':'is-info'">{{res.statu}}</div>
      </div>
    </div>
    <div class="row m-5" style='height:50vh;'>
      <div class="col-md-9   ">

        <table class="table  table-sm  ">
          <thead>
            <tr>
              <th>Hotel Name</th>
              <th>Event Type</th>
              <th>Price</th>
              <th>Number Place</th>
              <th></th>
            </tr>
          </thead>
          <tbody>

            <tr v-for="val in event">
              <td>{{val.hotel.hotelName}}</td>
              <td>{{val.type}}</td>
              <td><i class="fas fa-euro-sign"></i>&nbsp;{{val.price}}</td>
              <td style="width:15%;"><input class="input" type="number" placeholder="number" min="1" id="nbr"  v-model="nbr" ></td>
              <td></td>
              <span hidden> {{id = val.idEvent}}</span>
            </tr>

          </tbody>
        </table>

      </div>
      <div class="col-md-3  ">

        <span class="title is-5 has-text-weight-bold"></span><br>
        <br>


        <button class="button is-fullwidth is-info" @click="check(id)">Registre</button>
      </div>

    </div>






  </section>

</template>
<script>
var moment = require('moment');

export default {
  props: ['event'],
  data() {
    return {
      moment:moment,
      id:0,
      res: '',
      nbr: 1,
      display: false
    }
  },
  methods: {
    check(id){
      axios.post('http://127.0.0.1:8000/registreEvent/',{
        idEvent  : this.id,
        nbr      : this.nbr
      })
      .then(response =>

        this.res = response.data,
        this.display=true,
        
      )
      .catch(error => console.log(error));


      // if(res.color == 'green'){
      //   alert(res.color);
      // }else{

      //
      // }
    }
    ,

  },

  created() {
  },


  mounted() {
    // this.check();
    console.log('Component mounted.')
  }
}
</script>
