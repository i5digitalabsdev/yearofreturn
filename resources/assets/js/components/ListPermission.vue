<template>
    <div>
        <div class="col-lg-12 product-entity">
            <div class="row">
                <div class="col-lg-4 pull-right">
                    <select name="" v-model="selectedRole.selectedRole" @change="chooseRole" class="form-control input-sm" id="">
                        <option value="">--Select Role--</option>
                        <option v-for="role in roles" :value="role.id">{{role.name}}</option>
                    </select>
                </div>
            </div>
            <br>
            <div class="col-lg-12 form-group m-b-20">
                <form action="">
                <div class="table-responsive">
                    <table class="table m-0 table-striped">
                        <thead style="background: #c3c3c3">
                        <tr>
                            <th>Permissions</th>
                            <th v-if="selectedRole.selectedRole">Allow / Deny</th>
                        </tr>
                        </thead>
                        <tbody>
                        <tr v-for="perm in permission">
                            <td>{{ perm.name }}</td>
                            <td v-if="selectedRole.selectedRole">
                                <div><input type="checkbox" v-model="permissionData" :id="perm.slug" @change="checkBoxes(perm.id)" :value="perm.id" :name="perm.slug"></div>
                            </td>
                        </tr>
                        </tbody>
                    </table>
                    <div class="col-md-3 m-t-30">
                        <span><button @click="attachPermission" type="button" value="Save Changes" id="buttonSubmit" class="btn btn-primary btn-block">Save changes</button></span>
                    </div>
                </div>
                </form>
            </div>
        </div>
    </div>
</template>
<script>
    import {attachPermissionUrl} from '../urls'
    import {getRolePermissions} from "../urls";

    export default {
        props:['permission', 'roles'],
        data (){
            return {
                permissionData:[],
                selectedRole: { selectedRole: ''},
                rolePermission: []
            }
        },
        created(){
            // this.chooseRole()
        },
        methods:{
           checkBoxes(permission){
           },
            attachPermission(){
               let data = {
                   userPermission: this.permissionData,
                   role : this.selectedRole.selectedRole
               }
               axios.post(attachPermissionUrl, data).then((res) =>{
                        toastr.success('User Permission created .', 'Success Message', {timeOut: 5000});
               }).catch((err) => {
                   toastr.error('Sorry an error occurred. Try again later', 'Error Message', {timeOut: 5000});
               })
            },

            chooseRole()
            {
                axios.get(getRolePermissions + '/' + this.selectedRole.selectedRole).then((res) =>{
                    this.rolePermission = res.data[0].permissions
                    let userPerm = res.data[0].permissions
                    let tempPerm = []
                    for(let i = 0; i <  userPerm.length; i++){
                        tempPerm.push(userPerm[i].id)
                    }
                    this.permissionData = tempPerm
                })
            },

        }
    }
</script>