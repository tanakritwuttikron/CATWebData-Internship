$(document).ready(function(){

 var rows = 1;
 $("#createRows").click(function(){
  var tr = "<tr>";
  tr = tr + "<td><input type='text' class='form-control input-hd-2' name='txtreport"+rows+"' id='txtreport"+rows+"'></td>";
  tr = tr + "<td><input type='text' class='form-control input-hd-2' name='txtcase"+rows+"' id='txtcase"+rows+"'></td>";
  tr = tr + "<td><input type='text' class='form-control input-hd-2' name='txtlevel"+rows+"' id='txtlevel"+rows+"'></td>";
  tr = tr + "<td><input type='text' class='form-control input-hd-2' name='txtstatus"+rows+"' id='txtstatus"+rows+"'></td>";
  tr = tr + "<td><input type='text' class='form-control input-hd-2' name='txtlocation"+rows+"' id='txtlocation"+rows+"'></td>";
  tr = tr + "<td><textarea type='text' class='form-control input-hd-2' name='txtdetail"+rows+"' id='txtdetail"+rows+"'></textarea></td>";

  tr = tr + "</tr>";
  $('#tb_daily_check_frm2 > tbody:last').append(tr);
 
  $('#hdnCount').val(rows);
  rows = rows + 1;
 });

 $("#deleteRows").click(function(){
  if ($("#tb_daily_check_frm2 tbody tr").length != 1) {
    $("#tb_daily_check_frm2 rows:last").remove();
    $("#tb_daily_check_frm2 tbody tr:last").remove();
  }
 });
});

function submitSaveDaily2(){
  var objAddArticle = document.forms['daily_check_frm2']; 
  var bFlag = true;
  $("table#tb_daily_check_frm2 input[id*='txtreport']").each(function (index) {
  var line = index + 1;
  var txtreport = $("table#tb_daily_check_frm2 input[id*='txtreport']").eq(index);
  var txtcase = $("table#tb_daily_check_frm2 input[id*='txtcase']").eq(index);
  var txtlevel = $("table#tb_daily_check_frm2 input[id*='txtlevel']").eq(index);
  var txtstatus = $("table#tb_daily_check_frm2 input[id*='txtstatus']").eq(index);
  var txtlocation = $("table#tb_daily_check_frm2 input[id*='txtlocation']").eq(index);
  var txtdetail = $("table#tb_daily_check_frm2 textarea[id*='txtdetail']").eq(index);

   if($(txtreport).val() == "")
   {
     alert('Please input Report line...' + line);
     bFlag = false;
   }
   if($(txtcase).val() == "")
   {
     alert('Please input Case line...' + line);
     bFlag = false;
   }
   if($(txtlevel).val() == "")
   {
     alert('Please input Level line...' + line);
     bFlag = false;
   }
   if($(txtstatus).val() == "")
   {
     alert('Please input Status line...' + line);
     bFlag = false;
   }
   if($(txtlocation).val() == "")
   {
     alert('Please input Location line...' + line);
     bFlag = false;
   }
   if($(txtdetail).val() == "")
   {
     alert('Please input Detail line...' + line);
     bFlag = false;
   }
   if (!bFlag) { return false;}

 });
   if(objAddArticle.time_work.value==null||objAddArticle.time_work.value==""){
    alert('กรุณากรอก Time Work !');
    objAddArticle.time_work.focus();
    return false;
   }
   
   if (confirm('คุณต้องการบันทึกข้อมูลใช่หรือไม่ ?')){
    objAddArticle.submit();
    return true;
   } else {
    return false;
   }
}