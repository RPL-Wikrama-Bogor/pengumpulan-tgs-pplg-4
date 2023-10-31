<template>
    <div class="card-container">
      <div class="card-contents">
        <div class="card-image">
          <img src="@/assets/imejj.jpg" alt="Card Image" />
        </div>
        <div class="card-text">
          <h4>{{ title }}</h4>
          <p>{{ description }}</p>
          <div class="author">
            <div class="left-section">
              <div class="author-profile-picture">
                <img src="@/assets/author.png" alt="Person" />
              </div>
              <div class="author-information">
                <p class="author-name">{{ name }}</p>
                <p class="date">{{ date }}</p>
              </div>
            </div>
            <div class="right-section">
              <img src="@/assets/arrow-svg.png" alt="Arrow" />
            </div>
          </div>
        </div>
      </div>
    </div>
  </template>
  
  <script>
  export default {
    props: ['title', 'description', 'name', 'date'],
  };
  </script>
  
  <style scoped>
  .card-container {
    border-radius: 10px;
    margin: 10px;
    overflow: hidden;
    box-shadow: 0 4px 8px rgba(0, 0, 0, 0.2);
    background: #e8f5e9; 
    display: flex;
    max-width: 673px; 
  }
  
  .card-contents {
    display: flex;
    width: 100%;
    border-radius: 10px;
    overflow: hidden;
  }
  
  .card-image {
    width: 40%; 
    overflow: hidden;
  }
  
  .card-image img {
    width: 100%;
    height: 100%;
    object-fit: cover;
  }
  
  .card-text {
    padding: 20px;
    width: 60%; /* Adjust the text size as needed */
    display: flex;
    flex-direction: column;
    justify-content: space-between;
  }
  
  h4 {
    font-size: 1.5rem;
    margin: 0;
  }
  
  p {
    font-size: 1rem;
    color: #555;
    line-height: 1.5;
  }
  
  .author {
    display: flex;
    justify-content: space-between;
  }
  
  .author-profile-picture {
    width: 40px; /* Adjust the profile picture size as needed */
    height: 40px;
    border-radius: 50%;
    overflow: hidden;
  }
  
  .author-profile-picture img {
    width: 100%;
    height: 100%;
    object-fit: cover;
  }

  .left-section {
    display: flex;
    align-items: center;
  }
  
  .author-information {
    flex: 1;
    margin-left: 10px;
  }
  
  .author-name {
    font-weight: bold;
    font-size: 1rem;
    margin: 0;
  }
  
  .date {
    margin: 0;
    padding: 0;
    font-size: 0.9rem;
  }
  .right-section {
    display: flex;
    justify-content: center;
  }
  .right-section img {
    width: 18px;
    height: 17px;
  }
  </style>