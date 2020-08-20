<template>
  <section>

<button type="button" class="btn btn-sm btn-outline-secondary"  @click="openModal = true">View</button>

<!-- modal -->
<div class="modal"  :class="openModal === true ? 'is-active' : ''" v-for="val in events">
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
            <p class="title is-4">{{val.hotel.hotelName}}</p>
            <p class="subtitle is-6"><i class="fas fa-map-pin"></i>   &nbsp;{{val.hotel.region}}&nbsp;   <i class="fas fa-star"></i>   &nbsp;{{val.hotel.stars}}    </p>
          </div>
        </div>

        <div class="content">
          <span class="content title is-5">
            Event Type : {{val.type}}
          </span>
          <br>
          <span class="content text-muted">
            {{val.description}}
          </span>
          <br>
          <br>
          <span class="tag is-info float-right is-medium"><i class="fas fa-euro-sign "></i> &nbsp; {{val.price}}</span>
          <br>
          <br>
          <span hidden>{{st = "eventCheckout/"+val.idEvent}}</span>
          <a :href="st" class="button noDeco float-right">Registre for the event&nbsp;<i class="fas fa-chevron-right "></i></a>
          <br>
          <br>
          <span class="float-right">
            <span class="text-muted is-warning">Note : </span><span class="text-muted">register your  name and payment will be on the spot</span>
          </span>
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
  props : ['idEvent'],
  data(){
    return {
      events: {},
      openModal : false,
      st: ""
    }
  },

  methods: {

    Load1(){
      axios.get('http://127.0.0.1:8000/eventShow/'+this.idEvent)
      .then(response => this.events = response.data)
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
