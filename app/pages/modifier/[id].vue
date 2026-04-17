


<script setup>
import {reactive} from'vue';
import { useRoute } from 'vue-router'
const form =reactive({
    'name':'',
    'password':'',
    'email':''

})


const route = useRoute()
const id = route.params.id
const submit=async()=>{
    await $fetch(`http://127.0.0.1:8000/api/users/${id}`, {
    method:'PUT',
    body: form
  })
}
</script>
<template>
    <div class="contain">
        <div>Modifier:</div><br><br>
    <form @submit.prevent="submit">
        
        <label>Nom :</label><br><br>
        <input v-model="form.name" placeholder="name" type="text" /><br><br>
        <label>Password :</label><br><br>
        <input v-model="form.password" placeholder="password" type="password" /><br><br>
        <label>Email :</label><br><br>
        <input v-model="form.email" placeholder="email" type="text" /><br><br>
      
        <button type="submit" >Modifier </button>

    </form>
    </div>
</template>
<style scoped>
.contain{
    background-color: rgb(255, 255, 255);
    width:30%;
    margin:190px;
    margin-top:170px;
    margin-left:490px;
}

</style>