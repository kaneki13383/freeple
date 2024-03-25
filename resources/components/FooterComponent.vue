<template>
    <section>
        <div class="parent container">
            <div class="logo">
                <h2>Freeple</h2>
                <p>Условия использования</p>
                <p>Политика конфиденциальности</p>
            </div>
            <div class="nav">
                <h2>Навигация</h2>
                <a href="/">Найти специалиста</a>
                <a href="/">Стать исполнителем</a>
                <a href="/">Мои заказы</a>
            </div>
            <div class="contact">
                <h2>Контакты</h2>
                <p>89270703536</p>
                <p>89673312786</p>
            </div>
            <div class="img">
                <a href=""><img src="/public/img/vk.png" alt=""></a>
                <a href=""><img src="/public/img/telega.png" alt=""></a>
                <a href=""><img src="/public/img/whatsapp.png" alt=""></a>
            </div>
        </div>
    </section>

</template>

<script>
export default {

}
</script>

<style lang="scss" scoped>
section {
    margin-top: 100px;
    background-color: #6ABAB7;
    color: #fff;
    height: 400px;
}

.parent {
    display: flex;
    justify-content: space-between;
}

p {
    font-family: 'Montserrat';
    font-style: normal;
    font-weight: 700;
    font-size: 18px;
    line-height: 22px;
}

a {
    color: #fff;
    font-family: 'Montserrat';
    font-style: normal;
    font-weight: 700;
    font-size: 18px;
    line-height: 22px;
}

.logo {
    margin-top: 90px;
    display: flex;
    flex-direction: column;
    gap: 50px;



    :nth-child(1) {
        /* Freeple */


        font-family: 'Montserrat Subrayada';
        font-style: normal;
        font-weight: 700;
        font-size: 48px;
        line-height: 59px;

    }
}


.nav {
    margin-top: 100px;
    display: flex;
    flex-direction: column;
    gap: 50px;

    :nth-child(1) {
        font-family: 'Montserrat';
        font-style: normal;
        font-weight: 700;
        font-size: 32px;
        line-height: 39px;
    }
}

.contact {
    margin-top: 100px;
    display: flex;
    flex-direction: column;
    gap: 50px;

    :nth-child(1) {
        font-family: 'Montserrat';
        font-style: normal;
        font-weight: 700;
        font-size: 32px;
        line-height: 39px;
    }

}

.img {
    width: 60px;
    height: 60px;
    display: flex;
    gap: 12px;
    margin-top: 100px;


}
</style>