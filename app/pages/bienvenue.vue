<template>
  <div class="container">
    Bienvenue !
     <NuxtLink to="/connexion">
        <button class="button">Se connecter</button>
    </NuxtLink>

    

  </div>
</template>

<style scoped>
.container{
    background-color: rgb(133, 183, 227);
    font-family: 'Lucida Sans', Geneva, Verdana, sans-serif;
    color: rgb(98, 142, 200);
    border: 2px solid rgb(98, 142, 200);
    margin: 20px;
    padding: 20px;
    font-size: 16px;
    border-radius: 10px;
}

.button{
    color:#fff;
    background-color: rgb(98, 142, 200);
    border:none;
    border-radius: 5px;
    padding:10px;
    margin:10px;
    cursor: pointer;
}
</style>