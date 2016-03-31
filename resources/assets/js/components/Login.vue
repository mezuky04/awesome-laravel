<template>
    <div class="row">
        <div class="col-md-4 col-md-offset-4 login">
            <!-- BEGIN Email -->
            <div class="form-group">
                <label for="email" class="blue-grey-text">Email:</label>
                <input v-model="email" type="email" id="email" class="form-control custom-input" placeholder="Your email" autocomplete="off" />
            </div>
            <!-- END Email -->

            <!-- BEGIN Password -->
            <div class="form-group">
                <label for="password" class="blue-grey-text">Password:</label>
                <input v-model="password" type="password" id="password" placeholder="Your password" class="form-control custom-input" />
            </div>
            <!-- END Password -->
            
            <!-- BEGIN Log in -->
            <div class="btn btn-block btn-ghost-inverse" @click="login">Log in</div>
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
                password: ''
            }
        },

        methods: {

            login: function() {

                var credentials = {
                    _token: this.token,
                    email: this.email,
                    password: this.password
                };

                this.$http.post('/login', credentials).then(function(success) {
                    //
                }, function(error) {
                    //
                });
            }
        }
    }
</script>