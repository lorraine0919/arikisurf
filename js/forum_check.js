$(document).ready(function(){
   $('#godb').click(function(){
       var title = $('#title').val();
       var textarea = $('#textarea').val();
       var src = $('#image').attr('src');
       if((title!="")&&(textarea!="")&&(src!=" ")){
         $('#po').submit();
       }else {        
         alert("請填寫完整資料");
       }        
   });   
});//ready