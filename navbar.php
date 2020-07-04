<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<!-- Sidebar -->
<div class="w3-sidebar w3-bar-block w3-border-right" style="display:none" id="mySidebar">
<button onclick="w3_close()" class="w3-bar-item w3-large">Close &times;</button>
<a href="requestprofile.php" class="w3-bar-item w3-button">feed</a>
<a href="profile/postbody.php" class="w3-bar-item w3-button">profile</a>
<a href="#" class="w3-bar-item w3-button">Link 3</a>
</div>
<!-- ================ -->
<!-- Page Content -->
<div class="w3-teal">
<button class="w3-button w3-teal w3-xlarge" onclick="w3_open()">☰</button>
<div class="w3-container">
<h1>My Page</h1>
</div>
</div>

<script>
function w3_open() {
document.getElementById("mySidebar").style.display = "block";
}

function w3_close() {
document.getElementById("mySidebar").style.display = "none";
}
</script>
