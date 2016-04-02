<template>
    <div class="row" v-show="!loading">
        <div class="col-md-4 col-md-offset-4 text-center">
            <h3 class="blue-grey-text">Choose a category</h3>
            <select @change="categoryChanged" v-model="selectedCategory" class="pick-category" data-style="btn-ghost-inverse">
                <option selected="selected" disabled="disabled">Nothing selected</option>
                <option v-for="category in categories" v-bind:value="category.name">{{ category.name }}</option>
            </select>
        </div>

    </div>
</template>

<script>
    export default {
        
        data: function() {
            return {
                loading: false,
                selectedCategory: '',
                categories: [],
                error: ''
            }
        },

        ready: function() {
            this.loadCategories();
        },

        methods: {
            loadCategories: function() {

                this.loading = true;
                var vn = this;

                // Make request to get categories
                this.$http.get('/get-categories').then(function(success) {
                    vn.loading = false;
                    vn.categories = success.data;
                    setTimeout(function() {
                        jQuery('.pick-category').selectpicker();
                    }, 100);
                }, function(error) {
                    vn.loading = false;
                    vn.error = 'An error occurred. Refresh the page and try again.';
                });
            },

            categoryChanged: function() {
                var vn = this;
                this.$dispatch('category-changed', vn.selectedCategory);
            }
        }
        
    }
</script>