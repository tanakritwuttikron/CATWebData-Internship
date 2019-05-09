function submitSaveLocal(){
  var objAddArticle = document.forms['form_local']; 
  if(objAddArticle.local_name.value==null||objAddArticle.local_name.value==""){
    alert('กรุณากรอก ชื่อสถานที่ !');
    objAddArticle.local_name.focus();
    return false;
  }
  if(objAddArticle.local_ip.value==null||objAddArticle.local_ip.value==""){
    alert('กรุณากรอก IP address !');
    objAddArticle.local_ip.focus();
    return false;
  }
  if(objAddArticle.latitude.value==null||objAddArticle.latitude.value==""){
    alert('กรุณากรอก Latitude !');
    objAddArticle.latitude.focus();
    return false;
  }
  if(objAddArticle.longitude.value==null||objAddArticle.longitude.value==""){
    alert('กรุณากรอก Longitude !');
    objAddArticle.longitude.focus();
    return false;
  }
  if(objAddArticle.initials.value==null||objAddArticle.initials.value==""){
    alert('กรุณากรอก Initials !');
    objAddArticle.edit_initials.focus();
    return false;
  }
  if(objAddArticle.old_site_code.value==null||objAddArticle.old_site_code.value==""){
    alert('กรุณากรอก OldsiteCode !');
    objAddArticle.old_site_code.focus();
    return false;
  }
  if (confirm('คุณต้องการบันทึกข้อมูลใช่หรือไม่ ?')){
   objAddArticle.submit();
   return true;
  } else {
   return false;
  }
}

function submitSaveNode(){
  var objAddArticle = document.forms['form_node']; 
  if(objAddArticle.node_name.value==null||objAddArticle.node_name.value==""){
    alert('กรุณากรอก ชื่อสถานที่ !');
    objAddArticle.node_name.focus();
    return false;
  }
  if(objAddArticle.node_ip.value==null||objAddArticle.node_ip.value==""){
    alert('กรุณากรอก IP address !');
    objAddArticle.node_ip.focus();
    return false;
  }
  if(objAddArticle.latitude.value==null||objAddArticle.latitude.value==""){
    alert('กรุณากรอก Latitude !');
    objAddArticle.latitude.focus();
    return false;
  }
  if(objAddArticle.longitude.value==null||objAddArticle.longitude.value==""){
    alert('กรุณากรอก Longitude !');
    objAddArticle.longitude.focus();
    return false;
  }
  if(objAddArticle.initials.value==null||objAddArticle.initials.value==""){
    alert('กรุณากรอก Initials !');
    objAddArticle.edit_initials.focus();
    return false;
  }
  if(objAddArticle.old_site_code.value==null||objAddArticle.old_site_code.value==""){
    alert('กรุณากรอก OldsiteCode !');
    objAddArticle.old_site_code.focus();
    return false;
  }
  if (confirm('คุณต้องการบันทึกข้อมูลใช่หรือไม่ ?')){
   objAddArticle.submit();
   return true;
  } else {
   return false;
  }
}