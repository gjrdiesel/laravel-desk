<template>
    <div>
        <manage-bar></manage-bar>
        <div v-for="ticket in tickets" :is="getType(ticket)" :ticket="ticket"></div>
    </div>
</template>
<script>
    import Internal from './Internal.vue'
    import Ticket from './Ticket.vue'
    import ManageBar from './ManageBar.vue'
    export default {
        components: { Internal, Ticket, ManageBar },
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
                tickit: tickit,
            }
        }
    }
</script>