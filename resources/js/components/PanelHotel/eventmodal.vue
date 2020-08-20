<template>
  <section>

    <div class="level">


      <div class="level-left"></div>

      <div class="level right">
        <button type="button" class="btn btn-sm btn-outline-secondary  " @click="openModal = true">
          <i class="fas fa-plus"></i>&nbsp;
          Add Event
        </button>
      </div>

    </div>


    <!-- modal -->

    <div class="modal "  :class="openModal === true ? 'is-active' : ''">
      <div class="modal-background"></div>
      <div class="modal-card">
        <header class="modal-card-head">
          <p class="modal-card-title">Add Room</p>
          <button class="delete" aria-label="close" @click="openModal = false"></button>
        </header>
        <section class="modal-card-body">

          <div class="field">
            <label for="typeRoom" class="label">Room Type</label>
            <div class="control">
              <div class="select is-fullwidth is-medium">
                <select v-model="typeRoom" name="typeRoom">
                  <option selected="selected">Select Type</option>
                  <option value="Executive">Executive</option>
                  <option value="Gala">Gala</option>
                  <option value="Sportive">Sportive</option>
                  <option value="Réveillon">Réveillon</option>
                  <option value="Randonnéé">Randonnéé</option>
                </select>
              </div>
            </div>
          </div>

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
          </div>

          <label for="price" class="label">Start/End Date</label>


          <div class="input-group mb-3">
            <input type="date" class="form-control" aria-label="Text input with dropdown button" name="startDate" v-model="startDate">
            <input type="date" class="form-control" aria-label="Text input with dropdown button" name="endDate" v-model="endDate">
          </div>


        </section>
        <footer class="modal-card-foot">
          <button class="button is-info" @click="eventStore(), openModal = false">Add </button>
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
      startDate: '',
      endDate: ''
    }
  },
  methods: {
    eventStore(){
      axios.post('http://127.0.0.1:8000/addEvent',{
        typeRoom: this.typeRoom,
        price :   this.price,
        startDate: this.startDate,
        endDate: this.endDate
      })
      .then(response => this.$emit('event-added',response))
      .catch(error => console.log(error));
    }
  },
  mounted() {
    console.log('Component mounted.')
  }
}
</script>
