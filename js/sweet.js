


/*resizeDivs();
function resizeDivs() {
    var main = document.getElementById('about').offsetHeight;
    var sidebar = document.getElementById('images').offsetHeight;
    if (sidebar > main) {
        main = sidebar;
        document.getElementById('about').style.height = document.getElementById('images').style.height = main + 'px'
    } else {
        sidebar = main;
        document.getElementById('images').style.height = document.getElementById('about').style.height = sidebar + 'px'
    }
}*/

var myIndex_1 = 0;
      carousel_1();
      
      function carousel_1() {
        var i;
        var x = document.getElementsByClassName("mySlides_1");
        for (i = 0; i < x.length; i++) {
          x[i].style.display = "none";  
        }
        myIndex_1++;
        if (myIndex_1 > x.length) {myIndex_1 = 1}    
        x[myIndex_1-1].style.display = "block";  
        setTimeout(carousel_1, 9000);    
      }

     function validate(){
        var num=document.getElementById("number").length;
        if(num!=10){
          alert("please Enter proper Number");
        }
     }

     