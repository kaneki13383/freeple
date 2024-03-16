<template>
    <section class="container">
        <h2>Как это устроено?</h2>
        <div class="all">
            <div v-for="card in arr" :key="card" class="card">
                <img :src="card.img" alt="">
                <div>
                    <h3>{{ card.name }}</h3>
                    <p>{{ card.discr }}</p>
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
                { img: '/img/icon-notebook.png', name: 'Заказчик', discr: 'размещает заказ за минуту' },
                { img: '/img/icon-document.png', name: 'Специалисты', discr: 'предлагают цены и сроки' },
                { img: '/img/icon-trust.png', name: 'Заказчик', discr: 'выбирает подходящего исполнителя' },
                { img: '/img/icon-satisfaction.png', name: 'Исполнитель', discr: 'выполняет работу и получает оплату' },
            ]
        }
    },
}
</script>

<style lang="scss" scoped>
section {
    margin-top: 150px;

    h2 {
        text-align: center;
        font-size: 48px;
    }

    .all {
        margin-top: 100px;
        display: flex;
        flex-direction: row;
        gap: 20px;

        .card {
            display: flex;
            flex-direction: row;
            align-items: flex-start;
            gap: 40px;
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
}
</style>