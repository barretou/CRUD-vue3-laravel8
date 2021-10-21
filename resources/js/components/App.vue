<template>
    <div class="container">
        <div class="text-center" style="margin: 20px 0px 20px 0px;">
            <span class="text-secondary">CRUD com Laravel 8 e Vue JS 3</span>
        </div>
  
        <nav class="navbar navbar-expand-lg navbar-light bg-light">
            <div class="collapse navbar-collapse">
                <div class="navbar-nav">
                    <router-link to="/" class="nav-item nav-link">Tarefas</router-link>
                    <router-link to="/add" class="nav-item nav-link">Aicionar Tarefa</router-link>
                </div>
            </div>
        </nav>
        <br/>
        <router-view></router-view>
    </div>
</template>
  
<script>
    export default {}
</script>