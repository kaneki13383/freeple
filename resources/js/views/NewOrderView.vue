<template>
    <section class="container">

        <MenuComponent />
        <div class="allborder">
            <div>
                <h2>Вы еще не создавали заказы — начинайте епт...</h2>
            </div>
            <div class="all">
                <div class="card">
                    <img src="/public/img/one.png" alt="">
                    <div>
                        <h3>Разместите заказ</h3>
                        <p>Опишите задачу. Если нужно, укажите сроки и бюджет</p>
                    </div>
                </div>
                <div class="card">
                    <img src="/public/img/two.png" alt="">
                    <div>
                        <h3>Получите предложения</h3>
                        <p>Исполнители сами откликнутся на ваш заказ. Обсудите детали заказа в чате или по телефону</p>
                    </div>
                </div>
                <div class="card">
                    <img src="/public/img/three.png" alt="">
                    <div>
                        <h3>Выберите исполнителя</h3>
                        <p>Выберите подходящего вам исполнителя по рейтингу, отзывам и цене

                        </p>
                    </div>
                </div>
            </div>
            <div class="btn_border">
                <div class="btn">
                    <a href="">Создать</a>
                </div>
            </div>

        </div>



    </section>
</template>

<script>
import MenuComponent from '../../components/MenuComponent.vue'
export default {
    components: {
        MenuComponent
    }
}
</script>

<style lang="scss" scoped>
section {
    margin-top: 150px;
    display: flex;
    gap: 120px;
}

.allborder {
    display: flex;
    flex-direction: column;
}

h2 {
    /* Вы еще не создавали заказы — начинайте епт... */

    font-family: 'Montserrat';
    font-style: normal;
    font-weight: 700;
    font-size: 48px;
    line-height: 59px;
    height: 118px;
    color: #1B374F;
}

.all {
    margin-top: 150px;
    display: flex;
    flex-direction: row;
    gap: 20px;

    .card {
        display: flex;
        flex-direction: row;
        align-items: flex-start;
        gap: 30px;
        width: 335px;
        background: #6ABAB7;
        border-radius: 40px;
        padding: 50px 35px;

        div {
            display: flex;
            flex-direction: column;
            gap: 40px;

            h3 {
                color: #fff;
                font-size: 24px;
                font-weight: bold;
            }

            p {
                font-size: 14px;
                color: #fff;
                font-weight: bold;
                width: 190px;
            }
        }
    }
}

.btn_border {
    display: flex;
    justify-content: center;
    align-items: center;
    width: 1045px;
}

.btn {
    margin-top: 50px;
    display: flex;
    align-items: center;
    justify-content: center;
    border-radius: 40px;
    background: #CDF2FA;



    :hover {
        box-shadow: 4px 6px 5px 0 #CDF2FA;
        background-color: #99EDFF;

    }

    a {
        border-radius: 40px;
        transition: .55s;
        width: 200px;
        height: 59px;
        display: flex;
        justify-content: center;
        align-items: center;
        font-family: 'Montserrat';
        font-style: normal;
        font-weight: 700;
        font-size: 18px;
        line-height: 22px;
        color: #1B374F;

    }
}
</style>