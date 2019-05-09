$(".edit-manual").on("click", function(){
        // alert($(this).data('project-id'));
  $('#edit_manual_id').val($(this).data('manual-id'));
  $('#edit_manual_name').val($(this).data('manual-name'));
  $('#edit_manual_file').val($(this).data('manual-file'));
});


function submitUpdateFile(){
  var objAddArticle = document.forms['md_form_local']; 
  if(objAddArticle.edt_manual_name.value==null||objAddArticle.edt_manual_name.value==""){
    alert('กรุณากรอก ชื่อคู่มือ !');
    objAddArticle.edt_manual_name.focus();
    return false;
  }
  if(objAddArticle.file.value==null||objAddArticle.file.value==""){
    alert('กรุณาใส่ ไฟล์ !');
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