<template>
    <div>
        <h1>Dados dos usuários </h1>

      <div v-for="(users, state) in usersByState" :key="state">
        <h2>Estado: {{ state }}</h2>
        <ul class="user-complement--cards">
            <li class="user-complement" v-for="user in users" :key="user.id">
                <strong>Nome completo:</strong> {{ user.firstName }} {{ user.lastName }} {{ user.maidenName }}
                <ul>
                    <li><strong>Idade:</strong> {{ user.age }}</li>
                    <li><strong>Email:</strong> {{ user.email }}</li>
                    <li><strong>Telefone:</strong> {{ user.phone }}</li>
                    <li>
                        <strong>Endereço:</strong>
                        <ul>
                            <li><strong>Rua:</strong> {{ user.address.address }}</li>
                            <li><strong>Cidade:</strong> {{ user.address.city }}</li>
                            <li><strong>Estado:</strong> {{ user.address.state }}</li>
                        </ul>
                    </li>
                </ul>
            </li>
        </ul>
      </div>
    </div>
  </template>
  
  <script>
  export default {
    props: {
      usersByState: {
        type: Object,
        required: true
      }
    }
  }
  </script>
  