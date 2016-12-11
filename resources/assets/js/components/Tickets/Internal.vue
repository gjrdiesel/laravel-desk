<template>
    <div class="panel panel-default internal">
        <div class="panel-heading">
            {{ ticket.from_name }}
            <div class="text-muted">Tickit</div>
        </div>
        <div class="panel-body">
            @justin can you handle this please?
        </div>
    </div>
</template>
<script>
    export default {
        props: ['ticket']
    }
</script>