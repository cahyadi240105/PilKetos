<?php 
	session_start();
	require "../config.php"; 
	// untuk mengcek apakah yang mengakses halaman ini sudah login atau belum
	if($_SESSION['username']==""){
	header("location:index.php?message=failed");
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
<body  data-background-color="">
	<div class="wrapper">
		<div class="main-header">
			<!-- Logo Header -->
			<div class="logo-header" data-background-color="blue">
				
				<a href="index.php" class="logo">
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
		<div class="sidebar sidebar-style-2"  data-background-color="">			
			<div class="sidebar-wrapper scrollbar scrollbar-inner">
				<div class="sidebar-content">
					<ul class="nav nav-warning">
                        <li class="nav-item">
							<a data-toggle="collapse" href="#dashboard">
								<i class="fas fa-home"></i>
								<p>Dashboard</p>
								<span class="caret"></span>
							</a>
							<div class="collapse" id="dashboard">
								<ul class="nav nav-collapse">
									<li>
										<a href="index.php">
											<span class="sub-item">Dashboard 1</span>
										</a>
									</li>
									<li>
										<a href="index2.php">
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
										<a href="guru.php">
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
										<a href="kandidat.php">
											<span class="sub-item">Daftar</span>
										</a>
									</li>
									
								</ul>
							</div>
						</li>
						<li class="nav-item  active">
							<a data-toggle="collapse" href="#forms">
								<i class="fa fa-school"></i>
								<p>Kelas</p>
								<span class="caret"></span>
							</a>
							<div class="collapse" id="forms">
								<ul class="nav nav-collapse">
									<li>
										<a href="kelas.php">
											<span class="sub-item">Daftar</span>
										</a>
									</li>
									<li>
									</li>
								</ul>
							</div>
						</li>
						<li class="nav-item">
							<a data-toggle="collapse" href="#tables">
								<i class="fa fa-child"></i>
								<p>Siswa</p>
								<span class="caret"></span>
							</a>
							<div class="collapse" id="tables">
								<ul class="nav nav-collapse">
									<li>
										<a href="siswa.php">
											<span class="sub-item">Daftar</span>
										</a>
									</li>
									
								</ul>
							</div>
						</li>
						<li class="nav-item">
							<a data-toggle="collapse" href="#maps">
								<i class="fas fa-user"></i>
								<p>Panitia</p>
								<span class="caret"></span>
							</a>
							<div class="collapse" id="maps">
								<ul class="nav nav-collapse">
									<li>
										<a href="panitia.php">
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
						<h4 class="page-title">Datatables.Net</h4>
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
								<a href="#">Tables</a>
							</li>
							<li class="separator">
								<i class="flaticon-right-arrow"></i>
							</li>
							<li class="nav-item">
								<a href="#">Daftar Kelas</a>
							</li>
						</ul>
					</div>
					<div class="row">
						<div class="col-md-12">
							<div class="card">
                            <div class="card-header">
									<div class="d-flex align-items-center">
										<h4 class="card-title">Data</h4>
										<a href="../insert/kelas.php" class="btn btn-primary ml-auto btn-round"><i class="fas fa-plus"></i> Tambah</a>
									</div>
								</div>
								<div class="card-body">
								<div class="table-responsive">
									<table id="basic-datatables" class="display table table-striped table-hover" >	
											<thead>
												<tr>
													<th>No</th>
													<th>kelas</th>
                                                    <th>Jumlah Siswa</th>
                                                    <th>Action</th>
											</thead>
											<tfoot>
												<tr>
													<th>No</th>
													<th>kelas</th>
                                                    <th>Jumlah Siswa</th>
                                                    <th>Action</th>
												</tr>
											</tfoot>
											<tbody>
												<?php 
                                                    $no = 1;
                                                    $data = mysqli_query($conn,"SELECT * FROM kelas");
                                                    while($d = mysqli_fetch_assoc($data)){
                                                ?>
												<tr>
													<td><?= $no++;?></td>
													<td><?= $d['kelas'];?></td>
													<td><?= $d['jumlah'];?></td>
                                                    <td>
                                                        <a href="../update/kelas.php?id_kelas=<?= $d['id_kelas'];?>" class="btn btn-warning"><i class="fas fa-pen"></i></a>
														<a href="../delete/kelas.php?id_kelas=<?= $d['id_kelas'];?>" onclick="return confirm('Apakah ingin dihapus')" class="btn btn-danger"><i class="fas fa-trash"></i></a>
                                                    </td>
												</tr>
                                                <?php } ?>
											</tbody>
										</table>
									</div>
								</div>
							</div>
						</div>
					</div>
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
	<script src="../assets/js/setting-demo2.js"></script>
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