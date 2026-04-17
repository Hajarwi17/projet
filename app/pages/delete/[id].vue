
<template>
    <form @submit.prevent="submit">
    <button>Delete</button>
    </form>
</template>
<script setup >
import {useRoute} from 'vue-router';
const route =useRoute();
 const id =route.params.id;
const submit=async()=>{
   
    await $fetch(`http://127.0.0.1:8000/api/users/${id}`, {
    method: 'DELETE',
  })}
</script>