$(".edit-daily-3").on("click", function(){
        // alert($(this).data('project-id'));
  $('#id_daily_3').val($(this).data('daily-id'));
  $('#id_member').val($(this).data('member-id'));
  $('#date_daily').val($(this).data('daily-date'));
  $('#time_work').val($(this).data('daily-time'));
  $('#edit_report').val($(this).data('daily-report'));
  $('#edit_daily_case').val($(this).data('daily-case'));
  $('#edit_level').val($(this).data('daily-level'));
  $('#edit_status').val($(this).data('daily-status'));
  $('#edit_location').val($(this).data('daily-local'));
  $('#edit_detail').val($(this).data('daily-detail'));
});

$(".edit-daily-m-3").on("click", function(){
        // alert($(this).data('project-id'));
  $('#id_daily_3').val($(this).data('daily-id'));
  $('#id_member').val($(this).data('member-id'));
  $('#date_daily').val($(this).data('daily-date'));
  $('#time_work').val($(this).data('daily-time'));
  $('#edit_report').val($(this).data('daily-report'));
  $('#edit_daily_case').val($(this).data('daily-case'));
  $('#edit_level').val($(this).data('daily-level'));
  $('#edit_status').val($(this).data('daily-status'));
  $('#edit_location').val($(this).data('daily-local'));
  $('#edit_detail').val($(this).data('daily-detail'));
});

$(".edit-daily-y-3").on("click", function(){
        // alert($(this).data('project-id'));
  $('#id_daily_3').val($(this).data('daily-id'));
  $('#id_member').val($(this).data('member-id'));
  $('#date_daily').val($(this).data('daily-date'));
  $('#time_work').val($(this).data('daily-time'));
  $('#edit_report').val($(this).data('daily-report'));
  $('#edit_daily_case').val($(this).data('daily-case'));
  $('#edit_level').val($(this).data('daily-level'));
  $('#edit_status').val($(this).data('daily-status'));
  $('#edit_location').val($(this).data('daily-local'));
  $('#edit_detail').val($(this).data('daily-detail'));
});
function submitUpdateDaily3(){
  var objAddArticle = document.forms['md_edit_daily_frm2']; 
  if(objAddArticle.edit_report.value==null||objAddArticle.edit_report.value==""){
    alert('กรุณากรอก Report !');
    objAddArticle.edit_report.focus();
    return false;
  }
  if(objAddArticle.edit_daily_case.value==null||objAddArticle.edit_daily_case.value==""){
    alert('กรุณากรอก Daily Case  !');
    objAddArticle.edit_daily_case.focus();
    return false;
  }
  if(objAddArticle.edit_level.value==null||objAddArticle.edit_level.value==""){
    alert('กรุณากรอก Level !');
    objAddArticle.edit_level.focus();
    return false;
  }
  if(objAddArticle.edit_status.value==null||objAddArticle.edit_status.value==""){
    alert('กรุณากรอก Status !');
    objAddArticle.edit_status.focus();
    return false;
  }
  if(objAddArticle.edit_location.value==null||objAddArticle.edit_location.value==""){
    alert('กรุณากรอก Location !');
    objAddArticle.edit_location.focus();
    return false;
  }
  if(objAddArticle.edit_detail.value==null||objAddArticle.edit_detail.value==""){
    alert('กรุณากรอก Detail !');
    objAddArticle.edit_detail.focus();
    return false;
  }
  if (confirm('คุณต้องการบันทึกข้อมูลใช่หรือไม่ ?')){
   objAddArticle.submit();
   return true;
  } else {
   return false;
  }
}