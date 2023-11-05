<template>
    <div class="container">
        <Blog :data="DataBlog"></Blog>
    </div>
</template>
<script>
import Blog from '@/components/Beranda/Blog.vue';
import { Get } from '@/Api/index.js';
export default{
    components:{
    Blog
    },
    data(){
        return {
            DataBlog: [],
        }
    },
    async created(){
    const responseBlog = await Get('blog');
        this.DataBlog = responseBlog.data.data;
    }
}
</script>