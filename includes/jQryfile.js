// JavaScript Document

function showAjax(formid, webpage,resultDiv){

 if(webpage==null || resultDiv == ''){alert('invalid parameters');}else{
   if(formid==null || formid ==''){
     $('#'+resultDiv).html('<img src="loading.gif" />');
     $.post(webpage, function(data) {
                 $('#'+resultDiv).html(''); $('#'+resultDiv).html(data);
               });

     }else{
         $('#'+resultDiv).html('<img src="loading.gif" />');
         $.post(webpage, $("#"+formid).serialize(), function(data) {
                 $('#'+resultDiv).html(''); $('#'+resultDiv).html(data);
               });
         }

 }
}

function setItem(key, value) {
   //sessionStorage
   if (window.localStorage) {
       window.localStorage.setItem(key, value);
   }


}

function getItem(key, value) {
   if (window.localStorage) {
       return window.localStorage.getItem(key, value);
   }

}

function removeItem(key) {
   if (window.localStorage) {
       window.localStorage.removeItem(key);
   }

}

function showNotify(msg,typ){
 $.notify(msg,typ);
}

function closeModal(modal){
 $('#'+modal).modal('hide');
}

if(getItem('userid') != null){
var timeout;
document.onmousemove = function(){
clearTimeout(timeout);
timeout = setTimeout(function(){alert("session time out");logOut(); }, 180000);
}
}

function rcShowHide(){
 //var chk = $("#corp").val();
 //var chk = $('input[name="corp[]"]:checked').length > 0;
 //if(chk == 0){
 if($('#corp').is(":checked")){
   $("#rcDiv").show();
 }else{
   $("#rcDiv").hide();
 }
}
