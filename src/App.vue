<template>
    <Welcome/>
    <Footer/>
    <!--  <img alt="Vue logo" src="./assets/logo_.png">-->
    <!--  <HelloWorld msg="Welcome to Your Vue.js App"/>-->
</template>


<script>
    // import HelloWorld from './components/HelloWorld.vue'
    // import NavBar from "./components/NavBar";
    // import Header from "./components/Header";
    import Footer from "./components/Footer";
    // import JavaScript from "./components/JavaScript";
    // eslint-disable-next-line no-unused-vars
    import Welcome from "./components/Welcome";

    export default {
        name: 'App',
        components: {

            // NavBar,
            // Header,
            Welcome,
            Footer,
          //   JavaScript,
        }
    }
</script>

<style>
    #app {
        font-family: Avenir, Helvetica, Arial, sans-serif;
        -webkit-font-smoothing: antialiased;
        -moz-osx-font-smoothing: grayscale;
        text-align: center;
        color: #2c3e50;
        margin-top: 60px;
    }
</style>
