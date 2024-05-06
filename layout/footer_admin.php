<script type="text/javascript">
	const currentLocation = location.href;
	const menuItem = document.querySelectorAll(".btn-aside");
	const menuLenght = menuItem.length
	for (let i = 0; i < menuLenght; i++) {
		if (menuItem[i].href === currentLocation) {
				// menuItem[i].className = "active"
				menuItem[i].classList.add("active");
		}
	}	
	
	const alert = document.getElementById("alert");

	alert.addEventListener("click", function(){
		alert.classList.add('hidden');
		<?php borrarErrores(); ?>	
	})
</script>
