<template>

<main>
  <FirstSection/>
  <SecondSection />
  <ThirdSection/>
</main>

</template>
<script>
import FirstSection from '../../components/MainComponents/SectionFirstComponent.vue';
import SecondSection from '../../components/MainComponents/SectionSecondComponent.vue';
import ThirdSection from '../../components/MainComponents/SectionThirdComponent.vue'
  export default {
    components: {
      FirstSection, SecondSection,ThirdSection
    }
  }
</script>

<style lang="scss" scoped>
</style>