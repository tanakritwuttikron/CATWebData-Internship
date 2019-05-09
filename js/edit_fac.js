$(".edit-fac").on("click", function(){
        // alert($(this).data('project-id'));
  $('#edit_fac_id').val($(this).data('fac-id'));
  $('#edit_local_id').val($(this).data('local-id'));
  $('#edit_fac_name').val($(this).data('fac-name'));
  $('#edit_fac_file').val($(this).data('fac-file'));
});

$(".edit-fac-l2").on("click", function(){
        // alert($(this).data('project-id'));
  $('#edit_fac_id').val($(this).data('fac-id'));
  $('#edit_local_id').val($(this).data('local-id'));
  $('#edit_node_id').val($(this).data('node-id'));
  $('#edit_fac_name').val($(this).data('fac-name'));
  $('#edit_fac_file').val($(this).data('fac-file'));
});

function submitUpdateFac(){
  var objAddArticle = document.forms['md_form_facility']; 
  if(objAddArticle.edt_fac_name.value==null||objAddArticle.edt_fac_name.value==""){
    alert('กรุณากรอก ชื่อ !');
    objAddArticle.edt_fac_name.focus();
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