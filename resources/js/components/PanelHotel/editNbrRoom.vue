<template>
  <section>
    <p class="control">
      <button class="button is-info"  @click="openModal  = true" >
        <span class="icon">
          <i class="fas fa-user-edit"></i>
        </span>
        <!-- <span>Edit Room</span> -->
      </button>
      <!-- Modal Add Room -->
      <div class="modal "  :class="openModal === true ? 'is-active' : ''">
        <div class="modal-background"></div>
        <div class="modal-card">
          <header class="modal-card-head">
            <p class="modal-card-title">Edit Room</p>
            <button class="delete" aria-label="close" @click="openModal = false"></button>
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
              <label for="price" class="label">Room Type</label>
              <p class="control has-icons-left">
                <input class="input is-fullwidth is-medium "
                type="text"
                placeholder="Room Available"
                v-model=" nbr"
                name='nbr'

                >
                <span class="icon is-small is-left">
                  <i class="fas fa-sort-numeric-down"></i>
                </span>
              </p>
             </div>
            <!-- End Price -->
          </section>
          <footer class="modal-card-foot">
            <button class="button is-info" @click="updateRoom(rooms.idRoom),openModal = false" >Save changes</button>
            <button class="button" @click="openModal = false">Cancel</button>
          </footer>
        </div>
      </div>
    </p>
  </section>
</template>
<script>

var moment = require('moment');

export default {
  props:[
    'rooms'
  ],
  data(){
    return {
      errors : {},
      moment:moment,
      openModal : false,
      typeRoom: this.rooms.roomType,
      nbr: this.rooms.roomNumber
    }
  },

  methods: {

    updateRoom(id){
      axios.patch('http://127.0.0.1:8000/updateRooms/'+id,{
        typeRoom: this.typeRoom,
        nbr: this.nbr
      })
      .then(response => this.$emit('rooms-update',response))
      .catch(error => console.log(error));
    },
  },
  mounted() {
    console.log('Component mounted.')
  }
}
</script>
