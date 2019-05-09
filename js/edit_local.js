$(".edit-local").on("click", function(){
        // alert($(this).data('project-id'));
  $('#edit_local_id').val($(this).data('local-id'));
  $('#edit_local_name').val($(this).data('local-name'));
  $('#edit_local_ip').val($(this).data('local-ip'));
  $('#edit_latitude').val($(this).data('local-latitude'));
  $('#edit_longitude').val($(this).data('local-longitude'));
  $('#edit_initials').val($(this).data('local-initials'));
  $('#edit_old_site_code').val($(this).data('local-old'));

});

$(".edit-node").on("click", function(){
        // alert($(this).data('project-id'));
  $('#edit_local_id').val($(this).data('local-id'));
  $('#edit_node_id').val($(this).data('node-id'));
  $('#edit_node_name').val($(this).data('node-name'));
  $('#edit_node_ip').val($(this).data('node-ip'));
  $('#edit_latitude').val($(this).data('node-latitude'));
  $('#edit_longitude').val($(this).data('node-longitude'));
  $('#edit_initials').val($(this).data('node-initials'));
  $('#edit_old_site_code').val($(this).data('node-old'));

});

$(".edit-node-l2").on("click", function(){
        // alert($(this).data('project-id'));
  $('#edit_local_id').val($(this).data('local-id'));
  $('#edit_node_id').val($(this).data('node-id'));
  $('#edit_node_name').val($(this).data('node-name'));
  $('#edit_node_ip').val($(this).data('node-ip'));
  $('#edit_latitude').val($(this).data('node-latitude'));
  $('#edit_longitude').val($(this).data('node-longitude'));
  $('#edit_initials').val($(this).data('node-initials'));
  $('#edit_old_site_code').val($(this).data('node-old'));

});

function submitUpdateLocal(){
  var objAddArticle = document.forms['md_form_local']; 
  if(objAddArticle.edit_local_name.value==null||objAddArticle.edit_local_name.value==""){
    alert('กรุณากรอก ชื่อสถานที่ !');
    objAddArticle.edit_local_name.focus();
    return false;
  }
  if(objAddArticle.edit_local_ip.value==null||objAddArticle.edit_local_ip.value==""){
    alert('กรุณากรอก IP address !');
    objAddArticle.edit_local_ip.focus();
    return false;
  }
  if(objAddArticle.edit_latitude.value==null||objAddArticle.edit_latitude.value==""){
    alert('กรุณากรอก Latitude !');
    objAddArticle.edit_latitude.focus();
    return false;
  }
  if(objAddArticle.edit_longitude.value==null||objAddArticle.edit_longitude.value==""){
    alert('กรุณากรอก Longitude !');
    objAddArticle.edit_longitude.focus();
    return false;
  }
  if(objAddArticle.edit_initials.value==null||objAddArticle.edit_initials.value==""){
    alert('กรุณากรอก Initials !');
    objAddArticle.edit_initials.focus();
    return false;
  }
  if(objAddArticle.edit_old_site_code.value==null||objAddArticle.edit_old_site_code.value==""){
    alert('กรุณากรอก OldsiteCode !');
    objAddArticle.edit_old_site_code.focus();
    return false;
  }
  if (confirm('คุณต้องการบันทึกข้อมูลใช่หรือไม่ ?')){
   objAddArticle.submit();
   return true;
  } else {
   return false;
  }
}

function submitUpdateNode(){
  var objAddArticle = document.forms['md_form_node']; 
  if(objAddArticle.edit_node_name.value==null||objAddArticle.edit_node_name.value==""){
    alert('กรุณากรอก ชื่อสถานที่ !');
    objAddArticle.edit_node_name.focus();
    return false;
  }
  if(objAddArticle.edit_node_ip.value==null||objAddArticle.edit_node_ip.value==""){
    alert('กรุณากรอก IP address !');
    objAddArticle.edit_node_ip.focus();
    return false;
  }
  if(objAddArticle.edit_latitude.value==null||objAddArticle.edit_latitude.value==""){
    alert('กรุณากรอก Latitude !');
    objAddArticle.edit_latitude.focus();
    return false;
  }
  if(objAddArticle.edit_longitude.value==null||objAddArticle.edit_longitude.value==""){
    alert('กรุณากรอก Longitude !');
    objAddArticle.edit_longitude.focus();
    return false;
  }
  if(objAddArticle.edit_initials.value==null||objAddArticle.edit_initials.value==""){
    alert('กรุณากรอก Initials !');
    objAddArticle.edit_initials.focus();
    return false;
  }
  if(objAddArticle.edit_old_site_code.value==null||objAddArticle.edit_old_site_code.value==""){
    alert('กรุณากรอก OldsiteCode !');
    objAddArticle.edit_old_site_code.focus();
    return false;
  }
  if (confirm('คุณต้องการบันทึกข้อมูลใช่หรือไม่ ?')){
   objAddArticle.submit();
   return true;
  } else {
   return false;
  }
}