<template>
  <HeaderComponent v-if="this.$route.path != '/register'" />
  <router-view></router-view>
  <FooterComponent v-if="this.$route.path != '/register'" />

</template>

<script>
import HeaderComponent from '../../components/HeaderComponent.vue';
import FooterComponent from '../../components/FooterComponent.vue';
export default {
  components: { HeaderComponent, FooterComponent },
  data() {
    return {};
  },
};
</script>

<style lang="scss" scoped></style>