<template>
    <div class="header-container">
        <div class="header-text">
            <div class="header-title">
                <h1>Experts are here to help with your bussiness problem</h1>
            </div>
            <div class="header-description">
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Voluptatibus, nobis? Earum id maiores vero
                    delectus? Quod ad dolor, necessitatibus deleniti molestias iusto</p>
            </div>
        </div>
        <div class="header-image">
            <img src="@/assets/img/section_1.jpg" alt="section1">
        </div>
    </div>
</template>

<style>
.header-container {
    display: flex;
    align-items: center;
    justify-content: space-between;
    padding: 20px;
    background-color: #f7f7f7;
}

.header-text {
    color: #333333be;
    flex: 1;
    margin-right: 20px;
}

.title-text {
    font-size: 24px;
    font-weight: bold;
    color: #333;
}

.description-text {
    font-size: 16px;
    color: #666;
}

.header-image {
    flex: 1;
}

.header-img {
    width: 100%;
    max-width: 100%;
    height: 26px;
    border-radius: 10px;
}

@media screen and (max-width: 768px) {
    .header-container {
        flex-direction: column;
        text-align: center;
    }
    
    .header-text {
        margin-right: 0;
        margin-bottom: 20px;
    }

    .title-text {
        font-size: 20px;
    }

    .description-text {
        font-size: 14px;
    }
}
</style>

