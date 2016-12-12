<template>
    <div>
        <tickit-menu></tickit-menu>

        <component :is="tickit.page"></component>

        <write-ticket v-if="tickit.writeback"></write-ticket>
        <assign-ticket v-if="tickit.assigning"></assign-ticket>
        <chatbox></chatbox>
    </div>
</template>
<script>
    import TickitMenu from '../Menu/Menu.vue'

    import Chatbox from '../Chatbox/Chatbox.vue'
    import WriteTicket from '../Tickets/WriteTicket.vue'
    import AssignTicket from '../Tickets/AssignTicket.vue'

    import TicketsPage from '../Pages/Tickets.vue'
    import DashboardPage from '../Pages/Dashboard.vue'

    export default {
        components: { Chatbox, TickitMenu, TicketsPage, DashboardPage, WriteTicket, AssignTicket },
        data(){
            return {
                tickit: tickit
            }
        }
    }
</script>