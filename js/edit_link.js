$(".edit-link").on("click", function(){
        // alert($(this).data('project-id'));
  $('#edit_link_id').val($(this).data('link-id'));
  $('#edit_link_name').val($(this).data('link-name'));
  $('#edit_link_page').val($(this).data('link-url'));
});

function submitUpdatelink(){
  var objAddArticle = document.forms['md_edit_link']; 
  if(objAddArticle.edit_link_name.value==null||objAddArticle.edit_link_name.value==""){
    alert('กรุณากรอก ชื่อเว็บ !');
    objAddArticle.edit_link_name.focus();
    return false;
  }
  if(objAddArticle.edit_link_page.value==null||objAddArticle.edit_link_page.value==""){
    alert('กรุณากรอก URL !');
    objAddArticle.edit_link_page.focus();
    return false;
  }
  if (confirm('คุณต้องการบันทึกข้อมูลใช่หรือไม่ ?')){
   objAddArticle.submit();
   return true;
  } else {
   return false;
  }
}