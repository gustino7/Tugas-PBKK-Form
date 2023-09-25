<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Submitted Form</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
</head>
<body>
    <main class="bg-body-tertiary">
        @if($success)
            @php
                session()->flash('success', 'Form berhasil disimpan');
            @endphp
        @endif
        <div class="mx-auto py-4 px-5" style="width: 65%">
            @include('partials/successMessage')
            <div>
                <h1>SMA Negeri 7<br></h1>
                <h1>Formulir Pendaftaran Calon Siswa Baru</h1>
            </div>
            <div class="my-5 py-3">
                <fieldset disabled>
                    <div class="d-flex flex-row">
                        <label class="fw-bold fs-5" for="name" >Nama Lengkap <span style="color: red">*</span></label>
                        <div class="d-flex flex-column ms-4">
                            <input type="text" name="firstName" id="disabledTextInput" class="form-control" placeholder="{{ $data["firstName"] }}">
                            <div class="form-text">First Name</div>
                        </div>
                        <div class="d-flex flex-column ms-4">
                            <input type="text" name="lastName" id="lname" class="form-control" placeholder="{{ $data['lastName'] }}">
                            <div class="form-text">Last Name</div>
                        </div>
                    </div>
                    <div class="d-flex flex-column">
                        <label class="fw-bold fs-5 mb-3" for="alamat">Alamat <span style="color: red">*</span></label>
                        <div class="d-flex flex-column mb-4" style="width: 40%">
                            <input type="text" name="jalan" id="jalan" class="form-control" placeholder="{{ $data['jalan'] }}">
                            <div class="form-text">Jalan / Kampung</div>
                        </div>
                        <div class="d-flex flex-column mb-4" style="width: 40%">
                            <input type="text" name="kecamatan" id="kecamatan" class="form-control" placeholder="{{ $data['kecamatan'] }}">
                            <div class="form-text">Kecamatan</div>
                        </div>
                        <div class="d-flex flex-column mb-4" style="width: 40%">
                            <div class="d-flex flex-row">
                                <div>
                                    <input type="text" name="kota" id="kota" class="form-control" placeholder="{{ $data['kota'] }}">
                                    <div class="form-text">Kota / Kabupaten</div>
                                </div>
                                <div class="ms-4">
                                    <input type="text" name="provinsi" id="provinsi" class="form-control" placeholder="{{ $data['provinsi'] }}">
                                    <div class="form-text">Provinsi</div>
                                </div>
                            </div>
                            
                        </div>
                        <div class="d-flex flex-column mb-4" style="width: 40%">
                            <div class="d-flex flex-row">
                                <div>
                                    <input type="text" name="kodePos" id="kodePos" class="form-control" placeholder="{{ $data['kodePos'] }}">
                                    <div class="form-text">Kode Pos</div>
                                </div>
                                <div class="ms-4">
                                    <input type="text" name="negara" id="negara" class="form-control" placeholder="{{ $data['negara'] }}">
                                    <div class="form-text">Negara</div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="d-flex flex-row mb-4">
                        <div style="width: 20%">
                            <label class="fw-bold fs-5">Tanggal Lahir<span style="color: red">*</span></label>
                        </div>
                        <div style="width: 20.3%">
                            <input type="text" name="tanggalLahir" id="tanggal" class="form-control" placeholder="{{ $data['tanggalLahir'] }}">
                        </div>
                    </div>
                    <div class="d-flex flex-row mb-4">
                        <div style="width: 10.8%">
                            <label class="fw-bold fs-5" for="email">Email <span style="color: red">*</span></label>
                        </div>
                        <div style="margin-left: 9.2%">
                            <input type="text" name="email" id="email" class="form-control" placeholder="{{ $data['email'] }}">
                        </div>
                    </div>
                    <div class="d-flex flex-row mb-4">
                        <div style="width: 10.8%">
                            <label class="fw-bold fs-5" for="hp">Hp <span style="color: red">*</span></label>
                        </div>
                        <div style="margin-left: 9.2%">
                            <input type="text" name="noHp" class="form-control" placeholder="{{ $data['noHp'] }}">
                        </div>
                    </div>
                    <div class="d-flex flex-row mb-4">
                        <div style="width: 15%">
                            <div>
                                <label class="fw-bold fs-5" for="nisn">Nomor Induk <span style="color: red">*</span></label>
                            </div>
                            <div>
                                <label class="fw-bold fs-5" for="nisn">Siswa Nasional</label>
                            </div>
                        </div>
                        <div style="margin-left: 5%">
                            <input type="text" name="nisn" id="nisn" class="form-control" placeholder="{{ $data['nisn'] }}">
                        </div>
                    </div>
                    <div class="d-flex flex-row mb-4">
                        <div style="width: 10.8%">
                            <label class="fw-bold fs-5" for="un">Nilai UN <span style="color: red">*</span></label>
                        </div>
                        <div style="margin-left: 9.2%">
                            <input type="text" name="un" id="un" class="form-control" placeholder="{{ $data['un'] }}">
                        </div>
                    </div>
                    <div class="d-flex flex-row mb-4">
                        <div style="width: 15%">
                            <label class="fw-bold fs-5" for="photo">Foto<span style="color: red">*</span></label>
                        </div>
                        <div style="margin-left: 5%; width: 30%">
                            <img src="storage/images/{{ $photo }}" alt="foto diri" style="width: 30%">
                        </div>
                    </div>
                </fieldset>
                <div class="mt-4">
                    <button class="btn btn-info" type="button" onclick="location.href='/'" style="margin-left: 15%">Kembali ke Home</button>
                </div>
            </div>    
        </div>
    </main>
    
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
</body>
</html>