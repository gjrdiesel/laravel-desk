<template>
    <div class='assign'>
        <input type='text' placeholder="Who should be assigned on this ticket?" v-model="search">
        <div class="list-group">
            <a href="#" class="list-group-item" @click="assign(user)" v-for="user in users">{{ user.name }}</a>
        </div>
    </div>
</template>
<style scoped>
    input {
        width: 100%;
        background:transparent;
        border:0;
        box-shadow: none;
    }
    .assign {
        position: fixed;
        top: 20%;
        right: 0;
        width: 30%;
    }
</style>
<script>
    export default {
        watch: {
            search(){
                this.fetchUsers();
            }
        },
        mounted(){
            this.fetchUsers();
        },
        methods: {
            assign(user){
                toastr.success('Assigned ticket to ' + user.name, 'Miracle Max Says');
                this.tickit.assigning = false;
            },
            fetchUsers(){
                this.$http.get('users?search='+this.search).then((response)=>{
                    this.users = response.data;
                });
            }
        },
        data(){
            return {
                users: [],
                search: '',
                tickit
            }
        }
    }
</script>