<template>
    <div class="background">
        <div class="block">
            <router-link to="/">REGISTER</router-link>
            <form action="">
                <div>
                    <label for="">Никнейм</label>
                    <input type="text" v-model="name" placeholder="Придумайте никнейм">
                </div>
                <div>
                    <label for="">Почта</label>
                    <input type="email" v-model="email" placeholder="Ваша почта">
                </div>
                <div>
                    <label for="">Пароль</label>
                    <input type="password" v-model="password" placeholder="Ваш пароль">
                </div>
                <div>
                    <label for="">Повторите пароль</label>
                    <input type="password" v-model="password_repeat" placeholder="Повторите пароль">
                </div>
                <div>
                    <button @click.prevent="Register()">Зарегистрироваться</button>
                </div>
            </form>
        </div>
        <Transition name="bounce">
            <p class="error" @click="message = ''" v-if="message != ''">{{ message }}</p>
        </Transition>
    </div>
</template>

<script>
import axios from 'axios';

export default {
    data() {
        return {
            name: '',
            email: '',
            password: '',
            password_repeat: '',
            message: []
        }
    },
    methods: {
        Register() {
            if (this.password == this.password_repeat) {
                axios.post('/api/register', {
                    name: this.name,
                    email: this.email,
                    password: this.password
                })
                    .then(res => {
                        localStorage.setItem("token", res.data["content"]);
                        this.$router.push('/profile')
                    })
                    .catch(err => {
                        this.message = err.response.data.message
                    })
            }
            else {
                this.message = 'Пароли не совпадают'
            }
        }
    },
}
</script>

<style lang="scss" scoped>
.bounce-enter-active {
    animation: bounce-in 1s;
}

.bounce-leave-active {
    animation: bounce-in 1s reverse;
}

@keyframes bounce-in {
    0% {
        right: -250px;
    }

    100% {
        right: 20px;
    }
}

.background {
    width: 100%;
    height: 100vh;
    background: linear-gradient(90deg, #97EBFC, #67B7B4);
    display: flex;
    justify-content: center;
    align-items: center;

    .error {
        cursor: pointer;
        position: absolute;
        top: 20px;
        right: 20px;
        color: red;
        text-align: center;
        background-color: rgba(255, 0, 0, 0.212);
        padding: 10px 20px;
        border-radius: 10px;
    }

    .block {
        background: #ffffff;
        border-radius: 20px;
        display: flex;
        flex-direction: column;
        align-items: center;
        padding: 0 3vw;

        a {
            margin-top: 50px;
            margin-bottom: 44px;
            font-size: 48px;
            font-weight: bold;
            font-family: "Montserrat Subrayada";
            color: #1B374F;
        }

        form {
            display: flex;
            flex-direction: column;
            gap: 25px;
            margin-bottom: 50px;


            div {
                display: flex;
                flex-direction: column;
                gap: 10px;

                label {
                    font-weight: bold;
                    font-family: "Montserrat";
                    color: #1B374F;
                    font-size: 18px;
                }

                input {
                    outline: none;
                    background: transparent;
                    border-radius: 15px;
                    width: 20vw;
                    height: 40px;
                    border: 1px solid #3CF2C0;
                    padding-left: 20px;
                    font-family: "Montserrat";
                    color: #1B374F;
                }

                button {
                    cursor: pointer;
                    background: #CDF2FA;
                    font-family: "Montserrat";
                    color: #1B374F;
                    font-size: 18px;
                    border: none;
                    height: 60px;
                    border-radius: 40px;
                    margin-top: 40px;
                }
            }
        }
    }
}
</style>