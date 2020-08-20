
<template>

  <section>

    <div class="container">
      <div class="level">

        <div class="level-left">
          <nav class="breadcrumb has-background-white" aria-label="breadcrumbs">
            <ul>
              <li><a class="noDeco color-four" href="#">Home</a></li>
              <li class="is-active"><a href="#" aria-current="page">Search</a></li>
            </ul>
          </nav>
        </div>

        <div class="level-right">
          <!-- <form action="{{url('ExSearch')}}" method="post"> -->
<!--
          <div class="field has-addons">
            <div class="control has-icons-left">
              <input class="input" type="text" name="q" placeholder="Place or Hotel Name">
              <span class="icon is-small is-left">
                <i class="fas fa-map-marker-alt"></i>
              </span>
            </div>
            <div class="control">
              <a class="button bg-four text-white">
                Search
              </a>
            </div>
          </div> -->
          <!-- </form> -->
        </div>

      </div>

      <!-- End  breadcrumbs-->
      <hr>
      <div class="columns " style="height:90vh;">



        <div class="column is-2  bg-vue bd-radius">

          <div class="columns is-multiline">

            <div class="column is-12">
              <span class="label">Chose Region : </span>

              <div class="field is-narrow ">
                <div class="control">
                  <div class="select is-fullwidth">
                    <select v-model="region">
                      <option value="Ariana">Ariana</option>
                      <option value="Beja">Béja</option>
                      <option value="BenArous">Ben Arous</option>
                      <option value="Bizerte">Bizerte</option>
                      <option value="Djerba">Djerba</option>
                      <option value="Gabes">Gabès</option>
                      <option value="Gafsa">Gafsa</option>
                      <option value="Jendouba">Jendouba</option>
                      <option value="Kairouan">Kairouan</option>
                      <option value="Kasserine">Kasserine</option>
                      <option value="Kebili">Kebili</option>
                      <option value="Kef">Kef</option>
                      <option value="Mahdia">Mahida</option>
                      <option value="Manouba">Manouba</option>
                      <option value="Monastir">Monastir</option>
                      <option value="Nabeul">Nabeul</option>
                      <option value="Sfax">Sfax</option>
                      <option value="SidiBouzid">Sidi Bouzid</option>
                      <option value="Silana">Silana</option>
                      <option value="Sousse">Sousse</option>
                      <option value="Tataouine">Tataouine</option>
                      <option value="Tozuer">Tozuer</option>
                      <option value="Tunis">Tunis</option>
                      <option value="Zaghouan">Zaghouan</option>
                    </select>
                  </div>
                </div>
              </div>
            </div>

            <div class="column is-12">
              <span class="label">Pension : </span>

              <label class="checkbox">
                <input type="checkbox" v-model="pension" value="HALF BOARD">
                HALF BOARD
              </label><br>

              <label class="checkbox">
                <input type="checkbox" v-model="pension" value="NIGHT+BREAKFAST">
                NIGHT+BREAKFAST
              </label><br>

              <label class="checkbox">
                <input type="checkbox"  v-model="pension" value="FULL BOARD">
                FULL BOARD
              </label><br>

            </div>

            <div class="column is-12">
              <span class="label">Stars Number : </span>

              <label class="checkbox">
                <input type="checkbox"  v-model="stars" value="1">
                1 star
              </label><br>

              <label class="checkbox">
                <input type="checkbox" v-model="stars" value="2">
                2 stars
              </label><br>

              <label class="checkbox">
                <input type="checkbox" v-model="stars" value="3">
                3 stars
              </label><br>

              <label class="checkbox">
                <input type="checkbox" v-model="stars" value="4">
                4 stars
              </label><br>

              <label class="checkbox">
                <input type="checkbox" v-model="stars" value="5">
                5 stars
              </label><br>

              <label class="checkbox">
                <input type="checkbox" v-model="starsAll" value="all">
                All
              </label><br>

            </div>

            <div class="column is-12">
              <span class="label">Price : </span>

              <label class="checkbox">
                <input type="checkbox" v-model="prix" value="0,50">
                0 &nbsp;&nbsp;&nbsp;&nbsp;<i class="fas fa-euro-sign"></i> - 50&nbsp;&nbsp; <i class="fas fa-euro-sign"></i>
              </label><br>

              <label class="checkbox">
                <input type="checkbox" v-model="prix" value="50,100">
                50 &nbsp;&nbsp;<i class="fas fa-euro-sign"></i> - 100 <i class="fas fa-euro-sign"></i>
              </label><br>

              <label class="checkbox">
                <input type="checkbox" v-model="prix" value="100,150">
                100 <i class="fas fa-euro-sign"></i> - 150 <i class="fas fa-euro-sign"></i>
              </label><br>

              <label class="checkbox">
                <input type="checkbox" v-model="prix" value="150,200">
                150 <i class="fas fa-euro-sign"></i> - 200 <i class="fas fa-euro-sign"></i>
              </label><br>

              <label class="checkbox">
                <input type="checkbox" v-model="prix" value="200,250">
                200 <i class="fas fa-euro-sign"></i> - 250 <i class="fas fa-euro-sign"></i>
              </label><br>

              <label class="checkbox">
                <input type="checkbox" v-model="prix" value="plus">
                Others
              </label><br>

            </div>

            <div class="column is-12 justify-content-center has-text-weight-bold	text-center">
              <hr>
              <a href="#" class="button is-small noDeco"><i class="fas fa-phone is-size-6"></i></a>
              <a href="#" class="button is-small noDeco"><i class="fas fa-envelope is-size-6"></i></a>
              <a href="#" class="button is-small noDeco"><i class="fab fa-facebook-f is-size-6"></i></a>
              <a href="#" class="button is-small noDeco"><i class="fab fa-instagram is-size-6"></i></a>
              <a href="#" class="button is-small noDeco"><i class="fab fa-linkedin-in is-size-6"></i></a>
            </div>

          </div>
          <!-- Filter -->


        </div>

        <div class="column " style="height:100vh;">

          <div class="row row-cols-1 row-cols-sm-2 row-cols-md-3 g-3" >

            <div class="col" v-for='val in card.data'>
              <div class="card shadow-sm">
                <!-- <svg class="bd-placeholder-img card-img-top" width="100%" height="225" xmlns="http://www.w3.org/2000/svg" aria-label="Placeholder: Thumbnail" preserveAspectRatio="xMidYMid slice" role="img" focusable="false"><title>Placeholder</title><rect width="100%" height="100%" fill="#55595c"/><text x="50%" y="50%" fill="#eceeef" dy=".3em">Thumbnail</text></svg> -->
                <img class="card-img-top" :src='val.img' alt="Card image cap">

                <div class="card-body">
                  <h5 class="card-title">{{val.hotelName}} <br></h5>
                  <h5 class="card-title"><i class="fas fa-map-pin color-four"></i>   &nbsp;{{val.region}}&nbsp;   <i class="fas fa-star has-text-warning"></i>   &nbsp;{{val.stars}}   &nbsp;   <i class="fas fa-euro-sign"></i> {{val.price}}</h5>

                  <p class="card-text is-marginless">
                    <span v-if=" val.roomCategory == 'single'">
                      <p class=" color-four is-size-7  " >Single Room</p>
                      <p class=" color-four is-size-7  " >{{val.typePrice}}</p>

                    </span>
                    <span v-if="val.roomCategory == 'double'">
                      <p class=" color-four is-size-7  " >Double Room</p>
                      <p class=" color-four is-size-7  " >{{val.typePrice}}</p>
                    </span>
                    <span v-if="val.roomCategory == 'communicatingRoom'">
                      <p class=" color-four is-size-7  " >Communicating Room</p>
                      <p class=" color-four is-size-7  " >{{val.typePrice}}</p>
                    </span>

                  </p>
                  <div class="d-flex justify-content-between align-items-center">
                    <div class="btn-group">
                      <modal :idPrice='val.idPrice'></modal>
                      <button type="button" class="btn btn-sm btn-outline-secondary"><i class="fas fa-euro-sign"></i> &nbsp;{{val.price}}</button>
                    </div>

                    <small class="text-muted">  {{ moment(val.created_at).startOf('hour').fromNow()  }}</small>
                  </div>
                </div>
              </div>
            </div>

          </div>


          <!-- <div class="row ">

          <div class="col-md-3 pb-2" v-for='val in card.data'>
          <div class="card">
          <img class="card-img-top" src='img/bg1.jpg' alt="Card image cap">
          <div class="card-body">
          <h5 class="card-title">{{val.hotelName}} <br></h5>

          <h5 class="card-title"><i class="fas fa-map-pin color-four"></i>   &nbsp;{{val.region}}&nbsp;   <i class="fas fa-star has-text-warning"></i>   &nbsp;{{val.stars}}   &nbsp;   <i class="fas fa-euro-sign"></i> {{val.price}}</h5>


          <h5 class="card-title"></h5>


          <p class="card-text is-marginless">
          <span v-if=" val.roomCategory == 'single'">
          <p class=" color-four is-size-7  " >Single Room</p>
          <p class=" color-four is-size-7  " >{{val.typePrice}}</p>
          <a class=" color-four is-size-6  is-link" heref="#">{{val.url}}</a>
          <a class=" color-four is-size-6  is-link float-right" heref="#"><i class="fas fa-phone "></i>&nbsp;{{val.phone}}</a>

        </span>
        <span v-if="val.roomCategory == 'double'">
        <p class=" color-four is-size-7  " >Double Room</p>
        <p class=" color-four is-size-7  " >{{val.typePrice}}</p>
        <a class=" color-four is-size-6  is-link" heref="#">{{val.url}}</a>
        <a class=" color-four is-size-6  is-link float-right" heref="#"><i class="fas fa-phone "></i>&nbsp;{{val.phone}}</a>

      </span>
      <span v-if="val.roomCategory == 'communicatingRoom'">
      <p class=" color-four is-size-7  " >Communicating Room</p>
      <p class=" color-four is-size-7  " >{{val.typePrice}}</p>
      <a class=" color-four is-size-6  is-link" heref="#">{{val.url}}</a>
      <a class=" color-four is-size-6  is-link float-right" heref="#"><i class="fas fa-phone "></i>&nbsp;{{val.phone}}</a>

    </span>

  </p>

</div>
<div class="card-footer">
<div class="text-muted">
<a href='#' class="button  noDeco color-four   bg-vue">More Info   &nbsp;<i class="fas fa-chevron-right "></i></a>
<div class="field has-addons">
<p class="control">
<modal :idPrice='val.idPrice'></modal>
</p>
<p class="control">
<a class="button  noDeco color-four   bg-vue">

<span>More Info   &nbsp;<i class="fas fa-chevron-right "></i></span>
</a>
</p>

</div>
</div>

</div>
</div>
</div>
<br>

</div> -->
<br>

<p v-if="card.data == ''" class="justify-content-center has-text-weight-bold	text-center">
  <i class="fas fa-sad-tear is-size-1"></i>
  <br>
  <p v-if="card.data == ''"  class=" justify-content-center has-text-weight-bold text-center">No Result</p>
</p>

<div class="justify-content-center pagination ">
  <pagination :data="card" @pagination-change-page="Load"></pagination>
</div>
</div>





</div>
</div>

</section>


</template>

<script>
var moment = require('moment');

export default {

  data() {
    return {
      moment:moment,
      card: [],
      stars: [],
      prix: [],
      starsAll: [],
      pension: [],
      region: ''
    }
  },

  methods: {

    Load(page = 1){
      axios.post('http://127.0.0.1:8000/ExSearch?page='+page,{

        stars : this.stars,
        region: this.region,
        prix  : this.prix,
        pension : this.pension

      })
      .then(response => this.card = response.data)
      .catch(error => console.log(error));
    },
    reset(page = 1){
      axios.get('http://127.0.0.1:8000/card?page='+page)
      .then(response => this.card = response.data)
      .catch(error => console.log(error));
    }
  },
  watch: {
    prix:function(before,after){
      this.Load();
    },
    region:function(before,after){
      this.Load();
    },
    stars: function(before,after){
      this.Load();
    },
    pension: function(before,after){
      this.Load();
    },
  },
  created() {
    this.Load();
  },

};
</script>
