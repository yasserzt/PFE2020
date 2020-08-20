<template>
  <section>



    <div class="level">
      <div class="level-left">
        <!-- <div class="field has-addons">
          <div class="control   ">
            <div class="select ">
              <select name="Edit">
                <option selected>Select Action</option>
                <option value="delete">Delete selected</option>
              </select>
            </div>

          </div>
          <div class="control">
            <button  class="button is-info">Choose</button>
          </div>
        </div> -->
      </div>
      <div class="level-right">
        <div class="field has-addons">
          <div class="control">
            <add-room @room-added="refresh"></add-room>
          </div>
          <div class="control">
            <!-- <roomnumber :roomM="room" ></roomnumber> -->
          </div>
        </div>

      </div>
    </div>

    <!-- table -->


    <div class="columns is-multiline">


      <div class="column is-12">
        <table id="tab2" class="table table-dark table-sm  table-bordered text-white">
          <thead>
            <tr>
              <th class='text-center text-white'>Room Category</th>
              <th class='text-center text-white'>Price</th>
              <th class='text-center text-white'>Price Type</th>
              <th class='text-center text-white'>Reserved Room</th>
              <th class='text-center text-white'>Created at</th>
              <th class='justify-content-center text-center text-white'></th>
            </tr>
          </thead>
          <tbody>
            <tr v-for="val in price">
              <td class='text-center'>{{val.roomCategory}}</td>
              <td class='text-center'>{{val.price}}</td>
              <td class='text-center'>{{val.typePrice}}</td>
              <td class='text-center'>
                <span v-if="val.bookings.length >= 1">
                  <span hidden>{{total =0 }} {{totalD = 0}}{{totalC=0}}</span>

                  <span v-if="val.roomCategory== 'single'  ">
                    <span hidden v-for="v in val.bookings">
                      {{total+=v.roomNumber}}
                    </span>
                    {{total}}
                    <span hidden>{{t1 = total}}</span>
                  </span>

                  <span v-if="val.roomCategory== 'double'  ">
                    <span hidden v-for="v in val.bookings">
                      {{totalD+=v.roomNumber}}
                    </span>
                    {{totalD}}
                    <span hidden>{{t2 = totalD}}</span>

                  </span>

                  <span v-if="val.roomCategory== 'communicatingRoom'   ">
                    <span hidden v-for="v in val.bookings">
                      {{totalC+=v.roomNumber}}
                    </span>
                    {{totalC}}
                    <span hidden>{{t3 = totalC}}</span>

                  </span>

                </span>

                <span v-else>
                  0
                </span>


              </td>

              <td class='text-center'>
                {{ moment(val.created_at).startOf('day').fromNow() }}

              </td>

              <td class=' '>
                <div class="field has-addons   ">

                  <edit :rooms="val" @room-update="refresh"></edit>

                  <p class="control">
                    <a class="button is-danger" @click='deleteRoom(val.idPrice),refreshh'>
                      <span class="icon is-small">
                        <i class="fas fa-times-circle"></i>
                      </span>
                      <!-- <span>Delete</span> -->
                    </a>
                  </p>
                </div>
              </td>
            </tr>
          </tbody>
        </table>
      </div>

      <div class="column is-12">
        <p hidden>
          {{t = 0}}
          <span v-for="v in room">
            room  : {{t+=v.roomNumber}} <br>
          </span>
        </p>

        <table id="tab1" class="table table-dark table-sm  table-bordered text-white">
          <thead>
            <tr>
              <th class='text-center text-white'>Room Type</th>
              <th class='text-center text-white'>Room Number</th>
              <th class='text-center text-white'>Avilaible Rooms</th>
              <th class='text-center text-white'></th>
            </tr>
          </thead>
          <tbody>
            <tr v-for="val in room">
              <td class='text-center'>{{val.roomType}}</td>
              <td class='text-center'>{{val.roomNumber}}</td>
              <td class='text-center' v-if="val.roomType == 'single'">{{val.roomNumber - t1}} </td>
              <td class='text-center' v-if="val.roomType == 'double'">{{val.roomNumber -t2 }}</td>
              <td class='text-center' v-if="val.roomType == 'communicatingRoom'">{{val.roomNumber -t3}}</td>
              <td class='text-center'>
                <div class="field has-addons   ">

                  <editnbr :rooms="val" @rooms-update="refreshh"></editnbr>

                </div>
              </td>
            </tr>

          </tbody>
        </table>

      </div>

    </div>


    <br>


  </section>
</template>



<script>
var moment = require('moment');
export default {
  props: ['room','price'],
  data(){
    return {

      moment:moment,
      openModal : false,
      typeRoom: "",
      price: "",
      total :0,
      totalD :0,
      totalC :0,
      Total:[],
      i:0,
      dispo : {},
      t : 0,
      t1: 0,
      t2: 0,
      t3: 0
    }
  },


  methods: {
    // Load(){
    //   axios.get('http://127.0.0.1:8000/rooms')
    //   .then(response => this.rooms = response.data)
    //   .catch(error => console.log(error));
    // },
    // roomsDispo(){
    //   axios.get('http://127.0.0.1:8000/roomDispo')
    //   .then(response => this.dispo = response.data)
    //   .catch(error => console.log(error));
    // },
    deleteRoom(id){
      axios.delete('http://127.0.0.1:8000/deleteRoom/'+id)
      .then(response => this.price = response.data)
      .catch(error => console.log(error));
    },

    refresh(price,room){
      this.price  = price.data;
      this.room  = room.data;
    },
    refreshh(room){
      this.room  = room.data;
    }

  },
  created(){

    // this.Load();
    // this.roomsDispo();
  },

  mounted() {
    $('#tab2').cardtable();
    $('#tab1').cardtable();

    console.log('Component mounted.')
  }
}
</script>
