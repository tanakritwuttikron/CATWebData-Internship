<!-- The Modal -->
<div class="modal fade" id="add_edge">
 <div class="modal-dialog">
   <div class="modal-content">
    <!-- Modal Header -->
    <div class="modal-header">
      <h4 class="modal-title">Add Edge</h4>
      <button type="button" class="close" data-dismiss="modal">&times;</button>
    </div>
    
    <!-- Modal body -->
   <form action="../../database/insert_edge.php" method="post" name="md_add_edge">
    <div class="modal-body">
     <div class="form-group">
      <label>Edge name :</label>
      <input type="text" class="form-control" id="add_edge_name" name="add_edge_name" placeholder="Edge name">
     </div>
     <div class="form-group">
      <label>Edge IP :</label>
      <input type="text" class="form-control" id="add_edge_ip" name="add_edge_ip" placeholder="Edge IP ...">
     </div>
    </div>
    
    <!-- Modal footer -->
    <div class="modal-footer">
     <button type="button" class="btn btn-success" data-dismiss="modal" onclick="submitSaveEdge();"><i class="fa fa-save"></i> บันทึก</button>
     <button type="button" class="btn btn-danger" data-dismiss="modal"><i class="fa fa-times-circle "></i> ยกเลิก</button>
    </div>
   </form>
   </div>
 </div>
</div>