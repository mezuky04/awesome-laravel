<template>
    <div class="row">
        <div class="col-md-4 col-md-offset-4 login">

            <div v-show="error" class="alert alert-danger">{{ error }}</div>

            <!-- BEGIN Email -->
            <div class="form-group">
                <label for="email" class="blue-grey-text">Email:</label>
                <input v-model="email" @keyup.enter="login" v-bind:class="{ 'custom-error': errors.email }" type="email" id="email" class="form-control custom-input" placeholder="Your email" autocomplete="off" />
                <span :v-show="errors.email" class="text-danger">{{ errors.email }}</span>
            </div>
            <!-- END Email -->

            <!-- BEGIN Password -->
            <div class="form-group">
                <label for="password" class="blue-grey-text">Password:</label>
                <input v-model="password" @keyup.enter="login" v-bind:class="{ 'custom-error': errors.password }" type="password" id="password" placeholder="Your password" class="form-control custom-input" />
                <span v-show="errors.password" class="text-danger">{{ errors.password }}</span>
            </div>
            <!-- END Password -->
            
            <!-- BEGIN Log in -->
            <div class="btn btn-block btn-ghost-inverse" @click="login">
                <span v-show="!loading">Log in</span>
                <img v-show="loading" src="/img/loader.svg" />
            </div>
            <!-- END Log in -->
        </div>
    </div>
</template>
    
<script>
    export default {

        data: function() {
            return {
                token: document.getElementById('_token').getAttribute('content'),
                email: '',
                password: '',
                errors: {},
                error: '',
                loading: false
            }
        },

        methods: {

            login: function() {

                var vn = this;
                this.loading = true;

                var credentials = {
                    _token: this.token,
                    email: this.email,
                    password: this.password
                };

                this.$http.post('/login', credentials).then(function(success) {

                    vn.loading = false;

                    if (success.data.success) {
                        window.location.replace('/admin-center');
                    }

                }, function(error) {

                    vn.loading = false;

                    if (error.data.errors) {
                        vn.errors = error.data.errors;
                        vn.error = '';
                    } else if (error.data.error) {
                        vn.error = error.data.error;
                        vn.errors = {}
                    } else {
                        vn.error = 'An error occurred. Refresh the page an try again.';
                        vn.errors = {}
                    }
                });
            }
        }
    }
</script>