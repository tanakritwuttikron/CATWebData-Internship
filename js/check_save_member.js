function submitSaveUser(){
  var objAddArticle = document.forms['md_user']; 
  if(objAddArticle.add_user_name.value==null||objAddArticle.add_user_name.value==""){
    alert('กรุณากรอก Username !');
    objAddArticle.add_user_name.focus();
    return false;
  }
  if(objAddArticle.add_user_pass.value==null||objAddArticle.add_user_pass.value==""){
    alert('กรุณากรอก Password !');
    objAddArticle.add_user_pass.focus();
    return false;
  }
  if(objAddArticle.add_user_status.value==null||objAddArticle.add_user_status.value==""){
    alert('กรุณากรอก Status !');
    objAddArticle.add_user_status.focus();
    return false;
  }
  if (confirm('คุณต้องการบันทึกข้อมูลใช่หรือไม่ ?')){
   objAddArticle.submit();
   return true;
  } else {
   return false;
  }
}