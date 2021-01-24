<template>
     <div class="page-container">
        <div class="row">
            <div class="col s12" style="padding-bottom: 12vh">
                <h6 class="left-align" :class="[ form ? 'ubi-top' : 'ubi-top-form1' ]">Mis redes sociales</h6>
                <p v-if="form" class="left-align ubi">Servicios y precios</p>
                <form-one v-if="!form"></form-one>
                <form-two v-else></form-two>
            </div>
        </div>
    </div>
</template>

<script>
export default {
    props: ['form'],
    data () {
        return {
            value: null
        }
    }
}
</script>

<style scoped>

.ubi{
    padding: 0 16vh 0vh 8vh;
}

.ubi-top {
    padding: 5vh 16vh 0 8vh;
} 

.ubi-top-form1 {
    padding: 5vh 16vh 12vh 8vh;
} 

</style>