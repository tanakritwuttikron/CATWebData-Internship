<!-- The Modal -->
<div class="modal fade" id="edit_ip_cci">
 <div class="modal-dialog">
   <div class="modal-content">
    <!-- Modal Header -->
    <div class="modal-header">
      <h4 class="modal-title">Edit IP CCI</h4>
      <button type="button" class="close" data-dismiss="modal">&times;</button>
    </div>
    
    <!-- Modal body -->
   <form action="../../database/update_cci.php" method="post" name="md_edit_cci">
    <div class="modal-body">
     <input type="hidden" class="form-control" id="edit_id_cci" name="edit_id_cci" value="">
     <input type="hidden" class="form-control" id="edit_id_edge" name="edit_id_edge" value="">
     <div class="form-group">
      <label>IP CCI :</label>
      <input type="text" class="form-control" id="edit_cci_ip" name="edit_cci_ip" value="">
     </div>
    </div>
    
    <!-- Modal footer -->
    <div class="modal-footer">
     <button type="button" class="btn btn-success" data-dismiss="modal" onclick="submitUpdateIp();"><i class="fa fa-save"></i> บันทึก</button>
     <button type="button" class="btn btn-danger" data-dismiss="modal"><i class="fa fa-times-circle "></i> ยกเลิก</button>
    </div>
   </form>
   </div>
 </div>
</div>