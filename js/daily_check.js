$(document).ready(function(){

 var rows = 1;
 $("#createRows1").click(function(){
  var tr = "<tr>";
  tr = tr + "<td><input type='text' class='form-control input-hd' name='txtticket_no"+rows+"' id='txtticket_no"+rows+"'></td>";
  tr = tr + "<td><input type='text' class='form-control input-hd' name='txtcat_id"+rows+"' id='txtcat_id"+rows+"'></td>";
  tr = tr + "<td><input type='text' class='form-control input-hr' name='txthr1"+rows+"' id='txthr1"+rows+"'></td>";
  tr = tr + "<td><input type='text' class='form-control input-hr' name='txthr2"+rows+"' id='txthr2"+rows+"'></td>";
  tr = tr + "<td><input type='text' class='form-control input-hr' name='txthr3"+rows+"' id='txthr3"+rows+"'></td>";
  tr = tr + "<td><input type='text' class='form-control input-hr' name='txthr4"+rows+"' id='txthr4"+rows+"'></td>";
  tr = tr + "<td><input type='text' class='form-control input-hr' name='txthr5"+rows+"' id='txthr5"+rows+"'></td>";
  tr = tr + "<td><input type='text' class='form-control input-hr' name='txthr6"+rows+"' id='txthr6"+rows+"'></td>";
  tr = tr + "<td><input type='text' class='form-control input-hr' name='txthr7"+rows+"' id='txthr7"+rows+"'></td>";
  tr = tr + "<td><input type='text' class='form-control input-hr' name='txthr8"+rows+"' id='txthr8"+rows+"'></td>";
  tr = tr + "<td><input type='text' class='form-control input-hd' name='txttotal_ticket"+rows+"' id='txttotal_ticket"+rows+"'></td>";
  tr = tr + "<td><textarea type='text' class='form-control input-hd' name='txtcomment"+rows+"' id='txtcomment"+rows+"'></textarea></td>";

  tr = tr + "</tr>";
  $('#tb_daily_check_frm1 > tbody:last').append(tr);
 
  $('#hdnCount1').val(rows);
  rows = rows + 1;
 });

 $("#deleteRows1").click(function(){
  if ($("#tb_daily_check_frm1 tbody tr").length != 1) {
    $("#tb_daily_check_frm1 rows:last").remove();
    $("#tb_daily_check_frm1 tbody tr:last").remove();
  }
 });

 var rows2 = 1;
 $("#createRows2").click(function(){
  var tr = "<tr>";
  tr = tr + "<td><input type='text' class='form-control input-hd2' name='txtticket_no2"+rows2+"' id='txtticket_no2"+rows2+"'></td>";
  tr = tr + "<td><input type='text' class='form-control input-hd2' name='txtcat_id2"+rows2+"' id='txtcat_id2"+rows2+"'></td>";
  tr = tr + "<td><input type='text' class='form-control input-hr2' name='txtcat_internet2_hr1"+rows2+"' id='txtcat_internet2_hr1"+rows2+"'></td>";
  tr = tr + "<td><input type='text' class='form-control input-hr2' name='txtcat_internet2_hr2"+rows2+"' id='txtcat_internet2_hr2"+rows2+"'></td>";
  tr = tr + "<td><input type='text' class='form-control input-hd2' name='txttotal_ticket2"+rows2+"' id='txttotal_ticket2"+rows2+"'></td>";
  tr = tr + "<td><textarea type='text' class='form-control input-hd2' name='txtcomment2"+rows2+"' id='txtcomment2"+rows2+"'></textarea></td>";

  tr = tr + "</tr>";
  $('#tb_daily_check2_frm1 > tbody:last').append(tr);
 
  $('#hdnCount2').val(rows2);
  rows2 = rows2 + 1;
 });

 $("#deleteRows2").click(function(){
  if ($("#tb_daily_check2_frm1 tbody tr").length != 1) {
    $("#tb_daily_check2_frm1 rows2:last").remove();
    $("#tb_daily_check2_frm1 tbody tr:last").remove();
  }
 });
});

function submitSaveDaily(){
  var objAddArticle = document.forms['daily_check_frm1']; 
  var bFlag = true;
   $("table#tb_daily_check_frm1 input[id*='txtticket_no']").each(function (index) {
   var line = index + 1;
   var txtticket_no = $("table#tb_daily_check_frm1 input[id*='txtticket_no']").eq(index);
   var txtcat_id = $("table#tb_daily_check_frm1 input[id*='txtcat_id']").eq(index);
   var txthr1 = $("table#tb_daily_check_frm1 input[id*='txthr1']").eq(index);
   var txthr2 = $("table#tb_daily_check_frm1 input[id*='txthr2']").eq(index);
   var txthr3 = $("table#tb_daily_check_frm1 input[id*='txthr3']").eq(index);
   var txthr4 = $("table#tb_daily_check_frm1 input[id*='txthr4']").eq(index);
   var txthr5 = $("table#tb_daily_check_frm1 input[id*='txthr5']").eq(index);
   var txthr6 = $("table#tb_daily_check_frm1 input[id*='txthr6']").eq(index);
   var txthr7 = $("table#tb_daily_check_frm1 input[id*='txthr7']").eq(index);
   var txthr8 = $("table#tb_daily_check_frm1 input[id*='txthr8']").eq(index);
   var txttotal_ticket = $("table#tb_daily_check_frm1 input[id*='txttotal_ticket']").eq(index);
   var txtcomment = $("table#tb_daily_check_frm1 input[id*='txtcomment']").eq(index);

    if($(txtticket_no).val() == "")
    {
      alert('Please input Ticket No. line...' + line);
      bFlag = false;
    }
    if($(txtcat_id).val() == "")
    {
      alert('Please input CAT ID line...' + line);
      bFlag = false;
    }
    if($(txthr1).val() == "")
    {
      alert('Please input CAT MPLS line...' + line);
      bFlag = false;
    }
    if($(txthr2).val() == "")
    {
      alert('Please input CAT MPLS line...' + line);
      bFlag = false;
    }
    if($(txthr3).val() == "")
    {
      alert('Please input CAT Ethernet line...' + line);
      bFlag = false;
    }
    if($(txthr4).val() == "")
    {
      alert('Please input CAT Ethernet line...' + line);
      bFlag = false;
    }
    if($(txthr5).val() == "")
    {
      alert('Please input CAT internet (CCI) line...' + line);
      bFlag = false;
    }
    if($(txthr6).val() == "")
    {
      alert('Please input CAT internet (CCI) line...' + line);
      bFlag = false;
    }
    if($(txthr7).val() == "")
    {
      alert('Please input CAT Orther line...' + line);
      bFlag = false;
    }
    if($(txthr8).val() == "")
    {
      alert('Please input CAT Orther line...' + line);
      bFlag = false;
    }
    if($(txttotal_ticket).val() == "")
    {
      alert('Please input Total Ticket line...' + line);
      bFlag = false;
    }
    if($(txtcomment).val() == "")
    {
      alert('Please input Comment line...' + line);
      bFlag = false;
    }
  });

  $("table#tb_daily_check2_frm1 input[id*='txtticket_no2']").each(function (index) {
  var line = index + 1;
  var txtticket_no2 = $("table#tb_daily_check2_frm1 input[id*='txtticket_no2']").eq(index);
  var txtcat_id2 = $("table#tb_daily_check2_frm1 input[id*='txtcat_id2']").eq(index);
  var txtcat_internet2_hr1 = $("table#tb_daily_check2_frm1 input[id*='txtcat_internet2_hr1']").eq(index);
  var txtcat_internet2_hr2 = $("table#tb_daily_check2_frm1 input[id*='txtcat_internet2_hr1']").eq(index);
  var txttotal_ticket2 = $("table#tb_daily_check2_frm1 input[id*='txttotal_ticket2']").eq(index);
  var txtcomment2 = $("table#tb_daily_check2_frm1 textarea[id*='txtcomment2']").eq(index);

   
   if($(txtticket_no2).val() == "")
   {
     alert('Please input Ticket No. line...' + line);
     bFlag = false;
   }
   if($(txtcat_id2).val() == "")
   {
     alert('Please input CAT ID line...' + line);
     bFlag = false;
   }
   if($(txtcat_internet2_hr1).val() == "")
   {
     alert('Please input C Internet line...' + line);
     bFlag = false;
   }
   if($(txtcat_internet2_hr2).val() == "")
   {
     alert('Please input C Internet line...' + line);
     bFlag = false;
   }
   if($(txttotal_ticket2).val() == "")
   {
     alert('Please input Total Ticket line...' + line);
     bFlag = false;
   }
   if($(txtcomment2).val() == "")
   {
     alert('Please input Comment line...' + line);
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

