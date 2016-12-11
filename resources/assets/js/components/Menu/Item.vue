<template>
    <div class="item" v-bind:class="{ active: tickit.page == url}"  @click="tickit.page = url">
        <div class="icon"><i class="fa" v-bind:class="[ 'fa-'+icon ]"></i></div>
        <slot>
            Menu Link
        </slot>
    </div>
</template>
<style>
    .icon {
        display:inline;
    }
</style>
<script>
    export default {
        props: ['icon','url'],
        data(){
            return {
                tickit: tickit
            }
        }
    }
</script>