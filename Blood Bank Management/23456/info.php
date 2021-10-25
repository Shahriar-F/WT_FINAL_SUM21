<html>
    <body>
    <div id="donor">

<button type="button" onclick="loadDoc()">Donor List</button>
</div>

<script>
function loadDoc() {
var xhttp = new XMLHttpRequest();
xhttp.onreadystatechange = function() {
if (this.readyState == 4 && this.status == 200) {
document.getElementById("donor").innerHTML =
this.responseText;
}
};
xhttp.open("GET", "allDonor.php", true);
xhttp.send();
 }
</script>
    </body>
</html>