<?php 
require "../config.php";
if(isset($_POST['submit'])){
    $kelas = htmlspecialchars($_POST['kelas']);
    $jumlah = htmlspecialchars($_POST['jumlah']);
    $id_panitia = $_POST['id_panitia'];
    $query = mysqli_query($conn,"INSERT INTO kelas VALUES ('','$kelas','$jumlah',$id_panitia)");
    if($query){
        echo"<script>
                alert('Data berhasil ditambah');
                document.location = '../admin/kelas.php';
            </script>";
    }else{
        echo"<script>
                alert('Data gagal ditambah');
                document.location = '../admin/kelas.php';
            </script>";
    }
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta http-equiv="X-UA-Compatible" content="IE=edge" />
	<title>Pilketos | SMK N 1 Bintan Timur</title>
	<meta content='width=device-width, initial-scale=1.0, shrink-to-fit=no' name='viewport' />
	<!-- <link rel="icon" href="../assets/img/icon.ico" type="image/x-icon"/> -->
	
	<!-- Fonts and icons -->
	<script src="../assets/js/plugin/webfont/webfont.min.js"></script>
	<script>
		WebFont.load({
			google: {"families":["Lato:300,400,700,900"]},
			custom: {"families":["Flaticon", "Font Awesome 5 Solid", "Font Awesome 5 Regular", "Font Awesome 5 Brands", "simple-line-icons"], urls: ['../assets/css/fonts.min.css']},
			active: function() {
				sessionStorage.fonts = true;
			}
		});
	</script>

	<!-- CSS Files -->
	<link rel="stylesheet" href="../assets/css/bootstrap.min.css">
	<link rel="stylesheet" href="../assets/css/atlantis.min.css">
	<!-- CSS Just for demo purpose, don't include it in your project -->
	<link rel="stylesheet" href="../assets/css/demo.css">
	
</head>
<body  data-background-color="dark">
	<div class="wrapper">
		<div class="main-header">
			<!-- Logo Header -->
			<div class="logo-header" data-background-color="blue">
				
				<a href="../admin/index.php" class="logo">
				<img src="../assets/img/logo.jpg" width="50" alt="navbar brand" class="navbar-brand">
				</a>
				<button class="navbar-toggler sidenav-toggler ml-auto" type="button" data-toggle="collapse" data-target="collapse" aria-expanded="false" aria-label="Toggle navigation">
					<span class="navbar-toggler-icon">
						<i class="icon-menu"></i>
					</span>
				</button>
				<button class="topbar-toggler more"><i class="icon-options-vertical"></i></button>
				<div class="nav-toggle">
					<button class="btn btn-toggle toggle-sidebar">
						<i class="icon-menu"></i>
					</button>
				</div>
			</div>
			<!-- End Logo Header -->

			<!-- Navbar Header -->
			<nav class="navbar navbar-header navbar-expand-lg" data-background-color="blue2">
				
			</nav>
			<!-- End Navbar -->
		</div>
		
		<!-- Sidebar -->
		<div class="sidebar sidebar-style-2"  data-background-color="dark2">			
			<div class="sidebar-wrapper scrollbar scrollbar-inner">
				<div class="sidebar-content">
					<ul class="nav nav-primary">
                        <li class="nav-item ">
							<a data-toggle="collapse" href="#dashboard">
								<i class="fas fa-home"></i>
								<p>Dashboard</p>
								<span class="caret"></span>
							</a>
							<div class="collapse" id="dashboard">
								<ul class="nav nav-collapse">
									<li>
										<a href="../admin/index.php">
											<span class="sub-item">Dashboard 1</span>
										</a>
									</li>
									<li>
										<a href="../admin/index2.php">
											<span class="sub-item">Dashboard 2</span>
										</a>
									</li>
								</ul>
							</div>
						</li>
						<li class="nav-section">
							<span class="sidebar-mini-icon">
								<i class="fa fa-ellipsis-h"></i>
							</span>
							<h4 class="text-section">Data</h4>
						</li>
						<li class="nav-item">
							<a data-toggle="collapse" href="#base">
								<i class="fas fa-graduation-cap"></i>
								<p>Guru</p>
								<span class="caret"></span>
							</a>
							<div class="collapse" id="base">
								<ul class="nav nav-collapse">
									<li>
										<a href="../admin/guru.php">
											<span class="sub-item">Daftar</span>
										</a>
									</li>
									
								</ul>
							</div>
						</li>
						<li class="nav-item">
							<a data-toggle="collapse" href="#sidebarLayouts">
								<i class="flaticon-users"></i>
								<p>Kandidat</p>
								<span class="caret"></span>
							</a>
							<div class="collapse" id="sidebarLayouts">
								<ul class="nav nav-collapse">
									<li>
										<a href="../admin/kandidat.php">
											<span class="sub-item">Daftar</span>
										</a>
									</li>
									
								</ul>
							</div>
						</li>
						<li class="nav-item active">
							<a data-toggle="collapse" href="#forms">
								<i class="fas fa-school"></i>
								<p>Kelas</p>
								<span class="caret"></span>
							</a>
							<div class="collapse" id="forms">
								<ul class="nav nav-collapse">
									<li>
										<a href="../admin/kelas.php">
											<span class="sub-item">Daftar</span>
										</a>
									</li>
                                   
								</ul>
							</div>
						</li>
						<li class="nav-item ">
							<a data-toggle="collapse" href="#tables">
								<i class="fas fa-child"></i>
								<p>Siswa</p>
								<span class="caret"></span>
							</a>
							<div class="collapse" id="tables">
								<ul class="nav nav-collapse">
									<li>
										<a href="../admin/siswa.php">
											<span class="sub-item">Daftar</span>
										</a>
									</li>
									
								</ul>
							</div>
						</li>
						<li class="nav-item ">
							<a data-toggle="collapse" href="#maps">
								<i class="fas fa-user"></i>
								<p>Panitia</p>
								<span class="caret"></span>
							</a>
							<div class="collapse" id="maps">
								<ul class="nav nav-collapse">
									<li>
										<a href="../admin/panitia.php">
											<span class="sub-item">Daftar</span>
										</a>
									</li>
                                   
								</ul>
							</div>
						</li>
						<li class="nav-item">
							<a href="logout.php">
								<i class="fas fa-fw fa-sign-out-alt"></i>
								<p>Logout</p>
							</a>
						</li>
					</ul>
				</div>
			</div>
		</div>
		<!-- End Sidebar -->
		
        <div class="main-panel">
			<div class="content">
				<div class="page-inner">
					<div class="page-header">
						<h4 class="page-title">Forms</h4>
						<ul class="breadcrumbs">
							<li class="nav-home">
								<a href="#">
									<i class="flaticon-home"></i>
								</a>
							</li>
							<li class="separator">
								<i class="flaticon-right-arrow"></i>
							</li>
							<li class="nav-item">
								<a href="#">Forms</a>
							</li>
							<li class="separator">
								<i class="flaticon-right-arrow"></i>
							</li>
							<li class="nav-item">
								<a href="#">Basic Form</a>
							</li>
						</ul>
					</div>
                    <form action="" method="post">
                        <div class="row justify-content-center">
						<div class="col-md-8">
							<div class="card mt-5">
								<div class="card-header">
									<div class="card-title">Form Tambah</div>
								</div>
								<div class="card-body">
									<div class="row justify-content-center">
										<div class="col-md-6 col-lg-6">
                                           <div class="form-group form-floating-label">
												<select class="form-control input-solid" id="selectFloatingLabel2" required name="kelas">
													<option value="">&nbsp;</option>
													<option value="X RPL 1">X RPL 1</option>
													<option value="X RPL 2">X RPL 2</option>
													<option value="XI RPL 1">XI RPL 1</option>
													<option value="XI RPL 2">XI RPL 2</option>
													<option value="XII RPL 1">XII RPL 1</option>
													<option value="XII RPL 2">XII RPL 2</option>
													<option value="X AK 1">X AK 1</option>
													<option value="X AK 2">X AK 2</option>
													<option value="X AK 3">X AK 3</option>
                                                    <option value="XI AK 1">XI AK 1</option>
													<option value="XI AK 2">XI AK 2</option>
													<option value="XI AK 3">XI AK 3</option>
                                                    <option value="XII AK 1">XII AK 1</option>
													<option value="XII AK 2">XII AK 2</option>
													<option value="XII AK 3">XII AK 3</option>
                                                    <option value="X PH 1">X PH 1</option>
                                                    <option value="X PH 2">X PH 2</option>
                                                    <option value="X PH 3">X PH 3</option>
                                                    <option value="XI PH 1">XI PH 1</option>
                                                    <option value="XI PH 2">XI PH 2</option>
                                                    <option value="XI PH 3">XI PH 3</option>
                                                    <option value="XII PH 1">XII PH 1</option>
                                                    <option value="XII PH 2">XII PH 2</option>
                                                    <option value="XII PH 3">XII PH 3</option>
                                                    <option value="X TB">X TB</option>
                                                    <option value="XI TB">XI TB</option>
                                                    <option value="XII TB">XII TB</option>
                                                    <option value="X DKV">X DKV</option>
                                                    <option value="XI DKV">XI DKV</option>
                                                    <option value="XII DKV">XII DKV</option>
												</select>
												<label for="selectFloatingLabel2" class="placeholder">Kelas</label>
											</div>
                                            <div class="form-group form-floating-label">
												<input id="inputFloatingLabel" type="text" class="form-control input-border-bottom" required name="jumlah" autocomplete="off">
												<label for="inputFloatingLabel" class="placeholder">Jumlah Siswa</label>
											</div>
                                            <input id="inputFloatingLabel" type="hidden" class="form-control input-border-bottom" required name="id_panitia" autocomplete="off" value="null">
										</div>
									</div>
								</div>
								<div class="card-action mx-auto">
									<button type="submit" class="btn btn-success" name="submit"><i class="fa fa-check"></i> Submit</button>
								</div>
							</div>
						</div>
					</div>
                    </form>
					
				</div>
			</div>
			<footer class="footer">
				<div class="container-fluid">
					<div class="copyright ml-auto">
						2022, made with <i class="fa fa-heart heart text-danger"></i> by Cahyadi Prasetyo
					</div>				
				</div>
			</footer>
		</div>
	</div>
	<!--   Core JS Files   -->
	<script src="../assets/js/core/jquery.3.2.1.min.js"></script>
	<script src="../assets/js/core/popper.min.js"></script>
	<script src="../assets/js/core/bootstrap.min.js"></script>
	<!-- jQuery UI -->
	<script src="../assets/js/plugin/jquery-ui-1.12.1.custom/jquery-ui.min.js"></script>
	<script src="../assets/js/plugin/jquery-ui-touch-punch/jquery.ui.touch-punch.min.js"></script>
	
	<!-- jQuery Scrollbar -->
	<script src="../assets/js/plugin/jquery-scrollbar/jquery.scrollbar.min.js"></script>
	<!-- Datatables -->
	<script src="../assets/js/plugin/datatables/datatables.min.js"></script>
	<!-- Atlantis JS -->
	<script src="../assets/js/atlantis.min.js"></script>
	<!-- Atlantis DEMO methods, don't include it in your project! -->
    <script >
		$(document).ready(function() {
			$('#basic-datatables').DataTable({
			});

			$('#multi-filter-select').DataTable( {
				"pageLength": 5,
				initComplete: function () {
					this.api().columns().every( function () {
						var column = this;
						var select = $('<select class="form-control"><option value=""></option></select>')
						.appendTo( $(column.footer()).empty() )
						.on( 'change', function () {
							var val = $.fn.dataTable.util.escapeRegex(
								$(this).val()
								);

							column
							.search( val ? '^'+val+'$' : '', true, false )
							.draw();
						} );

						column.data().unique().sort().each( function ( d, j ) {
							select.append( '<option value="'+d+'">'+d+'</option>' )
						} );
					} );
				}
			});

			// Add Row
			$('#add-row').DataTable({
				"pageLength": 5,
			});

			var action = '<td> <div class="form-button-action"> <button type="button" data-toggle="tooltip" title="" class="btn btn-link btn-primary btn-lg" data-original-title="Edit Task"> <i class="fa fa-edit"></i> </button> <button type="button" data-toggle="tooltip" title="" class="btn btn-link btn-danger" data-original-title="Remove"> <i class="fa fa-times"></i> </button> </div> </td>';

			$('#addRowButton').click(function() {
				$('#add-row').dataTable().fnAddData([
					$("#addName").val(),
					$("#addPosition").val(),
					$("#addOffice").val(),
					action
					]);
				$('#addRowModal').modal('hide');

			});
		});
	</script>
</body>
</html>
