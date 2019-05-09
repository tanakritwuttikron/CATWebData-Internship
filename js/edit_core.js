$(".edit-core").on("click", function(){
        // alert($(this).data('project-id'));
  $('#id_detail').val($(this).data('detail-id'));
  $('#id_core').val($(this).data('core-id'));
  $('#id_route').val($(this).data('route-id'));
  $('#core_num').val($(this).data('core-num'));
  $('#edit_working').val($(this).data('core-working'));
  $('#edit_distance').val($(this).data('core-dis'));
  $('#edit_comment').val($(this).data('core-comment'));
});

$(".edit-core-l2").on("click", function(){
        // alert($(this).data('project-id'));
  $('#id_detail_l2').val($(this).data('detail-id'));
  $('#id_local').val($(this).data('local-id'));
  $('#id_core').val($(this).data('core-id'));
  $('#id_route_l2').val($(this).data('route-id'));
  $('#core_num').val($(this).data('core-num'));
  $('#edit_working_l2').val($(this).data('core-working'));
  $('#edit_distance_l2').val($(this).data('core-dis'));
  $('#edit_comment_l2').val($(this).data('core-comment'));
});


function submitUpdateCore(){
  var objAddArticle = document.forms['md_edit_core']; 
  if(objAddArticle.edit_working.value==null||objAddArticle.edit_working.value==""){
    alert('กรุณากรอก ใช้งาน !');
    objAddArticle.edit_working.focus();
    return false;
  }
  if(objAddArticle.edit_distance.value==null||objAddArticle.edit_distance.value==""){
    alert('กรุณากรอก ระยะทาง !');
    objAddArticle.edit_distance.focus();
    return false;
  }
  if(objAddArticle.edit_comment.value==null||objAddArticle.edit_comment.value==""){
    alert('กรุณากรอก หมายเหตุ !');
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

function submitUpdateCoreL2(){
  var objAddArticle = document.forms['md_edit_core_l2']; 
  if(objAddArticle.edit_working_l2.value==null||objAddArticle.edit_working_l2.value==""){
    alert('กรุณากรอก ใช้งาน !');
    objAddArticle.edit_working_l2.focus();
    return false;
  }
  if(objAddArticle.edit_distance_l2.value==null||objAddArticle.edit_distance_l2.value==""){
    alert('กรุณากรอก ระยะทาง !');
    objAddArticle.edit_distance_l2.focus();
    return false;
  }
  if(objAddArticle.edit_comment_l2.value==null||objAddArticle.edit_comment_l2.value==""){
    alert('กรุณากรอก หมายเหตุ !');
    objAddArticle.edit_comment_l2.focus();
    return false;
  }
  if (confirm('คุณต้องการบันทึกข้อมูลใช่หรือไม่ ?')){
   objAddArticle.submit();
   return true;
  } else {
   return false;
  }
}