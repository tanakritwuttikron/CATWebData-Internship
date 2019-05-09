$(document).ready(function () {
 /* Get the checkboxes values based on the class attached to each check box */
 $("#buttonClass").click(function() {
     getValueUsingClass();
  });
 });

function getValueUsingClass(){
 /* declare an checkbox array */
 var chkArray = [];
 /* look for all checkboes that have a class 'chk' attached to it and check if it was checked */
 $(".chk:checked").each(function() {
  chkArray.push($(this).val());
 });
 
 /* we join the array separated by the comma */
 var selected;
 selected = chkArray.join(',') ;
 
 /* check if there is selected checkboxes, by default the length is 1 as it contains one single comma */
 if(selected.length > 0){
  var objAddArticle = document.forms['edit_ip_cci']; 
  if (confirm('คุณต้องการแก้ไขข้อมูลที่เลือกใช่หรือไม่ ?')){
   objAddArticle.submit();
   return true;
  } else {
   return false;
  }
  // alert("You have selected " + selected); 
 }else{
  alert("กรุณาเลือกข้อมูลที่จะทำการแก้ไข"); 
 }
}