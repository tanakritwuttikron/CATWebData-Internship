<!-- The Modal -->
<div class="modal fade" id="editCoreModalL2">
 <div class="modal-dialog">
   <div class="modal-content">
    <!-- Modal Header -->
    <div class="modal-header">
      <h4 class="modal-title">แก้ไข</h4>
      <button type="button" class="close" data-dismiss="modal">&times;</button>
    </div>
    
    <!-- Modal body -->
   <form action="../../database/update_core_l2.php" method="post" name="md_edit_core_l2">
    <div class="modal-body">
     <div class="form-group">
      <input type="hidden" class="form-control" name="id_local" id="id_local">
      <input type="hidden" class="form-control" name="id_core" id="id_core">
      <input type="hidden" class="form-control" name="id_route_l2" id="id_route_l2">
      <input type="hidden" class="form-control" name="id_detail_l2" id="id_detail_l2">
      <input type="hidden" class="form-control" name="core_num" id="core_num">
      <label for="edit_working_l2">ใช้งาน : </label>
      <input type="text" class="form-control" name="edit_working_l2" id="edit_working_l2" placeholder="ใช้งาน ...">
     </div>
     <div class="form-group">
      <label for="edit_distance_l2">ระยะทาง : </label>
      <input type="text" class="form-control" name="edit_distance_l2" id="edit_distance_l2" placeholder="ระยะทาง ...">
     </div>
     <div class="form-group">
      <label for="edit_comment_l2">หมายเหตุ : </label>
      <input type="text" class="form-control" name="edit_comment_l2" id="edit_comment_l2" placeholder="หมายเหตุ ...">
     </div>
    </div>
    
    <!-- Modal footer -->
    <div class="modal-footer">
     <button type="button" class="btn btn-success" data-dismiss="modal" onclick="submitUpdateCoreL2();"><i class="fa fa-save"></i> บันทึก</button>
     <button type="button" class="btn btn-danger" data-dismiss="modal"><i class="fa fa-times-circle "></i> CLOSE</button>
    </div>
   </form>
   </div>
 </div>
</div>