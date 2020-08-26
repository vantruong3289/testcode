<template>
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">Private Channel</div>
                    <div class="card-body">
                        <p v-for="item in messages" :key="item.id">{{ item.content }}</p>
                    </div>
                    <div class="card-footer">
                        <form class="justify-content-between" action="/messages" method="post" @submit.prevent="send($event)">                            
                            <input type="text" class="form-control mr-1" v-model="message">
                            <button class="btn btn-primary">Send</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</template>

<script>
    export default {
        props: [],
        data: function(){
            return {
                message: '',
                messages: [],
            }
        },
        methods: {
            send(event) {
                let data = {'content': this.message};
                this.message = '';
                axios.post('/broadcasting/new-message-private', data)
                .then((response) => {
                    this.messages.push(response.data);
                })
            }
        },
        created() {
            Echo.private(`new-message-private.${recievedId}`)
            .listen('NewMessagePrivate', (e) => {
                this.messages.push(e.message);
            });
        }
    }
</script>
