<template>
  <section>

    <table class="table" id="tab">
      <thead>
        <tr>
          <th>Room Type</th>
          <th>Room Number</th>
        </tr>
      </thead>
      <tbody>
        <tr v-for="val in us">
          <td>{{val.id}}</td>
          <td>{{val.username}}</td>
        </tr>

    </tbody>
  </table>


</section>
</template>
 <script>

export default {
  props:['us'],
  data(){
    return {

      dispo : {},
    }
  },

  methods: {
    roomsDispo(){
      axios.get('http://127.0.0.1:8000/roomDispo')
      .then(response => this.dispo = response.data)
      .catch(error => console.log(error));
    },

  },
  created(){
    this.roomsDispo();
  },
  mounted(){

    $('#tab').cardtable();

  }
}

</script>
