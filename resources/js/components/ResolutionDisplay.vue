<template>
  <div class="relative h-screen w-screen">
    <div class="flex h-screen w-screen absolute top-0 left-0">
      <div
        v-if="!screen || screen === 'small'"
        class="bg-red-500 opacity-20 w-full h-[896px] absolute top-0 left-0"
        :style="`@media ${screens.small.raw} {display: block; z-index: ${zIndices.small}}`"
      ></div>
      <div
        v-if="!screen || screen === 'medium'"
        class="bg-green-500 opacity-20 w-full h-[1030px] absolute top-0 left-0"
        :style="`@media ${screens.medium.raw} {display: block; z-index: ${zIndices.medium}}`"
      ></div>
      <div
        v-if="!screen || screen === 'large'"
        class="bg-blue-500 opacity-20 w-full h-[2796px] absolute top-0 left-0"
        :style="`@media ${screens.large.raw} {display: block; z-index: ${zIndices.large}}`"
      ></div>
    </div>
    <div class="absolute top-0 left-0 bg-white p-2 font-bold text-sm">
      Screen resolution: {{ screenResolution }}
    </div>
    <div class="absolute top-8 left-0 bg-white p-2 font-bold text-sm">
      Media type: {{ currentMediaType }}
    </div>
  </div>
</template>

<script>
export default {
  name: "ScreenRectangles",
  props: {
    screen: {
      type: String,
      default: "",
    },
  },
  data() {
    return {
      screens: {
        // Small devices (iPhone 7, 8, SE 2nd gen, and similar Android devices)
        small: {
          raw: "(max-height: 896px)",
        },

        // Medium devices (iPhone X, XR, XS, XS Max, 11, 11 Pro, 11 Pro Max, 12, 12 Pro, 12 Pro Max, 12 Mini, 13, 13 Pro, 13 Pro Max, 13 Mini, and similar Android devices)
        medium: {
          raw: "(max-height: 1030px)",
        },

        // Large devices (hypothetical iPhone 14 Pro Max, OnePlus devices, and similar large Android devices)
        large: {
          raw: "(max-height: 2796px)",
        },
      },
      zIndices: {
        small: 3,
        medium: 2,
        large: 1,
      },
      visibleWidth: 0,
      visibleHeight: 0,
    };
  },
  mounted() {
    window.addEventListener("resize", this.updateScreenData);
    this.updateScreenData();
  },
  beforeDestroy() {
    window.removeEventListener("resize", this.updateScreenData);
  },
  methods: {
    updateScreenData() {
      this.visibleHeight = Math.max(
        document.documentElement.clientHeight,
        window.innerHeight || 0
      );
      this.visibleWidth = Math.max(
        document.documentElement.clientWidth,
        window.innerWidth || 0
      );
    },
  },
  computed: {
    screenResolution() {
      return `${this.visibleWidth} x ${this.visibleHeight}`;
    },
    currentMediaType() {
      let mediaType = "";
      if (this.visibleHeight <= 896) {
        mediaType = "small";
      } else if (this.visibleHeight <= 1030) {
        mediaType = "medium";
      } else {
        mediaType = "large";
      }
      return mediaType;
    },
  },
};
</script>

<style scoped>
.bg-red-500 {
  background-color: #ef4444;
}

.bg-green-500 {
  background-color: #10b981;
}

.bg-blue-500 {
  background-color: #3b82f6;
}
</style>
