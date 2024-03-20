<template>
    <div>
        <button @click="Logout()">Выход</button>
    </div>
</template>

<script>
export default {
    data() {
        return {

        }
    },
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
}
</script>

<style lang="scss" scoped></style>