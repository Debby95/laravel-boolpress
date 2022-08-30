<template>
    <div>
        <TheNavbar></TheNavbar>
        <div class="container">
            <router-view></router-view>
            
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