<script type="text/javascript">
			jQuery(function($) {
				//initiate dataTables plugin
				var myTable = 
				$('#dynamic-table')
				//.wrap("<div class='dataTables_borderWrap' />")   //if you are applying horizontal scrolling (sScrollX)
				.DataTable( {
					bAutoWidth: false,
					"aoColumns": [
					  
					  null, null,null, null, null, null, null,
					  { "bSortable": false }
					],
					"aaSorting": [],
					
					
					
			
					select: {
						style: 'multi'
					}
			    } );
		
</script>
<div class="row">
	<div class="col-xs-12">
		<table id="dynamic-table" class="table table-striped table-bordered table-hover">
		<h3 class="header smaller lighter blue">Data Karyawan</h3>
		<p>
		<a href="<?php echo base_url();?>karyawan/tambah" class="btn btn-sm btn-primary">Tambah Data</a>
		</p>
			<thead>
				<tr>
					<th>No</th>
					<th>Kode</th>
					<th>Nama</th>
					<th>Divisi</th>
					<th>Alamat</th>
					<th>Jenis Kelamin</th>
					<th>Agama</th>
					<th>Email</th>
					<th>No telepon</th>
					<th>Foto</th>
					<th>Aksi</th>
				</tr>
			</thead>
			<tbody>
				<tr>
				<?php $no=1;?>
				<?php foreach ($data->result() as $row):?>
					<td><?php echo $no++?></td>
					<td><?php echo $row->kd_karyawan?></td>
					<td><?php echo $row->nama_karyawan?></td>
					<td><?php echo $row->divisi_karyawan?></td>
					<td><?php echo $row->alamat_karyawan?></td>
					<td><?php echo $row->jk_karyawan?></td>
					<td><?php echo $row->agama?></td>
					<td><?php echo $row->email_karyawan?></td>
					<td><?php echo $row->telp_karyawan?></td>
					<td><img src="<?php echo base_url();?>/assets/images/avatars/<?php echo $row->foto?>" width="100" height="100"></td>
					<td>
						<div class="hidden-sm hidden-xs action-buttons">
							<a class="green" href="<?php echo base_url(); ?>karyawan/edit/<?php echo $row->kd_karyawan;?>">
								<i class="ace-icon fa fa-pencil bigger-130" ></i>
							</a>
							<a class="red" href="<?php echo base_url(); ?>karyawan/delete/<?php echo $row->kd_karyawan;?>" onclick = "return confirm('Anda Yakin Mau Menghapus Data ini?');">
								<i class="ace-icon fa fa-trash-o bigger-130"></i>
							</a>
						</div>
					</td>
				</tr>
				<?php endforeach;?>
			</tbody>
		</table>
	</div>
</div>