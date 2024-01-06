<template>
    <div>
    <div class="section_1">
        <div class="section1_content">
            <h1>{{ data.content }}</h1>
            <p>{{ data.description }}</p>
        </div>
        <div class="section1_img">
            <img src="data.file" :alt="data.title">
        </div>
    </div>
</div>
</template>
<script>
export default {
    props: ['data']
}
</script>

<style scoped>
.section-1 {
    padding: 20px 0;;
}
</style>