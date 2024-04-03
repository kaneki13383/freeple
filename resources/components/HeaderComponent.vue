<template>
    <div class="container">
        <header>
            <div class="logo"><router-link to="/">Freeple</router-link> </div>
            <div class="header_links">
                <a href="">Найти специалиста</a>
                <router-link to="/performer">Стать исполнителем</router-link>
            </div>
            <div class="header_auth">
                <router-link to="/login" v-if="!token">Вход</router-link>
                <router-link to="/register" v-if="!token">Регистрация</router-link>
                <router-link to="/profile" v-if="token">Здравствуйте, {{ me.name }}</router-link>
            </div>
        </header>
    </div>
</template>

<script>
import axios from 'axios';

export default {
    data() {
        return {
            token: '',
            me: []
        }
    },
    mounted() {
        this.GetToken()
        if (this.token) {
            this.GetMe()
        }
    },

    watch: {
        $route() {
            this.GetToken();
            this.GetMe();
        },
    },
    methods: {
        GetMe() {
            if (this.token) {
                axios.get("/api/me", {
                    headers: {
                        Authorization: `Bearer ${localStorage.getItem("token")}`,
                    },
                })
                    .then((res) => {
                        this.me = res.data.content;
                    })
                    .catch((err) => {
                        this.$router.push("/");
                    });
            }
        },
        GetToken() {
            this.token = localStorage.getItem('token');
        }
    },
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

        a:last-child {
            transition: .55s;
            background-color: #CDF2FA;
            padding: 25px 48px;
            border-radius: 40px;
        }

        a:last-child:hover {
            box-shadow: 4px 6px 5px 0 #CDF2FA;
            background-color: #99EDFF;
        }
    }
}
</style>