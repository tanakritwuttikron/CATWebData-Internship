$(".edit-daily-1").on("click", function(){
        // alert($(this).data('project-id'));
  $('#id_daily').val($(this).data('daily-id'));
  $('#id_member').val($(this).data('member-id'));
  $('#date_daily').val($(this).data('daily-date'));
  $('#time_work').val($(this).data('daily-time'));
  $('#edit_ticket_no').val($(this).data('daily-ticket'));
  $('#edit_cat_id').val($(this).data('cat-id'));
  $('#edit_cat_mpls_hr1').val($(this).data('daily-hr1'));
  $('#edit_cat_mpls_hr2').val($(this).data('daily-hr2'));
  $('#edit_cat_ethernet_hr3').val($(this).data('daily-hr3'));
  $('#edit_cat_ethernet_hr4').val($(this).data('daily-hr4'));
  $('#edit_cat_internet_hr5').val($(this).data('daily-hr5'));
  $('#edit_cat_internet_hr6').val($(this).data('daily-hr6'));
  $('#edit_cat_other_hr7').val($(this).data('daily-hr7'));
  $('#edit_cat_other_hr8').val($(this).data('daily-hr8'));
  $('#edit_total_ticket').val($(this).data('daily-total'));
  $('#edit_comment').val($(this).data('daily-comment'));
});

$(".edit-daily-m-1").on("click", function(){
        // alert($(this).data('project-id'));
  $('#id_daily').val($(this).data('daily-id'));
  $('#id_member').val($(this).data('member-id'));
  $('#date_daily').val($(this).data('daily-date'));
  $('#time_work').val($(this).data('daily-time'));
  $('#edit_ticket_no').val($(this).data('daily-ticket'));
  $('#edit_cat_id').val($(this).data('cat-id'));
  $('#edit_cat_mpls_hr1').val($(this).data('daily-hr1'));
  $('#edit_cat_mpls_hr2').val($(this).data('daily-hr2'));
  $('#edit_cat_ethernet_hr3').val($(this).data('daily-hr3'));
  $('#edit_cat_ethernet_hr4').val($(this).data('daily-hr4'));
  $('#edit_cat_internet_hr5').val($(this).data('daily-hr5'));
  $('#edit_cat_internet_hr6').val($(this).data('daily-hr6'));
  $('#edit_cat_other_hr7').val($(this).data('daily-hr7'));
  $('#edit_cat_other_hr8').val($(this).data('daily-hr8'));
  $('#edit_total_ticket').val($(this).data('daily-total'));
  $('#edit_comment').val($(this).data('daily-comment'));
});

$(".edit-daily-y-1").on("click", function(){
        // alert($(this).data('project-id'));
  $('#id_daily').val($(this).data('daily-id'));
  $('#id_member').val($(this).data('member-id'));
  $('#date_daily').val($(this).data('daily-date'));
  $('#time_work').val($(this).data('daily-time'));
  $('#edit_ticket_no').val($(this).data('daily-ticket'));
  $('#edit_cat_id').val($(this).data('cat-id'));
  $('#edit_cat_mpls_hr1').val($(this).data('daily-hr1'));
  $('#edit_cat_mpls_hr2').val($(this).data('daily-hr2'));
  $('#edit_cat_ethernet_hr3').val($(this).data('daily-hr3'));
  $('#edit_cat_ethernet_hr4').val($(this).data('daily-hr4'));
  $('#edit_cat_internet_hr5').val($(this).data('daily-hr5'));
  $('#edit_cat_internet_hr6').val($(this).data('daily-hr6'));
  $('#edit_cat_other_hr7').val($(this).data('daily-hr7'));
  $('#edit_cat_other_hr8').val($(this).data('daily-hr8'));
  $('#edit_total_ticket').val($(this).data('daily-total'));
  $('#edit_comment').val($(this).data('daily-comment'));
});

$(".edit-daily-2").on("click", function(){
        // alert($(this).data('project-id'));
  $('#id_daily_2').val($(this).data('daily-id'));
  $('#id_member_2').val($(this).data('member-id'));
  $('#date_daily_2').val($(this).data('daily-date'));
  $('#time_work_2').val($(this).data('daily-time'));
  $('#edit_ticket_no_2').val($(this).data('daily-ticket'));
  $('#edit_cat_id_2').val($(this).data('cat-id'));
  $('#edit_c_internet_hr1').val($(this).data('daily-hr1'));
  $('#edit_c_internet_hr2').val($(this).data('daily-hr2'));
  $('#edit_total_ticket_2').val($(this).data('daily-total'));
  $('#edit_comment_2').val($(this).data('daily-comment'));
});

$(".edit-daily-m-2").on("click", function(){
        // alert($(this).data('project-id'));
  $('#id_daily_2').val($(this).data('daily-id'));
  $('#id_member_2').val($(this).data('member-id'));
  $('#date_daily_2').val($(this).data('daily-date'));
  $('#time_work_2').val($(this).data('daily-time'));
  $('#edit_ticket_no_2').val($(this).data('daily-ticket'));
  $('#edit_cat_id_2').val($(this).data('cat-id'));
  $('#edit_c_internet_hr1').val($(this).data('daily-hr1'));
  $('#edit_c_internet_hr2').val($(this).data('daily-hr2'));
  $('#edit_total_ticket_2').val($(this).data('daily-total'));
  $('#edit_comment_2').val($(this).data('daily-comment'));
});

$(".edit-daily-y-2").on("click", function(){
        // alert($(this).data('project-id'));
  $('#id_daily_2').val($(this).data('daily-id'));
  $('#id_member_2').val($(this).data('member-id'));
  $('#date_daily_2').val($(this).data('daily-date'));
  $('#time_work_2').val($(this).data('daily-time'));
  $('#edit_ticket_no_2').val($(this).data('daily-ticket'));
  $('#edit_cat_id_2').val($(this).data('cat-id'));
  $('#edit_c_internet_hr1').val($(this).data('daily-hr1'));
  $('#edit_c_internet_hr2').val($(this).data('daily-hr2'));
  $('#edit_total_ticket_2').val($(this).data('daily-total'));
  $('#edit_comment_2').val($(this).data('daily-comment'));
});

function submitUpdateDaily1(){
  var objAddArticle = document.forms['md_edit_daily_frm1']; 
  if(objAddArticle.edit_ticket_no.value==null||objAddArticle.edit_ticket_no.value==""){
    alert('กรุณากรอก Ticket No !');
    objAddArticle.edit_ticket_no.focus();
    return false;
  }
  if(objAddArticle.edit_cat_id.value==null||objAddArticle.edit_cat_id.value==""){
    alert('กรุณากรอก CAT ID !');
    objAddArticle.edit_cat_id.focus();
    return false;
  }
  if(objAddArticle.edit_cat_mpls_hr1.value==null||objAddArticle.edit_cat_mpls_hr1.value==""){
    alert('กรุณากรอก CAT MPLS !');
    objAddArticle.edit_cat_mpls_hr1.focus();
    return false;
  }
  if(objAddArticle.edit_cat_mpls_hr2.value==null||objAddArticle.edit_cat_mpls_hr2.value==""){
    alert('กรุณากรอก CAT MPLS !');
    objAddArticle.edit_cat_mpls_hr2.focus();
    return false;
  }
  if(objAddArticle.edit_cat_ethernet_hr3.value==null||objAddArticle.edit_cat_ethernet_hr3.value==""){
    alert('กรุณากรอก CAT Ethernet !');
    objAddArticle.edit_cat_ethernet_hr3.focus();
    return false;
  }
  if(objAddArticle.edit_cat_ethernet_hr4.value==null||objAddArticle.edit_cat_ethernet_hr4.value==""){
    alert('กรุณากรอก CAT Ethernet !');
    objAddArticle.edit_cat_ethernet_hr4.focus();
    return false;
  }
  if(objAddArticle.edit_cat_internet_hr5.value==null||objAddArticle.edit_cat_internet_hr5.value==""){
    alert('กรุณากรอก CAT Internet !');
    objAddArticle.edit_cat_internet_hr5.focus();
    return false;
  }
  if(objAddArticle.edit_cat_internet_hr6.value==null||objAddArticle.edit_cat_internet_hr6.value==""){
    alert('กรุณากรอก CAT Internet !');
    objAddArticle.edit_cat_internet_hr6.focus();
    return false;
  }
  if(objAddArticle.edit_cat_internet_hr5.value==null||objAddArticle.edit_cat_internet_hr5.value==""){
    alert('กรุณากรอก CAT Other !');
    objAddArticle.edit_cat_internet_hr5.focus();
    return false;
  }
  if(objAddArticle.edit_cat_internet_hr6.value==null||objAddArticle.edit_cat_internet_hr6.value==""){
    alert('กรุณากรอก CAT Other !');
    objAddArticle.edit_cat_internet_hr6.focus();
    return false;
  }
  if(objAddArticle.edit_total_ticket.value==null||objAddArticle.edit_total_ticket.value==""){
    alert('กรุณากรอก Total Ticket !');
    objAddArticle.edit_total_ticket.focus();
    return false;
  }
  if(objAddArticle.edit_comment.value==null||objAddArticle.edit_comment.value==""){
    alert('กรุณากรอก Comment !');
    objAddArticle.edit_comment.focus();
    return false;
  }
  if (confirm('คุณต้องการบันทึกข้อมูลใช่หรือไม่ ?')){
   objAddArticle.submit();
   return true;
  } else {
   return false;
  }
}

function submitUpdateDaily2(){
  var objAddArticle = document.forms['md_edit_daily2_frm1']; 
  if(objAddArticle.edit_ticket_no_2.value==null||objAddArticle.edit_ticket_no_2.value==""){
    alert('กรุณากรอก Ticket No !');
    objAddArticle.edit_ticket_no_2.focus();
    return false;
  }
  if(objAddArticle.edit_cat_id_2.value==null||objAddArticle.edit_cat_id_2.value==""){
    alert('กรุณากรอก CAT ID !');
    objAddArticle.edit_cat_id_2.focus();
    return false;
  }
  if(objAddArticle.edit_c_internet_hr1.value==null||objAddArticle.edit_c_internet_hr1.value==""){
    alert('กรุณากรอก C Internet !');
    objAddArticle.edit_c_internet_hr1.focus();
    return false;
  }
  if(objAddArticle.edit_c_internet_hr2.value==null||objAddArticle.edit_c_internet_hr2.value==""){
    alert('กรุณากรอก C Internet !');
    objAddArticle.edit_c_internet_hr2.focus();
    return false;
  }
  if(objAddArticle.edit_total_ticket_2.value==null||objAddArticle.edit_total_ticket_2.value==""){
    alert('กรุณากรอก Total Ticket !');
    objAddArticle.edit_total_ticket_2.focus();
    return false;
  }
  if(objAddArticle.edit_comment_2.value==null||objAddArticle.edit_comment_2.value==""){
    alert('กรุณากรอก Comment !');
    objAddArticle.edit_comment_2.focus();
    return false;
  }
  if (confirm('คุณต้องการบันทึกข้อมูลใช่หรือไม่ ?')){
   objAddArticle.submit();
   return true;
  } else {
   return false;
  }
}