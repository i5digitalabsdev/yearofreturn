<template>
    <div>
        <div class="col-lg-12 product-entity">
            <div class="row">
                <div class="col-lg-4 pull-right">
                    <select name="" class="form-control input-sm" id="">
                        <option value="">Super Admin</option>
                        <option value="">Author</option>
                        <option value="">Editor</option>
                    </select>
                </div>
            </div>
            <br>
            <div class="col-lg-12 form-group m-b-20">
                <div class="table-responsive">
                    <table class="table m-0 table-striped">
                        <thead>
                        <tr>
                            <th>Permission</th>
                            <th>Action</th>
                        </tr>
                        </thead>
                        <tbody>
                        <tr v-for="permissions in permission">
                            <td>{{ permissions.name }}</td>
                            <td>
                                <button type="button" @click="editUserPermission(permission)" data-toggle="modal" data-target="#editRoleModal" class="btn btn-default btn-xs"><span class="fa fa-pencil"></span></button>
                                <button type="button" @click="confirmDeletePermission(permission.id)" class="btn btn-default btn-xs"><span class="fa fa-trash-o"></span></button>
                            </td>
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
        props:['permission'],
        data (){
            return {}
        },

        methods:{
            editUserPermission(role){
            },
            confirmDeletePermission(role){
            }
        }
    }
</script>