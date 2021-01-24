<template>
  <div class="has-fixed-sidenav">
    <header>
      <div class="navbar-fixed" style="height: 95px">
        <nav class="navbar blue darken-1" style="height: 95px">
          <div class="nav-wrapper nav-menu aling-v">
            <div>
              <a
                data-target="slide-out"
                class="sidenav-trigger left"
                v-bind:class="{ 'button-collapse': sidebar }"
                v-on:click="collapse()"
              >
                <i class="material-icons white-text">menu</i>
              </a>
            </div>
            <div>
              <h6 class="linea">Créditos ganados: 2000</h6>
              <h6 class="linea space">Créditos disponibles: 1000</h6>
            </div>
            <div class="linea">
              <img
                class="logo-min circle-nav"
                src="images/default.png"
                alt=""
              />
            </div>
            <div class="linea">
              <ul class="navbar-nav ml-auto ">
                <li class="nav-item dropdown">
                  <a 
                    id="navbarDropdown" 
                    class="nav-link dropdown-toggle" 
                    href="#" 
                    role="button" 
                    data-toggle="dropdown" 
                    aria-haspopup="true" 
                    aria-expanded="false"
                    style="font-size: 17px; color: white"
                  >
                    {{ user }}
                  </a>
                  <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                    <a 
                      class="dropdown-item" href="#"
                      @click="logout()"
                      style="font-size: 17px"
                    >
                      cerrar sessión
                    </a>
                  </div>
                </li>
              </ul>
            </div>
          </div>
        </nav>
      </div>
      <ul
        class="sidenav sidenav-fixed"
        v-bind:class="{ 'sidenav-collapse': sidebar }"
        id="slide-out"
      >
        <li class="top-p">
          <div class="center">
            <img src="images/default.png" class="logo-sidebar circle">
          </div>
        </li>
        <li>
          <ul class="collapsible collapsible-accordion left-p top-m top-p">
            <li class="waves-effect" :class="{ 'active': raiz }">
              <router-link 
                :to="{
                  name: 'Raiz', 
                  params: { 
                    user 
                  } 
                }" 
                class="collapsible-header" 
                tabindex="0"
              >
                <h5 class="black-text name">Panel</h5>
              </router-link>
            </li>
            <li class="waves-effect" :class="{ 'active': home }">
              <router-link 
                :to="{
                  name: 'Home', 
                  params: { 
                    user 
                  } 
                }"  
                class="collapsible-header" 
                tabindex="0"  
              >
                <h5 class="black-text name">Notificaciones</h5>
              </router-link>
            </li>
            <li class="waves-effect" :class="{ 'active': recurso }">
              <router-link
                :to="{
                  name: 'Form', 
                  params: { 
                    form 
                  } 
                }"
                class="collapsible-header"
                tabindex="0"
              >
                <h5 class="black-text name">Mis recursos</h5>
              </router-link>
            </li>
            <li class="waves-effect" :class="{ 'active': propuesta }">
              <router-link
                :to="{
                  name: 'Home', 
                  params: { 
                    user 
                  } 
                }" 
                class="collapsible-header"
                tabindex="0"
              >
                <h5 class="black-text name">Propuestas</h5>
              </router-link>
            </li>
            <li class="waves-effect" :class="{ 'active': compensar }">
              <router-link
                :to="{
                  name: 'Home', 
                  params: { 
                    user 
                  } 
                }" 
                class="collapsible-header"
                tabindex="0"
              >
                <h5 class="black-text name">Compensar</h5>
              </router-link>
            </li>
            <li class="waves-effect" :class="{ 'active': cuenta }">
              <router-link
                :to="{
                  name: 'Home', 
                  params: { 
                    user 
                  } 
                }" 
                class="collapsible-header"
                tabindex="0"
              >
                <h5 class="black-text name">Cuenta</h5>
              </router-link>
            </li>
          </ul>
        </li>
      </ul>
    </header>
  </div>
</template>

<script>
export default {
  props: ['user', 'route', 'form'],
  data() {
    return {
      sidebar: false,
      raiz: false,
      home: false,
      recurso: true,
      propuesta: false,
      compensar: false,
      cuenta: false
    };
  },
  methods: {
    async logout() {
      try {
        const url = `${ this.route }`
        axios.post(url)
        window.location.reload()
      } catch (error) {
        console.log(error)
      }
    },
    collapse() {
      this.sidebar = !this.sidebar;
    },
  },
};
</script>

<style scoped>
.sidenav .collapsible > li.waves-effect {
  display: block;
}

.sidenav .collapsible li,
.sidenav.fixed .collapsible li {
  padding: 0;
}

.logo-min {
  width: 195px;
  height: 85px;
}

.logo-sidebar {
  height: 110px;
  margin: 0 auto;
  display: block;
}

.top-m {
  margin-top: 10px;
}

@media (max-width: 992px) {
  .sidenav-collapse {
    transform: translateX(0%);
    -webkit-transition: transform 300ms linear;
    -moz-transition: transform 300ms linear;
    -ms-transition: transform 300ms linear;
    -o-transition: transform 300ms linear;
    transition: transform 300ms linear;
  }

  .button-collapse {
    margin-left: 312px;
    -webkit-transition: margin-left 300ms linear;
    -moz-transition: margin-left 300ms linear;
    -ms-transition: margin-left 300ms linear;
    -o-transition: margin-left 300ms linear;
    transition: margin-left 300ms linear;
  }
}

.circle {
  width: 150px;
  height: 150px;
  border: solid 1px;
  border-radius: 50%;
}

.circle-nav {
  width: 50px;
  height: 50px;
  border: solid 1px;
  border-radius: 50%;
}

.top-p {
  padding-top: 35px;
}

.left-p {
  padding-left: 50px;
}

.linea {
  display: inline-block;
}

.space {
  margin-left: 2.5vh;
}

.nav-menu {
  width: 72%;
}

.aling-v {
  display: flex;
  align-items: center;
  justify-content: space-between;
}

.navbar-nav .dropdown-menu {
  margin-top: 30px;
}
</style>
