<template>
  <div>
    <footer class="footer aling-v">
      <div v-if="$route.name == 'Form'">
        <span>
          www.wearecontent.com
        </span>
        <br>
        <span>
          Valor: 200 créditos
        </span>
      </div>
      <div v-if="$route.name == 'Form'">
        <input 
          type="range" 
          min="0" 
          max="100"
          v-model.number="amount"
          disabled
        >
      </div>
      <div v-else>
        <p v-text="date"></p>
      </div>
      <div v-if="$route.name == 'Form'">
        <button class="btn" :class="[ formState ? 'green' : 'gray']" @click="change" v-text="formState ? 'Registrar red social' : 'Siguiente'"></button>
      </div>
      <div v-else>
        <p v-text="'Desarrollado by: @abraham.r.j'"></p>
      </div>
    </footer>
  </div>
</template>

<script>
import moment from 'moment'
import { mapState, mapMutations } from 'vuex'
export default {
  props: ['form'],
  name: "Footer",
  data: () => ({
    amount: 0,
    date: moment().format('YYYY')
  }),
  methods: {
    change() {
      this.$emit('change', !this.form)
      this.changeForm(1)
      if (!this.form) {
        this.amount = 100
      } else {
        this.amount = 0
      }
    },
    ...mapMutations(['changeForm'])
  },
  computed: {
    ...mapState(['formState'])
  }
}
</script>

<style scoped>

.footer {
  background-color: #1E88E5;
  position: absolute;
  bottom: 0;
  left: 0;
  width: 100%;
  height: 70px;
  color: white;
  z-index: 99999 !important;
  padding-left: 40px;
  padding-right: 40px;
}

.gray {
  background: silver;
}

.aling-v {
  display: flex;
  align-items: center;
  justify-content: space-between;
}

input[type=range] {
  width: 100%;
  margin: 10.65px 0;
  background-color: transparent;
  -webkit-appearance: none;
}
input[type=range]:focus {
  outline: none;
}
input[type=range]::-webkit-slider-runnable-track {
  background: #83828a;
  border: 0.2px solid #010101;
  border-radius: 2.8px;
  width: 100%;
  height: 0.7px;
  cursor: pointer;
}
input[type=range]::-webkit-slider-thumb {
  margin-top: -10.85px;
  width: 0px;
  height: 22px;
  background: #ffffff;
  border: 3px solid #2d2a14;
  cursor: pointer;
  -webkit-appearance: none;
}
input[type=range]:focus::-webkit-slider-runnable-track {
  background: #939299;
}
input[type=range]::-moz-range-track {
  background: #83828a;
  border: 0.2px solid #010101;
  border-radius: 2.8px;
  width: 100%;
  height: 0.7px;
  cursor: pointer;
}
input[type=range]::-moz-range-thumb {
  width: 0px;
  height: 22px;
  background: #ffffff;
  border: 3px solid #2d2a14;
  cursor: pointer;
}
input[type=range]::-ms-track {
  background: transparent;
  border-color: transparent;
  border-width: 10.65px 0;
  color: transparent;
  width: 100%;
  height: 0.7px;
  cursor: pointer;
}
input[type=range]::-ms-fill-lower {
  background: #74737b;
  border: 0.2px solid #010101;
  border-radius: 5.6px;
}
input[type=range]::-ms-fill-upper {
  background: #83828a;
  border: 0.2px solid #010101;
  border-radius: 5.6px;
}
input[type=range]::-ms-thumb {
  width: 0px;
  height: 22px;
  background: #ffffff;
  border: 3px solid #2d2a14;
  cursor: pointer;
  margin-top: 0px;
  /*Needed to keep the Edge thumb centred*/
}
input[type=range]:focus::-ms-fill-lower {
  background: #83828a;
}
input[type=range]:focus::-ms-fill-upper {
  background: #939299;
}
/*TODO: Use one of the selectors from https://stackoverflow.com/a/20541859/7077589 and figure out
how to remove the virtical space around the range input in IE*/
@supports (-ms-ime-align:auto) {
  /* Pre-Chromium Edge only styles, selector taken from hhttps://stackoverflow.com/a/32202953/7077589 */
  input[type=range] {
    margin: 0;
    /*Edge starts the margin from the thumb, not the track as other browsers do*/
  }
}

p {
  margin: 0;
}

</style>