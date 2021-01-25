<template>
    <div class="row ubi">
        <div class="col s12 m12">
            <label for="name">Nombre</label>
            <input type="text" name="name" id="name" v-model="name">
            <label for="email">Email</label>
            <input type="text" name="email" id="email" v-model="email">
            <label for="url">URL de facebook</label>
            <input type="url" name="url" id="url" v-model="url">
            <label for="description">Descripción de la web</label>
            <textarea name="despcrition" id="despcrition" cols="30" rows="10" v-model="description"></textarea>
            <md-field>
                <label for="country">País mayoria de la audiencia</label>
                <md-select v-model="country" name="country" id="country">
                    <md-option>Seleccionar un país</md-option>
                    <md-option>Venezuela</md-option>
                    <md-option>Colombia</md-option>
                    <md-option>Argentina</md-option>
                    <md-option>España</md-option>
                </md-select>
            </md-field>
            <md-field>
                <label for="language">Idioma</label>
                <md-select v-model="language" name="language" id="language">
                    <md-option>Seleccionar un idioma</md-option>
                    <md-option>Español</md-option>
                    <md-option>Ingles</md-option>
                    <md-option>Frances</md-option>
                    <md-option>Portugues</md-option>
                </md-select>
            </md-field>
            <label for="advertising"><b>Aviso de publicidad</b></label>
            <div>
                <md-radio v-model="advertising" :value="true">Siempre indicaré en mis publicaciones patrocinadas que este texto es publicidad</md-radio>
            </div>
            <div>
                <md-radio v-model="advertising" :value="false">Dependerá de cada caso, de la marca y del producto que hable</md-radio>
            </div>
            <md-field>
            <label>Foto</label>
            <md-file v-model="photo"/></md-field>
            <label for="category"><b>Categoria a la que pertenece tu red social (máximo 3)</b></label>
            <div>
                <md-checkbox v-model="category" value="1">Animales</md-checkbox>
                <md-checkbox v-model="category" value="2">Diarios</md-checkbox>
                <md-checkbox v-model="category" value="3">Deportes</md-checkbox>
                <md-checkbox v-model="category" value="4">Fotografia y diseño</md-checkbox>
            </div>
            <div>
                <md-checkbox v-model="category" value="5">Animales</md-checkbox>
                <md-checkbox v-model="category" value="6">Diarios</md-checkbox>
                <md-checkbox v-model="category" value="7">Deportes</md-checkbox>
                <md-checkbox v-model="category" value="8">Fotografia y diseño</md-checkbox>
            </div>
            <div>
                <md-checkbox v-model="category" value="9">Animales</md-checkbox>
                <md-checkbox v-model="category" value="10">Diarios</md-checkbox>
                <md-checkbox v-model="category" value="11">Deportes</md-checkbox>
                <md-checkbox v-model="category" value="12">Fotografia y diseño</md-checkbox>
            </div>
            <div>
                <md-checkbox v-model="category" value="13">Animales</md-checkbox>
                <md-checkbox v-model="category" value="14">Diarios</md-checkbox>
                <md-checkbox v-model="category" value="15">Deportes</md-checkbox>
                <md-checkbox v-model="category" value="16">Fotografia y diseño</md-checkbox>
            </div>
            <div>
                <md-checkbox v-model="category" value="17">Animales</md-checkbox>
                <md-checkbox v-model="category" value="18">Diarios</md-checkbox>
                <md-checkbox v-model="category" value="19">Deportes</md-checkbox>
                <md-checkbox v-model="category" value="20">Fotografia y diseño</md-checkbox>
            </div>
            <div>
                <md-checkbox v-model="category" value="21">Animales</md-checkbox>
                <md-checkbox v-model="category" value="22">Diarios</md-checkbox>
                <md-checkbox v-model="category" value="23">Deportes</md-checkbox>
                <md-checkbox v-model="category" value="24">Fotografia y diseño</md-checkbox>
            </div>
            <div>
                <md-checkbox v-model="category" value="25">Animales</md-checkbox>
                <md-checkbox v-model="category" value="26">Diarios</md-checkbox>
                <md-checkbox v-model="category" value="27">Deportes</md-checkbox>
                <md-checkbox v-model="category" value="28">Fotografia y diseño</md-checkbox>
            </div>
            <div>
                <md-checkbox v-model="category" value="29">Animales</md-checkbox>
                <md-checkbox v-model="category" value="30">Diarios</md-checkbox>
                <md-checkbox v-model="category" value="31">Deportes</md-checkbox>
                <md-checkbox v-model="category" value="32">Fotografia y diseño</md-checkbox>
            </div>
            <br>
            <label><b>Modo de Vacaciones</b></label>
            <label><b>Configurar el Modo de Vaciones si quieres desactivar este recurso durante una temporada</b></label>
            <label for="start_date">Fecha de inicio de vacaciones</label>
            <md-datepicker v-model="start_date">
                <label>Seleccionar fecha</label>
            </md-datepicker>
            <label for="finish_date">Fecha de fin de vacaciones</label>
            <md-datepicker v-model="finish_date">
                <label>Seleccionar fecha</label>
            </md-datepicker>
            <a>Desactivar el modo de vacaciones</a>
        </div>
    </div>
</template>

<script>
  export default {
    data: () => ({
      start_date: null,
      finish_date: null,
      category: [],
      advertising: null,
      country: null,
      language: null,
      despcrition: null,
      name: null,
      email: null,
      url: null,
      photo: null
    }),
    watch: {
        array() {
            if (this.array.length > 3) {
                this.array.splice(1, -1)
            }
        }
    }
  }
</script>

<style scoped>

textarea {
    height: 8rem !important;
}

</style>