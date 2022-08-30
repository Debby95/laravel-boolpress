<template>
    <div class="row row-cols-3">
        <div class="col" v-for="post in posts" :key="posts.id">
            <div class="card mb-3" style="width: 18rem;">
                <img :src="getImageSrc(post)" class="card-img-top">
                <div class="card-body">
                    <h5 class="card-title">{{post.title}}</h5>
                    <p class="card-text" v-html="post.content"></p>
                    <a href="#" class="btn btn-primary">Go somewhere</a>
                </div>
            </div>
        </div>
    </div>
</template>

<script>
import axios from 'axios';

    export default {
        data() {
            return {
                posts: []
            }
        },
        methods: {
            fetchPosts(){
                axios.get("api/posts")
                .then((resp) => {
                    this.posts = resp.data
                })
            },
            getImageSrc(post) {
                if (!post.cover_img) {
                    return "/img/img-not-available.jpg";
                }
                return post.cover_img;
            },
        },
        mounted() {
            this.fetchPosts();
        }
    }
</script>

<style>
    .card-img-top {
        aspect-ratio: 16/9;
        object-fit: cover;
    }
</style>