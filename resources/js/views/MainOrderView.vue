<template>
    <section class="container">

        <MenuComponent />
        <div class="allborder">
            <div>
                <h2>Подбирайте исполнителей без лишних хлопот</h2>
            </div>
            <div class="all">
                <div class="card">
                    <img src="/public/img/one.png" alt="">
                    <div>
                        <h3>Опишите задачу</h3>
                        <p>Исполнители сами напишут вам. Это бесплатно</p>
                    </div>
                </div>
                <div class="card">
                    <img src="/public/img/two.png" alt="">
                    <div>
                        <h3>Сравните предложения</h3>
                        <p>По рейтингу, отзывам и цене.
                            Уточните детали заказа в чате или по телефону</p>
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


            <div class="performer">


                <div class="performer_inputs">

                    <form action="">
                        <div>
                            <input type="text" placeholder="Короткое название задачи">
                        </div>
                        <div>
                            <input class="input2" type="text" placeholder="Расскажите подробнее о задаче">
                        </div>


                    </form>
                    <div class="btns_border">
                        <div class="btns">
                            <div class="price">
                                <img src="/public/img/money_bag.png" alt="">
                                <a>Бюджет</a>
                            </div>
                            <div class="photo">
                                <img src="/public/img/office.png" alt="">
                                <a>Фото и файлы</a>
                            </div>
                            <div class="photo">
                                <img src="/public/img/office.png" alt="">
                                <a>Категория</a>
                            </div>


                        </div>
                    </div>
                    <hr>
                    <div class="enter_border">
                        <div class="btn_enter">
                            <div class="enter">
                                <a href="">Опубликовать</a>
                            </div>
                        </div>
                    </div>


                </div>
            </div>

        </div>





    </section>
</template>

<script>
import MenuComponent from '../../components/MenuComponent.vue';
export default {
    components: {
        MenuComponent
    }
}
</script>

<style lang="scss" scoped>
.performer {
    display: flex;
    flex-direction: column;
    width: 1045px;
    justify-content: center;
    align-items: center;

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

    form {
        .input2 {
            height: 86px;
        }
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
        width: max-content;
        padding: 10px;
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
        width: max-content;
        padding: 10px;
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
</style>