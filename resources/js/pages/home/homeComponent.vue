<template>
    <div class="padding">
        <div class="row">
            <div class="col m12 s12 mt">
                <h3 class="center-align" > ¡ Bienvenido ! {{ user }} </h3>
            </div>
        </div>

        <div class="row">
            <div class="col m12 s12 center-align">
                <img src="images/covid-19.svg" class="imagen-portada center-align" alt="">
            </div>
        </div>        
    </div>
</template>

<script>
export default {
    name: "Home",
    props: ['user']
}
</script>

<style scoped>

.mt{
    margin-top: 70px;
    margin-bottom: 100px;
}
.padding{
    padding-left: 50px;
    padding-right: 50px;
    font-family: "Nunito", Times, serif;
}
.imagen-portada{ width: 400px; }
.section-imagen{
    display: flex;
    align-items: center;
    height: 40vh;
}
</style>
