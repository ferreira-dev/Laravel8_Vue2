<template>
   <div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Login (Component Vue) </div>
                <div class="card-body">
                    <form method="POST" action="" @submit.prevent="login($event)">

                        <input type="hidden" name="_token" :value="token_csrf">
                        <div class="form-group row">
                            <label for="email" class="col-md-4 col-form-label text-md-right"></label>

                            <div class="col-md-6">
                                <input id="email" type="email" class="form-control" name="email" value="" required autocomplete="email" autofocus v-model="email">

                                    <span class="invalid-feedback" role="alert">
                                        <strong></strong>
                                    </span>
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="password" class="col-md-4 col-form-label text-md-right"></label>

                            <div class="col-md-6">
                                <input id="password" type="password" class="form-control" name="password" required autocomplete="current-password" v-model="password">
                                    <span class="invalid-feedback" role="alert">
                                        <strong></strong>
                                    </span>
                            </div>
                        </div>

                        <div class="form-group row">
                            <div class="col-md-6 offset-md-4">
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" name="remember" id="remember">
                                    <label class="form-check-label" for="remember">
                                        Lembrar-me
                                    </label>
                                </div>
                            </div>
                        </div>

                        <div class="form-group row mb-0">
                            <div class="col-md-8 offset-md-4">
                                <button type="submit" class="btn btn-primary">
                                    Entrar
                                </button>

                                    <a class="btn btn-link" href="">
                                    </a>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
</template>

<script>
    export default {
        props: ['token_csrf'],
        data() {
            return {
                email: '',
                password: ''
            }
        },
        methods: {
            login(e) {

                console.log('email: ', this.email)
                console.log('senha: ', this.password)
                
                let url = 'http://localhost:8080/api/login'
                let config = {
                    method: 'post',
                    body: new URLSearchParams({
                        'email': 'ferreiradev@dev.com',
                        'password': 'mf102030'
                    })
                }

                fetch(url, config)
                    .then(response => response.json())
                    .then(data => {
                        if(data.token) {
                            document.cookie = 'token='+data.token+';SameSite=Lax'
                        }
                        e.target.submit()
                    })
            }
        }
    }
</script>
