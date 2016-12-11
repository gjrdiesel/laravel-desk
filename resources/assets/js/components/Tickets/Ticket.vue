<template>
    <div class="panel panel-default">
        <div class="panel-heading">
            {{ ticket.subject }}
            <span class="pull-right text-muted">{{ ticket.created_at }}</span>
            <div class="text-muted">{{ ticket.from_name }} ({{ ticket.from_mail }})</div>
        </div>
        <div class="panel-body" v-html="ticket.html">
        </div>
    </div>
</template>
<script>
    export default {
        props: ['ticket']
    }
</script>