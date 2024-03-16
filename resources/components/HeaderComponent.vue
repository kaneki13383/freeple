<template>
    <div class="container">
        <header>
            <div class="logo"><router-link to="/">Freeple</router-link> </div>
            <div class="header_links">
                <a href="">Найти специалиста</a>
                <a href="">Стать исполнителем</a>
            </div>
            <div class="header_auth">
                <router-link to="/login">Вход</router-link>
                <router-link to="/register">Регистрация</router-link>
            </div>
        </header>
    </div>
</template>

<script>
export default {

}
</script>

<style lang="scss" scoped>
header {
    display: flex;
    justify-content: space-between;
    align-items: center;
    margin-top: 30px;

    .header_links {
        display: flex;
        flex-direction: row;
        gap: 60px;
        font-style: normal;
        font-weight: 700;
        font-size: 20px;
        line-height: 24px;

        a {
            color: #1B374F;
        }
    }

    .logo {

        /* Freeple */
        a {
            color: #1B374F;
            font-family: "Montserrat Subrayada";
            font-style: normal;
            font-weight: 700;
            font-size: 48px;
            line-height: 59px;
        }



    }

    .header_auth {
        font-size: 20px;
        display: flex;
        flex-direction: row;
        gap: 25px;
        align-items: center;

        a {
            font-style: normal;
            font-weight: 700;
            font-size: 20px;
            line-height: 24px;
            color: #1B374F;
        }

        a:nth-child(2) {
            transition: .55s;
            background-color: #CDF2FA;
            padding: 25px 48px;
            border-radius: 40px;
        }

        a:nth-child(2):hover {
            box-shadow: 4px 6px 5px 0 #CDF2FA;
            background-color: #99EDFF;
        }
    }
}
</style>