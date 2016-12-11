<template>
    <ul>
        <li v-for="user in users" @click="chatWith(user)">{{ user }}</li>
    </ul>
</template>
<style scoped>
    li {
        cursor:pointer;
    }
</style>
<script>
    export default {
        methods: {
            chatWith(user){
                this.tickit.chatbox.page = 'message-box';
                this.tickit.chatbox.user = user;
            }
        },
        data(){
            return {
                tickit: tickit,
                users: ['David','Jeff','Tristram','Sean','Justin']
            }
        }
    }
</script>