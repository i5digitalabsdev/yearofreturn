<template>
    <div>
        <div class="col-lg-12 product-entity">
            <!--<span class="pull-right"><button type="button" data-toggle="modal" data-target="#addRoleModal" class="btn btn-danger btn-sm" >Create role</button></span>-->
            <div class="col-lg-12 form-group m-b-20">
                <br>
                <div class="table-responsive">
                    <table class="table m-0">
                        <thead>
                        <tr>
                            <th>Role</th>
                            <!--<th>Action</th>-->
                        </tr>
                        </thead>
                        <tbody>
                        <tr v-for="role in roles">
                            <td>{{ role.name }}</td>
                            <!--<td>-->
                                <!--<button type="button" @click="editUserRoles(role)" data-toggle="modal" data-target="#editRoleModal" class="btn btn-default btn-xs"><span class="fa fa-pencil"></span> Add Permissions</button>-->
                                <!--&lt;!&ndash;<button type="button" @click="confirmDeleteRoles(role)" class="btn btn-default btn-xs"><span class="fa fa-trash-o"></span></button>&ndash;&gt;-->
                            <!--</td>-->
                        </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</template>

<script>
    export default {
        props:['roles'],
        data (){
            return {}
        },

        methods:{
            editUserRoles(role){
            },
            confirmDeleteRoles(role){
            }
        }
    }
</script>