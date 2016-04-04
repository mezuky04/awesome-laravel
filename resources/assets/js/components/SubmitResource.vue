<template>
    <div class="row submit-resource">
        <div class="col-md-8 col-md-offset-2">

            <div v-show="done" class="alert alert-success">
                <strong>Success! Your resource was sent and is waiting for approval. An email will be sent to your GitHub address with the decision. Have a nice day!</strong>
            </div>

            <div v-show="!done">

                <div v-show="error" class="alert alert-danger">{{ error }}</div>

                <!-- BEGIN Resource category -->
                <div v-show="loadingResourceCategories">
                    <img src="/img/loader.svg" />
                </div>
                <div v-show="!loadingResourceCategories && categories" class="form-group">
                    <label class="blue-grey-text">Choose resource category:</label>
                    <br>
                    <select id="selectpicker" v-model="categoryId" v-bind:data-style="selectStyle">
                        <option selected="selected" disabled="disabled">Nothing selected</option>
                        <option v-for="category in categories" value="{{ category.id }}">{{ category.name }}</option>
                    </select>
                    <br>
                    <span class="text-danger" v-show="errors.category_id">{{ errors.category_id }}</span>
                </div>
                <!-- END Resource category -->

                <!-- BEGIN Resource name -->
                <div class="form-group">
                    <label class="blue-grey-text" for="resource-name">Resource name:</label>
                    <input v-model="resourceName" @keyup.enter="submit" v-bind:class="{ 'custom-error': errors.resource_name }" type="text" id="resource-name" class="form-control custom-input" placeholder="Example: Laracasts" autocomplete="off" />
                    <span class="text-danger" v-show="errors.resource_name">{{ errors.resource_name }}</span>
                </div>
                <!-- END Resource name -->

                <!-- BEGIN Short resource description -->
                <div class="form-group">
                    <label class="blue-grey-text" for="short-resource-description">Short resource description:</label>
                    <input v-model="shortResourceDescription" @keyup.enter="submit" v-bind:class="{ 'custom-error': errors.short_resource_description }" type="text" id="short-resource-description" class="form-control custom-input" placeholder="Example: Learn practical, modern web development, through expert screencasts." />
                    <span class="text-danger" v-show="errors.short_resource_description">{{ errors.short_resource_description }}</span>
                </div>
                <!-- END Short resource description -->

                <!-- BEGIN Resource link -->
                <div class="form-group">
                    <label class="blue-grey-text" for="resource-link">Resource link:</label>
                    <input v-model="resourceLink" @keyup.enter="submit" v-bind:class="{ 'custom-error': errors.resource_link }" type="text" id="resource-link" class="form-control custom-input" placeholder="https://laracasts.com" />
                    <span class="text-danger" v-show="errors.resource_link">{{ errors.resource_link }}</span>
                </div>
                <!-- END Resource link -->

                <!-- BEGIN Submit resource -->
                <div class="btn btn-block btn-ghost-inverse" @click="submit">Share resource with others</div>
                <!-- END Submit resource -->
            </div>
        </div>
    </div>
</template>

<script>

    export default {

        data: function() {
            return {
                token: document.getElementById('_token').getAttribute('content'),
                resourceName: '',
                shortResourceDescription: '',
                resourceLink: '',
                categoryId: '',
                categories: [],
                errors: {},
                error: '',
                loading: false,
                loadingResourceCategories: false,
                done: false
            };
        },

        created: function() {
            this.loadResourceCategories();
        },

        computed: {
            selectStyle: function() {

                if (!this.errors.category_id) {
                    return 'btn-default-inverse';
                }

                if (this.errors.category_id.length) {
                    return 'btn-default-inverse-error';
                }
            }
        },

        methods: {

            /**
             * Load all categories.
             */
            loadResourceCategories: function() {

                this.loadingResourceCategories = true;
                var vn = this;

                // Make request to get categories
                this.$http.get('/get-categories').then(function(success) {

                    vn.categories = success.data;

                    // Use select picker after results are loaded
                    setTimeout(function(){
                        vn.loadingResourceCategories = false;
                        jQuery('#selectpicker').selectpicker();
                    }, 100);
                }, function(error) {

                    // Handle error case
                    vn.loadingResourceCategories = false;

                    if (error.data.error) {
                        var message = error.data.error;
                    } else {
                        var message = 'An error occurred while loading the categories. Refresh the page and try again.';
                    }

                    swal({
                        title: 'Oops.',
                        text: message,
                        type: 'error'
                    });
                });
            },

            /**
             * Submit resource.
             */
            submit: function() {

                var vn = this;
                this.loading = true;

                // Build post data
                var data = {
                    _token: this.token,
                    resource_name: this.resourceName,
                    short_resource_description: this.shortResourceDescription,
                    resource_link: this.resourceLink,
                    category_id: this.categoryId
                };

                this.$http.post('/submit-resource', data).then(function(success) {

                    vn.loading = false;
                    vn.done = true;

                }, function(error) {

                    vn.loading = false;

                    if (error.data.errors) {
                        vn.errors = error.data.errors;
                        vn.error = '';
                    } else if (error.data.error) {
                        vn.error = error.data.errors;
                        vn.errors = {};
                    } else {
                        vn.error = 'An error occurred. Refresh the page and try again.'
                        vn.errors = {};
                    }

                });

            }
        }
    }
</script>