<!-- The Modal -->
<div class="modal fade" id="editFacilityModal">
 <div class="modal-dialog">
   <div class="modal-content">
    <!-- Modal Header -->
    <div class="modal-header">
      <h4 class="modal-title">Edit data location</h4>
      <button type="button" class="close" data-dismiss="modal">&times;</button>
    </div>
    
    <!-- Modal body -->
   <form action="../../database/update_facility.php" method="post" name="md_form_facility" enctype="multipart/form-data">
    <div class="modal-body">
     <div class="form-group">
      <input type="hidden" class="form-control" id="edit_fac_id" name="edt_fac_id" value="">
      <input type="hidden" class="form-control" id="edit_local_id" name="edt_local_id" value="">
      <label>ชื่อ :</label>
      <input type="text" class="form-control" id="edit_fac_name" name="edt_fac_name" value="">
     </div>
     <div class="form-group">
      <label>รูปภาพประกอบ :</label>
      <input type="file" id="files" name="file" style="margin-top: 10px;" />
     </div>
    </div>
    
    <!-- Modal footer -->
    <div class="modal-footer">
     <button type="button" class="btn btn-success" data-dismiss="modal" onclick="submitUpdateFac();"><i class="fa fa-save"></i> SAVE</button>
     <button type="button" class="btn btn-danger" data-dismiss="modal"><i class="fa fa-times-circle "></i> CLOSE</button>
    </div>
   </form>
   </div>
 </div>
</div>

