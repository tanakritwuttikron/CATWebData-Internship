function submitEditNotice(){
  var objAddArticle = document.forms['edit_notice']; 
  if(objAddArticle.txttopic.value==null||objAddArticle.txttopic.value==""){
    alert('กรุณากรอก ชื่อหัวข้อ !');
    objAddArticle.txttopic.focus();
    return false;
  }
  if(objAddArticle.txtdate_notice.value==null||objAddArticle.txtdate_notice.value==""){
    alert('กรุณากรอก วันที่ !');
    objAddArticle.txtdate_notice.focus();
    return false;
  }
  if(objAddArticle.txtdescrip.value==null||objAddArticle.txtdescrip.value==""){
    alert('กรุณากรอก รายละเอียด !');
    objAddArticle.txtdescrip.focus();
    return false;
  }
  if (confirm('คุณต้องการบันทึกข้อมูลใช่หรือไม่ ?')){
   objAddArticle.submit();
   return true;
  } else {
   return false;
  }
}