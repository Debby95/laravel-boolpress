<template>
    <div>
        <h1>Posts Page # {{ post.id}}</h1>

        <h2>{{post.title}}</h2>
        <h3>{{post.user.name}}'s post</h3>
        <img :src="post.cover_img" alt="">
        <div v-html="post.content"></div>

        <div v-if="post.category">
            <div>Category:</div> 
            {{post.category.name}}
        </div>
        <div v-if="post.tags.length > 0">
            <div>Tags</div>
            <ul>
                <li v-for="tag in post.tags" :key="tag.id">{{tag.name}}</li>
            </ul>
        </div>
    </div>
</template>

<script>
import axios from 'axios';

    export default {
        data() {
            return {
                post: {}
            }
        },
        mounted() {
            axios.get("/api/posts/" + this.$route.params.slug)
            .then((resp) => {
                const data = resp.data
                this.post = data;
            })
        }
    }
</script>

<style>
    img {
        width: 400px;
    }
</style>