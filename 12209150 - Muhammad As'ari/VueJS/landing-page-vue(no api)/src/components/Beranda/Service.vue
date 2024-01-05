<template>
    <div class="container">
        <h1 class="page-title">Our Services</h1>
        <div class="card-container">
            <div class="card" v-for="(card, index) in cards" :key="index">
                <img src="@/assets/img/layanan.png" alt="Card Image" class="card-image">
                <h2 class="card-title">{{ card.title }}</h2>
                <p class="card-description">{{ card.description }}</p>
            </div>
        </div>
    </div>
</template>

<script>
export default {
    data() {
        return {
            cards: [
                {
                    title: "Card 1",
                    description: "Lorem ipsum dolor sit amet, consectetur adipisicing elit."
                },
                {
                    title: "Card 2",
                    description: "Voluptatibus, nobis? Earum id maiores vero delectus?"
                },
                {
                    title: "Card 3",
                    description: "Quod ad dolor, necessitatibus deleniti molestias iusto."
                },
                {
                    title: "Card 4",
                    description: "Lorem ipsum dolor sit amet, consectetur adipisicing elit."
                },
                {
                    title: "Card 5",
                    description: "Voluptatibus, nobis? Earum id maiores vero delectus?"
                },
                {
                    title: "Card 6",
                    description: "Quod ad dolor, necessitatibus deleniti molestias iusto."
                }
            ]
        };
    }
};
</script>

<style>
.card img {
    width: 81px;
}

.container {
    background-color: #f0f8ff;
    padding: 20px;
    text-align: center;
}

.page-title {
    font-size: 28px;
    color: #0066cc;
    margin-bottom: 20px;
}

.card-container {
    display: flex;
    flex-wrap: wrap;
    justify-content: center;
}

.card {
    background-color: #fff;
    box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
    border-radius: 8px;
    margin: 10px;
    padding: 20px;
    width: 300px;
    text-align: left;
}

.card-title {
    font-size: 20px;
    color: #0066cccb;
}

.card-description {
    font-size: 16px;
    color: #333;
}
</style>
