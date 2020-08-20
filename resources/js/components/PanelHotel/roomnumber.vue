<template>
  <section>
    <button class="button is-info"  @click="openModalR = true">
      <span class="icon">
        <i class="fas fa-edit"></i>
      </span>
      <span>Manage  Room Number</span>
    </button>
    <!-- Modal Add Room -->
    <div class="modal "  :class="openModalR === true ? 'is-active' : ''">
      <div class="modal-background"></div>
      <div class="modal-card">
        <header class="modal-card-head">
          <p class="modal-card-title">Manage  Room Number</p>
          <button class="delete" aria-label="close" @click="openModalR = false"></button>
        </header>
        <section class="modal-card-body">
          <!-- Content ... -->
          <!-- select -->
          <div class="field">
            <label for="typeRoom" class="label">Room Type</label>
            <div class="control">
              <div class="select is-fullwidth is-medium">
                <select  v-model="typeRoom"  name="typeRoom">
                  <option selected="selected">Select Type</option>
                  <option value="single">Single</option>
                  <option value="double">Double</option>
                  <option value="communicatingRoom">Communicating Room</option>
                </select>
              </div>
            </div>
          </div>

          <!-- end select -->
          <!-- Price -->
          <div class="field">

          </div>
          <!-- End Price -->
        </section>
        <footer class="modal-card-foot">
          <button class="button is-info" @click="roomStore(),openModalR = false">Add </button>
          <button class="button" @click="openModalR = false">Cancel</button>
        </footer>

      </div>
    </div>
  </section>
</template>
<script>

var moment = require('moment');
export default {
  props: ['roomM'],
  data(){
    return {
      errors : {},
      moment:moment,
      openModalR : false,
      typeRoom: "",
      price: ""
    }
  },

  methods: {
    roomStore(){
      axios.post('http://127.0.0.1:8000/addRoom',{
        typeRoom: this.typeRoom,
        price :   this.price
      })
      .then(response => this.$emit('room-added',response))
      .catch(error => {
        // this.error = error.response.data.errors;
        this.errors = error.response.data;

        // alert(.response.data.errors.typeRoom);

      });
    }
  },
  mounted() {
    console.log('Component mounted.')
  }
}
</script>
