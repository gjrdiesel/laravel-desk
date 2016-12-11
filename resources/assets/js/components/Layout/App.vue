<template>
    <div>
        <tickit-menu></tickit-menu>

        <component :is="tickit.page"></component>

        <chatbox></chatbox>
    </div>
</template>
<script>
    import Chatbox from '../Chatbox/Chatbox.vue'
    import TickitMenu from '../Menu/Menu.vue'

    import TicketsPage from '../Pages/Tickets.vue'
    import DashboardPage from '../Pages/Dashboard.vue'
    export default {
        components: { Chatbox, TickitMenu, TicketsPage, DashboardPage },
        data(){
            return {
                tickit: tickit
            }
        }
    }
</script>