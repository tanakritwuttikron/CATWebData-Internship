<!-- The Modal -->
<div class="modal fade" id="edit_odf_l2">
 <div class="modal-dialog">
   <div class="modal-content">
    <!-- Modal Header -->
    <div class="modal-header">
      <h4 class="modal-title">แก้ไข เส้นทาง</h4>
      <button type="button" class="close" data-dismiss="modal">&times;</button>
    </div>
    
    <!-- Modal body -->
   <form action="../../database/update_odf_l2.php" method="post" name="md_edit_odf_l2">
    <div class="modal-body">
      <input type="hidden" name="id_local" id="id_local">
      <input type="hidden" name="id_node" id="id_node">
      <input type="hidden" name="id_core" id="id_core">
      <input type="hidden" name="id_route_l2" id="id_route_l2">
     <div class="form-group">
      <label for="core_num">เลือก Core: </label>
      <select name="core_num" class="form-control">
      <option selected value="">เลือก...</option>
      <option value="1">8</option>
      <option value="2">12</option>
      <option value="3">24</option>
      <option value="4">48</option>
      </select>
     </div>
     <div class="form-group">
      <label for="start_path">ต้นทาง : </label>
      <input type="text" class="form-control" name="edit_start_path" id="edit_start_path" placeholder="ต้นทาง ...">
     </div>
     <div class="form-group">
      <label for="end_path">ปลายทาง : </label>
      <input type="text" class="form-control" name="edit_end_path" id="edit_end_path" placeholder="ปลายทาง ...">
     </div>
     <div class="form-group">
      <label for="kilometer">กี่กิโลเมตร : </label>
      <input type="text" class="form-control" name="edit_kilometer" id="edit_kilometer" placeholder="กี่กิโลเมตร ...">
     </div>
   </div>
  
    <!-- Modal footer -->
    <div class="modal-footer">
     <button type="button" class="btn btn-success" data-dismiss="modal" onclick="submitUpdateOdfL2();"><i class="fa fa-save"></i> บันทึก</button>
     <button type="button" class="btn btn-danger" data-dismiss="modal"><i class="fa fa-times-circle "></i> CLOSE</button>
    </div>
   </form>
   </div>
 </div>
</div>