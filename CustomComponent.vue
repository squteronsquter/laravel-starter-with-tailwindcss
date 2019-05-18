<template>
  <div class="container">
    <div class="custom-heading bg-white text-black p-8 rounded" v-text="name"></div>
  </div>
</template>
<script>
export default {
  data() {
    return { name: "Custom Component Header" };
  }
};
</script>
<style type="text/css" scoped>
.custom-heading {
  font-size: 3em;
}
</style>
