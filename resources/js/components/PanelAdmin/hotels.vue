<template>
  <section>

    <table class="table table-dark table-sm  table-bordered text-white">
      <thead>
        <tr>
          <th class='text-center text-white'>Username</th>
          <th class='text-center text-white'>Hotel Name</th>
          <th class='text-center text-white'>Manager Name</th>
          <th class='text-center text-white'>Stars</th>
          <th class='text-center text-white'>Region</th>
          <th class='text-center text-white'>E-mail</th>
          <th class='text-center text-white'>Phone</th>
          <th class='text-center text-white'>URL(Web Site)</th>
          <th class='text-center text-white'>Account Statu</th>
          <th class='justify-content-center text-center text-white'>Manage Account</th>
        </tr>
      </thead>
      <tbody>
        <tr v-for="val in h">
          <td>{{val.user.username}}</td>
          <td>{{val.hotelName}}</td>
          <td>
            <span v-if="val.managerName == null  ">
              <span class="tag is-danger">Empty</span>
            </span>
            <span v-else>{{ val.managerName  }}</span>
          </td>
          <td class="text-center">
            <span v-if="val.stars == null  ">
              <span class="tag is-danger">Empty</span>
            </span>
            <span  v-else>{{ val.stars  }} <span class=" icon has-text-warning"> <i class="fas fa-star"></i></span></span>
          </td>
          <td class="text-center">
            <span v-if="val.region == null  ">
              <span class="tag is-danger">Empty</span>
            </span>
            <span v-else>{{ val.region  }}</span>
          </td>
          <td class="text-">
            <span v-if="val.user.email == null  ">
              <span class="tag is-danger">Empty</span>
            </span>
            <span v-else>{{ val.user.email  }}</span>
          </td>
          <td  class="text-center">
            <span v-if="val.phone == null  ">
              <span class="tag is-danger">Empty</span>
            </span>
            <span v-else>{{ val.phone  }}</span>
          </td>
          <td class="">
            <span v-if="val.url == null  ">
              <span class="tag is-danger">Empty</span>
            </span>
            <span v-else>{{ val.url  }}</span>
          </td>
          <td class="text-center">
            <span v-if="val.statu == 0  ">
              <span class="tag is-danger">Deactive</span>
            </span>
            <span v-else>
              <span class="tag is-success">Acitve</span>
            </span>
          </td>
          <td class="text-center">
            <span class="control" >
              <button class="button bg-trans" @click="openModal = true;Show(val.idHotel);">
                <span class="icon is-small">
                  <i class="fas fa-users-cog"></i>
                </span>
                <!-- <span>Left</span> -->
              </button>
            </span>
            <!-- Modal -->
            <div class="modal "  :class="openModal === true ? 'is-active' : ''">
              <div class="modal-background"></div>
              <div class="modal-card">
                <header class="modal-card-head">
                  <p class="modal-card-title">Account Management</p>
                  <button class="delete" aria-label="close" @click="openModal = false" ></button>
                </header>
                <section class="modal-card-body">
                  <!-- Content ... -->
                  <!-- UserName -->
                  <div class="field   " v-for="val in hotel" >
                    <label for="username" class="label">Username</label>
                    <p class="control has-icons-left"  >
                      <input class="input is-fullwidth is-medium "
                      type="text"
                      placeholder="Username"
                      name='username'
                      :value="val.user.username"
                      disabled
                      >
                      <span class="icon is-small is-left">
                        <i class="fas fa-user"></i>
                      </span>
                    </p>

                  </div>
                  <!-- End UserName -->


                  <!-- Email -->
                  <div class="field   "   v-for="val in hotel" >
                    <label for="email" class="label">E-mail</label>
                    <p class="control has-icons-left"  >
                      <input class="input is-fullwidth is-medium "
                      type="text"
                      placeholder=" E-mail"
                      name='email'
                      :value="val.user.email"
                      disabled
                      >
                      <span class="icon is-small is-left">
                        <i class="fas fa-envelope"></i>
                      </span>
                    </p>

                  </div>
                  <!-- End Email -->

                  <!-- Name -->
                  <div class="field" v-for="val in hotel" >
                    <label for="hotelName" class="label">Hotel Name</label>
                    <p class="control has-icons-left" >
                      <input class="input is-fullwidth is-medium "
                      type="text"
                      placeholder="Hotel Name"
                      name='hotelName'
                      :value="val.hotelName"
                      disabled
                      >
                      <span class="icon is-small is-left">
                        <i class="fas fa-hotel"></i>
                      </span>
                    </p>
                  </div>
                  <!-- End Name -->

                  <!-- Name -->
                  <div class="field" v-for="val in hotel" >
                    <label for="managerName" class="label">Manager Name</label>
                    <p class="control has-icons-left" >
                      <input class="input is-fullwidth is-medium "
                      type="text"
                      placeholder="Manager Name"
                      name='managerName'
                      :value="val.managerName"
                      disabled
                      >
                      <span class="icon is-small is-left">
                        <i class="fas fa-user-tie"></i>
                      </span>
                    </p>
                  </div>
                  <!-- End Name -->

                  <!-- Generate -->
                  <span v-for="val in hotel"   >
                    <p class="control has-text-centered" v-if="val.statu  == 0 &&  val.user.password == null ">
                      <a class="button bg-four has-text-white  is-medium"    @click='ActiveUser(val.user.id),openModal = false'>
                        Active user
                      </a>
                    </p>
                    <p class="control has-text-centered" v-else>
                      <a class="button is-danger has-text-white  is-medium"  @click='DeactiveUser(val.user.id),openModal = false'>
                        Desactive user
                      </a>
                    </p>
                  </span>
                  <!-- End star Phone URL -->
                </section>
                <footer class="modal-card-foot  ">
                  <button class="button is-info" @click=" ">Save </button>
                  <button class="button" @click="openModal = false"  >Cancel</button>
                </footer>
              </div>
            </div>
          </td>
        </tr>
      </tbody>
    </table>

  </section>
</template>
<script>
var moment = require('moment');

export default {
  props:['h'],
  data(){
    return {
      hotels: {},
      hotel: {},
      moment:moment,
      openModal : false,
      id: '',
      ActiveU : false
    }
  },
  methods: {

    ActiveUser(id){
      axios.post('http://127.0.0.1:8000/activeUser/'+id)
      .then(response => this.$emit('ActiveUser',response) )
      .catch(error => console.log(error));
    },
    DeactiveUser(id){
      axios.post('http://127.0.0.1:8000/desactiveUser/'+id)
      .then(response => this.$emit('ActiveUser',response) )
      .catch(error => console.log(error));
    },
    Show(id){
      axios.get('http://127.0.0.1:8000/hotel/'+id)
      .then(response => this.hotel = response.data)
      .catch(error => console.log(error));
    },


  },
  created(){
    // this.loadUsers();
    // setInterval( () => this.loadUsers(),1500);
  },

  mounted() {
    console.log('Component mounted.')
  }

}
</script>
