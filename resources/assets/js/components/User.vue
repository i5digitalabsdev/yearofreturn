<template>
    <div>
        <div class="row all-products">
            <div class="table-responsive">
                <table class="table m-0">
                    <thead>
                    <tr>
                        <th>Name</th>
                        <th>Email</th>
                        <th>User role</th>
                        <th>Action</th>
                    </tr>
                    </thead>
                    <tbody>
                    <tr v-for="user in users">
                        <td>{{ user.name }}</td>
                        <td>{{ user.email }}</td>
                        <td v-if="user.get_user_role">{{ user.get_user_role.name}}</td>
                        <td>
                            <!--<button type="button"  data-toggle="modal" data-target="#editUserModal" class="btn btn-default btn-xs"><span class="fa fa-pencil"></span></button>-->
                            <button type="button" @click="deleteUser(user.id)"  class="btn btn-default btn-xs"><span class="fa fa-trash-o"></span></button>
                        </td>
                    </tr>
                    </tbody>
                </table>
            </div>

        </div>
    </div>
</template>
<script>
    import {deleteUser} from "../urls";

    export default {
        props:['users'],
        data () {
            return{

            }
        },
        methods:{
            deleteUser(id){
                axios.post(deleteUser + '/' + id).then((res) =>{
                    toastr.success('User deleted successfully.', 'Success Message', {timeOut: 5000});
                    location.reload()
                }).catch((res)=>{
                    toastr.error('Sorry an error occurred. Try again later', 'Error Message', {timeOut: 5000});
                })
            }
        }
    }
</script>