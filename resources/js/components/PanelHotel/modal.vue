<template>
  <section>
    <!-- <button class="button is-info"  >
      <span class="icon">
        <i class="fas fa-plus"></i>
      </span>
      <span>Add Room</span>
    </button> -->
    <button type="button" class="btn btn-sm btn-outline-secondary" @click="openModal = true">
      <i class="fas fa-plus"></i>&nbsp;
      Add Room
    </button>
    <!-- Modal Add Room -->
    <div class="modal "  :class="openModal === true ? 'is-active' : ''">
      <div class="modal-background"></div>
      <div class="modal-card">
        <header class="modal-card-head">
          <p class="modal-card-title">Add Room</p>
          <button class="delete" aria-label="close" @click="openModal = false"></button>
        </header>
        <section class="modal-card-body">
          <!-- Content ... -->
          <!-- select -->
          <div class="field">
            <label for="typeRoom" class="label">Room Type</label>
            <div class="control">
              <div class="select is-fullwidth is-medium">
                <select v-model="typeRoom" name="typeRoom">
                  <option selected="selected">Select Type</option>
                  <option value="single">Single</option>
                  <option value="double">Double</option>
                  <option value="communicatingRoom">Communicating Room</option>
                </select>
              </div>
            </div>
          </div>

          <div class="field">
            <label for="typeRoom" class="label">Price Type</label>
            <div class="control">
              <div class="select is-fullwidth is-medium">
                <select v-model="typePrice" name="typePrice">
                  <option selected="selected">Select Type</option>
                  <option value="FULL BOARD">FULL BOARD</option>
                  <option value="HALF BOARD">HALF BOARD</option>
                  <option value="NIGHT+BREAKFAST">NIGHT + BREAKFAST</option>
                </select>
              </div>
            </div>
           </div>
          <!-- end select -->
          <!-- Price -->
          <div class="field">
            <label for="price" class="label">Room Type</label>
            <p class="control has-icons-left">
              <input class="input is-fullwidth is-medium "
              type="text"
              placeholder="Price"
              v-model="price"
              name='price'
              >
              <span class="icon is-small is-left">
                <i class="fas fa-euro-sign"></i>
              </span>
            </p>
            <!-- <p v-for="val in error">{{val}}</p> -->
          </div>
          <!-- End Price -->
        </section>
        <footer class="modal-card-foot">
          <button class="button is-info" @click="roomStore(),openModal = false">Add </button>
          <button class="button" @click="openModal = false">Cancel</button>
        </footer>
      </div>
    </div>
  </section>
</template>
<script>

var moment = require('moment');
export default {

  data(){
    return {
      moment:moment,
      openModal : false,
      typeRoom: "",
      price: "",
      typePrice: ""
    }
  },

  methods: {
    roomStore(){
      axios.post('http://127.0.0.1:8000/addRoom',{
        typeRoom: this.typeRoom,
        price :   this.price,
        typePrice : this.typePrice,
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
