@extends('layouts/main')
@section('container')
	<!--Awal Container-->
    <div class="site-section" id="divisi-section">
      <div class="container">
        <div class="row mb-5 justify-content-center text-center"  data-aos="fade-up">
          <div class="col-7 text-center  mb-5">
            <h2 class="section-title">Struktur Divisi Himpunan</h2>
            <p class="lead">Ada 3 divisi yang mengatur jalannya himpunan yaitu<br> PSDM, HUMAS, dan KESMA</p>
          </div>
        </div>
        <div class="row align-items-stretch">
          <div class="col-md-6 col-lg-4 mb-4 mb-lg-4" data-aos="fade-up">
            
            <div class="unit-4 d-block">
              <div class="unit-4-icon mb-3">
                <span class="icon-wrap"><span class="text-primary icon-settings_backup_restore"></span></span>
              </div>
              <div>
                <h3>PSDM</h3>
                <p>Divisi yang mengembangkan bakat-bakat mahasiswa TI untuk meningkatkan kemampuan dalam pelatihan maupun pendidikan.</p>
              </div>
            </div>

          </div>
          <div class="col-md-6 col-lg-4 mb-4 mb-lg-4" data-aos="fade-up" data-aos-delay="100">

            <div class="unit-4 d-block">
              <div class="unit-4-icon mb-3">
                <span class="icon-wrap"><span class="text-primary icon-sentiment_satisfied"></span></span>
              </div>
              <div>
                <h3>HUMAS</h3>
                <p>Divisi yang menjalin hubungan dengan mahasiswa TI sampai ke himpunan lain, serta mengurusi kegiatan penyambutan wisuda mahasiswa TI.</p>
              </div>
            </div>
          </div>
          <div class="col-md-6 col-lg-4 mb-4 mb-lg-4" data-aos="fade-up"  data-aos-delay="200">
            <div class="unit-4 d-block">
              <div class="unit-4-icon mb-3">
                <span class="icon-wrap"><span class="text-primary icon-people"></span></span>
              </div>
              <div>
                <h3>KESMA</h3>
                <p>Divisi yang memiliki peran penting dalam perkembangan mahasiswa dibidang akademik dan beasiswa mahasiswa TI serta melakukan bakti sosial.</p>
              </div>
            </div>
          </div>

        </div>
      </div>
    </div>
    
    <div class="feature-big">
      <div class="site-section" id="proker-section">
        <div class="container">
          <h2 class="section-title" align="center">Proker HIMATIF Tahun 2019/2020</h2>
          <div class="row mb-5 site-section" id="proker-section">
            <div class="col-lg-7" data-aos="fade-right">
              <img src="{{ asset('asset_user/images/proker1.jpg') }}" alt="Image" class="img-fluid">
            </div>
            <div class="col-lg-5 pl-lg-5 ml-auto mt-md-5">
              <h2 class="text-black">
              	@foreach($proker1 as $p)
              		{{ $p->Proker }}
              	@endforeach
              </h2>
              <p>Ketua Pelaksana : 
              	@foreach($mahasiswa as $mhs)
        					@if($p->kapel_id == $mhs->id)
        							{{ $mhs->Nama }}
        					@endif
        				@endforeach
              </p>
              <p class="mb-4">Acara yang mengundang maba TI untuk kumpul satu angkatan dan tujuan dari proker ini agar para maba saling tahu satu sama teman TI lainnya beserta kakak tingkatnya.</p>

            </div>
          </div>

          <div class="mt-5 row mb-5 site-section " id="proker-section">
            <div class="col-lg-7 order-1 order-lg-2" data-aos="fade-left">
              <img src="{{ asset('asset_user/images/proker2.jpg') }}" alt="Image" class="img-fluid">
            </div>
            <div class="col-lg-5 pr-lg-5 mr-auto mt-5 order-2 order-lg-1">
              <h2 class="text-black">
              	@foreach($proker2 as $p)
              		{{ $p->Proker }}
              	@endforeach
              </h2>
              <p>Ketua Pelaksana : 
              	@foreach($mahasiswa as $mhs)
        					@if($p->kapel_id == $mhs->id)
        							{{ $mhs->Nama }}
        					@endif
        				@endforeach
              </p>
              <p class="mb-4">Acara yang mengajak maba TI untuk melakukan pelatihan di villa batu dan tujuan dari proker ini mengeratkan hubungan antar mahasiswa TI dengan lainnya serta hubungan kakak tingkat TI.</p>

            </div>
          </div>

          <div class="row mb-5 site-section" id="proker-section">
            <div class="col-lg-7" data-aos="fade-right">
              <img src="{{ asset('asset_user/images/proker3.jpg') }}" alt="Image" class="img-fluid">
            </div>
            <div class="col-lg-5 pl-lg-5 ml-auto mt-md-5">
              <h2 class="text-black">
              	@foreach($proker3 as $p)
              		{{ $p->Proker }}
              	@endforeach
              </h2>
              <p>Ketua Pelaksana : 
              	@foreach($mahasiswa as $mhs)
        					@if($p->kapel_id == $mhs->id)
        							{{ $mhs->Nama }}
        					@endif
        				@endforeach
              </p>
              <p class="mb-4">Acara ini adalah pertemuan para staff muda yang terpilih setelah melewati berbagai tahapan pendaftaran untuk masuk suatu divisi di himpunan.</p>

            </div>
          </div>

          <div class="mt-5 row mb-5 site-section " id="proker-section">
            <div class="col-lg-7 order-1 order-lg-2" data-aos="fade-left">
              <img src="{{ asset('asset_user/images/proker4.jpg') }}" alt="Image" class="img-fluid">
            </div>
            <div class="col-lg-5 pr-lg-5 mr-auto mt-5 order-2 order-lg-1">
              <h2 class="text-black">
              	@foreach($proker4 as $p)
              		{{ $p->Proker }}
              	@endforeach
              </h2>
              <p>Ketua Pelaksana : 
              	@foreach($mahasiswa as $mhs)
        					@if($p->kapel_id == $mhs->id)
        							{{ $mhs->Nama }}
        					@endif
        				@endforeach
              </p>
              <p class="mb-4">Proker yang melaksanakan pemilihan caloh kahim dan wakahim baru untuk melanjutkan kinerja himpunan kedepannya.</p>
              
            </div>
          </div>

          <div class="row mb-5 site-section" id="proker-section">
            <div class="col-lg-7" data-aos="fade-right">
              <img src="{{ asset('asset_user/images/proker5.jpg') }}" alt="Image" class="img-fluid">
            </div>
            <div class="col-lg-5 pl-lg-5 ml-auto mt-md-5">
              <h2 class="text-black">
              	@foreach($proker5 as $p)
              		{{ $p->Proker }}
              	@endforeach
              </h2>
              <p>Ketua Pelaksana : 
              	@foreach($mahasiswa as $mhs)
        					@if($p->kapel_id == $mhs->id)
        							{{ $mhs->Nama }}
        					@endif
        				@endforeach
              </p>
              <p class="mb-4">Acara serah terima jabatan dari pengurus lama ke pengurus baru himpunan.</p>
              
            </div>
          </div>
        </div>
      </div>
    </div>

    <div class="site-section" id="struktur-section">
      <div class="container">
        <div class="row mb-5 justify-content-center text-center"  data-aos="fade-up">
          <div class="col-7 text-center  mb-5">
            <h2 class="section-title">Struktur Organisasi</h2>
            <p class="lead">Rangkaian struktur Badan Pengurus Internal HIMATIF</p>
          </div>
        </div>
       
        <div class="row">

          <div class="col-lg-6 col-md-6 mb-4" data-aos="fade-up" data-aos-delay="200">
            <div class="person">
              <div class="bio-img">
                <figure>
                  @foreach($kahim as $k)
                  <img src="{{ asset('images/'.$k->Photo) }}" alt="Image" class="img-fluid" width="350px">
                  @endforeach
                </figure>
                <div class="social">
                  <a href="#"><span class="icon-facebook"></span></a>
                  <a href="#"><span class="icon-twitter"></span></a>
                  <a href="#"><span class="icon-instagram"></span></a>
                </div>
              </div>
              <h2 class="text-black h1">
              	@foreach($kahim as $k)
              		{{ $k->Nama }}
              	@endforeach
              </h2>
              <p>
              	@foreach($kahim as $k)
              		{{ $k->NIM }}
              	@endforeach
              </p>
              <p>
              	@foreach($kahim as $k)
              		{{ $k->Tahun_Angkatan }}
              	@endforeach
              </p>
              <span class="sub-title d-block mb-3">Ketua Himpunan</span>   
            </div>
          </div>
          
          <div class="col-lg-6 col-md-6 mb-4" data-aos="fade-up" data-aos-delay="300">
            <div class="person">
              <div class="bio-img">
                <figure>
                  @foreach($wakahim as $k)
                  <img src="{{ asset('images/'.$k->Photo) }}" alt="Image" class="img-fluid" width="350px">
                  @endforeach
                </figure>
                <div class="social">
                  <a href="#"><span class="icon-facebook"></span></a>
                  <a href="#"><span class="icon-twitter"></span></a>
                  <a href="#"><span class="icon-instagram"></span></a>
                </div>
              </div>
              <h2 class="text-black h1">
              	@foreach($wakahim as $k)
              		{{ $k->Nama }}
              	@endforeach
              </h2>
              	@foreach($kahim as $k)
              		{{ $k->NIM }}
              	@endforeach
              <p>
              	@foreach($wakahim as $k)
              		{{ $k->Tahun_Angkatan }}
              	@endforeach
              </p>
              <span class="sub-title d-block mb-3">Wakil Ketua Himpunan</span>
            </div>
          </div>

          <div class="col-lg-3 col-md-6 mb-4" data-aos="fade-up" data-aos-delay="100">
            <div class="person">
              <div class="bio-img">
                <figure>
                  @foreach($sekretaris1 as $k)
                  <img src="{{ asset('images/'.$k->Photo) }}" alt="Image" class="img-fluid">
                  @endforeach
                </figure>
                <div class="social">
                  <a href="#"><span class="icon-facebook"></span></a>
                  <a href="#"><span class="icon-twitter"></span></a>
                  <a href="#"><span class="icon-instagram"></span></a>
                </div>
              </div>
              <h2 class="text-black h1">
              	@foreach($sekretaris1 as $sk)
              		{{ $sk->Nama }}
              	@endforeach
              </h2>
              	@foreach($kahim as $k)
              		{{ $k->NIM }}
              	@endforeach
              <p>
              	@foreach($sekretaris1 as $sk)
              		{{ $sk->Tahun_Angkatan }}
              	@endforeach
              </p>
              <span class="sub-title d-block mb-3">Sekretaris 1</span>
            </div>
          </div>

          <div class="col-lg-3 col-md-6 mb-4" data-aos="fade-up">
            <div class="person">
              <div class="bio-img">
                <figure>
                  @foreach($sekretaris2 as $k)
                  <img src="{{ asset('images/'.$k->Photo) }}" alt="Image" class="img-fluid">
                  @endforeach
                </figure>
                <div class="social">
                  <a href="#"><span class="icon-facebook"></span></a>
                  <a href="#"><span class="icon-twitter"></span></a>
                  <a href="#"><span class="icon-instagram"></span></a>
                </div>
              </div>
              <h2 class="text-black h1">
              	@foreach($sekretaris2 as $sk)
              		{{ $sk->Nama }}
              	@endforeach
              </h2>
              	@foreach($kahim as $k)
              		{{ $k->NIM }}
              	@endforeach
              <p>
              	@foreach($sekretaris2 as $sk)
              		{{ $sk->Tahun_Angkatan }}
              	@endforeach
              </p>
              <span class="sub-title d-block mb-3">Sekretaris 2</span>
            </div>
          </div>

          <div class="col-lg-3 col-md-6 mb-4" data-aos="fade-up" data-aos-delay="100">
            <div class="person">
              <div class="bio-img">
                <figure>
                  @foreach($bendahara1 as $k)
                  <img src="{{ asset('images/'.$k->Photo) }}" alt="Image" class="img-fluid">
                  @endforeach
                </figure>
                <div class="social">
                  <a href="#"><span class="icon-facebook"></span></a>
                  <a href="#"><span class="icon-twitter"></span></a>
                  <a href="#"><span class="icon-instagram"></span></a>
                </div>
              </div>
              <h2 class="text-black h1">
              	@foreach($bendahara1 as $ben)
              		{{ $ben->Nama }}
              	@endforeach
              </h2>
              	@foreach($kahim as $k)
              		{{ $k->NIM }}
              	@endforeach
              <p>
              	@foreach($bendahara1 as $ben)
              		{{ $ben->Tahun_Angkatan }}
              	@endforeach
              </p>
              <span class="sub-title d-block mb-3">Bendahara 1</span> 
            </div>
          </div>

          <div class="col-lg-3 col-md-6 mb-4" data-aos="fade-up" data-aos-delay="200">
            <div class="person">
              <div class="bio-img">
                <figure>
                  @foreach($bendahara2 as $k)
                  <img src="{{ asset('images/'.$k->Photo) }}" alt="Image" class="img-fluid">
                  @endforeach
                </figure>
                <div class="social">
                  <a href="#"><span class="icon-facebook"></span></a>
                  <a href="#"><span class="icon-twitter"></span></a>
                  <a href="#"><span class="icon-instagram"></span></a>
                </div>
              </div>
              <h2 class="text-black h1">
              	@foreach($bendahara2 as $ben)
              		{{ $ben->Nama }}
              	@endforeach
              </h2>
              	@foreach($kahim as $k)
              		{{ $k->NIM }}
              	@endforeach
              <p>
              	@foreach($bendahara2 as $ben)
              		{{ $ben->Tahun_Angkatan }}
              	@endforeach
              </p>
              <span class="sub-title d-block mb-3">Bendahara 2</span>
            </div>
          </div>

        </div>
      </div>
    </div>

    <div class="site-section bg-light" id="about-section">
      <div class="container">
        <div class="row mb-5">
          <div class="col-12 text-center">
            <h2 class="section-title mb-3">About Us</h2>
          </div>
        </div>
        <div class="row mb-5">
          <div class="col-lg-6" data-aos="fade-right">
            <img src="{{ asset('asset_user/images/undraw_bookmarks_r6up.svg') }}" alt="Image" class="img-fluid">
          </div>
          <div class="col-lg-5 ml-auto pl-lg-5">
            <h2 class="text-black mb-4 h3 font-weight-bold">Our Mission</h2>
            <p class="mb-4">Himpunan ini didirikan agar para mahasiswa dapat berkumpul dan bersosialisasi dengan sistem organisasi. Tujuannya agar para mahasiswa dapat mengenali satu sama lain dan bekerja sama untuk mencapai tujuan yang sama yaitu menyejahterakan mahasiswa TI Universitas Brawijaya</p>
            <ul class="ul-check mb-5 list-unstyled success">
              <li>Solidaritas</li>
              <li>Tanpa</li>
              <li>Batas</li>
            </ul>
            <p><a href="#" class="btn btn-primary">Learn More</a></p>
          </div>
        </div>

        
      </div>
    </div> 
    <!--Akhir Container-->
@endsection
