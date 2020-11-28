window.onload= function(){
    document.getElementsByName("product")[0].addEventListener('change',billing);
   
    document.getElementsByName("quantity")[0].addEventListener('change',billing);
    function billing(){
       
   
       var amount=document.getElementById("product").value;
         
       var quant=document.getElementById("quantity").value;
      
       var final=amount*quant;   
        
       document.getElementById("total").innerHTML=final ; 
        document.getElementById("totalVal").value=final ;
    }
 
}