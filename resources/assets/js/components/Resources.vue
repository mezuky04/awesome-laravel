<template>
    <choose-category></choose-category>
    <resources-list v-show="!loading" v-bind:resources="resources" v-bind:category="selectedCategory"></resources-list>
    <loader v-show="loading"></loader>
    
</template>

<script>

    import ChooseCategory from '../components/ChooseCategory.vue';
    import ResourcesList from '../components/ResourcesList.vue';
    import Loader from '../components/Loader.vue';

    export default {

        data: function() {
            return {
                resources: [],
                loading: false,
                showLastResources: true,
                selectedCategory: ''
            };
        },

        components: {
            'choose-category': ChooseCategory,
            'resources-list': ResourcesList,
            'loader': Loader
        },

        /**
         * Called on ready.
         */
        ready: function() {
            this.loadResources();
        },

        events: {
            'category-changed': function(category) {
                this.loadResources(category);
            }
        },

        methods: {
            loadResources: function(category) {
                var vn = this;
                this.selectedCategory = category;
                this.showLastResources = false;
                this.loading = true;

                // Set url used in request
                var url = '/get-resources';
                if (typeof category !== 'undefined') {
                    url = url + '/' + category;
                }

                // Make get request
                this.$http.get(url).then(function(success) {
                    vn.resources = success.data;
                    vn.loading = false;
                }, function(error) {
                    vn.loading = false;
                });
            }
        }
    }
</script>