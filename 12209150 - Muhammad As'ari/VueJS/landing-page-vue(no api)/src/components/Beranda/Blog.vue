<template>
    <div class="blog blog-selection">
        <h1>Blog</h1>
        <div class="row-blog">
            <Card></Card>
        </div>
    </div>
</template>

<script>
    import '@/assets/Blog.css'
    import Card from '@/components/blog/Card.vue';
    export default {
        components: {
            Card
        }
    }
</script>