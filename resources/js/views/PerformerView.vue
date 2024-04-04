<template>
    <section class="container">
        <!-- <div class="menu">
            <a href="">Найти специалиста</a>
            <router-link to="/neworder">Мои заказы</router-link>
            <a href="">Стать исполнителем</a>
        </div> -->
        <MenuComponent />

        <div class="performer">
            <h1>Станьте исполнителем</h1>

            <div class="performer_inputs">

                <form action="">
                    <div>

                        <input type="text" placeholder="Имя">
                    </div>
                    <div>
                        <input type="text" placeholder="Фамилия">
                    </div>
                    <div>
                        <input type="text" placeholder="Телефон">
                    </div>

                </form>
                <div class="btns_border">
                    <div class="btns">
                        <div class="price">
                            <img src="/public/img/money_bag.png" alt="">
                            <a>Цена услуги</a>
                        </div>
                        <div class="photo">
                            <img src="/public/img/office.png" alt="">
                            <a>Фото</a>
                        </div>


                    </div>
                </div>
                <hr>
                <div class="enter_border">
                    <div class="btn_enter">
                        <div class="enter">
                            <a href="">Продолжить</a>
                        </div>
                    </div>
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

.performer {
    display: flex;
    flex-direction: column;

    form {
        display: flex;
        flex-direction: column;
        justify-content: center;
        align-items: center;
        margin-top: 40px;
        gap: 30px;
    }

    input {
        padding: 20px;
        font-family: 'Montserrat';
        color: #080505;
        box-sizing: border-box;
        width: 690px;
        height: 43px;
        background: #F8F8F8;
        border: 1px solid #3CF2C0;
        border-radius: 15px;
    }

    h1 {
        font-family: 'Montserrat';
        font-style: normal;
        font-weight: 700;
        font-size: 48px;
        line-height: 59px;
        color: #1B374F;
    }

    .performer_inputs {
        margin-top: 100px;
        width: 837px;
        height: 436px;
        background: #86C9C6;
        border: 1px solid #BEBDBD;
        border-radius: 40px;
    }
}

.btns_border {
    display: flex;
    justify-content: center;
}

.btns {
    margin-top: 30px;
    display: flex;
    flex-direction: row;
    width: 690px;
    gap: 30px;

    .price {
        a {
            cursor: pointer;
        }

        display: flex;
        justify-content: center;
        align-items: center;
        gap: 5px;
        width: 124px;
        height: 28px;
        background: #CDF2FA;
        border-radius: 15px;
        font-family: 'Montserrat';
        font-style: normal;
        font-weight: 700;
        font-size: 12px;
        line-height: 15px;

        color: #1B374F;

        img {
            width: 14px;
            height: 14px;
        }
    }

    .photo {
        a {
            cursor: pointer;
        }

        display: flex;
        justify-content: center;
        align-items: center;
        gap: 5px;
        width: 96px;
        height: 28px;
        background: #CDF2FA;
        border-radius: 15px;
        font-family: 'Montserrat';
        font-style: normal;
        font-weight: 700;
        font-size: 12px;
        line-height: 15px;

        color: #1B374F;
    }


}

hr {
    margin-top: 30px;
    width: 837px;
    height: 0px;
    border: 1px solid #FFFFFF;
    transform: rotate(0.07deg);
}

.enter_border {
    margin-top: 30px;
    display: flex;
    justify-content: center;


}

.btn_enter {
    display: flex;
    justify-content: flex-end;
    width: 690px;

    :hover {
        box-shadow: 4px 5px 5px 0 #CDF2FA;
        background-color: #99EDFF;

    }
}

.enter {

    display: flex;
    justify-content: center;
    align-items: center;
    border-radius: 40px;
    background: #CDF2FA;
    transition: .55s;

    a {
        width: 200px;
        height: 59px;
        border-radius: 40px;
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