<!-- The Modal -->
<div class="modal fade" id="edit_link">
 <div class="modal-dialog">
   <div class="modal-content">
    <!-- Modal Header -->
    <div class="modal-header">
      <h4 class="modal-title">Edit Link Page</h4>
      <button type="button" class="close" data-dismiss="modal">&times;</button>
    </div>
    
    <!-- Modal body -->
   <form action="../../database/update_link.php" method="post" name="md_edit_link">
    <div class="modal-body">
     <div class="form-group">
      <input type="hidden" class="form-control" id="edit_link_id" name="edit_link_id">
      <label>Link name :</label>
      <input type="text" class="form-control" id="edit_link_name" name="edit_link_name" placeholder="Link name">
     </div>
     <div class="form-group">
      <label>URL :</label>
      <input type="text" class="form-control" id="edit_link_page" name="edit_link_page" placeholder="URL">
     </div>
    </div>
    
    <!-- Modal footer -->
    <div class="modal-footer">
     <button type="button" class="btn btn-success" data-dismiss="modal" onclick="submitUpdatelink();"><i class="fa fa-save"></i> SAVE</button>
     <button type="button" class="btn btn-danger" data-dismiss="modal"><i class="fa fa-times-circle "></i> CLOSE</button>
    </div>
   </form>
   </div>
 </div>
</div>