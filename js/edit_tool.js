function submitUpdateTool(){
  var objAddArticle = document.forms['update_tool']; 
  if(objAddArticle.tool_ip.value==null||objAddArticle.tool_ip.value==""){
    alert('กรุณากรอก IP !');
    objAddArticle.tool_ip.focus();
    return false;
  }
  if(objAddArticle.brand_name.value==null||objAddArticle.brand_name.value==""){
    alert('กรุณากรอก Brand Name !');
    objAddArticle.brand_name.focus();
    return false;
  }
  if(objAddArticle.device_modal.value==null||objAddArticle.device_modal.value==""){
    alert('กรุณากรอก Device Modal !');
    objAddArticle.device_modal.focus();
    return false;
  }
  if(objAddArticle.device_shorth_name.value==null||objAddArticle.device_shorth_name.value==""){
    alert('กรุณากรอก Device Shorth Name !');
    objAddArticle.device_shorth_name.focus();
    return false;
  }
  if(objAddArticle.serial_num.value==null||objAddArticle.serial_num.value==""){
    alert('กรุณากรอก Serial Number !');
    objAddArticle.serial_num.focus();
    return false;
  }
  if(objAddArticle.current_name.value==null||objAddArticle.current_name.value==""){
    alert('กรุณากรอก Current Name !');
    objAddArticle.current_name.focus();
    return false;
  }
  if(objAddArticle.comment.value==null||objAddArticle.comment.value==""){
    alert('กรุณากรอก Comment !');
    objAddArticle.comment.focus();
    return false;
  }
  if(objAddArticle.check_data.value==null||objAddArticle.check_data.value==""){
    alert('กรุณาเลือก การยืนยันข้อมูล !');
    objAddArticle.check_data.focus();
    return false;
  }
  if(objAddArticle.device_type_name.value==null||objAddArticle.device_type_name.value==""){
    alert('กรุณาเลือก Device Type Name !');
    objAddArticle.device_type_name.focus();
    return false;
  }
  if (confirm('คุณต้องการบันทึกข้อมูลใช่หรือไม่ ?')){
   objAddArticle.submit();
   return true;
  } else {
   return false;
  }
}

function submitUpdateToolL2(){
  var objAddArticle = document.forms['update_tool_l2']; 
  if(objAddArticle.tool_ip_l2.value==null||objAddArticle.tool_ip_l2.value==""){
    alert('กรุณากรอก IP !');
    objAddArticle.tool_ip_l2.focus();
    return false;
  }
  if(objAddArticle.brand_name_l2.value==null||objAddArticle.brand_name_l2.value==""){
    alert('กรุณากรอก Brand Name !');
    objAddArticle.brand_name_l2.focus();
    return false;
  }
  if(objAddArticle.device_modal_l2.value==null||objAddArticle.device_modal_l2.value==""){
    alert('กรุณากรอก Device Modal !');
    objAddArticle.device_modal_l2.focus();
    return false;
  }
  if(objAddArticle.device_shorth_name_l2.value==null||objAddArticle.device_shorth_name_l2.value==""){
    alert('กรุณากรอก Device Shorth Name !');
    objAddArticle.device_shorth_name_l2.focus();
    return false;
  }
  if(objAddArticle.serial_num_l2.value==null||objAddArticle.serial_num_l2.value==""){
    alert('กรุณากรอก Serial Number !');
    objAddArticle.serial_num_l2.focus();
    return false;
  }
  if(objAddArticle.current_name_l2.value==null||objAddArticle.current_name_l2.value==""){
    alert('กรุณากรอก Current Name !');
    objAddArticle.current_name_l2.focus();
    return false;
  }
  if(objAddArticle.comment_l2.value==null||objAddArticle.comment_l2.value==""){
    alert('กรุณากรอก Comment !');
    objAddArticle.comment_l2.focus();
    return false;
  }
  if(objAddArticle.check_data_l2.value==null||objAddArticle.check_data_l2.value==""){
    alert('กรุณาเลือก การยืนยันข้อมูล !');
    objAddArticle.check_data_l2.focus();
    return false;
  }
  if(objAddArticle.device_type_name_l2.value==null||objAddArticle.device_type_name_l2.value==""){
    alert('กรุณาเลือก Device Type Name !');
    objAddArticle.device_type_name_l2.focus();
    return false;
  }
  if (confirm('คุณต้องการบันทึกข้อมูลใช่หรือไม่ ?')){
   objAddArticle.submit();
   return true;
  } else {
   return false;
  }
}