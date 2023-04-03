<template>
  <div class="container">
    <div class="visible-size">{{ visibleWidth }} x {{ visibleHeight }} CSS pixels</div>
    <div class="content">
      <!-- your content here -->
    </div>
  </div>
</template>

<script>
export default {
  data() {
    return {
      visibleWidth: 0,
      visibleHeight: 0
    }
  },
  mounted() {
    // calculate the visible size and update the data properties
    this.visibleWidth = document.documentElement.clientWidth;
    this.visibleHeight = document.documentElement.clientHeight;

    // update the visible size whenever the window is resized
    window.addEventListener('resize', () => {
      this.visibleWidth = document.documentElement.clientWidth;
      this.visibleHeight = document.documentElement.clientHeight;
    });
  }
}
</script>

<style scoped>
.container {
  position: relative;
}

.visible-size {
  position: absolute;
  top: 0;
  left: 0;
  background-color: rgba(0, 0, 0, 0.5);
  color: #fff;
  padding: 10px;
  font-size: 14px;
  white-space: nowrap;
}

.content {
  /* add your styles here */
}
</style>
