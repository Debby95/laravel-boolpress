<template>
    <div>
        <h1>Contact Page</h1>

        <form @submit.prevent="onFormSubmit">
            <input type="text" placeholder="Name" v-model="name">
            <br>
            <textarea cols="30" rows="10" placeholder="Message" v-model="message"></textarea>
            <br>
            <button type="submit">Send</button>
        </form>
    </div>
</template>

<script>
import axios from 'axios';

    export default {
        data() {
            return {
                name: "",
                message: "",
            }
        },
        methods: {
            onFormSubmit(e) {
                axios.post("/api/contacts", {
                    name: this.name,
                    message: this.message
                })
            }
        }
    }
</script>