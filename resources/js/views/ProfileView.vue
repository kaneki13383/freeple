<template>
    <div>
        <button @click.prevent="Logout()">Выход</button>
    </div>
</template>

<script>
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
}
</script>

<style lang="scss" scoped></style>