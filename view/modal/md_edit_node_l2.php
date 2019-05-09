<!-- The Modal -->
<div class="modal fade" id="edit_node_l2">
 <div class="modal-dialog">
   <div class="modal-content">
    <!-- Modal Header -->
    <div class="modal-header">
      <h4 class="modal-title">Edit data Node</h4>
      <button type="button" class="close" data-dismiss="modal">&times;</button>
    </div>
    
    <!-- Modal body -->
   <form action="../../database/update_node_l2.php" method="post" name="md_form_node">
    <div class="modal-body">
    <div class="form-row">
     <input type="hidden" class="form-control" id="edit_local_id" name="edit_local_id">
     <input type="hidden" class="form-control" id="edit_node_id" name="edit_node_id">
    <div class="form-group col-sm-6">
     <label>ชื่อสถานที่ :</label>
     <input type="text" class="form-control" id="edit_node_name" name="edit_node_name" placeholder="ชื่อสถานที่ ...">
    </div>
    <div class="form-group col-sm-6">
     <label>IP address :</label>
     <input type="text" class="form-control" id="edit_node_ip" name="edit_node_ip" placeholder="IP Address ...">
    </div>
    </div>
    <div class="form-row">
     <div class="form-group col-sm-6">
     <label>Latitude :</label>
     <input type="text" class="form-control" id="edit_latitude" name="edit_latitude" placeholder="Latitude ...">
    </div>
    <div class="form-group col-sm-6">
     <label>Longitude :</label>
     <input type="text" class="form-control" id="edit_longitude" name="edit_longitude" placeholder="Longitude">
    </div>
    </div>
    <div class="form-row">
     <div class="form-group col-sm-4">
     <label>ชื่อย่อ 3 หลัก :</label>
     <input type="text" class="form-control" id="edit_initials" name="edit_initials" placeholder="ชื่อย่อ 3 หลัก ...">
    </div>
    <div class="form-group col-sm-4">
     <label>OldsiteCode :</label>
     <input type="text" class="form-control" id="edit_old_site_code" name="edit_old_site_code" placeholder="OldsiteCode ...">
    </div>
    </div>
    </div>
    
    <!-- Modal footer -->
    <div class="modal-footer">
     <button type="button" class="btn btn-success" data-dismiss="modal" onclick="submitUpdateNode();"><i class="fa fa-save"></i> SAVE</button>
     <button type="button" class="btn btn-danger" data-dismiss="modal"><i class="fa fa-times-circle "></i> CLOSE</button>
    </div>
   </form>
   </div>
 </div>
</div>