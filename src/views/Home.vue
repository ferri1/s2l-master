<template>
  <div class="home">
    <!-- <img alt="Vue logo" src="../assets/logo.png" /> -->
    <Pitch />
  </div>
</template>

<script>
// @ is an alias to /src
import Pitch from "@/components/Pitch.vue";

export default {
  name: "Home",
  components: {
    Pitch
  }
};
</script>
