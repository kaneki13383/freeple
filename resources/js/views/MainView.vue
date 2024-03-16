<template>

<main>
  <FirstSection/>
  <SecondSection />
</main>

</template>
<script>
import FirstSection from '../../components/MainComponents/SectionFirstComponent.vue';
import SecondSection from '../../components/MainComponents/SectionSecondComponent.vue';
  export default {
    components: {
      FirstSection, SecondSection
    }
  }
</script>

<style lang="scss" scoped>
</style>