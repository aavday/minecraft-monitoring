<template>
    <div>
        <nav class="navbar bg-white border-bottom navbar-light px-4">
            <router-link class="navbar-brand mr-auto" :to="{name: 'home'}">Minecraft Monitoring</router-link>
        </nav>
        <div class="container m-4">
            <router-view></router-view>
        </div>
    </div>
</template>

<script>
export default {
    name: "index",
}
</script>

<style scoped>

</style>
