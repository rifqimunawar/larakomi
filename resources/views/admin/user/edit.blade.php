@extends('admin.layout')
@section('content')
<div class="card info-card sales-card">
    <div class="container">

      <div class="text-center pt-5 mt-5">
        <h4>Edit Kader</h4>
      </div>
      <div class="row pt-4 mt-5">
        <div class="col-md-6">
            <form action="">
                <div class="mb-3">
                    <label for="name" class="form-label">Nama Lengkap</label>
                    <input type="text" class="form-control" id="name" value="{{ $user->name }}" readonly>
                </div>
    
                <div class="mb-3">
                    <label for="username" class="form-label">Username</label>
                    <input type="text" class="form-control" id="username" value="{{ $user->username }}" readonly>
                </div>
    
                <div class="mb-3">
                    <label for="alamat" class="form-label">Alamat</label>
                    <input type="text" class="form-control" id="alamat" value="{{ $user->alamat }}" readonly>
                </div>
    
                <div class="mb-3">
                    <label for="nim" class="form-label">Nim</label>
                    <input type="text" class="form-control" id="nim" value="{{ $user->nim }}">
                </div>
    
                <div class="mb-3">
                    <label for="rayon" class="form-label">Rayon</label>
                    <div class="col-md-12">
                      <select id="rayon_id" name="rayon_id" class="form-select" onchange="showOptions()">
                          <option value="1" {{ $user->rayon_id == '1' ? 'selected' : '' }}>Teknik</option>
                          <option value="2" {{ $user->rayon_id == '2' ? 'selected' : '' }}>Hukum</option>
                          <option value="3" {{ $user->rayon_id == '3' ? 'selected' : '' }}>Ulul Albab</option>
                          <option value="4" {{ $user->rayon_id == '4' ? 'selected' : '' }}>Ekonomi</option>
                          <option value="5" {{ $user->rayon_id == '5' ? 'selected' : '' }}>Fikom</option>
                          <option value="6" {{ $user->rayon_id == '6' ? 'selected' : '' }}>Fkip</option>
                      </select>
                  </div>
                </div>

                <div class="mb-3">
                  <label for="prodi">Prodi</label>

                  <div class="col-md-12">
                      <select id="prodi-teknik" name="prodi" class="form-select" style="display:none;">
                          <option>-- Prodi Di Teknik --</option>
                          <option value="Teknik Informatika">Teknik Informatika</option>
                          <option value="Teknik Elektro">Teknik Elektro</option>
                          <option value="Teknik Industri">Teknik Industri</option>
                      </select>                  
                  </div>
                  <div class="col-md-12">
                      <select id="prodi-hukum" name="prodi" class="form-select" style="display:none;">
                          <option>-- Prodi Di Teknik --</option>
                          <option value="Ilmu Hukum">Ilmu Hukum</option>
                          <option value="Hukum Tatanegara">Hukum Tatanegara</option>
                          <option value="Hukum Industrt">Hukum Industri</option>
                      </select>
                  </div>
                  <div class="col-md-12">
                      <select id="prodi-ulul-albab" name="prodi" class="form-select" style="display:none;">
                        <option>-- Prodi Di Ulul Albab --</option>
                        <option value="Pendidikan Agama Islam">Pendidikan Agama Islam</option>
                        <option value="Pendidikan Bahasa Arab">Pendidikan Bahasa Arab</option>
                        <option value="Tafsir Hadis">Tafsir Hadis</option>
                    </select>
                  </div>

              </div>

                {{-- jenjang kaderisasi start  --}}
                <div class="mb-3">
                  <label for="kaderisasi" class="form-label">Jenjang Kaderisasi Saat Ini</label>
                  <div class="col-md-12">
                      <select id="kaderisasi" name="kaderisasi" class="form-select" onchange="showOptions()">
                          <option>-- Jenjang Kaderisasi Formal Saat ini --</option>
                          <option value="Belum Mapaba">Belum Mapaba</option>
                          <option value="Mapaba">Mapaba</option>
                          <option value="PKD">PKD</option>
                          <option value="PKL">PKL</option>
                          <option value="PKN">PKN</option>
                      </select>
                  </div>
              </div>
              <div class="mb-3">
                  <div class="col-md-12">
                      <select id="thn_mapaba" name="thn_mapaba" class="form-select" style="display:none;">
                          <option>-- Mapaba Tahun Berapa --</option>
                          <option value="Sebelum 2018">Mapaba Sebelum 2018</option>
                          <option value="2018">Mapaba 2018</option>
                          <option value="2019">Mapaba 2019</option>
                          <option value="2020">Mapaba 2020</option>
                          <option value="2021">Mapaba 2021</option>
                          <option value="2022">Mapaba 2022</option>
                          <option value="2023">Mapaba 2023</option>
                      </select>
                  </div>
              </div>
              <div class="mb-3">
                  <div class="col-md-12">
                      <select id="thn_pkd" name="thn_pkd" class="form-select" style="display:none;">
                          <option>-- PKD Tahun Berapa --</option>
                          <option value="Sebelum 2018">PKD Sebelum 2018</option>
                          <option value="2018">PKD 2018</option>
                          <option value="2019">PKD 2019</option>
                          <option value="2020">PKD 2020</option>
                          <option value="2021">PKD 2021</option>
                          <option value="2022">PKD 2022</option>
                          <option value="2023">PKD 2023</option>
                      </select>
                  </div>
              </div>
              <div class="mb-3">
                  <div class="col-md-12">
                      <select id="thn_pkl" name="thn_pkl" class="form-select" style="display:none;">
                          <option>-- PKL Tahun Berapa --</option>
                          <option value="Sebelum 2018">PKL Sebelum 2018</option>
                          <option value="2018">PKL 2018</option>
                          <option value="2019">PKL 2019</option>
                          <option value="2020">PKL 2020</option>
                          <option value="2021">PKL 2021</option>
                          <option value="2022">PKL 2022</option>
                          <option value="2023">PKL 2023</option>
                      </select>
                  </div>
              </div>
              <div class="mb-3">
                  <div class="col-md-12">
                      <select id="thn_pkn" name="thn_pkn" class="form-select" style="display:none;">
                          <option>-- PKN Tahun Berapa --</option>
                          <option value="Sebelum 2018">PKN Sebelum 2018</option>
                          <option value="2018">PKN 2018</option>
                          <option value="2019">PKN 2019</option>
                          <option value="2020">PKN 2020</option>
                          <option value="2021">PKN 2021</option>
                          <option value="2022">PKN 2022</option>
                          <option value="2023">PKN 2023</option>
                      </select>
                  </div>
              </div>
                {{-- jenjang kaderisasi end  --}}

                <div class="mb-3">
                  <label for="informal" class="form-label">Kader Mengikuti Sekolah Informal</label>
                  <div class="col-md-12">
                    <select name="informal" class="form-select" required aria-label="informal">
                      <option value="0"{{ $user->informal == '0' ? 'selected' : '' }}>Belum Pernah</option>
                      <option value="1"{{ $user->informal == '1' ? 'selected' : '' }}>Pernah 1 kali</option>
                      <option value="2"{{ $user->informal == '2' ? 'selected' : '' }}>Pernah 2 Kali</option>
                      <option value="3"{{ $user->informal == '3' ? 'selected' : '' }}>Pernah 3 Kali</option>
                      <option value="4"{{ $user->informal == '4' ? 'selected' : '' }}>Pernah 4 Kali</option>
                      <option value="5"{{ $user->informal == '5' ? 'selected' : '' }}>Pernah 5 Kali</option>
                      <option value="6"{{ $user->informal == '6' ? 'selected' : '' }}>Pernah 6 Kali</option>
                      <option value="7"{{ $user->informal == '7' ? 'selected' : '' }}>Pernah 7 Kali</option>
                      <option value="8"{{ $user->informal == '8' ? 'selected' : '' }}>Pernah 8 Kali</option>
                      <option value="9"{{ $user->informal == '9' ? 'selected' : '' }}>Pernah 9 Kali</option>
                      <option value="10"{{ $user->informal == '10' ? 'selected' : '' }}>Lebih dari 9 Kali</option>
                  </select>
                </div>
              </div>

                <div class="mb-3">
                  <label for="nonformal" class="form-label">Kader Mengikuti Sekolah Non-Formal</label>
                  <div class="col-md-12">
                    <select name="nonformal" class="form-select" required aria-label="nonformal">
                      <option value="0"{{ $user->nonformal == '0' ? 'selected' : '' }}>Belum Pernah</option>
                      <option value="1"{{ $user->nonformal == '1' ? 'selected' : '' }}>Pernah 1 kali</option>
                      <option value="2"{{ $user->nonformal == '2' ? 'selected' : '' }}>Pernah 2 Kali</option>
                      <option value="3"{{ $user->nonformal == '3' ? 'selected' : '' }}>Pernah 3 Kali</option>
                      <option value="4"{{ $user->nonformal == '4' ? 'selected' : '' }}>Pernah 4 Kali</option>
                      <option value="5"{{ $user->nonformal == '5' ? 'selected' : '' }}>Pernah 5 Kali</option>
                      <option value="6"{{ $user->nonformal == '6' ? 'selected' : '' }}>Pernah 6 Kali</option>
                      <option value="7"{{ $user->nonformal == '7' ? 'selected' : '' }}>Pernah 7 Kali</option>
                      <option value="8"{{ $user->nonformal == '8' ? 'selected' : '' }}>Pernah 8 Kali</option>
                      <option value="9"{{ $user->nonformal == '9' ? 'selected' : '' }}>Pernah 9 Kali</option>
                      <option value="10"{{ $user->nonformal == '10' ? 'selected' : '' }}>Lebih dari 9 Kali</option>
                  </select>
                </div>
              </div>

                {{-- Role Start --}}
                <div class="my-3 pt-4">
                  <label for="role_id" class="form-label">Status Keanggotaan</label><br>
                  <p>Jika Anggota tersebut memang benar tercatat di database rayon, maka pilih "Kader PMII Uninus", <br>
                  Namun, jika anggota tersebut tidak tercatat di database rayon maka pilih "Bukan Kader PMII Uninus"</p>
                  <div class="col-md-12">
                    <select id="rayon_id" name="rayon_id" class="form-select">
                      <option value="3" {{ $user->role_id == '3' ? 'selected' : '' }}>Kader PMII Uninus</option>
                      <option value="4" {{ $user->role_id == '4' ? 'selected' : '' }}>Pengjunjung</option>
                      <option value="5" {{ $user->role_id == '5' ? 'selected' : '' }}>Bukan Kader PMII Uninus</option>
                    </select>
                </div>
              </div>
              {{-- Role end  --}}
            </form>
        </div>
        
        <div class="col-md-6">
          <div class="text-center">
            <img src="{{ asset('storage/img/' . $user->img ) }}" class="rounded" alt="..." 
            style="width: 80%; border-radius:20px;box-shadow: 4px 5px 8px rgba(0, 0, 0, 0.3)">
          </div>
        </div>
    </div>

</div>


<script>
  function showOptions() {
    var rayon = document.getElementById("rayon_id").value;
    var prodi_teknik = document.getElementById("prodi-teknik");
    var prodi_hukum = document.getElementById("prodi-hukum");
    var prodi_ulul_albab = document.getElementById("prodi-ulul-albab");

    if (rayon === "1") {
        prodi_teknik.style.display = "block";
        prodi_hukum.style.display = "none";
        prodi_ulul_albab.style.display = "none";
    } else if (rayon === "2") {
        prodi_teknik.style.display = "none";
        prodi_hukum.style.display = "block";
        prodi_ulul_albab.style.display = "none";
    } else if (rayon === "3") {
        prodi_teknik.style.display = "none";
        prodi_hukum.style.display = "none";
        prodi_ulul_albab.style.display = "block";
    } else {
        prodi_teknik.style.display = "none";
        prodi_hukum.style.display = "none";
        prodi_ulul_albab.style.display = "none";
    }
  }
  function showOptions() {
      var kaderisasi = document.getElementById("kaderisasi").value;
      var thn_mapaba = document.getElementById("thn_mapaba");
      var thn_pkd = document.getElementById("thn_pkd");
      var thn_pkl = document.getElementById("thn_pkl");
      var thn_pkn = document.getElementById("thn_pkn");
      
      if (kaderisasi === "Belum Mapaba") {
          thn_mapaba.style.display = "none";
          thn_pkd.style.display = "none";
          thn_pkl.style.display = "none";
          thn_pkn.style.display = "none";
      } else if (kaderisasi === "Mapaba") {
          thn_mapaba.style.display = "block";
          thn_pkd.style.display = "none";
          thn_pkl.style.display = "none";
          thn_pkn.style.display = "none";
      } else if (kaderisasi === "PKD") {
          thn_mapaba.style.display = "block";
          thn_pkd.style.display = "block";
          thn_pkl.style.display = "none";
          thn_pkn.style.display = "none";
      } else if (kaderisasi === "PKL") {
          thn_mapaba.style.display = "block";
          thn_pkd.style.display = "block";
          thn_pkl.style.display = "block";
          thn_pkn.style.display = "none";
      } else if (kaderisasi === "PKN") {
          thn_mapaba.style.display = "block";
          thn_pkd.style.display = "block";
          thn_pkl.style.display = "block";
          thn_pkn.style.display = "block";
      } else {
          thn_mapaba.style.display = "none";
          thn_pkd.style.display = "none";
          thn_pkl.style.display = "none";
          thn_pkn.style.display = "none";
      }
  }

  </script>
@endsection