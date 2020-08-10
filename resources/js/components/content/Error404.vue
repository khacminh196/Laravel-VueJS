<template>
        <div class="error-box">
            <div class="error-body text-center">
                <h1 class="error-title text-danger">404</h1>
                <h3 class="text-uppercase error-subtitle">PAGE NOT FOUND !</h3>
                <p class="text-muted m-t-30 m-b-30">YOU SEEM TO BE TRYING TO FIND HIS WAY HOME</p>
                <router-link :to="{ name : 'home'}" class="btn btn-danger btn-rounded waves-effect waves-light m-b-40">Back To Home</router-link>
            </div>
        </div>
</template>

<script>
export default {

}
</script>

<style>

</style>
