function submitSaveFac(){
  var objAddArticle = document.forms['add_fac'];

  if(objAddArticle.txttopic.value==null||objAddArticle.txttopic.value==""){
    alert('กรุณากรอก ชื่อ !');
    objAddArticle.txttopic.focus();
    return false;
  }
  if(objAddArticle.file.value==null||objAddArticle.file.value==""){
    alert('กรุณาใส่ รูปภาพ !');
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