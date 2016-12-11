<template>
    <div class="menu">
        <user-profile></user-profile>
        <menu-link url="dashboard-page" icon="tachometer">
            Dashboard
        </menu-link>
        <menu-link url="tickets-page" icon="bug">
            Tickets
        </menu-link>
        <menu-link url="email-page" icon="envelope">
            My Email
        </menu-link>
        <menu-link url="time-page" icon="clock-o">
            My Time
        </menu-link>
        <menu-link url="team-page" icon="users">
            Team
        </menu-link>
        <menu-link url="logout-page" icon="sign-out">
            Logout
        </menu-link>
    </div>
</template>
<script>
    import MenuLink from './Item.vue'
    import UserProfile from './UserProfile.vue'
    export default {
        components: { MenuLink, UserProfile },
        data(){
            return {
                tickit: tickit
            }
        }
    }
</script>