<template>
    <section class="container">
        <div class="first">
            <h1>Выполняйте задания и получайте прибыль</h1>
            <p>Или поручите свои дела специалистам </p>
            <div class="btns">
                <a href="">Стать специалистом</a>
                <a href="">Разместить задание</a>
            </div>
        </div>
        <div class="second">
            <img src="/public/img/main_img.png" alt="">
        </div>
    </section>
</template>

<script>
export default {

}
</script>

<style lang="scss" scoped>
section {
    margin-top: 200px;
    display: flex;
    flex-direction: row;
    justify-content: space-between;
    align-items: center;

    .first {
        display: flex;
        flex-direction: column;
        gap: 40px;

        h1 {
            width: 690px;
            font-family: 'Montserrat';
            font-style: normal;
            font-weight: 700;
            font-size: 48px;
            line-height: 59px;
            color: #1B374F;
        }

        p {

            font-family: 'Montserrat';
            font-style: normal;
            font-weight: 600;
            font-size: 36px;
            color: #1B374F;
        }

        .btns {
            display: flex;
            flex-direction: row;
            align-items: center;
            gap: 25px;

            a:nth-child(1) {
                transition: .55s;
                background-color: #CDF2FA;
                padding: 24px 41px;
                border-radius: 40px;
                font-size: 24px;
                font-weight: bold;
                color: #1B374F;
            }

            a:nth-child(1):hover {
                box-shadow: 4px 6px 5px 0 #CDF2FA;
                background-color: #99EDFF;
            }

            a:nth-child(2) {
                font-size: 24px;
                font-weight: bold;
                color: #1B374F;
                text-decoration: underline;
            }
        }
    }
}
</style>