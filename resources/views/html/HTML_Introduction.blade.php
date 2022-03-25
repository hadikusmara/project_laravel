@extends('admin')

@section('main-content')

@include('admin.guru.view')


<div class="panel panel-headline" id="menuGuruInput">
    <div class="panel-heading" style="margin-bottom: 2%">

        <h1 class="panel-title col-md-4">Data Guru</h1>
        <div class="right col-md-4 text-right">
            <a class="btn btn-primary btn-xs" id="btnTambah"> Tambah Data</a>
        </div>
    </div>
    <div class="alert alert-success" style="display: none;">

    </div>



    <!-- Isi Content -->

    <div class="panel-body">
        <table class="table table-hover" id="myTable">
            <tr>
                <th>No</th>
                <th>ID Guru</th>
                <th>Nama guru</th>
                <th>NO KTP</th>
                <th width="30%" class="text-center">Alamat</th>                
                <th>Status Pegawai</th>
                <th>Aksi</th>
            </tr>
            <tbody id="show_data">

            </tbody>
        </table>
    </div>

    <div class="modal fade" id="modalLoader" role="dialog" tabindex="-1">
        <div style=" position: fixed; margin-left: 50%; margin-top: 20%; ">
            <img src="{{ asset('img/loader.gif')}}" style=" width: 50px;" alt="loading..." />
        </div>
    </div>

    <!-- Modal -->
    <!-- atribut pada bootstrap yaitu, data-backdrop="static" yaitu untuk membuat modal tidak hilang pada saat di klik sembarangan -->
    <div class="modal fade" id="myModal" tabindex="-1" role="dialog">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h4 class="modal-title" id="modalTambahTitle">Tambah Data Guru</h4>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <form id="formSave" method="POST" enctype="multipart/form-data">
                        {{ csrf_field() }}
                            
                        <div class="form-group">
                           <label for="txtidguru" class="form-label">ID Guru</label>
                            <input type="text" class="form-control" id="txtidguru" name="txtidguru" required>
                        </div>
                            
                        <div class="form-group">
                            <label for="txtnip">NIP</label>
                            <input type="text" class="form-control" id="txtnip" name="txtnip" required>
                        </div>

                        <div class="form-group">
                            <label for="txtnamaguru">Nama Lengkap</label>
                            <input type="text" class="form-control" id="txtnamaguru" name="txtnamaguru" required>
                        </div>

                        <div class="form-group">
                            <label for="txttempatlahir">Tempat Lahir</label>
                            <input type="text" class="form-control" id="txttempatlahir" name="txttempatlahir" required>
                        </div>

                        <div class="form-group">
                            <label for="txttgl_lahir">Tanggal Lahir</label>
                            <div class="input-group date">
                                <div class="input-group-addon">
                                    <i class="fa fa-calendar"></i>
                                </div>
                                <input type="text" class="form-control pull-right" name="txttgl_lahir" id="txttgl_lahir" required>
                            </div>
                        </div>

                        <div class="form-group">
                            <label for="txtalamat">Alamat</label>
                            <textarea name="txtalamat" id="txtalamat" rows="3" class="form-control" required></textarea>
                        </div>
                        
                        <div class="form-group">
                            <label for="txtno_ktp">No KTP</label>
                            <input type="text" class="form-control" id="txtno_ktp" name="txtno_ktp" required>
                        </div>

                        <div class="form-group">
                            <label for="cmbKeluarga">Status Keluarga</label>
                            <select name="cmbKeluarga" id="cmbKeluarga" class="form-control" required>
                                <option value="">-- Pilih --</option>
                                <option value="Lajang">Lajang</option>
                                <option value="Menikah">Menikah</option>
                            </select>
                        </div>

                        <div class="form-group">
                            <label for="txtid_jabatan">ID Jabatan</label>
                            <input type="text" class="form-control" id="txtid_jabatan" name="txtid_jabatan" required>
                        </div>

                        <div class="form-group">
                            <label for="foto">Foto</label>
                            <input type="file" class="form-control" id="foto" name="foto" required>
                        </div>
                        
                        <div class="form-group">
                            <label for="cmbPegawai">Status Pegawai</label>
                            <select name="cmbPegawai" id="cmbPegawai" class="form-control" required>
                                <option value="">-- Pilih --</option>
                                <option value="Honorer">Honorer</option>
                                <option value="Tetap">Tetap</option>
                            </select>
                        </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal" id="btnCancel">Keluar</button>
                    <button type="submit" class="btn btn-primary" id="btnSimpan">Simpan</button>
                </div>
                </form>
            </div>

        </div>
    </div>
    <!-- /.Modal Input -->


    <!-- Modal Delete -->
    <div class="modal fade" id="modalDelete" tabindex="-1" role="dialog">
        <div class="sweet-alert showSweetAlert" data-custom-class="" data-has-cancel-button="true"
            data-has-confirm-button="true" data-allow-outside-click="false" data-has-done-function="true"
            data-animation="pop" data-timer="null" style="display: block; margin-top: -149px;">
            <div class="sa-icon sa-error" style="display: none;">
                <span class="sa-x-mark">
                    <span class="sa-line sa-left"></span>
                    <span class="sa-line sa-right"></span>
                </span>
            </div>
            <div class="sa-icon sa-warning pulseWarning" style="display: block;">
                <span class="sa-body pulseWarningIns"></span>
                <span class="sa-dot pulseWarningIns"></span>
            </div>
            <div class="sa-icon sa-info" style="display: none;"></div>
            <div class="sa-icon sa-success" style="display: none;">
                <span class="sa-line sa-tip"></span>
                <span class="sa-line sa-long"></span>

                <div class="sa-placeholder"></div>
                <div class="sa-fix"></div>
            </div>
            <div class="sa-icon sa-custom" style="display: none;"></div>
            <h2>Apakah anda yakin?</h2>
            <p style="display: block;">Data akan hilang secara permanen</p>
            <fieldset>
                <input type="text" tabindex="3" placeholder="">
                <div class="sa-input-error"></div>
            </fieldset>
            <div class="sa-error-container">
                <div class="icon">!</div>
                <p>Not valid!</p>
            </div>
            <div class="sa-button-container">
                <button id="btnHapus" class="confirm" tabindex="1" style="display: inline-block; background-color: rgb(221, 107, 85); box-shadow: rgba(221, 107, 85, 0.8) 0px 0px 2px, rgba(0, 0, 0, 0.05) 0px 0px 0px 1px inset;">Ya</button>
                <div class="sa-confirm-button-container">
                    <button class="cancel" tabindex="2" style="display: inline-block; box-shadow: none;" id="btnBatal">Batal</button>
                    <div class="la-ball-fall">
                        <div></div>
                        <div></div>
                        <div></div>
                    </div>
                </div>
            </div>


            <!-- /.Modal Delete -->


            <!-- /.Isi Content -->

        </div>
        @endsection

        @push('script')

        <script type="text/javascript" src="{{ asset('js/bootstrap-datepicker.js') }}"></script>
        <script type="text/javascript" src="{{ asset('js/jquery.validate.js') }}"></script>
        <script type="text/javascript" src="{{ asset('js/validate.min.js') }}"></script>
        <script type="text/javascript">
        $(function() {

            $('#btnkembali').click(function(){
                $('#menuGuruView').attr('style', 'display: none;');
                $('#modalLoader').modal('show');
                $('#menuGuruInput').removeAttr('style');
                tampilData();
                $('#modalLoader').modal('hide');
            })

            $('#editProfile').click(function(){
                //$('#myModalProfile').modal('show');
                var id= $('#idguru').text();
                
                var url = "{{ url('admin/updateProfileGuru') }}/" + id;
                $('#fotoprofil').removeAttr('required');

                //$('#formSave').trigger('reset');
                $('#txtidguruprofil-error').attr('style', 'display: none;');
                $('#txtnipprofil-error').attr('style', 'display: none;');
                $('#txtnamaguruprofil-error').attr('style', 'display: none;');
                $('#txttempatlahirprofil-error').attr('style', 'display: none;');
                $('#txttgl_lahirprofil-error').attr('style', 'display: none;');
                $('#txtalamatprofil-error').attr('style', 'display: none;');
                $('#txtno_ktpprofil-error').attr('style', 'display: none;');
                $('#cmbKeluargaprofil-error').attr('style', 'display: none;');
                $('#txtid_jabatanprofil-error').attr('style', 'display: none;');
                $('#fotoprofil-error').attr('style', 'display: none;');
                $('#cmbPegawaiprofil-error').attr('style', 'display: none;');
                $('#myModalProfile').modal('show');
                $('#myModalProfile').find('#modalProfileTitle').text('Edit Profile');
                $('#formProfil').attr("action", url);
                //var link = $('#formSave').attr('action');
                $.ajax({
                    url: "{{ url('admin/editProfilGuru') }}/" + id,
                    type: 'ajax',
                    method: 'get',
                    async: false,
                    dataType: 'json',
                    success:function(data){
                        console.log(data);
                        $('#txtidguruprofil').val(data.id_guru);
                        $('#txtnipprofil').val(data.nip);
                        $('#txtnamaguruprofil').val(data.nama_guru);
                        $('#txttempatlahirprofil').val(data.tempat_lahir);
                        $('#txttgl_lahirprofil').val(data.tgl_lahir);
                        $('#txtalamatprofil').val(data.alamat);
                        $('#txtno_ktpprofil').val(data.no_ktp);
                        $('#cmbKeluargaprofil').val(data.status_keluarga);
                        $('#txtid_jabatanprofil').val(data.id_jabatan);
                        $('#cmbPegawaiprofil').val(data.status_pegawai);
                    }

                });
            })

            $('#formProfil').submit(function(e) {
                e.preventDefault();
                var link = $('#formProfil').attr('action');
                var request = new FormData(this);

                $.ajax({
                    url: link,
                    method: "POST",
                    data: request,
                    contentType: false,
                    cache: false,
                    processData: false,
                    success: function(response) {
                            console.log(response);
                            $('#formProfil').trigger('reset');
                            $('#myModalProfile').modal('hide');
                            window.location.replace("{{ route('indexGuru') }}");
                            //$('.alert-success').html('Data Mata Pelajaran Berhasil Disimpan').fadeIn().delay(4000).fadeOut('slow');
                            
                            //tampilData();
                    }
                });
            });

            $('#btnBatal').click(function(){
                $('#modalDelete').modal('hide');
            })

            $('#txttgl_lahir').datepicker({
            autoclose: true,
            format: 'yyyy-mm-dd'
            })



            // Validasi Fprm

            if ($("#formSave").length > 0) {
                $("#formSave").validate({

                    rules: {
                        txtidguru: {
                            required: true,
                            maxlength: 11,
                            digits: true

                        },

                        txtnip: {
                            required: true,
                            maxlength: 15,
                            digits: true
                        },
                        txtnamaguru: {
                            required: true,
                            maxlength: 50
                        },
                        txttempatlahir: {
                            required: true,
                            maxlength: 25
                        },
                        txttgl_lahir: {
                            required: true,
                            format_tanggal: true
                        },
                        txtalamat: {
                            required: true
                        },
                        txtno_ktp: {
                            required: true,
                            maxlength: 35,
                            digits: true
                        },
                        cmbKeluarga: {
                            required: true,
                        },
                        txtid_jabatan: {
                            required: true,
                        },
                        foto: {
                            required: true,
                        },
                        cmbPegawai: {
                            required: true,
                        },
                    },
                    messages: {

                        txtidguru: {
                            required: "Harap memasukan ID",
                            maxlength: "Tidak boleh melebihi 11 karakter",
                            digits: "Harap memasukan data berupa angka"
                        },

                        txtnip: {
                            required: "Harap memasukan NIP",
                            maxlength: "Tidak boleh melebihi 15 karakter",
                            digits: "Harap memasukan data berupa angka"
                        },

                        txtnamaguru: {
                            required: "Harap memasukan nama lengkap",
                            maxlength: "Tidak boleh melebihi 50 karakter"
                        },

                        txttempatlahir: {
                            required: "Harap memasukan detail tempat lahir",
                            maxlength: "Tidak boleh melebihi 25 karakter"
                        },

                        txttgl_lahir: {
                            required: "Harap memasukan detail tanggal lahir",
                        },

                        txtalamat: {
                            required: "Harap memasukan detail alamat",
                        },

                        txtno_ktp: {
                            required: "Harap memasukan detail nomor KTP",
                            maxlength: "Tidak boleh melebihi 35 karakter",
                            digits: "Harap memasukan data berupa angka"
                        },

                        cmbKeluarga: {
                            required: "Harap memasukan detail status"
                        },

                        txtid_jabatan: {
                            required: "Harap memasukan data ID jabatan"
                        },

                        foto: {
                            required: "Harap memasukan foto"
                        },

                        cmbPegawai: {
                            required: "Harap memasukan detail status pegawai"
                        }

                    },

                })

            }


            // .--Validasi Fprm


            // Tampil Data
            function tampilData() {
                $.ajax({
                    url: "{{ route('getGuru') }}",
                    async: false,
                    dataType: 'json',
                    success: function(data) {
                        //console.log(data);
                        
                        var html = '';
                        var i;
                        for (i = 0; i < data.length; i++) {
                            html += '<tr>' +
                                '<td>' + (i+1) + '</td>' +
                                '<td>' + data[i].id_guru + '</td>' +
                                '<td>' + data[i].nama_guru + '</td>' +
                                '<td>' + data[i].no_ktp + '</td>' +
                                '<td>' + data[i].alamat + '</td>' +
                                '<td>' + data[i].status_pegawai + '</td>' +
                                
                                '<td>' +

                                '<a href = "javascript:;" class="btn btn-primary btn-xs item-view"  data="' +
                                data[i].id_guru + '"><i class="fa fa-eye"></i></a>' +
                                '<a href = "javascript:;" class="btn btn-warning btn-xs item-edit"  data="' +
                                data[i].id_guru + '"><i class="fa fa-edit"></i></a>' +
                                '<a href = "javascript:;" class="btn btn-danger btn-xs item-delete" id="' +
                                data[i].id_guru + '" data="' + data[i].id_guru +
                                '"><i class="fa fa-trash"></i></a>' +
                                '</td>' +
                                '</tr>';
                        }
                        $('#show_data').html(html);
                        
                        //$('#preloader').attr('style', 'display: none;');
                    },
                    error: function() {
                        alert('Gagal memanggil data');
                    }
                });
            }

            tampilData();

            // .--Tampil Data


            // Menambahkan Record Baru
            $('#btnTambah').click(function() {
                $('#formSave').trigger('reset');
                $('#foto').attr('required', '');
                $('#myModal').find('#modalTambahTitle').text('Tambah Data Guru');
                $('#txtidguru-error').attr('style', 'display: none;');
                $('#txtnip-error').attr('style', 'display: none;');
                $('#txtnamaguru-error').attr('style', 'display: none;');
                $('#txttempatlahir-error').attr('style', 'display: none;');
                $('#txttgl_lahir-error').attr('style', 'display: none;');
                $('#txtalamat-error').attr('style', 'display: none;');
                $('#txtno_ktp-error').attr('style', 'display: none;');
                $('#cmbKeluarga-error').attr('style', 'display: none;');
                $('#txtid_jabatan-error').attr('style', 'display: none;');
                $('#foto-error').attr('style', 'display: none;');
                $('#cmbPegawai-error').attr('style', 'display: none;');
                $('#formSave').attr("action", "{{ route('simpanDataGuru') }}");
                $('#myModal').modal('show');
            })

            $('#formSave').submit(function(e) {
                e.preventDefault();
                var link = $('#formSave').attr('action');
                var request = new FormData(this);

                $.ajax({
                    url: link,
                    method: "POST",
                    data: request,
                    contentType: false,
                    cache: false,
                    processData: false,
                    success: function(response) {
                            console.log(response);
                            $('#myModal').modal('hide');
                            $('.alert-success').html('Data Guru Berhasil Disimpan').fadeIn().delay(4000).fadeOut('slow');
                            $('#modalLoader').modal('show');
                            tampilData();
                            $('#modalLoader').modal('hide');
                    }
                });
            });

            // .--Menambahkan Record Baru


            // View Profile

            $('#show_data').on('click', '.item-view', function(){
                var id = $(this).attr('data');
                
                $('#menuGuruInput').attr('style', 'display: none;');
                $('#modalLoader').modal('show');
                $('#menuGuruView').removeAttr('style');
                $('#modalLoader').modal('hide');
                $.ajax({
                    url: "{{ url('admin/cariProfilGuru') }}/" + id,
                    type: 'ajax',
                    method: 'get',
                    async: false,
                    dataType: 'json',
                    success:function(data){
                        console.log(data);
                        var url2 = "{{ asset('UploadedFile/guru') }}/"+data.data2[0].foto;
                        $('#fotoProfil').attr("src", url2);
                        $('#namaProfil').text(data.data2[0].nama_guru);
                        $('#nipProfil').text(data.data2[0].nip);
                        $('#idguru').text(data.data2[0].id_guru);
                        $('#tempatlahir_profil').text(data.data2[0].tempat_lahir);
                        $('#tgllahir_profil').text(data.data2[0].tgl_lahir);
                        $('#noktpprofil').text(data.data2[0].no_ktp);
                        $('#statuskeluargaprofil').text(data.data2[0].status_keluarga);
                        $('#idjabatan').text(data.data2[0].id_jabatan);
                        $('#statuspegawaiprofil').text(data.data2[0].status_pegawai);
                        $('#alamatProfil').text(data.data2[0].alamat);

                        var html = '';
                        var i;
                        for (i = 0; i < data.data1.length; i++) {
                            html += '<tr>' +
                                '<td>' + (i+1) + '</td>' +
                                '<td>' + data.data1[i].nama_kelas + '</td>' +
                                '<td>' + data.data1[i].nama_siswa + '</td>' +
                                '</tr>';
                        }
                        $('#show_perwalian').html(html);
                    }

                });
            });

            

            // .--View Profile

            // Update Data

            $('#show_data').on('click', '.item-edit', function(){
                var id = $(this).attr('data');
                
                var url = "{{ url('admin/editGuru') }}/" + id;
                //$('#formSave').trigger('reset');
                $('#txtidguru-error').attr('style', 'display: none;');
                $('#txtnip-error').attr('style', 'display: none;');
                $('#txtnamaguru-error').attr('style', 'display: none;');
                $('#txttempatlahir-error').attr('style', 'display: none;');
                $('#txttgl_lahir-error').attr('style', 'display: none;');
                $('#txtalamat-error').attr('style', 'display: none;');
                $('#txtno_ktp-error').attr('style', 'display: none;');
                $('#cmbKeluarga-error').attr('style', 'display: none;');
                $('#txtid_jabatan-error').attr('style', 'display: none;');
                $('#myModal').modal('show');
                $('#myModal').find('#modalTambahTitle').text('Edit Data Siswa');
                $('#formSave').attr("action", url);
                //var link = $('#formSave').attr('action');
                $.ajax({
                    url: "{{ url('admin/cariDataGuru') }}/" + id,
                    type: 'ajax',
                    method: 'get',
                    async: false,
                    dataType: 'json',
                    success:function(data){
                        //console.log(data);
                        $('#txtidguru').val(data.id_guru);
                        $('#txtnip').val(data.nip);
                        $('#txtnamaguru').val(data.nama_guru);
                        $('#txttempatlahir').val(data.tempat_lahir);
                        $('#txttgl_lahir').val(data.tgl_lahir);
                        $('#txtalamat').val(data.alamat);
                        $('#txtno_ktp').val(data.no_ktp);
                        $('#cmbKeluarga').val(data.status_keluarga);
                        $('#txtid_jabatan').val(data.id_jabatan);
                        $('#cmbPegawai').val(data.status_pegawai);
                    }

                });
                
                
                
                
            });

            // .--Update Data

            // Delete Data


            $('#show_data').on('click', '.item-delete', function() {
                var id = $(this).attr('data');
                $('#modalDelete').modal('show');
                $('#btnHapus').unbind().click(function() {
                    $.ajax({
                        url: "{{ url('admin/hapusDataGuru') }}/" + id,
						method: 'get',
                        async: false,
                        type: 'ajax',
                        dataType: 'json',
                        success: function(response){
                            if (response.success) {
                                $('#modalDelete').modal('hide');
                                $('.alert-success').html('Data Guru Berhasil Dihapus').fadeIn().delay(4000).fadeOut('slow');
                                tampilData();
                            }else {
							    alert('Gagal');
							}
                        }
                    });
                });

            });
                


            // .--Delete Data
        });
        $.validator.addMethod(
			"format_tanggal",
			function(value, element) {
				// put your own logic here, this is just a (crappy) example
				return value.match(/([12]\d{3}-(0[1-9]|1[0-2])-(0[1-9]|[12]\d|3[01]))/);
			},
			"Harap memasukan data tanggal dengan format DD/MM/YYYY"
		);
        </script>
        @endpush