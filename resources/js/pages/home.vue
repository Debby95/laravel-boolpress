<template>
    <div>
        <h1>Home Page</h1>

        <h2>Posts List</h2>
        <PostsList></PostsList>

    </div>
</template>

<script>
    import PostsList from '../frontend/components/PostsList.vue';
    export default {
        components: { PostsList}
    }
</script>