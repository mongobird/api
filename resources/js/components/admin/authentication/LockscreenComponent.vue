<template>
    <div class="vertical-align-wrap">
        <div class="vertical-align-middle auth-main">
            <div class="auth-box">
                <div class="top">
                    <img src="../../../assets/logo-white.svg" alt="Lucid">
                </div>
                <div class="card">
                    <div class="body">
                        <div class="user text-center m-b-30">
                            <img src="../../../assets/user-small.png" class="rounded-circle" alt="Avatar">
                            <h4 class="name m-t-10">Alizee Thomas</h4>
                            <p>info@example.com</p>
                        </div>
                        <form v-on:submit.prevent="submit">
                            <div class="form-group">
                                <input type="password" class="form-control" placeholder="Enter your password ...">                                    
                            </div>
                            <button type="submit" class="btn btn-primary btn-lg btn-block">Login</button>                                
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</template>
<script>
export default {
    name:'LockscreenComponent',
    methods: {
        submit(e){
           this.$router.push({ path: '/dashboard/index' })
             e.preventDefault()
            //...
        }
    }
}
</script>
<style scoped>

</style>