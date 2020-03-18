<h3>Detail Konsultasi</h3>


				<?php $datadetailkonsultasi = $konsultasi->ambildetailkonsultasi($_GET['id']);?>
				<?php $datahitung = $rule->hitungpenyakit($datadetailkonsultasi); ?>
				<p>Berdasarkan gejala yang dipilih yaitu :</p>
				<ul>
					<?php foreach ($datadetailkonsultasi as $key => $value): ?>
						<?php $detailgejala = $gejala->ambilgejala($value['id_gejala']) ?>
						<li><?php echo $detailgejala['nama_gejala']; ?></li>
					<?php endforeach ?>
				</ul>
				<?php if ($datahitung=='kosong'): ?>
					Penyakit Tidak ditemukan
				<?php else: ?>
					<?php foreach ($datahitung['hasil'] as $id_penyakit => $value): ?>
						<?php if ($value['persen']>0): ?>
							<?php $data_pengetahuan = $pengetahuan->tampilpengetahuanpenyakit($id_penyakit) ?>
							<p>Pengetahuan Penyakit <?php echo $value['nama_penyakit']; ?></p>
							<ul>
								<?php foreach ($data_pengetahuan as $key_pengetahuan => $value_pengetahuan): ?>
									<li><?php echo $value_pengetahuan['nama_gejala']; ?></li>
								<?php endforeach ?>
							</ul>
						<?php endif ?>
					<?php endforeach ?>
					<p>Hasil diagnosa penyakit anda adalah : </p>
					<ul>
						<?php foreach ($datahitung['hasil'] as $id_penyakit => $value): ?>
							<?php if ($value['persen']>0): ?>
								
								<li>
									<?php echo $value['keterangan']. "menderita ". $value['nama_penyakit']. " dengan persentase : " . $value['persen'] . "%"; ?>
									
								</li>	
							<?php endif ?>
						<?php endforeach ?>
					</ul>
					<?php foreach ($datahitung['hasil'] as $id_penyakit => $value): ?>
						<p><b>Deskripsi :</b></p>
						<p><?php echo $value['deskripsi_penyakit']; ?></p>
						<p><b>Saran :</b></p>
						<p><?php echo $value['saran_penyakit']; ?></p> 
						<?php break; ?>
					<?php endforeach ?>
				<?php endif ?>
				
			