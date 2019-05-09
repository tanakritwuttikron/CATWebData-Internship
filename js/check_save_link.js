function submitSavelink(){
  var objAddArticle = document.forms['md_add_link']; 
  if(objAddArticle.add_link_name.value==null||objAddArticle.add_link_name.value==""){
    alert('กรุณากรอก ชื่อเว็บ !');
    objAddArticle.add_link_name.focus();
    return false;
  }
  if(objAddArticle.add_link_page.value==null||objAddArticle.add_link_page.value==""){
    alert('กรุณากรอก URL !');
    objAddArticle.add_link_page.focus();
    return false;
  }
  if (confirm('คุณต้องการบันทึกข้อมูลใช่หรือไม่ ?')){
   objAddArticle.submit();
   return true;
  } else {
   return false;
  }
}