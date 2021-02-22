<script>
  $(document).ready(function () {
  
<?php

if (isset($_SESSION['save_data'])){ 
	
	echo "toastr.".$_SESSION['save_data']['estado']."('".$_SESSION['save_data']['mensaje']."', '".$_SESSION['save_data']['seccion']."');";
	$this->session->unset_userdata('save_data');
}
?>
  })
</script>

</div>
	<!-- /page content -->
</body>
</html>