<template>
    <div class="row ubi">
        <div class="col s12 m12">
            <div class="card">
                <div class="card-content">
                    <div>
                        <md-checkbox v-model="service" value="photo">Foto en Instagram</md-checkbox>
                        <br>
                        <span>
                            El servicio consiste en Publicar una foto en Instagram con un texto
                            asociado y uno o varios hashtags a elegir por el anunciante.
                        </span>
                        <br>
                        <label for="price">Valor por este paquete</label>
                        <input type="text" name="price" id="price">
                        <label for="discount">Promoción descuento</label>
                        <input type="number" name="discount" id="discount">
                    </div>
                </div>
            </div>
            <div class="card">
                <div class="card-content">
                    <div>
                        <md-checkbox v-model="service" value="video">Vídeo en Instagram</md-checkbox>
                        <br>
                        <span>
                            El servicio consiste en Publicar un Vïdeo en Instagram con un texto
                            asociado y uno o varios hashtags a elegir por el anunciante.
                        </span>
                        <br>
                        <label for="price">Valor por este paquete</label>
                        <input type="text" name="price" id="price">
                        <label for="discount">Promoción descuento</label>
                        <input type="number" name="discount" id="discount">
                    </div>
                </div>
            </div>
            <div class="card">
                <div class="card-content">
                    <div>
                        <md-checkbox v-model="service" value="story">Instagram Story</md-checkbox>
                        <br>
                        <span>
                            El servicio consiste en Publicar un Instagram Story siguiendo el briefing definido por la marca.
                        </span>
                        <br>
                        <label for="price">Valor por este paquete</label>
                        <input type="text" name="price" id="price">
                        <label for="discount">Promoción descuento</label>
                        <input type="number" name="discount" id="discount">
                    </div>
                </div>
            </div>
        </div>
    </div>
</template>

<script>
export default {
    data: () => ({
        service: [],
        price: [],
        discount: []
    })
}
</script>