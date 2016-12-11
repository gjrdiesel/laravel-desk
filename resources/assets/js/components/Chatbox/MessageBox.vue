<template>
    <div>
        <i class="fa fa-long-arrow-left" @click="backToUsers()"></i>
        <i class="fa fa-external-link pull-right" @click="goToTeamPage()"></i>
        <div class="overflow">
            <div><strong>Justin:</strong> Hey, can you come here please</div>
            <div><strong>{{ user }}:</strong> What do you think I am? A muppet? You come here.</div>
            <div><strong>Justin:</strong> Did I ask you? No. Just come here.</div>
            <div><strong>{{ user }}:</strong> Ok, on one condition. You better have snacks.</div>
            <div><strong>{{ user }}:</strong> Ok, I'm heading that way in a second.</div>
        </div>
        <textarea v-model="message"></textarea>
    </div>
</template>
<style scoped>
    .messages {
        padding: 10px;
    }
    .overflow {
        height: 80px;
        overflow: scroll;
    }
    textarea {
        padding: 5px;
        margin: 0;
        width: 100%;
        font-size: 12px;
        resize: none;
        height: 40px;
        margin-top: 10px;
    }
</style>
<script>
    export default {
        props: ['user'],
        methods: {
            backToUsers(){
                this.tickit.chatbox.page = 'user-list';
            },
            goToTeamPage(){
                this.tickit.page = 'team-page';
            }
        },
        data(){
            return {
                message: '',
                tickit: tickit
            }
        }
    }
</script>