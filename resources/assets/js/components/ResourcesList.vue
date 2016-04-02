<template>
    <div class="row">

        <h3 v-if="!category" class="blue-grey-text">Last awesome resources added:</h3>
        <h3 v-else class="blue-grey-text">Awesome resources from {{ category | lowercase }} category:</h3>

        <div class="list-group">
            <a v-for="resource in resources" href="{{ resource.link }}" target="_blank" class="list-group-item">
                <strong>{{ resource.name }}</strong> - {{ resource.short_description }}
            </a>
        </div>

    </div>
</template>

<script>
    export default {
        props: ['resources', 'category']
    }
</script>