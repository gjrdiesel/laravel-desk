<template>
    <div class="manage-bar" v-show="tickit.ticket.id">
        <div class="btn-group">
            <div class="btn btn-default" @click="writeBack()"><i class="fa fa-reply"></i> &nbsp;Write back</div>
            <div class="btn btn-default" @click="remove()"><i class="fa fa-trash"></i> &nbsp;Delete</div>
        </div>
        <div class="pull-right">
            <div class="btn-group">
                <div class="btn btn-default"><i class="fa fa-comments"></i> &nbsp;Comment</div>
                <div class="btn btn-default"><i class="fa fa-users"></i> &nbsp;Assign</div>
                <div class="btn btn-default"><i class="fa fa-ellipsis-v"></i></div>
            </div>
        </div>
    </div>
</template>
<script>
    export default {
        methods: {
            writeBack(){

            },
            remove(){
                var ticket = this.tickit.ticket;
                this.$http.post('/tickets/'+ticket.id+'/delete');
                this.tickit.page = 'tickets-page';
            }
        },
        data(){
            return {
                tickit
            }
        }
    }
</script>