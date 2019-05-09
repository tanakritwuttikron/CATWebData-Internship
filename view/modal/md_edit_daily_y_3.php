<!-- The Modal -->
<div class="modal fade" id="editReport3YearModal">
 <div class="modal-dialog">
   <div class="modal-content">
    <!-- Modal Header -->
    <div class="modal-header">
      <h4 class="modal-title">Edit Daily Check</h4>
      <button type="button" class="close" data-dismiss="modal">&times;</button>
    </div>
    
    <!-- Modal body -->
   <form action="../../database/update_daily_y_frm2.php" method="post" name="md_edit_daily_frm2">
    <div class="modal-body">
    <div class="form-row">
     <div class="form-group col-sm-6">
      <input type="hidden" class="form-control" id="id_daily_3" name="id_daily_3">
      <input type="hidden" class="form-control" id="id_member" name="id_member">
      <input type="hidden" class="form-control" id="date_daily" name="date_daily">
      <input type="hidden" class="form-control" id="time_work" name="time_work">
      <label>Report :</label>
      <input type="text" class="form-control" id="edit_report" name="edit_report">
     </div>
     <div class="form-group col-sm-6">
      <label>Daily Case :</label>
      <input type="text" class="form-control" id="edit_daily_case" name="edit_daily_case">
     </div>
    </div>
    <div class="form-row">
     <div class="form-group col-sm-4">
      <label>Level :</label>
      <input type="text" class="form-control" id="edit_level" name="edit_level">
     </div>
     <div class="form-group col-sm-4">
      <label> Status :</label>
      <input type="text" class="form-control" id="edit_status" name="edit_status">
     </div>
     <div class="form-group col-sm-4">
      <label> Location :</label>
      <input type="text" class="form-control" id="edit_location" name="edit_location">
     </div>
     </div>
     <div class="form-row">
     <div class="form-group col-sm-12">
      <label> Detail :</label>
      <textarea type="text" class="form-control" id="edit_detail" name="edit_detail"></textarea>
      <!-- <input type="text" class="form-control" id="edit_detail" name="edit_detail"> -->
     </div>
     </div>
    </div>
    
    <!-- Modal footer -->
    <div class="modal-footer">
     <button type="button" class="btn btn-success" data-dismiss="modal" onclick="submitUpdateDaily3();"><i class="fa fa-save"></i> UPDATE</button>
     <button type="button" class="btn btn-danger" data-dismiss="modal"><i class="fa fa-times-circle "></i> CLOSE</button>
    </div>
    </div>
   </form>
   </div>
 </div>
</div>