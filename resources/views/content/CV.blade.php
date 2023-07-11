@extends('layouts/layoutMaster')

@section('title', 'User Profile - Profile')

@section('vendor-style')
<link rel="stylesheet" href="{{asset('assets/vendor/libs/datatables-bs5/datatables.bootstrap5.css')}}">
<link rel="stylesheet" href="{{asset('assets/vendor/libs/datatables-responsive-bs5/responsive.bootstrap5.css')}}">
<link rel="stylesheet" href="{{asset('assets/vendor/libs/datatables-checkboxes-jquery/datatables.checkboxes.css')}}">
@endsection

<!-- Page -->
@section('page-style')
<link rel="stylesheet" href="{{asset('assets/vendor/css/pages/CV.css')}}" />
@endsection


@section('vendor-script')
<script src="{{asset('assets/vendor/libs/datatables-bs5/datatables-bootstrap5.js')}}"></script>
@endsection

@section('page-script')
<script src="{{asset('assets/js/pages-profile.js')}}"></script>
@endsection

@section('content')

<!-- Header -->
<div class="row">
  <div class="col-12">
    <div class="card mb-4">
      <div class="user-profile-header-banner">
        <br>
        <!--<img src="{{asset('assets/img/pages/user-profile-banner.png')}}" alt="Banner image" class="rounded-top">-->
      </div>
      <div class="user-profile-header d-flex flex-column flex-sm-row text-sm-start text-center mb-4">
        <div class="flex-shrink-0 mt-n2 mx-sm-0 mx-auto">
          <img src="{{asset('assets/img/avatars/ninalusin.jpg')}}" alt="user image" class="d-block h-auto ms-0 ms-sm-4 rounded user-profile-img">
        </div>
        <div class="flex-grow-1 mt-3 mt-sm-5">
          <div class="d-flex align-items-md-end align-items-sm-start align-items-center justify-content-md-between justify-content-start mx-4 flex-md-row flex-column gap-4">
            <div class="user-profile-info">
              <h4>Nina Lušin</h4>
              <ul class="list-inline mb-0 d-flex align-items-center flex-wrap justify-content-sm-start justify-content-center gap-2">
                <li class="list-inline-item">
                  <i class='mdi mdi-invert-colors me-1 mdi-20px'></i><span class="fw-semibold">Web Developer, Database Developer</span>
                </li>
                <li class="list-inline-item">
                  <i class='mdi mdi-map-marker-outline me-1 mdi-20px'></i><span class="fw-semibold">Črnuče, Ljubljana</span>
                </li>
                <li class="list-inline-item">
                  <i class='mdi mdi-phone-outline me-1 mdi-20px'></i><span class="fw-semibold">031 541 132</span></li>
              </ul>
            </div>

          </div>
        </div>
      </div>
    </div>
  </div>
</div>
<!--/ Header -->



<!-- User Profile Content -->
<div class="row">
  <div class="col-xl-3 col-lg-3 col-md-3">
    <!-- About User -->
    <div class="card mb-4">
      <div class="card-body">
        <small class="card-text text-uppercase text-muted">O meni</small>
        <ul class="list-unstyled my-3 py-1">
          <li class="d-flex align-items-center mb-3"><i class="mdi mdi-account-outline mdi-24px"></i><span class="fw-semibold mx-2">Ime:</span> <span>Nina Lušin</span></li>
          <li class="d-flex align-items-center mb-3"><i class="mdi mdi-star-outline mdi-24px"></i><span class="fw-semibold mx-2">Vloga:</span> <span>Spletna razvijalka, Razvijalka podatkovnih baz</span></li>
          <li class="d-flex align-items-center mb-3"><i class="mdi mdi-flag-outline mdi-24px"></i><span class="fw-semibold mx-2">Lokacija:</span> <span>Črnuče, Ljubljana</span></li>
          <li class="d-flex align-items-center mb-3"><i class="mdi mdi-translate mdi-24px"></i><span class="fw-semibold mx-2">Jeziki</span> <span>English, Slovenian</span></li>
        </ul>
        <small class="card-text text-uppercase text-muted">Kontakt</small>
        <ul class="list-unstyled my-3 py-1">
          <li class="d-flex align-items-center mb-3"><i class="mdi mdi-phone-outline mdi-24px"></i><span class="fw-semibold mx-2">Telefon:</span> <span>031 541 132</span></li>
          <li class="d-flex align-items-center mb-3"><i class="mdi mdi-email-outline mdi-24px"></i><span class="fw-semibold mx-2">Email:</span> <span>nina.lusin.2501@gmail.com</span></li>
        </ul>
      </div>
    </div>
    <!--/ About User -->
    <!-- Profile Overview -->
    <div class="card mb-4">
      <div class="card-body">
        <small class="card-text text-uppercase text-muted">Splošni pregled</small>
        <ul class="list-unstyled mb-0 mt-3 pt-1">
        <li class="d-flex align-items-center mb-3"><span class="fw-semibold mx-2">Web Development</span></li>

          <li class="d-flex align-items-center mb-3">Laravel</li>
          <li class="d-flex align-items-center mb-3">HTML</li>
          <li class="d-flex align-items-center mb-3">PHP</li>
          <li class="d-flex align-items-center mb-3">CSS</li>
          <li class="d-flex align-items-center mb-3">Javascript</li>
          <br>
          <li class="d-flex align-items-center mb-3"><span class="fw-semibold mx-2">Database Development</span></li>
          <li class="d-flex align-items-center mb-3">Oracle</li>
          <li class="d-flex align-items-center mb-3">DB2</li>
          <li class="d-flex align-items-center mb-3">Microsoft SQL Server</li>
          <li class="d-flex align-items-center mb-3">MySQL</li>
          <li class="d-flex align-items-center mb-3">SQLite</li>

        </ul>
      </div>
    </div>
    <!--/ Profile Overview -->
  </div>

  <div class="col-xl-9 col-lg-9 col-md-9 dark-bg">
    <!-- Activity Timeline -->
    <div class="card card-action mb-4 dark-bg">

    <div class="row overflow-hidden dark-bg">
  <div class="dark-bg col-12 ">
    <ul class="timeline timeline-center mt-4">
      <li class="timeline-item pb-md-4 pb-5">
        <span class="timeline-indicator timeline-indicator-primary" data-aos="zoom-in" data-aos-delay="200">
          <i class="mdi mdi-clock-time-eight"></i>
        </span>
        <div class="timeline-event card p-0" data-aos="fade-right">
          <div class="card-header d-flex justify-content-between align-items-center flex-wrap">
            <h6 class="card-title mb-0">Vrhovno državno tožilstvo Republike Slovenije, Ljubljana (Slovenija) </h6>

            <div class="meta">
              <span class="badge rounded-pill bg-label-primary">Laravel</span>
              <span class="badge rounded-pill bg-label-primary">PHP</span>
              <span class="badge rounded-pill bg-label-primary">HTML</span>
              <span class="badge rounded-pill bg-label-primary">CSS</span>
              <span class="badge rounded-pill bg-label-primary">Javascript</span>
              <span class="badge rounded-pill bg-label-primary">MS SQL Server</span>
              <span class="badge rounded-pill bg-label-primary">Adobe Creative Cloud stack</span>
            </div>
            <br>
            <a  data-bs-toggle="collapse" href="#text01" role="button" aria-expanded="false" aria-controls="text01">
              <i>Razvoj podatkovnega skladišča, informacijskega portala in projektno delo</i> <br><br>

              <a class="btn btn-primary me-1" data-bs-toggle="collapse" href="#text01" role="button" aria-expanded="false" aria-controls="text01">
                Več...
              </a>
            </a>

          </div>
          <div class="card-body">

          <div class="collapse" id="text01">
            <div class="d-grid d-sm-flex p-3 border">
              <p class="mb-2">
                <ul>
                  <li>Načrtovanje spletnega portala tožilstva na podlagi zajema potreb zaposlenih na državnih tožilstvih po sloveniji in razvoj ter vzdrževanje le tega (Laravel, PHP, JS, HTML, CSS)</li>
                  <li>Načrtovanje, razvoj in administracija podatkovnega skladišča MS SQL za centralni informacijski sistem državnih tožilstev in uporabniških vmesnikov na spletnem portalu tožilstva   </li>
                  <li>Priprava razvojne dokumentacije za izvajalce na projektih, ter sodelovanje pri koordinaciji tovrstnih projektov</li>
                  <li>Izobraževanje in uvajanje zaposlenih ter priprava dokumentacije novih orodij na tožilstvu in priprava pisnih in video navodil</li>
                  <li>Koordinacija z zunanjimi izvajalci na področju sistemske administracije in spletnega razvoja pri delu na centralnem sistemu tožilstva ter pripadajočem podatkovnem skladišču</li>
                  <li>Priprava dokumentacije za interna/javna naročila na podlagi potreb tožilstva in uskladitvijo z Ministrstvom za Pravosodje</li>
                  <li>Tehnična urednica internega glasnika Tožilskih obvestil – oblikovanje in priprava obvestil za tisk in elektronsko objavo (Adobe Creative Cloud stack)</li>
                </ul>
              </p>
            </div>
          </div>


          </div>
          <div class="timeline-event-time">05/2020 <br>-<br> 05/2022</div>
        </div>
      </li>

      <li class="timeline-item pb-md-4 pb-5">
        <span class="timeline-indicator timeline-indicator-primary" data-aos="zoom-in" data-aos-delay="200">
          <i class="mdi mdi-clock-time-eight"></i>
        </span>
        <div class="timeline-event card p-0" data-aos="fade-right">
          <div class="card-header d-flex justify-content-between align-items-center flex-wrap">
            <h6 class="card-title mb-0">SRC d.o.o., Ljubljana (Slovenija)  </h6>

            <div class="meta">
              <span class="badge rounded-pill bg-label-primary">Oracle</span>
              <span class="badge rounded-pill bg-label-primary">MS SQL Server</span>
              <span class="badge rounded-pill bg-label-primary">IBM DB2</span>
            </div>
             <br> <br>
            <a  data-bs-toggle="collapse" href="#text02" role="button" aria-expanded="false" aria-controls="text02">
              <i>Načrtovanje, razvoj, optimizacija in vzdrževanje zalednega sistema na podatkovnih bazah </i> <br><br>
              <a class="btn btn-primary me-1" data-bs-toggle="collapse" href="#text02" role="button" aria-expanded="false" aria-controls="text02">
                Več...
              </a>
            </a>
          </div>
          <div class="card-body">
            <div class="collapse" id="text02">
              <div class="d-grid d-sm-flex p-3 border">
                <p class="mb-2">
                <ul>
                  <li>Načrtovanje arhitekture, razvoj poslovne logike na podatkovnih bazah, optimizacija hitrosti in arhitekture, ter vzdrževanje na projektih projektih za državno upravo, ki so zaupne ali tajne narave</li>
                  <li>Priprava arhitekture in razvoj poslovne logike na podatkovni bazi za Bankart-ov sistem PSD2, v tehnologiji DB2, priprava tehnične dokumentacije za nadaljni razvoj</li>
                  <li>Administracija podatkovnih baz DB2 in Oracle</li>
                  <li>Priprava razvojne dokumentacije na podlagi razgovorov z naročnikom in delavnicah s sodelujočim podjetjem </li>
                </ul>
                </p>
              </div>
            </div>

          </div>
          <div class="timeline-event-time">03/2018 <br>-<br> 05/2020</div>
        </div>
      </li>

      <li class="timeline-item pb-md-4 pb-5">
        <span class="timeline-indicator timeline-indicator-primary" data-aos="zoom-in" data-aos-delay="200">
          <i class="mdi mdi-clock-time-eight"></i>
        </span>
        <div class="timeline-event card p-0" data-aos="fade-right">
          <div class="card-header d-flex justify-content-between align-items-center flex-wrap">
            <h6 class="card-title mb-0">Mikropis Holding, Žalec (Slovenija)  </h6>

            <div class="meta">
              <span class="badge rounded-pill bg-label-primary">IBM DB2</span>
              <span class="badge rounded-pill bg-label-primary">MySQL</span>
              <span class="badge rounded-pill bg-label-primary">SQLite</span>
            </div>
            <br> <br>
            <a  data-bs-toggle="collapse" href="#text03" role="button" aria-expanded="false" aria-controls="text03">
              <i>Načrtovanje, razvoj, optimizacija in vzdrževanje zalednega sistema na podatkovnih bazah  </i><br><br>
              <a class="btn btn-primary me-1" data-bs-toggle="collapse" href="#text03" role="button" aria-expanded="false" aria-controls="text03">
                Več...
              </a>
            </a>

          </div>
          <div class="card-body">
            <div class="collapse" id="text03">
              <div class="d-grid d-sm-flex p-3 border">
                <p class="mb-2">
                <ul>
                <li>Načrtovanje arhitekture, razvoj poslovne logike, optimizacija hitrosti in arhitekture, ter vzdrževanje zalednega sistema na projektu 24alife - DB2 - https://www.24alife.com</li>
                <li>Načrtovanje arhitekture in razvoj poslovne logike zalednega sistema na projektu Prozdrav2; Orodje NpZdM – MySQL - http://npzdm.prozdrav2.si/  </li>
                <li>Priprava predlog za avtomatizacijo pisanja/generiranja tehnične dokumentacije arhitekture podatkovne baze v orodju PowerDesigner </li>
                <li>Priprava tehnične dokumentacije za predajo v razvoj (mobilni, spletni in namizni programi, med sabo sinhronizirani)</li>
                <li>Izvedba izobraževanj za sodelavce na področju podatkovnih baz </li>
                <li>Razgovori z  naročniki in priprava analitike, ter razvojne dokumentacije na projektu 24alife </li>
              </ul>
                </p>
              </div>
            </div>

          </div>

          <div class="timeline-event-time">04/2016  <br>-<br> 11/2017 </div>
        </div>
      </li>

      <li class="timeline-item pb-md-4 pb-5">
        <span class="timeline-indicator timeline-indicator-primary" data-aos="zoom-in" data-aos-delay="200">
          <i class="mdi mdi-clock-time-eight"></i>
        </span>
        <div class="timeline-event card p-0" data-aos="fade-right">
          <div class="card-header d-flex justify-content-between align-items-center flex-wrap">
            <h6 class="card-title mb-0">Inkolteh d.o.o. Slovenska Bistrica (Slovenija) </h6>

            <div class="meta">
              <span class="badge rounded-pill bg-label-primary">MS SQL Server</span>
              <span class="badge rounded-pill bg-label-primary">PHP</span>
              <span class="badge rounded-pill bg-label-primary">HTML</span>
              <span class="badge rounded-pill bg-label-primary">CSS</span>
              <span class="badge rounded-pill bg-label-primary">C#</span>
              <span class="badge rounded-pill bg-label-primary">Java</span>
            </div>
             <br> <br>
             <a  data-bs-toggle="collapse" href="#text04" role="button" aria-expanded="false" aria-controls="text04">
              <i>Načrtovanje in razvoj arhitekture MES sistema, zalednega sistema na podatkovnih bazah za proizvodnjo, konfiguracija in vpeljava dokumentnega sistema, razvoj spletnih strani  </i>
              <br><br>
              <a class="btn btn-primary me-1" data-bs-toggle="collapse" href="#text04" role="button" aria-expanded="false" aria-controls="text04">
                Več...
              </a>
            </a>
          </div>
          <div class="card-body">
            <div class="collapse" id="text04">
              <div class="d-grid d-sm-flex p-3 border">
                <p class="mb-2">
                <ul>
                  <li>Načrtovanje, programiranje, administracija in vzdrževanje podatkovne baze samostojno za celoten projekt CCLEAP, kjer je vsa poslovna logika v podatkovni bazi MS SQL http://www.ccleap.com/</li>
                  <li>Popis obstoječega stanja in sistema za upravljanje s proizvodnjo v podjetju</li>
                  <li>Opravljena analiza za MES sistem, ter priprava razvojne dokumentacije, razdelitev razvoja na faze/module  Načrtovanje uporabniških vmesnikov, priprava razvojne dokumentacije za razvoj zalednega sistema in uporabniških mask</li>
                  <li>Uvoz, obdelava in analiza podatkov iz SCADA sistema (sam SCADA sistem razvit v podjetju Inkolteh d.o.o.)  Načrtovanje in razvoj integracije Pantheon ERP sistema z CCLEAP MES sistemom  </li>
                  <li>Razvoj C# skript za program ABBYY (program za prepoznavanje besedila - OCR)</li>
                  <li>Administracija in razvoj spletni strani (HTML, CSS, PHP)   http://www.inkolteh.com/, http://www.mteh.si/ [od objave sedaj že posodobljen dizajn]  </li>
                  <li>Vpeljava sistema v upravo in proizvodnjo, usposabljanje/učenje končnih uporabnikov  </li>
                  <li>Tehnična podpora uporabnikom  </li>
                  <li>	Konfiguracija sistema ShakeSpeare in razvoj komponent za dotični sistem v Javi</li>
                </ul>
                </p>
              </div>
            </div>

          </div>

          <div class="timeline-event-time">11/2014 <br>-<br> 03/2016 </div>
        </div>
      </li>

      <li class="timeline-item pb-md-4 pb-5">
        <span class="timeline-indicator timeline-indicator-primary" data-aos="zoom-in" data-aos-delay="200">
          <i class="mdi mdi-clock-time-eight"></i>
        </span>
        <div class="timeline-event card p-0" data-aos="fade-right">
          <div class="card-header d-flex justify-content-between align-items-center flex-wrap">
            <h6 class="card-title mb-0">Mikropis Holding, Žalec (Slovenija)   </h6>
            <p>
            <br> <br>
              <div class="meta">
                <span class="badge rounded-pill bg-label-primary">IBM DB2</span>
              </div>
            </p>
             <br> <br>
             <a  data-bs-toggle="collapse" href="#text05" role="button" aria-expanded="false" aria-controls="text05">
              <i>Načrtovanje in razvoj zalednega sistema na podatkovnih bazah, izdelava uporabniških vmesnikov  </i>
              <br><br>
              <a class="btn btn-primary me-1" data-bs-toggle="collapse" href="#text05" role="button" aria-expanded="false" aria-controls="text05">
                Več...
              </a>
            </a>
          </div>

          <div class="card-body">
            <div class="collapse" id="text05">
              <div class="d-grid d-sm-flex p-3 border">
                <p class="mb-2">
                <ul>
                  <li>Načrtovanje in razvoj podatkovne baze za projekt 24alife DB2 skupaj s sinhronizacijo z mobilnimi napravami</li>
                  <li>Razvoj podatkovne baze za »Kiosk svetovalec za kozmetiko« in »Kiosk svetovalec za zdravo prehrano« DB2 za Mercator Srbija</li>
                  <li>Razvoj podatkovne baze za računanje dopustnih dni DB2 za Banko Celje  </li>
                  <li>Priprava dokumentacije za izdelavo uporabniških vmesnikov na projektu  24alife – backend in spletni portal </li>
                </ul>
                </p>
              </div>
            </div>

          </div>

          <div class="timeline-event-time">08/2012 <br>-<br> 03/2014  </div>
        </div>
      </li>

    </ul>
  </div>
</div>


    </div>
    <!--/ Activity Timeline -->


  </div>
</div>
<!--/ User Profile Content -->
@endsection
