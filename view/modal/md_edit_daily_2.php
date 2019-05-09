<!-- The Modal -->
<div class="modal fade" id="editReport2Modal">
 <div class="modal-dialog">
   <div class="modal-content">
    <!-- Modal Header -->
    <div class="modal-header">
      <h4 class="modal-title">Edit Daily Check</h4>
      <button type="button" class="close" data-dismiss="modal">&times;</button>
    </div>
    
    <!-- Modal body -->
   <form action="../../database/update_daily2_frm1.php" method="post" name="md_edit_daily2_frm1">
    <div class="modal-body">
    <div class="form-row">
     <div class="form-group col-sm-6">
      <input type="hidden" class="form-control" id="id_daily_2" name="id_daily_2">
      <input type="hidden" class="form-control" id="id_member_2" name="id_member_2">
      <input type="hidden" class="form-control" id="date_daily_2" name="date_daily_2">
      <input type="hidden" class="form-control" id="time_work_2" name="time_work_2">
      <label>Ticket No :</label>
      <input type="text" class="form-control" id="edit_ticket_no_2" name="edit_ticket_no_2">
     </div>
     <div class="form-group col-sm-6">
      <label>CAT ID :</label>
      <input type="text" class="form-control" id="edit_cat_id_2" name="edit_cat_id_2">
     </div>
    </div>
    <div class="form-row">
     <div class="form-group col-sm-3">
      <label> C Internet :</label>
     </div>
     <div class="form-group  col-sm-4">
     <label> < 22Hr. :</label>
      <input type="text" class="form-control" id="edit_c_internet_hr1" name="edit_c_internet_hr1">
     </div>
     <div class="form-group  col-sm-4">
     <label> > 22Hr. :</label>
      <input type="text" class="form-control" id="edit_c_internet_hr2" name="edit_c_internet_hr2">
     </div>
     </div>
     <div class="form-row">
     <div class="form-group col-sm-3">
      <label> Total Ticket :</label>
     </div>
     <div class="form-group col-sm-4">
      <input type="text" class="form-control" id="edit_total_ticket_2" name="edit_total_ticket_2">
     </div>
     </div>
     <div class="form-row">
     <div class="form-group col-sm-3">
      <label> Comment :</label>
     </div>
     <div class="form-group col-sm-9">
      <textarea type="text" class="form-control" id="edit_comment_2" name="edit_comment_2"></textarea>
      <!-- <input type="text" class="form-control" id="edit_comment_2" name="edit_comment_2"> -->
     </div>
     </div>
    </div>
    
    <!-- Modal footer -->
    <div class="modal-footer">
     <button type="button" class="btn btn-success" data-dismiss="modal" onclick="submitUpdateDaily2();"><i class="fa fa-save"></i> UPDATE</button>
     <button type="button" class="btn btn-danger" data-dismiss="modal"><i class="fa fa-times-circle "></i> CLOSE</button>
    </div>
    </div>
   </form>
   </div>
 </div>
</div>