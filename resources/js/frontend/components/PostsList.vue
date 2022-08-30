<template>
    <div class="row row-cols-3">
        <div class="col" v-for="post in posts" :key="posts.id">
            <div class="card rounded mb-3" style="width: 18rem;">
                <img :src="getImageSrc(post)" class="card-img-top">
                <div class="card-body">
                    <h5 class="card-title">{{post.title}}</h5>
                    <p class="card-text" v-html="post.content"></p>
                    <router-link :to="{ name: 'posts.show', params: { slug: post.slug } }" class="btn">Show</router-link>
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

    .card {
        /* From https://css.glass */
        background: rgba(31, 3, 255, 0.12);
        box-shadow: 0 4px 30px rgba(0, 0, 0, 0.1);
        backdrop-filter: blur(20px);
        -webkit-backdrop-filter: blur(20px);
        border: 1px solid rgb(100, 3, 255);
    }

    .btn {
        /* From https://css.glass */
        background: rgba(170, 112, 218, 0.35);
        box-shadow: 0 4px 30px rgba(0, 0, 0, 0.1);
        backdrop-filter: blur(20px);
        -webkit-backdrop-filter: blur(20px);
        border: 1px solid rgba(170, 112, 218, 1);
    }
</style>