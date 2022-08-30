<template>
    <div>
        <TheNavbar></TheNavbar>
        <div class="container">
            <h1>Helloo {{message}}</h1>

            <h2>Posts List</h2>
            <PostsList></PostsList>
        </div>
    </div>
</template>

<script>
import TheNavbar from './frontend/components/TheNavbar.vue';
import PostsList from './frontend/components/PostsList.vue';
    export default{
        components: { TheNavbar, PostsList },
        data() {
            return {
                message: "Hiii"
            }
        }
    }
</script>