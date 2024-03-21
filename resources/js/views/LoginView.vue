<template>
    <div class="background">
        <div class="block">
            <router-link to="/">LOGIN</router-link>
            <form action="">
                <div :class="{ error: v$.name.$errors.length }">
                    <label for="">Никнейм</label>
                    <input type="text" v-model="v$.name.$model" name="name" placeholder="Придумайте никнейм">
                    <div class="input-errors" v-for="(error, index) of v$.name.$errors" :key="index">
                        <div class="error-msg" style="color: red;">{{ error.$message }}</div>
                    </div>
                </div>
                <div :class="{ error: v$.password.$errors.length }">
                    <label for="">Пароль</label>
                    <input type="password" v-model="v$.password.$model" placeholder="Ваш пароль">
                    <div class="input-errors" v-for="(error, index) of v$.password.$errors" :key="index">
                        <div class="error-msg" style="color: red;">{{ error.$message }}</div>
                    </div>
                </div>
                <div>
                    <button @click.prevent="Login()">Войти</button>
                </div>
            </form>
        </div>
        <Transition name="bounce">
            <p class="error_right" @click="message = ''" v-if="message != ''">{{ message }}</p>
        </Transition>
    </div>
</template>

<script>
import axios from 'axios';
import useVuelidate from "@vuelidate/core";
import { required, email, minLength, helpers } from "@vuelidate/validators";

export function validName(name) {
    let validNamePattern = new RegExp("^[а-яА-Я]+(?:[-'\\s][а-яА-Я]+)*$");
    if (validNamePattern.test(name)) {
        return true;
    }
    return false;
}

export default {
    setup() {
        return { v$: useVuelidate() };
    },
    data() {
        return {
            name: '',
            email: '',
            password: '',
            password_repeat: '',
            message: ''
        }
    },
    validations() {
        return {
            name: {
                required: helpers.withMessage(
                    "Обязательное поле для заполнения",
                    required
                )
            },
            password: {
                required: helpers.withMessage(
                    "Обязательное поле для заполнения",
                    required
                ),
                min: helpers.withMessage(
                    "Минимальное количество символов 8",
                    minLength(8)
                ),
            },
        };
    },
    methods: {
        Login() {
            axios.post('/api/login', {
                name: this.name,
                password: this.password
            })
                .then(res => {
                    localStorage.setItem("token", res.data["content"]);
                    this.$router.push('/profile')
                })
                .catch(err => {
                    this.message = err.response.data.message

                    setTimeout(() => {
                        this.message = ''
                    }, 4000);
                })
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

    .error_right {
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
                    font-weight: bold;
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