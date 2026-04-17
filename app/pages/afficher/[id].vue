
<template>
  <div v-if="user">
    <h1>les informations d'utilisateur :</h1>

    <p><b>ID:</b> {{ user.id }}</p>
    <p><b>Nom:</b> {{ user.name }}</p>
    <p><b>Email:</b> {{ user.email }}</p>
  </div>
</template>

<script setup>
import { onMounted } from 'vue'
import { useRoute } from 'vue-router'

const route = useRoute()
const id=route.params.id;
const user =ref(null);

onMounted(async () => {
  const res = await fetch(`http://127.0.0.1:8000/api/users/${id}`)
  user.value = await res.json()
})
</script>