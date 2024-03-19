<template>
    <section class="container">
        <h2>Услуги в Астрахани</h2>
        <div class="all">
            <div v-for="btns_usl in arr" :key="btns_usl" class="btns_usl">
                <div>
                    <img :src="btns_usl.img" alt="">
                    <p>{{ btns_usl.name }}</p>
                </div>
            </div>

        </div>




    </section>
</template>

<script>
export default {
    data() {
        return {
            arr: [
                { img: '/img/elektrik.png', name: "Электрик" },
                { img: '/img/elektrik.png', name: "Электрик" },
                { img: '/img/elektrik.png', name: "Электрик" },
                { img: '/img/elektrik.png', name: "Электрик" },
                { img: '/img/elektrik.png', name: "Электрик" },
                { img: '/img/elektrik.png', name: "Электрик" },
                { img: '/img/elektrik.png', name: "Электрик" },
                { img: '/img/elektrik.png', name: "Электрик" },
                { img: '/img/elektrik.png', name: "Электрик" },
                { img: '', name: "Больше услуг..." },


            ]
        }
    },
}
</script>

<style lang="scss" scoped>
h2 {
    /* Услуги в Астрахани */

    font-family: 'Montserrat';
    font-style: normal;
    font-weight: 700;
    font-size: 48px;
    line-height: 59px;

    color: #1B374F;

    margin-bottom: 60px;
}

section {
    margin-top: 150px;

    .all {
        display: flex;
        flex-direction: row;
        gap: 20px;
        flex-wrap: wrap;

    }

    .btns_usl {
        display: flex;
        align-items: center;
        margin-top: 40px;
        width: 335px;
        background: #6ABAB7;
        border-radius: 40px;
        height: 122px;

        div {
            display: flex;
            align-items: center;
            justify-content: center;

            gap: 40px;


            img {
                padding-right: 5px;
                padding-left: 5px;
            }

            p {
                /* Электрик */

                font-family: 'Montserrat';
                font-style: normal;
                font-weight: 400;
                font-size: 32px;
                line-height: 39px;
                /* identical to box height */
                color: #FFFFFF;
            }
        }
    }
}
</style>