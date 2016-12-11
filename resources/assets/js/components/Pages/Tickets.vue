<template>
    <div>
        <ticket-side></ticket-side>
        <div class="content">
            <component :is="tickit.tickets_page"></component>
        </div>
    </div>
</template>
<script>
    import TicketList from '../Tickets/List.vue'
    import TicketSide from '../Side/Ticket.vue'
    export default {
        components: { TicketList, TicketSide },
        data(){
            return {
                tickit
            }
        }
    }
</script>