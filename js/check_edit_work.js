function submitEditWork(){
  var objAddArticle = document.forms['add_work']; 
  if(objAddArticle.txttitle.value==null||objAddArticle.txttitle.value==""){
    alert('กรุณากรอก ชื่อหัวข้อ !');
    objAddArticle.txttitle.focus();
    return false;
  }
  if(objAddArticle.date_time.value==null||objAddArticle.date_time.value==""){
    alert('กรุณากรอก วันที่ !');
    objAddArticle.date_time.focus();
    return false;
  }
  if(objAddArticle.fname.value==null||objAddArticle.fname.value==""){
    alert('กรุณากรอก ชื่อจริง !');
    objAddArticle.fname.focus();
    return false;
  }
  if(objAddArticle.lname.value==null||objAddArticle.lname.value==""){
    alert('กรุณากรอก นามสกุล !');
    objAddArticle.lname.focus();
    return false;
  }
  if(objAddArticle.catid_cm.value==null||objAddArticle.catid_cm.value==""){
    alert('กรุณากรอก CAT ID !');
    objAddArticle.catid_cm.focus();
    return false;
  }
  if(objAddArticle.phone_cm.value==null||objAddArticle.phone_cm.value==""){
    alert('กรุณากรอก หมายเลขโทรศัพท์ !');
    objAddArticle.phone_cm.focus();
    return false;
  }
  if(objAddArticle.descrip.value==null||objAddArticle.descrip.value==""){
    alert('กรุณากรอก รายละเอียด !');
    objAddArticle.descrip.focus();
    return false;
  }
  if (confirm('คุณต้องการบันทึกข้อมูลใช่หรือไม่ ?')){
   objAddArticle.submit();
   return true;
  } else {
   return false;
  }
}
