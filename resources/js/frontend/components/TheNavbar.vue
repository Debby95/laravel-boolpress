<template>
    <div class="container ">
        <nav class="navbar navbar-expand-md navbar-light bg-white shadow-sm mb-3">
            <a class="navbar-brand" href="/">Boolpress</a>

            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                

                <!-- Right Side Of Navbar -->
                <ul class="navbar-nav ml-auto">
                    <li class="nav-item">
                        <router-link class="nav-link" to="/">Home</router-link>
                    </li>
                    <li class="nav-item">
                        <router-link class="nav-link" :to="{ name: 'contacts' }">Contacts</router-link>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="/admin/posts">Admin Posts</a>
                    </li>
                </ul>
            </div>
        </nav>
    </div>
    
</template>

<script>
    export default {

    }
</script>

<style>
    
</style>
