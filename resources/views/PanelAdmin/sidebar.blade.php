<b-sidebar

     type="bg-vue"
     can-cancel="true"
     :fullheight="fullheight"
     :overlay="overlay"
     :open.sync="open"
   >
   <a class=" tag is-delete is-dark" @click="open = false" style="left:25vh;top:1vh;position:relative;"></a>

     <div class="p-1" >

       <b-menu>
         <b-menu-list label="Menu">
           <b-menu-item icon="tachometer-alt"  icon-pack="fas" label="Dashboard"></b-menu-item>


           <b-menu-item icon="users" icon-pack="fas" >
             <template slot="label" slot-scope="props" >
               Clients
               <b-icon class="is-pulled-right" :icon="props.expanded ? 'menu-down' : 'menu-up'"></b-icon>
             </template>
             <b-menu-item icon="address-card" icon-pack="far" label="Clients Data"  class="noDeco" href="{{url('us')}}" ></b-menu-item>
             <!-- <router-link to="/client">Go to Foo</router-link> -->
             <!-- <b-menu-item  label=""></b-menu-item> -->
             <b-menu-item icon="cash-multiple" label="Payments" disabled></b-menu-item>
           </b-menu-item>
           <!-- End Users -->

           <b-menu-item icon="hotel" icon-pack="fas">
             <template slot="label" slot-scope="props">
               Hotels
               <b-icon class="is-pulled-right" :icon="props.expanded ? 'menu-down' : 'menu-up'"></b-icon>
             </template>
             <b-menu-item icon="layer-group" icon-pack="fas" label="Hotels Data"     class="noDeco"></b-menu-item>
             <b-menu-item icon="credit-card" icon-pack="fas" label="Subscription"     style="text-decoration:none;"></b-menu-item>
             <b-menu-item icon="cash-multiple" label="Payments" disabled></b-menu-item>
           </b-menu-item>
           <!-- End Hotel -->


           <b-menu-item icon="bed" icon-pack="fas">
             <template slot="label" slot-scope="props">
               Reservation
               <b-icon class="is-pulled-right" :icon="props.expanded ? 'menu-down' : 'menu-up'"></b-icon>
             </template>
             <b-menu-item icon="door-closed" icon-pack="fas" label="Hotels offres"    ></b-menu-item>
             <b-menu-item icon="luggage-cart" icon-pack="fas" label="Client Reservation"    ></b-menu-item>
             <b-menu-item icon="cash-multiple" label="Payments" disabled></b-menu-item>
           </b-menu-item>
           <!-- End Hotel -->

         </b-menu-list>

       </b-menu>
     </div>
   </b-sidebar>
