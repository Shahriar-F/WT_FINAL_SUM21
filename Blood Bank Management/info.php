<html>
    <body>
          <div id="doner">
         <button type="button" onclick="loadDoc1()">Doner List</button>
         </div>
  
<script>
function loadDoc1() {
var xhttp = new XMLHttpRequest();
xhttp.onreadystatechange = function() {
if (this.readyState == 4 && this.status == 200) {
document.getElementById("doner").innerHTML =
this.responseText;
}
};
xhttp.open("GET", "Doner/allDoner.php", true);
xhttp.send();
 }
</script>
<div id="feedback">
         <button type="button" onclick="loadDoc()">Feedback</button>
         </div>
<script>
function loadDoc() {
var xhttp = new XMLHttpRequest();
xhttp.onreadystatechange = function() {
if (this.readyState == 4 && this.status == 200) {
document.getElementById("feedback").innerHTML =
this.responseText;
}
};
xhttp.open("GET", "Comments/comments.php", true);
xhttp.send();
 }
</script>
    </body>
</html>