<template>
    <div>
        <div id="summernote">
            <div v-if="!tickit.writeback_comment">
                <p>
                    Hello {{ tickit.ticket.from_name }},
                </p>
                <p>Thanks for contacting us.</p>
                <br><br><br>
                <p>Best regards,</p>
                <p>Administrator</p>
            </div>
        </div>
    </div>
</template>
<style>
    .note-editor {
        position: fixed;
        top:10%;
        right:0;
    }
</style>
<script>
    export default {
        mounted(){
            console.log('loaded');
            $('#summernote').summernote({
                height: '30vh'
            });
        },
        data(){
            return {
                tickit
            }
        }
    }
</script>