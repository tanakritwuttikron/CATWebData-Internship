function submitSaveOdf(){
  var objAddArticle = document.forms['insert_odf']; 
  if(objAddArticle.core_num.value==null||objAddArticle.core_num.value==""){
    alert('กรุณาเลือกจำนวน Core !');
    objAddArticle.core_num.focus();
    return false;
  }
  if(objAddArticle.start_path.value==null||objAddArticle.start_path.value==""){
    alert('กรุณากรอก เส้นทางเริ่มต้น !');
    objAddArticle.start_path.focus();
    return false;
  }
  if(objAddArticle.end_path.value==null||objAddArticle.end_path.value==""){
    alert('กรุณากรอก เส้นทางปลายทาง !');
    objAddArticle.end_path.focus();
    return false;
  }
  if(objAddArticle.kilometer.value==null||objAddArticle.kilometer.value==""){
    alert('กรุณากรอกจำนวน กิโลเมตร !');
    objAddArticle.kilometer.focus();
    return false;
  }
  if (confirm('คุณต้องการบันทึกข้อมูลใช่หรือไม่ ?')){
   objAddArticle.submit();
   return true;
  } else {
   return false;
  }
}

function submitSaveOdfL2(){
  var objAddArticle = document.forms['insert_odf_l2']; 
  if(objAddArticle.core_num.value==null||objAddArticle.core_num.value==""){
    alert('กรุณาเลือกจำนวน Core !');
    objAddArticle.core_num.focus();
    return false;
  }
  if(objAddArticle.start_path.value==null||objAddArticle.start_path.value==""){
    alert('กรุณากรอก เส้นทางเริ่มต้น !');
    objAddArticle.start_path.focus();
    return false;
  }
  if(objAddArticle.end_path.value==null||objAddArticle.end_path.value==""){
    alert('กรุณากรอก เส้นทางปลายทาง !');
    objAddArticle.end_path.focus();
    return false;
  }
  if(objAddArticle.kilometer.value==null||objAddArticle.kilometer.value==""){
    alert('กรุณากรอกจำนวน กิโลเมตร !');
    objAddArticle.kilometer.focus();
    return false;
  }
  if (confirm('คุณต้องการบันทึกข้อมูลใช่หรือไม่ ?')){
   objAddArticle.submit();
   return true;
  } else {
   return false;
  }
}