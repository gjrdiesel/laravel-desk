<template>
    <div>
        <manage-bar></manage-bar>

        <div v-for="ticket in tickets" :is="getType(ticket)" :ticket="ticket"></div>



        <div v-if="tickets.length == 0">
            <div class="text-center" style="opacity:.3">
                <h1>
                    Woah, no new tickets??
                </h1>
                <h3>
                    Awesome. Heres a tiny giraffe as a reward.
                </h3>
                <br><br>
                <img src='http://i6.photobucket.com/albums/y242/dirtylilmexican/Opulence.gif'>
            </div>
        </div>
    </div>
</template>
<script>
    import Internal from './Internal.vue'
    import Ticket from './Ticket.vue'
    import ManageBar from './ManageBar.vue'
    import WriteTicket from './WriteTicket.vue'
    export default {
        components: { Internal, Ticket, ManageBar, WriteTicket },
        watch: {
          'tickit.ticket'(ticket){

              if( !ticket.id ){
                  this.tickets = [];
                  return;
              }

              this.$http.get('/tickets/'+ticket.id).then((response)=>{
                  this.tickets = response.data;
             });
          }
        },
        methods: {
            getType(ticket){
                return 'Ticket'
            }
        },
        data(){
            return {
                tickets: [],
                tickit: tickit
            }
        }
    }
</script>