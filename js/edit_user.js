$(".edit-user").on("click", function(){
        // alert($(this).data('project-id'));
  $('#edit_user_id').val($(this).data('user-id'));
  $('#edit_user_name').val($(this).data('user-name'));
  $('#edit_user_pass').val($(this).data('user-pass'));
  $('#edit_user_status').val($(this).data('user-status'));
});

function submitUpdateUser(){
  var objAddArticle = document.forms['md_form_user']; 
  if(objAddArticle.edt_user_name.value==null||objAddArticle.edt_user_name.value==""){
    alert('กรุณากรอก Username !');
    objAddArticle.edt_user_name.focus();
    return false;
  }
  if(objAddArticle.edt_user_pass.value==null||objAddArticle.edt_user_pass.value==""){
    alert('กรุณากรอก Password !');
    objAddArticle.edt_user_pass.focus();
    return false;
  }
  if(objAddArticle.edt_user_status.value==null||objAddArticle.edt_user_status.value==""){
    alert('กรุณากรอก Status !');
    objAddArticle.edt_user_status.focus();
    return false;
  }
  if (confirm('คุณต้องการบันทึกข้อมูลใช่หรือไม่ ?')){
   objAddArticle.submit();
   return true;
  } else {
   return false;
  }
}