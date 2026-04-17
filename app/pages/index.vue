<script setup>
import { reactive } from 'vue'

const form = reactive({
  name: '',
  email: '',
  password: ''
})

const submit = async () => {
  await $fetch('http://127.0.0.1:8000/api/users', {
    method: 'POST',
    body: form
  })

  console.log("User ajouté")
   console.log(form)
}
</script>

<template>
  <NuxtPage />
  <form @submit.prevent="submit">
    
    <input v-model="form.name" type="text" placeholder="nom" />
    <br><br>

    <input v-model="form.email" type="text" placeholder="email" />
    <br><br>

    <input v-model="form.password" type="password" placeholder="password" />
    <br><br>

    <button type="submit">Ajouter</button>

  </form>
  <div>
    <NuxtLink to="/about">About</NuxtLink>
  </div>
</template>
