<template>
  <section>
    <!-- <button class="button noDeco color-four   bg-vue" @click="openModal = true">

    <span class="icon is-small">
    <i class="fas fa-expand-arrows-alt"></i>
  </span>
</button> -->
<button type="button" class="btn btn-sm btn-outline-secondary"  @click="openModal = true">View</button>

<!-- modal -->
<div class="modal"  :class="openModal === true ? 'is-active' : ''" v-for="val in Data.data">
  <div class="modal-background"></div>
  <div class="modal-card">

    <div class="card">
      <div class="card-image">
        <figure class="image is-4by3">
          <img src="img/bg1.jpg" alt="Placeholder image">
        </figure>
      </div>
      <div class="card-content">
        <div class="media">

          <div class="media-content">
            <p class="title is-4">{{val.hotelName}}</p>
            <p class="subtitle is-6"><i class="fas fa-map-pin"></i>   &nbsp;{{val.region}}&nbsp;   <i class="fas fa-star"></i>   &nbsp;{{val.stars}}    </p>
          </div>
        </div>

        <div class="content">
          <span class="content">{{val.description}}</span>
          <span v-if=" val.roomCategory == 'single'">
            <p class=" color-four is-size-7  " >Single Room</p>
            <p class=" color-four is-size-7  " >{{val.typePrice}}</p>
            <a class=" color-four is-size-6  is-link" heref="#"><i class="fas fa-globe "></i>&nbsp;{{val.url}}</a><br>
            <a class=" color-four is-size-6  is-link  -right" heref="#"><i class="fas fa-phone "></i>&nbsp;{{val.phone}}</a>

          </span>
          <span v-if="val.roomCategory == 'double'">
            <p class=" color-four is-size-7  " >Double Room</p>
            <p class=" color-four is-size-7  " >{{val.typePrice}}</p>
            <a class=" color-four is-size-6  is-link" heref="#"><i class="fas fa-globe "></i>&nbsp;{{val.url}}</a><br>
            <a class=" color-four is-size-6  is-link    " heref="#"><i class="fas fa-phone "></i>&nbsp;{{val.phone}}</a>

          </span>
          <span v-if="val.roomCategory == 'communicatingRoom'">
            <p class=" color-four is-size-7  " >Communicating Room</p>
            <p class=" color-four is-size-7  " >{{val.typePrice}}</p>
            <a class=" color-four is-size-6  is-link" heref="#"><i class="fas fa-globe "></i>&nbsp;{{val.url}}</a><br>
            <a class=" color-four is-size-6  is-link    " heref="#"><i class="fas fa-phone "></i>&nbsp;{{val.phone}}</a>

          </span>
          <br>
          <span class="tag is-info float-right is-medium"><i class="fas fa-euro-sign "></i> &nbsp; {{val.price}}</span>
          <br>
          <br>
          <span hidden>{{st = "checkout/"+val.idPrice}}</span>
          <a :href="st" class="button noDeco float-right">Reserve Now &nbsp;<i class="fas fa-chevron-right "></i></a>
        </div>
      </div>
    </div>

  </div>
  <button class="modal-close is-large" aria-label="close" @click="openModal = false"></button>
</div>

</section>
</template>


<script>
export default {
  props : ['idPrice'],
  data(){
    return {
      Data: [],
      openModal : false,
      st: ""
    }
  },

  methods: {

    Load1(){
      axios.get('http://127.0.0.1:8000/HomeSearchOne/'+this.idPrice)
      .then(response => this.Data = response.data)
      .catch(error => console.log(error));
    }
  },
  created() {
    this.Load1();
  },
  watch: {
    openModal(){
      this.Load1();
    }
  },
  mounted() {
    console.log('Component mounted.')
  }
}
</script>
