<!-- The Modal -->
<div class="modal fade" id="editReportModal">
 <div class="modal-dialog">
   <div class="modal-content">
    <!-- Modal Header -->
    <div class="modal-header">
      <h4 class="modal-title">Edit Daily Check</h4>
      <button type="button" class="close" data-dismiss="modal">&times;</button>
    </div>
    
    <!-- Modal body -->
   <form action="../../database/update_daily_frm1.php" method="post" name="md_edit_daily_frm1">
    <div class="modal-body">
    <div class="form-row">
     <div class="form-group col-sm-6">
      <input type="hidden" class="form-control" id="id_daily" name="id_daily">
      <input type="hidden" class="form-control" id="id_member" name="id_member">
      <input type="hidden" class="form-control" id="date_daily" name="date_daily">
      <input type="hidden" class="form-control" id="time_work" name="time_work">
      <label>Ticket No :</label>
      <input type="text" class="form-control" id="edit_ticket_no" name="edit_ticket_no">
     </div>
     <div class="form-group col-sm-6">
      <label>CAT ID :</label>
      <input type="text" class="form-control" id="edit_cat_id" name="edit_cat_id">
     </div>
    </div>
    <div class="form-row">
     <div class="form-group col-sm-3">
      <label> CAT MPLS :</label>
     </div>
     <div class="form-group  col-sm-4">
     <label> < 4Hr. :</label>
      <input type="text" class="form-control" id="edit_cat_mpls_hr1" name="edit_cat_mpls_hr1">
     </div>
     <div class="form-group  col-sm-4">
     <label> > 4Hr. :</label>
      <input type="text" class="form-control" id="edit_cat_mpls_hr2" name="edit_cat_mpls_hr2">
     </div>
     </div>
     <div class="form-row">
     <div class="form-group  col-sm-3">
      <label> CAT Ethernet :</label>
     </div>
     <div class="form-group  col-sm-4">
     <label> < 4Hr. :</label>
      <input type="text" class="form-control" id="edit_cat_ethernet_hr3" name="edit_cat_ethernet_hr3">
     </div>
     <div class="form-group  col-sm-4">
     <label> > 4Hr. :</label>
      <input type="text" class="form-control" id="edit_cat_ethernet_hr4" name="edit_cat_ethernet_hr4">
     </div>
     </div>
     <div class="form-row">
     <div class="form-group  col-sm-3">
      <label> CAT Internet :</label>
     </div>
     <div class="form-group  col-sm-4">
     <label> < 4Hr. :</label>
      <input type="text" class="form-control" id="edit_cat_internet_hr5" name="edit_cat_internet_hr5">
     </div>
     <div class="form-group  col-sm-4">
     <label> > 4Hr. :</label>
      <input type="text" class="form-control" id="edit_cat_internet_hr6" name="edit_cat_internet_hr6">
     </div>
     </div>
     <div class="form-row">
     <div class="form-group col-sm-3">
      <label> CAT Other :</label>
     </div>
     <div class="form-group  col-sm-4">
     <label> < 4Hr. :</label>
      <input type="text" class="form-control" id="edit_cat_other_hr7" name="edit_cat_other_hr7">
     </div>
     <div class="form-group  col-sm-4">
     <label> > 4Hr. :</label>
      <input type="text" class="form-control" id="edit_cat_other_hr8" name="edit_cat_other_hr8">
     </div>
     </div>
     <div class="form-row">
      <div class="form-group col-sm-3">
      <label> Total Ticket :</label>
     </div>
     <div class="form-group col-sm-4">
      <input type="text" class="form-control" id="edit_total_ticket" name="edit_total_ticket">
     </div>
     </div>
     <div class="form-row">
     <div class="form-group col-sm-3">
      <label> Comment :</label>
     </div>
     <div class="form-group col-sm-9">
      <textarea type="text" class="form-control" id="edit_comment" name="edit_comment"></textarea>
      <!-- <input type="text" class="form-control" id="edit_comment" name="edit_comment"> -->
     </div>
     </div>
    </div>
    
    <!-- Modal footer -->
    <div class="modal-footer">
     <button type="button" class="btn btn-success" data-dismiss="modal" onclick="submitUpdateDaily1();"><i class="fa fa-save"></i> UPDATE</button>
     <button type="button" class="btn btn-danger" data-dismiss="modal"><i class="fa fa-times-circle "></i> CLOSE</button>
    </div>
    </div>
   </form>
   </div>
 </div>
</div>