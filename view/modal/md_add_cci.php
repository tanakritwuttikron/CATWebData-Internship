<!-- The Modal -->
<div class="modal fade" id="add_cci">
 <div class="modal-dialog">
   <div class="modal-content">
    <!-- Modal Header -->
    <div class="modal-header">
      <h4 class="modal-title">Add CCI</h4>
      <button type="button" class="close" data-dismiss="modal">&times;</button>
    </div>
    
    <!-- Modal body -->
   <form action="../../database/insert_cci.php" method="post" name="md_add_cci">
    <div class="modal-body">
     <input type="hidden" class="form-control" id="id_edge" name="id_edge" value="<?= $result["id_edge"] ?>">
     <div class="form-group">
      <label>IP CCI :</label>
      <input type="text" class="form-control" id="add_cci_ip" name="add_cci_ip" placeholder="IP CCI ...">
     </div>
    </div>
    
    <!-- Modal footer -->
    <div class="modal-footer">
     <button type="button" class="btn btn-success" data-dismiss="modal" onclick="submitSaveCci();"><i class="fa fa-save"></i> บันทึก</button>
     <button type="button" class="btn btn-danger" data-dismiss="modal"><i class="fa fa-times-circle "></i> ยกเลิก</button>
    </div>
   </form>
   </div>
 </div>
</div>