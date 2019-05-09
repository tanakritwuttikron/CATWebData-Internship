function submitUpdate(){
  var objAddArticle = document.forms['edit_mng_vlan']; 
  if(objAddArticle.vlan_number.value==null||objAddArticle.vlan_number.value==""){
    alert('กรุณากรอกหมายเลข Vlan !');
    objAddArticle.vlan_number.focus();
    return false;
  }
  if(objAddArticle.cust_name.value==null||objAddArticle.cust_name.value==""){
    alert('กรุณากรอก ชื่อ !');
    objAddArticle.cust_name.focus();
    return false;
  }
  if(objAddArticle.ip_add.value==null||objAddArticle.ip_add.value==""){
    alert('กรุณากรอก IP address !');
    objAddArticle.ip_add.focus();
    return false;
  }
  if(objAddArticle.subnet_mask.value==null||objAddArticle.subnet_mask.value==""){
    alert('กรุณากรอก Subnet mask!');
    objAddArticle.subnet_mask.focus();
    return false;
  }
  if(objAddArticle.gateway.value==null||objAddArticle.gateway.value==""){
   alert('กรุณากรอกหมายเลข Gateway!');
   objAddArticle.gateway.focus();
   return false;
  }
  if(objAddArticle.remark.value==null||objAddArticle.remark.value==""){
   alert('กรุณากรอก Model!');
   objAddArticle.remark.focus();
   return false;
  }
  if(objAddArticle.status.value==null||objAddArticle.status.value==""){
   alert('กรุณาเลือก Status!');
   objAddArticle.status.focus();
   return false;
  }
  if(objAddArticle.mac_add.value==null||objAddArticle.mac_add.value==""){
   alert('กรุณากรอก Mac address!');
   objAddArticle.mac_add.focus();
   return false;
  }
  if(objAddArticle.address.value==null||objAddArticle.address.value==""){
   alert('กรุณากรอก ที่อยู่!');
   objAddArticle.address.focus();
   return false;
  }
  if(objAddArticle.longitude.value==null||objAddArticle.longitude.value==""){
   alert('กรุณากรอก Longitude!');
   objAddArticle.longitude.focus();
   return false;
  }
  if(objAddArticle.latitude.value==null||objAddArticle.latitude.value==""){
   alert('กรุณากรอก Latitude!');
   objAddArticle.latitude.focus();
   return false;
  }
  if(objAddArticle.cat_id.value==null||objAddArticle.cat_id.value==""){
   alert('กรุณากรอก CAT ID!');
   objAddArticle.cat_id.focus();
   return false;
  }
  if(objAddArticle.phone.value==null||objAddArticle.phone.value==""){
   alert('กรุณากรอก หมายเลขโทรศัพท์!');
   objAddArticle.phone.focus();
   return false;
  }
  if(objAddArticle.pwd.value==null||objAddArticle.pwd.value==""){
   alert('กรุณากรอก รหัสผ่าน!');
   objAddArticle.pwd.focus();
   return false;
  }
  if(objAddArticle.serial_num.value==null||objAddArticle.serial_num.value==""){
   alert('กรุณากรอก Serial number!');
   objAddArticle.serial_num.focus();
   return false;
  }

if(objAddArticle.asset_code.value==null||objAddArticle.asset_code.value==""){
   alert('กรุณากรอก Asset code!');
   objAddArticle.asset_code.focus();
   return false;
  }


  if (confirm('คุณต้องการบันทึกข้อมูลใช่หรือไม่ ?')){
   objAddArticle.submit();
   return true;
  } else {
   return false;
  }
}

function clearEditFunction() {
  document.getElementById("edit_mng_vlan").reset();
}