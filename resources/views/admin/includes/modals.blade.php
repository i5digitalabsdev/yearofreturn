<div id="addRoleModal" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true" style="display: none;">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                <h4 class="modal-title">Add new role</h4>
            </div>
            <div class="modal-body">
                <div class="row">
                    <div class="col-md-12">
                        <div class="form-group">
                            <label for="field-1" class="control-label">Role Name</label>
                            <input type="text" v-model="userRole.role_name" required  class="form-control" id="field-1" placeholder="John">
                        </div>
                    </div>
                </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-default waves-effect" data-dismiss="modal">Close</button>
                <button type="submit" @click="addRole" class="btn btn-info waves-effect waves-light">Save changes</button>
            </div>
        </div>
    </div>
</div><!-- /.modal -->
<div id="editRoleModal" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true" >
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                <h4 class="modal-title">Edit Role</h4>
            </div>
            <div class="modal-body">
                <div class="row">
                    <div class="col-md-12">
                        <div class="form-group">
                            <label for="field-1" class="control-label">Role Name</label>
                            <input type="text" v-model="editRoles.role_name" class="form-control" id="field-1" placeholder="John">
                        </div>
                    </div>
                </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-default waves-effect" data-dismiss="modal">Close</button>
                <button type="button" @click="updateUserRoles(editRoles.id)" class="btn btn-info waves-effect waves-light">Save changes</button>
            </div>
        </div>
    </div>
</div><!-- /.modal -->
<div id="confirmDeleteModal" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                <h4 class="modal-title">Confirm Delete Action</h4>
            </div>
            <div class="modal-body">
                <div class="row">
                    <div class="col-md-12 text-center">
                        <p><span class="fa fa-warning fa-3x" style="color: #ffc931"></span></p>
                        <p>Are you sure you want to delete this record? Click Yes to proceed or Cancel</p>
                    </div>
                </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-default waves-effect" data-dismiss="modal">Cancel</button>
                <button type="button" @click="deleteUserRoles(deleteRoles.id)" class="btn btn-info waves-effect waves-light">Yes</button>
            </div>
        </div>
    </div>
</div><!-- /.modal -->
<div id="addPermissionModal" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                <h4 class="modal-title">Add new permission</h4>
            </div>
            <div class="modal-body">
                <div class="row">
                    <div class="col-md-12">
                        <div class="form-group">
                            <label for="field-1" class="control-label">Permission Name</label>
                            <input type="text" v-model="userPermission.name" required  class="form-control" id="field-1" placeholder="John">
                        </div>
                    </div>
                </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-default waves-effect" data-dismiss="modal">Close</button>
                <button type="submit" @click="addUserPermission" class="btn btn-info waves-effect waves-light">Save changes</button>
            </div>
        </div>
    </div>
</div><!-- /.modal -->
<div id="addUserModal" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                <h4 class="modal-title">Add new user</h4>
            </div>
            <div class="modal-body">
                <div class="row">
                    <div class="col-md-12">
                        <div class="form-group">
                            <label for="field-1" class="control-label">Name</label>
                            <input type="text" v-model="user.name" name="name" class="form-control" id="field-1" placeholder="John">
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-12">
                        <div class="form-group">
                            <label for="field-3" class="control-label">Email</label>
                            <input type="text" v-model="user.email" name="email" class="form-control" id="field-3" placeholder="example@gmail.com">
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-12">
                        <div class="form-group">
                            <label for="field-3" class="control-label">Role</label>
                            <select name="role" v-model="user.role" id="" class="form-control">
                                <option v-for="roles in allUserRoles">@{{ roles.name }}</option>
                            </select>
                        </div>
                    </div>
                </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-default waves-effect" data-dismiss="modal">Close</button>
                <button type="button" @click="addUser" class="btn btn-info waves-effect waves-light">Save changes</button>
            </div>
        </div>
    </div>
</div><!-- /.modal -->
<div id="editUserModal" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                <h4 class="modal-title">Add new user</h4>
            </div>
            <div class="modal-body">
                <div class="row">
                    <div class="col-md-12">
                        <div class="form-group">
                            <label for="field-1" class="control-label">Name</label>
                            <input type="text" v-model="editUser.name" name="name" class="form-control" id="field-1" placeholder="John">
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-12">
                        <div class="form-group">
                            <label for="field-3" class="control-label">Email</label>
                            <input type="text" v-model="editUser.email" name="email" class="form-control" id="field-3" placeholder="example@gmail.com">
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-12">
                        <div class="form-group">
                            <label for="field-3" class="control-label">Role</label>
                            <select name="role" v-model="editUser.role" id="" class="form-control">
                                <option v-for="roles in allUserRoles">@{{ roles.name }}</option>
                            </select>
                        </div>
                    </div>
                </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-default waves-effect" data-dismiss="modal">Close</button>
                <button type="button" @click="addUser" class="btn btn-info waves-effect waves-light">Save changes</button>
            </div>
        </div>
    </div>
</div><!-- /.modal -->
<div id="addPostAuthor" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true" style="display: none;">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                <h4 class="modal-title">Add Author</h4>
            </div>
            <div class="modal-body">
                <div class="row">
                    <div class="col-md-12">
                        <div class="form-group">
                            <label for="field-1" class="control-label">Name</label>
                            <input type="text" v-model="author.author" required  class="form-control" id="field-1" placeholder="John">
                        </div>
                    </div>
                </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-default waves-effect" data-dismiss="modal">Close</button>
                <button type="submit" @click="addAuthor" class="btn btn-info waves-effect waves-light">Save changes</button>
            </div>
        </div>
    </div>
</div><!-- /.modal -->
<div id="addPostCategory" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true" style="display: none;">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                <h4 class="modal-title">Add Post Category</h4>
            </div>
            <div class="modal-body">
                <div class="row">
                    <div class="col-md-12">
                        <div class="form-group">
                            <label for="field-1" class="control-label">Category</label>
                            <input type="text" v-model="postCategory.category" required  class="form-control" id="field-1" placeholder="John">
                        </div>
                    </div>
                </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-default waves-effect" data-dismiss="modal">Close</button>
                <button type="submit" @click="addPostCategory" class="btn btn-info waves-effect waves-light">Save changes</button>
            </div>
        </div>
    </div>
</div><!-- /.modal -->



