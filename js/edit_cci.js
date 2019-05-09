$(".edit-ip_cci").on("click", function(){
        // alert($(this).data('project-id'));
  $('#edit_id_edge').val($(this).data('edge-id'));
  $('#edit_id_cci').val($(this).data('cci-id'));
  $('#edit_cci_ip').val($(this).data('cci-ip'));
});

function submitUpdateIp(){
  var objAddArticle = document.forms['md_edit_cci']; 
  if(objAddArticle.edit_cci_ip.value==null||objAddArticle.edit_cci_ip.value==""){
    alert('กรุณากรอก IP CCI !');
    objAddArticle.edit_cci_ip.focus();
    return false;
  }
  if (confirm('คุณต้องการบันทึกข้อมูลใช่หรือไม่ ?')){
   objAddArticle.submit();
   return true;
  } else {
   return false;
  }
}