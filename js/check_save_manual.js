function submitSaveFile(){
  var objAddArticle = document.forms['upload_file']; 
  if(objAddArticle.txtmanual_name.value==null||objAddArticle.txtmanual_name.value==""){
    alert('กรุณากรอก ชื่อคู่มือ !');
    objAddArticle.txtmanual_name.focus();
    return false;
  }
  if(objAddArticle.file.value==null||objAddArticle.file.value==""){
    alert('กรุณาใส่ Files !');
    objAddArticle.file.focus();
    return false;
  }
  if (confirm('คุณต้องการบันทึกข้อมูลใช่หรือไม่ ?')){
   objAddArticle.submit();
   return true;
  } else {
   return false;
  }
}