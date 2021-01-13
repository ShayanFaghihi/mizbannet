 // Retrieving search field
 let searchField = document.querySelector("#inputSearch");
 const searchIcon = document.querySelector(".glyphicon-search");
 const loaderIcon = document.querySelector(".glyphicon-loader");
 // Declaring a Timer for searching
 let typingTimer;

 // Event handler is when user pushes up a key
 // after pushing the timer will be reset
 searchField.addEventListener('keyup', function() {
     clearTimeout(typingTimer);   //Clearing timer
    typingTimer = setTimeout(() => showResult(), 1000);

 });

     function showResult() {
        searchIcon.style.display = 'none';
        loaderIcon.style.display = 'block';
         let searchTerm = searchField.value;
         if (searchTerm.length==0) {
             document.getElementById("livesearch").innerHTML="";
             searchIcon.style.display = 'block';
             loaderIcon.style.display = 'none';
             return;
         }
         var xmlhttp=new XMLHttpRequest();
         xmlhttp.onreadystatechange=function() {
             if (this.readyState==4 && this.status==200) {
                 document.getElementById("livesearch").innerHTML=this.responseText;
                 searchIcon.style.display = 'block';
                 loaderIcon.style.display = 'none';
             }
         }
         xmlhttp.open("GET","domain-check.php?domain="+searchTerm,true);
         xmlhttp.send();
     }