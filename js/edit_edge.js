$(".edit-edge").on("click", function(){
        // alert($(this).data('project-id'));
  $('#edit_edge_id').val($(this).data('edge-id'));
  $('#edit_edge_name').val($(this).data('edge-name'));
  $('#edit_edge_ip').val($(this).data('edge-ip'));
});

function submitUpdateEdge(){
  var objAddArticle = document.forms['md_edit_edge']; 
  if(objAddArticle.edit_edge_name.value==null||objAddArticle.edit_edge_name.value==""){
    alert('กรุณากรอก ชื่อ Edge !');
    objAddArticle.edit_edge_name.focus();
    return false;
  }
  if(objAddArticle.edit_edge_ip.value==null||objAddArticle.edit_edge_ip.value==""){
    alert('กรุณากรอก Edge IP !');
    objAddArticle.edit_edge_ip.focus();
    return false;
  }
  if (confirm('คุณต้องการบันทึกข้อมูลใช่หรือไม่ ?')){
   objAddArticle.submit();
   return true;
  } else {
   return false;
  }
}