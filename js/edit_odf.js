$(".edit-odf").on("click", function(){
        // alert($(this).data('project-id'));
  $('#id_route').val($(this).data('route-id'));
  $('#id_local').val($(this).data('local-id'));
  $('#id_core').val($(this).data('core-id'));
  $('#edit_start_path').val($(this).data('start'));
  $('#edit_end_path').val($(this).data('end'));
  $('#edit_kilometer').val($(this).data('kilometer'));
});

$(".edit-odf-l2").on("click", function(){
        // alert($(this).data('project-id'));
  $('#id_route_l2').val($(this).data('route-id'));
  $('#id_local').val($(this).data('local-id'));
  $('#id_node').val($(this).data('node-id'));
  $('#id_core').val($(this).data('core-id'));
  $('#edit_start_path').val($(this).data('start'));
  $('#edit_end_path').val($(this).data('end'));
  $('#edit_kilometer').val($(this).data('kilometer'));
});


function submitUpdateOdf(){
  var objAddArticle = document.forms['md_edit_odf']; 
  if(objAddArticle.edit_start_path.value==null||objAddArticle.edit_start_path.value==""){
    alert('กรุณากรอก ต้นทาง !');
    objAddArticle.edit_start_path.focus();
    return false;
  }
  if(objAddArticle.edit_end_path.value==null||objAddArticle.edit_end_path.value==""){
    alert('กรุณากรอก ปลายทาง !');
    objAddArticle.edit_end_path.focus();
    return false;
  }
  if(objAddArticle.edit_kilometer.value==null||objAddArticle.edit_kilometer.value==""){
    alert('กรุณากรอก กิโลเมตร !');
    objAddArticle.edit_kilometer.focus();
    return false;
  }
  if (confirm('คุณต้องการบันทึกข้อมูลใช่หรือไม่ ?')){
   objAddArticle.submit();
   return true;
  } else {
   return false;
  }
}

function submitUpdateOdfL2(){
  var objAddArticle = document.forms['md_edit_odf_l2']; 
  if(objAddArticle.edit_start_path.value==null||objAddArticle.edit_start_path.value==""){
    alert('กรุณากรอก ต้นทาง !');
    objAddArticle.edit_start_path.focus();
    return false;
  }
  if(objAddArticle.edit_end_path.value==null||objAddArticle.edit_end_path.value==""){
    alert('กรุณากรอก ปลายทาง !');
    objAddArticle.edit_end_path.focus();
    return false;
  }
  if(objAddArticle.edit_kilometer.value==null||objAddArticle.edit_kilometer.value==""){
    alert('กรุณากรอก กิโลเมตร !');
    objAddArticle.edit_kilometer.focus();
    return false;
  }
  if (confirm('คุณต้องการบันทึกข้อมูลใช่หรือไม่ ?')){
   objAddArticle.submit();
   return true;
  } else {
   return false;
  }
}