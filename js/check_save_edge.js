function submitSaveEdge(){
  var objAddArticle = document.forms['md_add_edge']; 
  if(objAddArticle.add_edge_name.value==null||objAddArticle.add_edge_name.value==""){
    alert('กรุณากรอก ชื่อ Edge !');
    objAddArticle.add_edge_name.focus();
    return false;
  }
  if (confirm('คุณต้องการบันทึกข้อมูลใช่หรือไม่ ?')){
   objAddArticle.submit();
   return true;
  } else {
   return false;
  }
}