<template>
    <div class="row-service">
        <Card v-for="item in data" :title="item.title" :description="item.description">
        <h5>{{ item.name }}</h5>
        <p>{{ item.date }}</p>
        
        <!-- <font-awesome-icon :icon="['fas', 'arrow-rotate-right']" /> -->
        </Card>
    </div>
</template>

<script>
    import Card from '@/components/my-components/Card.vue';
    export default {
        components: {
            Card,
            'card-service': Card
        },
        data() {
            return {
                data: [
                    {
                        title: "Shift the overall look and by adding these wonderful touches to furniture in your home",
                        description: "Ever been in a room and felt like something was missing? perhaps it felt slightly bare and uninvinting. i've got some simple tips to help you make any room feel complete.",
                        name: "annisa aulia wahyudi",
                        date: '31 Oktober 2023'
                        
                    }
                ]
            }
        }
    }
</script>
<style>
/* .row-service img {
    width: 60px;
  } */
</style>

