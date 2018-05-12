<?php
	$this->session->flashdata('info');
	if(!empty($info)){
		echo $info;
	}
?>

<h3 class="header smaller lighter blue"><?php echo $subkaryawan;?></h3>

<form class="form-horizontal" role="form" method="POST" action="<?php echo base_url();?>karyawan/simpan" onsubmit = "return cekform();">
	<div class="form-group">
		<label class="col-sm-3 control-label no-padding-right">Kode Karyawan</label>
		<div class="col-sm-9">
			<input type="text" name="kode" id="kode" class="col-xs-1" readonly="" id="form-input-readonly" value="<?php echo $kode;?>">
		</div>
	</div>
	<div class="form-group">
		<label class="col-sm-3 control-label no-padding-right">Nama Karyawan</label>
		<div class="col-sm-9">
			<input type="text" name="nama_karyawan" id="nama_karyawan" placeholder="Nama Karyawan" required="" value="<?php echo $nama_karyawan;?>">
		</div>
	</div>
	<div class="form-group">
		<label class="col-sm-3 control-label no-padding-right">Divisi</label>
		<div class="col-sm-9">
			<select name="divisi">
				<option>- Pilih Divisi -</option>
				<option value="Project Manager">Project Manager</option>
				<option value="Web Development">Web Development</option>
				<option value="Network Security">Network Security</option>
				<option value="Programmer">Programmer</option>
			</select>
		</div>
	</div>
	<div class="form-group">
		<label class="col-sm-3 control-label no-padding-right"">Alamat</label>
		<div class="col-sm-9">
			<input type="text" name="alamat_karyawan" id="alamat_karyawan" class="col-xs-10 col-sm-5" placeholder="Alamat" required="" value="<?php echo $alamat_karyawan;?>">
		</div>
	</div>
	<div class="form-group">
		<label class="col-sm-3 control-label no-padding-right">Jenis Kelamin</label>
		<div class="radio">
			<label>
				<input type="radio" name="jk_karyawan" value ="Laki-laki" class="ace" checked/>
				<span class="lbl">Laki-Laki</span>
			</label>
			<label>
				<input type="radio" name="jk_karyawan" value="Perempuan" class="ace">
				<span class="lbl">Perempuan</span>
			</label>
		</div>
	</div>
	<div class="form-group">
		<label class="col-sm-3 control-label no-padding-right">Agama</label>
		<div class="col-sm-9">
			<select name="agama">
				<option>- Pilih Agama -</option>
				<option value="Islam">Islam</option>
				<option value="Kristen">Kristen</option>
				<option value="Hindu">Hindu</option>
				<option value="Budha">Budha</option>
			</select>
		</div>
	</div>
	<div class="form-group">
		<label class="col-sm-3 control-label no-padding-right">Email</label>
		<div class="col-sm-9">
			<input type="email" name="email_karyawan" id="email_karyawan" placeholder="Email" required="" value="<?php echo $email_karyawan; ?>">
		</div>
	</div>
	<div class="form-group">
		<label class="col-sm-3 control-label no-padding-right">No Telepon</label>
		<div class="col-sm-9">
			<input type="text" name="telp_karyawan" id="telp_karyawan" placeholder="No Telepon" required="" value="<?php echo $telp_karyawan; ?>">
		</div>
	</div>
	<div class="form-group">
		<label class="col-sm-3 control-label no-padding-right">Foto</label>
		<div class="col-sm-9">
			<input type="file" name="foto" id="foto" value="<?php echo $foto; ?>">
		</div>
	</div>
	<div class="clearfix form-actions">
		<div class="col-md-offset-3 col-md-9">
			<button class="btn btn-info" type="submit">
				<i class="ace-icon fa fa-check bigger-110"></i>
					Simpan
			</button>

			&nbsp; &nbsp; &nbsp;
			<a href="<?php echo base_url();?>karyawan">
				<div class="btn">
					<i class="ace-icon fa fa-undo bigger-110"></i>
						Kembali
				</div>
			</a>
		</div>
	</div>
</form>