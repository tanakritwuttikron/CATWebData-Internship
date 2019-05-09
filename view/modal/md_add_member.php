<!-- The Modal -->
<div class="modal fade" id="addUser">
 <div class="modal-dialog">
   <div class="modal-content">
    <!-- Modal Header -->
    <div class="modal-header">
      <h4 class="modal-title">Add data user</h4>
      <button type="button" class="close" data-dismiss="modal">&times;</button>
    </div>
    
    <!-- Modal body -->
   <form action="../../database/insert_member.php" method="post" name="md_user">
    <div class="modal-body">
     <div class="form-group">
      <label>Username :</label>
      <input type="text" class="form-control" id="add_user_name" name="add_user_name" placeholder="Username">
     </div>
     <div class="form-group">
      <label>Password :</label>
      <input type="text" class="form-control" id="add_user_pass" name="add_user_pass" placeholder="Password">
     </div>
     <div class="form-group">
      <label>Status :</label>
      <select name="add_user_status" class="form-control">
       <option selected value="">เลือก...</option>
       <option value="1">Admin</option>
       <option value="2">User</option>
      </select>
     </div>
    </div>
    
    <!-- Modal footer -->
    <div class="modal-footer">
     <button type="button" class="btn btn-success" data-dismiss="modal" onclick="submitSaveUser();"><i class="fa fa-save"></i> SAVE</button>
     <button type="button" class="btn btn-danger" data-dismiss="modal"><i class="fa fa-times-circle "></i> CLOSE</button>
    </div>
   </form>
   </div>
 </div>
</div>