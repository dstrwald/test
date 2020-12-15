<template>
  <div id="app">
    <p>Test</p>
    <chart :chart-data="dataset"></chart>
  </div>
</template>

<script>
import Chart from "./Chart.js";

export default {
  name: "app",
  components: { Chart },
  data() {
    return {
      msg: "Welcome to Your Vue.js App",
      dataset: null,
    };
  },
  mounted() {
    this.fillData();
  },
  methods: {
    fillData() {
      this.dataset = {
        labels: [this.getRandomInt(), this.getRandomInt()],
        datasets: [
          {
            label: "Data One",
            backgroundColor: "#f87979",
            data: [1, 0],
          },
          {
            label: "Data two",
            backgroundColor: "#c2c2c2",
            data: [0, 1],
          },
        ],
      };
    },
    getRandomInt() {
      return Math.floor(Math.random() * (50 - 5 + 1)) + 5;
    },
  },
};
</script>

<style lang="scss">
#app {
  font-family: "Avenir", Helvetica, Arial, sans-serif;
  -webkit-font-smoothing: antialiased;
  -moz-osx-font-smoothing: grayscale;
  text-align: center;
  color: #2c3e50;
  margin-top: 60px;
}

h1,
h2 {
  font-weight: normal;
}

ul {
  list-style-type: none;
  padding: 0;
}

li {
  display: inline-block;
  margin: 0 10px;
}

a {
  color: #42b983;
}
</style>
