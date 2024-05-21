<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8" />
   <link rel="icon" href="../assets/icon.png" />
   <link rel="stylesheet" href="../CSS/admin.css" />
   <link rel="stylesheet" href="../CSS/responsive.css"
   <!-- Boxicons CDN Link -->
   <title>Admin Konveksi & transaksi</title>
</head>
<nav>
	<div class="logo">
		<img src="assets/logo-removebg-preview.png" alt="" />
	</div>
	<a href="../index.html"> Home</a>
	<a href="../categories/categories.html">Categories</a>
	<a href="../transaction/transaction.html">transaksi</a>
	<a href="../login.html">Sign in</a>
</nav>
   <body>
	<div class="sidebar">
	   <div class="logo-details">
		<i class="bx bx-category"></i>
		<span class="logo_name">Nadiem Konveksi</span>
	   </div>
	   
	</div>
	<section class="home-section">
	   <nav>
		<div class="sidebar-button">
		   <i class="bx bx-menu sidebarBtn"></i>
		</div>
		<div class="profile-details">
		   <span class="admin_name">admin Konveksi</span>
		</div>
	   </nav>
	   <div class="home-content">
		<h3>Transaction</h3>
		<button type="button" class="btn btn-tambah">
		   <a href="transaction-entry.html">Tambahkan Data</a>
		</button>
		<table class="table-data">
		   <thead>
			<tr>
			  <th style="width: 20%">Nama</th>
			  <th>Jenis baju</th>
			  <th style="width: 20%">Harga</th>
			  <th style="width: 20%">Tanggal</th>
			  <th>Action</th>
			</tr>
		   </thead>
		   <tbody>
			<tr>
			   <td>Naufal Dhiaurrafif</td>
			   <td>hoodie</td>
			   <td>450000</td>
			   <td>18-03-2023</td>
			   <td><a href="">Edit</a> | <a href="">Hapus</a></td>
			</tr>
		   </tbody>
		</table>
	   </div>
	</section>
   <script>
	let sidebar = document.querySelector(".sidebar");
	let sidebarBtn = document.querySelector(".sidebarBtn");
      sidebarBtn.onclick = function () {
		 sidebar.classList.toggle("active");
		  if (sidebar.classList.contains("active")) {
					sidebarBtn.classList.replace("bx-menu", "bx-menu-alt-right");
		  } else sidebarBtn.classList.replace("bx-menu-alt-right", "bx-menu");
			};
   </script>
</body>
</html>
