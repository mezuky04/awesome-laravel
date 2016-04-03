<template>
    <div class="row">

        <h3 v-if="!category" class="blue-grey-text">Last awesome resources added:</h3>
        <h3 v-else class="blue-grey-text">{{ category }}</h3>

        <div class="list-group">
            <a v-for="resource in resources" @click="incrementClicks(resource.id)" href="{{ resource.link }}" target="_blank" class="list-group-item">
                <strong>{{ resource.name }}</strong> - {{ resource.short_description }}
            </a>
        </div>

    </div>
</template>

<script>
    export default {

        props: ['resources', 'category'],

        methods: {
            incrementClicks: function(resourceId) {
                this.$http.get('/increment-clicks/' + resourceId).then(function(success) {
                    //
                }, function(error) {
                    //
                });
            }
        }
    }
</script>