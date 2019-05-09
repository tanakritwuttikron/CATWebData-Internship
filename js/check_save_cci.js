function submitSaveCci(){
  var objAddArticle = document.forms['md_add_cci']; 
  if(objAddArticle.add_cci_ip.value==null||objAddArticle.add_cci_ip.value==""){
    alert('กรุณากรอก IP CCI !');
    objAddArticle.add_cci_ip.focus();
    return false;
  }
  if (confirm('คุณต้องการบันทึกข้อมูลใช่หรือไม่ ?')){
   objAddArticle.submit();
   return true;
  } else {
   return false;
  }
}