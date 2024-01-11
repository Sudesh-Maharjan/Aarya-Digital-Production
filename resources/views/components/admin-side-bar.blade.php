<!--sidebar wrapper -->
<div class="sidebar-wrapper " data-simplebar="true">
	<div class="sidebar-header">
		<div>
			<img src="images/adplogo.png" class="logo-icon" alt="logo icon">
		</div>
		<div>
			<h4 class="logo-text text-dark">Admin Panel</h4>
		</div>
		<div class="toggle-icon ms-auto"><i class='bx bx-arrow-to-left'></i>
		</div>
	</div>
	<ul class="metismenu" id="menu">
		<li>
			<a href="{{url('admin/')}}" class="text-dark">
				<div class="parent-icon"><i class='bx bx-home-circle'></i>
				</div>
				<div class="menu-title">Dashboard</div>
			</a>
		</li>
		<li>
			<a href="{{url('admin/accountdetails')}}" class="">
				<div class="parent-icon"><i class="bx bx-category"></i>
				</div>
				<div class="menu-title text-dark">Account Details</div>
			</a>
		</li>
		<li>
			<a href="{{url('admin/packagedetails')}}">
				<div class="parent-icon"><i class='bx bx-cookie'></i>
				</div>
				<div class="menu-title text-dark">Package Details</div>
			</a>
		</li>

		<li>
			<a class="" href="{{url('admin/mycart')}}">
				<div class="parent-icon"><i class='bx bx-bookmark-heart'></i>
				</div>
				<div class="menu-title text-dark">My Cart</div>
			</a>
		</li>
		<a class="" href="#" onclick="confirmLogout()">
			<li class="d-flex">
				<div class="parent-icon"><i class="bx bx-repeat"></i>
				</div>
				<div class="menu-title text-dark">Logout</div>
			</li>
		</a>

</div>

<script>
	function confirmLogout() {
		var confirmLogout = confirm("Do you want to logout?");
		if (confirmLogout) {
			window.location.href = "{{ url('/') }}";
		} else {
		}
	}
</script>
<!--end sidebar wrapper -->