<template>
    <div class="manage-bar" v-show="tickit.ticket.id">
        <div class="btn-group" v-if="!tickit.writeback">
            <div class="btn btn-default" @click="writeBack()"><i class="fa fa-reply"></i> &nbsp;Write back</div>
            <div class="btn btn-default" @click="remove()"><i class="fa fa-trash"></i> &nbsp;Delete</div>
        </div>
        <div class="btn-group" v-if="tickit.writeback">
            <div class="btn btn-default" @click="send()">
                <span v-if="!tickit.writeback_comment"><i class="fa fa-reply"></i> &nbsp;Send</span>
                <span v-else><i class="fa fa-comment"></i> &nbsp;Comment</span>
            </div>
            <div class="btn btn-default" @click="cancel()"><i class="fa fa-trash"></i> &nbsp;Cancel</div>
        </div>
        <div class="pull-right">
            <div class="btn-group">
                <div class="btn btn-default" v-if="!tickit.writeback_comment" @click="writeBack('comment')"><i class="fa fa-comments"></i> &nbsp;Comment</div>
                <div class="btn btn-default" @click="tickit.assigning=!tickit.assigning"><i class="fa fa-users"></i> &nbsp;
                <span v-if="!tickit.assigning">Assign</span>
                <span v-else>Cancel</span>
                </div>
                <div class="btn btn-default"><i class="fa fa-ellipsis-v"></i></div>
            </div>
        </div>
    </div>
</template>
<script>
    export default {
        methods: {
            writeBack(comment){

                if( comment ){
                    this.tickit.writeback_comment = true;
                }

                this.tickit.writeback = true;
            },
            cancel(){
                toastr.info('Have fun storming the castle!', 'Miracle Max Says');
                this.tickit.writeback = false;
                this.tickit.writeback_comment = false;
            },
            remove(){
                toastr.success('Marked ticket as archived', 'Miracle Max Says');
                this.tickit.page = '';

                var ticket = this.tickit.ticket;
                this.$http.post('/tickets/'+ticket.id+'/delete').then((response)=>{
                    this.tickit.page = 'tickets-page';
                });
            }
        },
        data(){
            return {
                tickit
            }
        }
    }
</script>