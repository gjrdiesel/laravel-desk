<template>
    <div class="addon-menu">

        <div class="search">
            <input type="text" placeholder="Search" v-model="search"> <i class="fa fa-search"></i>
        </div>

        <div class="btn-group btn-group-justified" role="group" aria-label="...">
            <div class="btn-group" role="group">
                <button type="button" class="btn btn-default" v-bind:class="{active:tickit.ticket_filter==''}" @click="filter('')">
                    All <span class="label label-default">30</span>
                </button>
            </div>
            <div class="btn-group" role="group">
                <button type="button" class="btn btn-default" v-bind:class="{active:tickit.ticket_filter=='new'}" @click="filter('new')">
                    New <span class="label label-default">10</span>
                </button>
            </div>
            <div class="btn-group" role="group">
                <button type="button" class="btn btn-default" v-bind:class="{active:tickit.ticket_filter=='archived'}" @click="filter('archived')">
                    Archived
                </button>
            </div>
            <div class="btn-group" role="group">
                <button type="button" class="btn btn-default">
                    <i class="fa fa-ellipsis-v"></i>
                </button>
            </div>
        </div>

        <ul class="list-group">
            <a href="#" v-for="t in tickets" @click="tickit.ticket = t">
                <li class="list-group-item" v-bind:class="{ active: tickit.ticket == t }">
                    <span class="badge" v-show="t.comments_count > 0">{{ t.comments_count }}</span>
                    <span class="text-muted">#{{ t.id }}</span>
                    <span class="subject">{{ t.subject }}</span>
                    <br>
                    <span class="text-muted">{{ t.from_mail }}</span>
                </li>
            </a>
        </ul>

    </div>
</template>
<script>
    export default {
        watch: {
            search(){
                clearTimeout(this.timeout);
                this.timeout = setTimeout(()=>{
                    this.fetchTickets();
                }, 400);
            }
        },
        methods: {
            filter(type){
                this.tickit.ticket_filter = type;
                this.fetchTickets();
            },
            fetchTickets(){
                this.$http.get('/tickets?search='+this.search+'&filter='+this.tickit.ticket_filter).then((response)=>{
                    this.tickets = response.data;
                    this.tickit.ticket = {};
                });
            }
        },
        mounted(){
            this.fetchTickets();
        },
        data(){
            return {
                tickets: tickit.tickets,
                tickit: tickit,
                search: '',
                timeout: 0,
            }
        }
    }
</script>