<!-- The Modal -->
<div class="modal fade" id="editCoreModal">
 <div class="modal-dialog">
   <div class="modal-content">
    <!-- Modal Header -->
    <div class="modal-header">
      <h4 class="modal-title">แก้ไข</h4>
      <button type="button" class="close" data-dismiss="modal">&times;</button>
    </div>
    
    <!-- Modal body -->
   <form action="../../database/update_core.php" method="post" name="md_edit_core">
    <div class="modal-body">
     <div class="form-group">
      <input type="hidden" class="form-control" name="id_core" id="id_core">
      <input type="hidden" class="form-control" name="id_route" id="id_route">
      <input type="hidden" class="form-control" name="id_detail" id="id_detail">
      <input type="hidden" class="form-control" name="core_num" id="core_num">
      <label for="edit_working">ใช้งาน : </label>
      <input type="text" class="form-control" name="edit_working" id="edit_working" placeholder="ใช้งาน ...">
     </div>
     <div class="form-group">
      <label for="edit_distance">ระยะทาง : </label>
      <input type="text" class="form-control" name="edit_distance" id="edit_distance" placeholder="ระยะทาง ...">
     </div>
     <div class="form-group">
      <label for="edit_comment">หมายเหตุ : </label>
      <input type="text" class="form-control" name="edit_comment" id="edit_comment" placeholder="หมายเหตุ ...">
     </div>
    </div>
    
    <!-- Modal footer -->
    <div class="modal-footer">
     <button type="button" class="btn btn-success" data-dismiss="modal" onclick="submitUpdateCore();"><i class="fa fa-save"></i> บันทึก</button>
     <button type="button" class="btn btn-danger" data-dismiss="modal"><i class="fa fa-times-circle "></i> CLOSE</button>
    </div>
   </form>
   </div>
 </div>
</div>