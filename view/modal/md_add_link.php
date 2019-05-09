<!-- The Modal -->
<div class="modal fade" id="add_link">
 <div class="modal-dialog">
   <div class="modal-content">
    <!-- Modal Header -->
    <div class="modal-header">
      <h4 class="modal-title">Add Link Page</h4>
      <button type="button" class="close" data-dismiss="modal">&times;</button>
    </div>
    
    <!-- Modal body -->
   <form action="../../database/insert_link.php" method="post" name="md_add_link">
    <div class="modal-body">
     <div class="form-group">
      <label>Link name :</label>
      <input type="text" class="form-control" id="add_link_name" name="add_link_name" maxlength="100" placeholder="Link name">
     </div>
     <div class="form-group">
      <label>URL :</label>
      <input type="text" class="form-control" id="add_link_page" name="add_link_page" placeholder="URL">
     </div>
    </div>
    
    <!-- Modal footer -->
    <div class="modal-footer">
     <button type="button" class="btn btn-success" data-dismiss="modal" onclick="submitSavelink();"><i class="fa fa-save"></i> SAVE</button>
     <button type="button" class="btn btn-danger" data-dismiss="modal"><i class="fa fa-times-circle "></i> CLOSE</button>
    </div>
   </form>
   </div>
 </div>
</div>