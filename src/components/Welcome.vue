<template>
    <div class="container text-left pb-3">
        <form class="form-signin">
            <img class="mb-4" src="../assets/900px_logo.png" alt="" width="72" height="72">
            <h1 class="h3 mb-3 font-weight-normal">Welcome To The Vue App</h1>
            <div class="form-group">
                <label for="inputEmail" class="sr-only">Email address</label>
                <input type="email" id="inputEmail" class="form-control" placeholder="Email address" required=""
                       autofocus="">
            </div>
            <div class="form-group">
                <label for="inputPassword" class="sr-only">Password</label>
                <input type="password" id="inputPassword" class="form-control" placeholder="Password" required="">
            </div>
            <div class="form-group">
                <div class="checkbox mb-3">
                    <label>
                        <input type="checkbox" value="remember-me"> Remember me
                    </label>
                </div>
            </div>

            <div class="form-group">
                <button class="btn btn-lg btn-primary btn-block" type="submit">Sign in</button>
            </div>
            <div class="form-group">
                <button class="btn btn-lg btn-info btn-block" type="button">Sign Up</button>
            </div>

        </form>
    </div>
</template>

<script>
    export default {
        // eslint-disable-next-line vue/multi-word-component-names
        name: "Welcome",
    }
</script>

<style scoped>

</style>