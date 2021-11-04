<template>
    <div class="container">
        <div class="text-center" style="margin: 20px 0px 20px 0px;">
            <span class="text-secondary title-aplicattion">CRUD com Laravel 8 e Vue JS 3</span>
        </div>
  
        <nav class="navbar navbar-expand-lg navbar-dark bg-blue">
            <div class="collapse navbar-collapse">
                <div class="navbar-nav">
                    <router-link to="/" class="nav-item nav-link">Tarefas</router-link>
                    <router-link to="/add" class="nav-item nav-link">Adicionar Tarefa</router-link>
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


<style scoped>
.title-aplicattion {
    font-size: 30px;
    font-weight: bold;
    color: #34495e !important;
}

.navbar-nav, .navbar-collapse{
    display: flex;
    justify-content: center;
}

.nav-link{
    font-size: 1rem;
    color: #fff !important;
}

.bg-blue {
    background-color: var(--green) !important;
  
}
</style>