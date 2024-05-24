<template>
    <section class="container">
        <button @click.prevent="Logout()">Выход</button>
        <MenuComponent />
        <div class="profile">
            <h1>Ваше имя</h1>
            <div class="card">
                <img src="# " alt="">
                <div>
                    <h3>Увеличьте количество заказов</h3>
                    <p>Подключите продвижение, чтобы поднять ваш профиль в результатах поиска </p>

                </div>
                <div class="btn">
                    <router-link to="/">Создать</router-link>
                </div>
            </div>
            <div class="two_cards">
                <div class="card2">
                    <img src="#" alt="">
                    <div>
                        <h3>Фото профиля</h3>
                        <p>Загрузите фотографию для привлечения клиентов</p>

                    </div>
                    <div class="btn">
                        <router-link to="/">Фото</router-link>
                    </div>
                </div>
                <div class="card3">
                    <img src="#" alt="">
                    <div>
                        <h3>О себе</h3>
                        <p>Расскажите информацию о себе, ваши достижения, образование... </p>

                    </div>
                    <div class="btn">
                        <router-link to="/">Написать</router-link>
                    </div>
                </div>
            </div>
            <div class="card4">
                <img src="# " alt="">
                <div>
                    <h3>Ваша специальность</h3>
                    <div class="btn">
                        <router-link to="/">Создать</router-link>
                    </div>
                   

                </div>
                <div class="card4_p"><p>Подключите продвижение, чтобы поднять ваш профиль в результатах поиска </p></div>
 
            </div>

        </div>



    </section>
</template>

<script>
import MenuComponent from '../../components/MenuComponent.vue';
export default {

    methods: {
        Logout() {
            axios.get('/api/logout', {
                headers: {
                    Authorization: `Bearer ${localStorage.getItem("token")}`,
                }
            })
                .then(res => {
                    localStorage.removeItem('token')
                    this.$router.push('/')
                })
        }
    },
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

button {
    margin-top: 300px;
    position: fixed;

}

h1 {
    font-family: 'Montserrat';
    font-style: normal;
    font-weight: 700;
    font-size: 48px;
    line-height: 59px;
    color: #1B374F;
}


.card {
    margin-top: 100px;
    display: flex;
    flex-direction: row;
    align-items: flex-start;
    gap: 30px;
    width: 806px;
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

.two_cards {
    display: flex;
    flex-direction: row;
    gap: 20px;
}

.card2 {
    margin-top: 35px;
    display: flex;
    flex-direction: row;
    align-items: flex-start;
    gap: 30px;
    width: 380px;
    background: #6ABAB7;
    border-radius: 40px;
    padding: 50px 35px;


    .btn {
        margin-top: 120px;
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

.card3 {
    margin-top: 35px;
    display: flex;
    flex-direction: row;
    align-items: flex-start;
    gap: 30px;
    
    background: #6ABAB7;
    border-radius: 40px;
    padding: 50px 35px;
.btn {
  margin-top: 0px;
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

.btn_border {
    display: flex;
    justify-content: center;
    align-items: center;
    width: 1045px;
}

.btn {
    margin-top: 10px;
    display: flex;
    align-items: center;
    justify-content: center;
    width: 200px;
    height: 59px;
    background: #CDF2FA;
    border-radius: 40px;
    font-family: 'Montserrat';
    font-style: normal;
    font-weight: 700;
    font-size: 18px;
    line-height: 22px;

    color: #1B374F;



    :hover {
        box-shadow: 4px 6px 5px 0 #CDF2FA;
        background-color: #99EDFF;

    }
}
.card4{
    margin-top: 35px;
    display: flex;
    flex-direction: row;
    // align-items: flex-start;
    gap: 30px;
    width: 806px;
    background: #6ABAB7;
    border-radius: 40px;
    padding: 50px 35px;
    p {
   
        margin-top: 50px;
            font-size: 14px;
            color: #fff;
            font-weight: bold;
            width: 180px;
            
        }

    div {
        display: flex;
        flex-direction: column;
        gap: 30px;

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
</style>