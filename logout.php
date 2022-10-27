
<?php

 session_start();

?>

<script>
	alert("Logout successfully");
	window.open("index.html", "_self");
</script>

<?php


 session_destroy();

?>
