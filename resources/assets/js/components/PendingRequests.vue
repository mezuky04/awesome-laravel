<template>
    <div v-if="pendingRequests.length && !loadingPendingRequests">
        <h3 class="blue-grey-text">Pending resource requests:</h3>
        <div class="panel panel-default">
            <table class="table table-bordered">
                <thead>
                <tr>
                    <th class="text-center blue-grey-text">Name</th>
                    <th class="text-center blue-grey-text">Short description</th>
                    <th class="text-center blue-grey-text">Link</th>
                    <th class="text-center blue-grey-text">Category</th>
                    <th class="text-center blue-grey-text">Contributor email</th>
                    <th class="text-center blue-grey-text">Review</th>
                </tr>
                </thead>
                <tbody>
                <tr v-for="request in pendingRequests">
                    <td class="text-center blue-grey-text vert-align">{{ request.name }}</td>
                    <td class="text-center blue-grey-text vert-align">{{ request.short_description }}</td>
                    <td class="text-center blue-grey-text vert-align">{{ request.link }}</td>
                    <td class="text-center blue-grey-text vert-align">{{ request.category }}</td>
                    <td class="text-center blue-grey-text vert-align">{{ request.contributor_email }}</td>
                    <td class="text-center">
                        <div class="dropdown">
                            <button class="btn btn-default-inverse dropdown-toggle" type="button" data-toggle="dropdown">Review
                                <span class="caret"></span></button>
                            <ul class="dropdown-menu">
                                <li @click="accept(request.id)"><a href="#"><span class="glyphicon glyphicon-ok"></span>&nbsp;Accept</a></li>
                                <li @click="decline(request.id)"><a href="#"><span class="glyphicon glyphicon-trash"></span>&nbsp;Delete</a></li>
                            </ul>
                        </div>
                    </td>
                </tr>
                </tbody>
            </table>
        </div>
    </div>
    <div v-else>
        <h3>There are no pending requests.</h3>
    </div>
</template>

<script>
    export default {

        data: function() {
            return {
                pendingRequests: [],
                loadingPendingRequests: false
            }
        },

        /**
         * Called on ready.
         */
        ready: function() {
            this.getPendingRequests();
        },

        methods: {
            getPendingRequests: function() {
                this.loadingPendingRequests = true;
                var vn = this;

                // Do request
                this.$http.get('/admin-center/get-pending-requests').then(function(success) {
                    vn.loadingPendingRequests = false;
                    vn.pendingRequests = success.data;
                }, function(error) {
                    vn.loadingPendingRequests = false;
                });
            },

            /**
             * Confirm resource and publish.
             *
             * @param resourceId
             */
            accept: function(resourceId) {

                var vn = this;

                this.$http.get('/admin-center/accept-resource-request/'+resourceId).then(function(success) {
                    vn.getPendingRequests();
                    swal({
                        title: 'Success!',
                        text: 'Resource added.',
                        type: 'success',
                        showConfirmButton: false,
                        timer: 2000
                    });
                }, function(error) {
                    //
                });
            },

            /**
             * Decline resource and delete.
             *
             * @param resourceId
             */
            decline: function(resourceId) {

                var vn = this;

                this.$http.get('/admin-center/decline-resource-request/'+resourceId).then(function(success) {
                    vn.getPendingRequests();
                    swal({
                        title: 'Success!',
                        text: 'Resource deleted.',
                        type: 'warning',
                        showConfirmButton: false,
                        timer: 2000
                    });
                }, function(error) {
                    //
                });
            }
        }

    }
</script>