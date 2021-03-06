<!-- The Modal -->
<div class="modal fade" id="editManualModal">
 <div class="modal-dialog">
   <div class="modal-content">
    <!-- Modal Header -->
    <div class="modal-header">
      <h4 class="modal-title">Edit data location</h4>
      <button type="button" class="close" data-dismiss="modal">&times;</button>
    </div>
    
    <!-- Modal body -->
   <form action="../../database/update_manual.php" method="post" name="md_form_local" enctype="multipart/form-data">
    <div class="modal-body">
     <div class="form-group">
      <input type="hidden" class="form-control" id="edit_manual_id" name="edt_manual_id" value="">
      <label>ชื่อคู่มือ :</label>
      <input type="text" class="form-control" id="edit_manual_name" name="edt_manual_name" value="">
     </div>
     <div class="form-group">
      <label>ไฟล์คู่มือ :</label>
      <input type="file" id="files" name="file" style="margin-top: 10px;" />
     </div>
    </div>
    
    <!-- Modal footer -->
    <div class="modal-footer">
     <button type="button" class="btn btn-success" data-dismiss="modal" onclick="submitUpdateFile();"><i class="fa fa-save"></i> SAVE</button>
     <button type="button" class="btn btn-danger" data-dismiss="modal"><i class="fa fa-times-circle "></i> CLOSE</button>
    </div>
   </form>
   </div>
 </div>
</div>

