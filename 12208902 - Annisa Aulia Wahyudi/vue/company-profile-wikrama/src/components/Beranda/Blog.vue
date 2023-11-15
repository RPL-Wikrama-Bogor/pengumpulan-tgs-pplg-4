<template>
    <div class="blog blog-section">
        <h3>Blog</h3>
        <div class="row-blog">
            <Card></Card>
        </div>
    </div>
</template>

<script>
    import '@/assets/blog.css';
    import Card from '@/components/Blog/CardBlog.vue';
    export default {
        components: {
            Card
        }
    }
</script>