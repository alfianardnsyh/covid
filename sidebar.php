	<script src="plugin/coolclock/coolclock.js" type="text/javascript"></script>
	<script src="plugin/coolclock/moreskins.js" type="text/javascript"></script>
<?php
	if(!defined("INDEX")) die("---");
?>	

<!-- ---------------------- TAB ---------------------- -->		
	<ul class="nav nav-tabs">
		<li class="active"><a href="#konten1" data-toggle="tab">Terbaru</a></li>
		<li><a href="#konten2" data-toggle="tab">Popular</a></li>
		<li><a href="#konten3" data-toggle="tab">Komentar</a></li>
	</ul>
	<div class="tab-content">
		<div class="tab-pane fade in active" id="konten1">
			<ul>
				<?php	
					$artikel = mysqli_query($koneksi, "select * from artikel order by id_artikel desc limit 5");
					while($data = mysqli_fetch_array($artikel)){
						echo "<li><img src='gambar/artikel/$data[gambar]'><a href='?tampil=artikel_detail&id=$data[id_artikel]'>$data[judul]</a></li>";
					}
				?>
			</ul>
		</div>
		<div class="tab-pane fade" id="konten2">
			<ul>
				<?php	
					$artikel = mysqli_query($koneksi, "select * from artikel order by hits desc limit 5");
					while($data = mysqli_fetch_array($artikel)){
						echo "<li><img src='gambar/artikel/$data[gambar]'><a href='?tampil=artikel_detail&id=$data[id_artikel]'>$data[judul]</a></li>";
					}
				?>
			</ul>
		</div>
		<div class="tab-pane fade" id="konten3">
			<ul>
				<?php	
					$komentar = mysqli_query($koneksi, "select * from komentar order by id_komentar desc limit 5");
					while($data = mysqli_fetch_array($komentar)){
						echo "<li><b>$data[nama]: </b> <a href='?tampil=artikel_detail&id=$data[id_artikel]'>$data[komentar]</a></li>";
					}
				?>
			</ul>
		</div>
	</div>

<!-- ---------------------- POLLING ---------------------- -->	
	
	
	
<!-- ---------------------- STATISTIK PENGUNJUNG ---------------------- -->	
	<h4 class="page-header"> Kalender </h4>    
	<div data-tockify-component="mini" data-tockify-calendar="rohismart"></div>
	<script data-tockify-script="embed" src="https://public.tockify.com/browser/embed.js"></script> <br>
	
	
<!-- ---------------------- TWITTER ---------------------- -->	
	

<!-- ---------------------- STATISTIK PENGUNJUNG ---------------------- -->	

  

<!-- ---------------------- SHARE BUTTON---------------------- -->
	<!-- AddToAny BEGIN -->
	

<!-- ---------------------- YOUTUBE ---------------------- -->	


<!-- ---------------------- FACEBOOK ---------------------- -->	
	
	
<!-- ---------------------- GOOGLE MAP ---------------------- -->
	<h4 class="page-header">Lokasi</h4>

	
