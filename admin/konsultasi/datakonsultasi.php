<?php $ambildata = $konsultasi->tampilkonsultasiadmin(); ?>
<h4 class="">Riwayat Konsultasi</h4>
				<table class="table table-sm" id="datatables">
					<thead>
						<tr>
							<th scope="col">No</th>
							<th scope="col">Tanggal</th>
							<th scope="col">Nama</th>
							<th scope="col">Kelamin</th>
							<th scope="col">TTL</th>
							<th scope="col">Diagnosa</th>
							<th scope="col">Detail</th>

						</tr>
					</thead>
					<tbody>
							<?php foreach ($ambildata as $key => $value): ?>
						<tr>
								<td><?php echo $key+1; ?></td>
								<td><?php echo $value['tgl_konsultasi']; ?></td>
								<td><?php echo $value['nama_pasien']; ?></td>
								<td><?php echo $value['jenis_kelamin_pasien']; ?></td>
								<td><?php echo $value['tanggal_lahir']; ?></td>

								<td>
									<?php 
									$datadetailkonsultasi = $konsultasi->ambildetailkonsultasi($value['id_konsultasi']);
									$hasilhitung = $rule->hitungpenyakit($datadetailkonsultasi);
									if ($hasilhitung=='kosong') 
									{
										echo "-";
									}
									else
									{
										foreach ($hasilhitung['hasil'] as $key_diagnosa => $value_diagnosa) 
										{
											echo $value_diagnosa['nama_penyakit']." (".$value_diagnosa['persen']."% )";
											break;
										}
									}
									?>
								</td>
								<td>
									<a href="index.php?halaman=detailkonsultasi&id=<?php echo $value['id_konsultasi'] ?>" class="btn btn-primary">Detail</a>
								</td>
						</tr>
							<?php endforeach ?>
					</tbody>
				</table>