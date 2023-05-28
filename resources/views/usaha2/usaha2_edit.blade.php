@extends('layouts/main')

@section('content')
  <div class="row">
    <div class="col-md-12 grid-margin">
      <div class="row">
        <div class="col-12 col-xl-8 mb-4 mb-xl-0">
          <h3 class="font-weight-bold">Edit Usulan Usaha</h3>
        </div>
      </div>
    </div>
  </div>
  <div class="row">
    <div class="col-md-12 grid-margin">
      <div class="card p-4">
        <div class="card-body">
          <form method="POST" action="/usulusaha" enctype="multipart/form-data">
            @csrf
            <div class="form-group">
              <label for="usaha_usulan">Usaha Usulan</label>
              <input type="text" class="form-control @error('usaha_usulan') is-invalid @enderror" id="usaha_usulan" name="usaha_usulan" required value="{{ old('usaha_usulan',@$usaha->usaha_usulan) }}">
              @error('usaha_usulan')
                <div class="invalid-feedback">
                  {{ $message }}
                </div>
              @enderror
            </div>
            <div class="row">
              <div class="col">
                <div class="form-group">
                  <label for="scan_surat"> Scan Surat</label>
                  <input type="file" class="form-control @error('scan_surat') is-invalid @enderror" id="scan_surat" name="scan_surat" value="{{ old('scan_surat',@$usaha->scan_surat) }}">
                  @error('scan_surat')
                    <div class="invalid-feedback">
                      {{ $message }}
                    </div>
                  @enderror
                </div>
              </div>
              <div class="col">
                <div class="form-group">
                  <label for="scan_surat1"> Scan Surat</label>
                  <!-- <input type="file" class="form-control @error('scan_surat1') is-invalid @enderror" id="scan_surat1" name="scan_surat1" required value="{{ old('scan_surat1') }}"> -->
                  <img src="../../custom/{{ @$usaha->scan_surat  }}" alt="Scan Surat" name="scan_surat1" class="w-75 rounded">
                  @error('scan_surat1')
                    <div class="invalid-feedback">
                      {{ $message }}
                    </div>
                  @enderror
                </div>
              </div>
            </div>
            <div class="form-group">
              <label for="permasalahan_usaha_sebelum">Permasalahan usaha sebelum</label>
              <input type="text" class="form-control @error('permasalahan_usaha_sebelum') is-invalid @enderror" id="permasalahan_usaha_sebelum" name="permasalahan_usaha_sebelum" required value="{{ old('permasalahan_usaha_sebelum',@$usaha->permasalahan_usaha_sebelum) }}">
              @error('permasalahan_usaha_sebelum')
                <div class="invalid-feedback">
                  {{ $message }}
                </div>
              @enderror
            </div>
            <div class="mt-3">
              <a href="/usulusaha" class="btn btn-primary">Kembali</a>
              <button type="submit" class="btn btn-warning">Update</button>
            </div>
          </form>
        </div>
      </div>
    </div>
  </div>
@endsection