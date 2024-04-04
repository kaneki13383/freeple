<template>
    <div class="menu">
        <a href="">Найти специалиста</a>
        <router-link to="/neworder">Мои заказы</router-link>
        <a href="">Стать исполнителем</a>
    </div>
</template>

<script>
export default {

}
</script>

<style lang="scss" scoped>
.menu {

    display: flex;
    flex-direction: column;
    gap: 20px;


    :hover {
        box-shadow: 4px 6px 5px 0 #CDF2FA;
        background-color: #99EDFF;

    }

    a {
        transition: .55s;
        display: flex;
        width: 240px;
        height: 75px;
        justify-content: center;
        align-items: center;



        background: #CDF2FA;
        border-radius: 40px;
        font-family: 'Montserrat';
        font-style: normal;
        font-weight: 700;
        font-size: 18px;
        line-height: 22px;

        color: #1B374F;


    }

}
</style>