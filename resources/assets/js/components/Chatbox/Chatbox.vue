<template>
    <div class="chat-box" @click="focusTextArea()">
        <div class="heading">Administrator <span class="label label-warning">1</span></div>
        <div class="msg-content">
            <component :is="tickit.chatbox.page" :user="tickit.chatbox.user"></component>
        </div>
    </div>
</template>
<script>
    import UserList from './UserList.vue'
    import MessageBox from './MessageBox.vue'
    export default {
        components: { UserList, MessageBox },
        methods: {
            focusTextArea(){
                $('.chat-box textarea').focus();
            }
        },
        data(){
            return {
                tickit: tickit
            }
        }
    }
</script>