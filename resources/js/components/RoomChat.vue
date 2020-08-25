<template>
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">RoomChat</div>

                    <div class="card-body">
                        <p v-for="item in messages" :key="item.id">{{ item.content }}</p>
                    </div>

                    <div class="card-footer">
                        <form class="form-inline" action="/messages" method="post" @submit.prevent="send($event)">                            
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
    const axios = require('axios').default;
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
                axios.post('/messages', data)
                .then((response) => {
                    this.messages.push(response.data);
                })
            }
        }
    }
</script>
