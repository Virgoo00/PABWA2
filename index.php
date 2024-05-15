<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">
  <title>CoinMarket Ngaco</title>
  <meta content="" name="description">
  <meta content="" name="keywords">

  <!-- Favicons -->
  <link href="assets/img/favicon.png" rel="icon">
  <link href="assets/img/apple-touch-icon.png" rel="apple-touch-icon">

  <!-- Fonts -->
  <link href="https://fonts.googleapis.com" rel="preconnect">
  <link href="https://fonts.gstatic.com" rel="preconnect" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Open+Sans:ital,wght@0,300;0,400;0,500;0,600;0,700;0,800;1,300;1,400;1,500;1,600;1,700;1,800&family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&family=Jost:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
  <link href="assets/vendor/aos/aos.css" rel="stylesheet">
  <link href="assets/vendor/glightbox/css/glightbox.min.css" rel="stylesheet">
  <link href="assets/vendor/swiper/swiper-bundle.min.css" rel="stylesheet">

  <!-- Main CSS File -->
  <link href="assets/css/main.css" rel="stylesheet">


</head>

<body class="index-page">
  

  <header id="header" class="header d-flex align-items-center fixed-top">
    <div class="container-fluid container-xl position-relative d-flex align-items-center">

      <a href="index.html" class="logo d-flex align-items-center me-auto">
        <h1 class="sitename">CoinMarket API</h1>
      </a>

      <nav id="navmenu" class="navmenu">
        <ul>
          <li><a href="index.php#hero" class="">Home</a></li>
          <li><a href="index.php#News">News</a></li>
          <li><a href="index.php#community">Community</a></li>
          <li><a href="index.php#pricing">Pricing</a></li>
          <li class="dropdown"><a href="#"><span>Dropdown</span> <i class="bi bi-chevron-down toggle-dropdown"></i></a>
            <ul>
              <li><a href="#">Dropdown 1</a></li>
              <li class="dropdown"><a href="#"><span>Deep Dropdown</span> <i class="bi bi-chevron-down toggle-dropdown"></i></a>
                <ul>
                  <li><a href="#">Deep Dropdown 1</a></li>
                  <li><a href="#">Deep Dropdown 2</a></li>
                  <li><a href="#">Deep Dropdown 3</a></li>
                  <li><a href="#">Deep Dropdown 4</a></li>
                  <li><a href="#">Deep Dropdown 5</a></li>
                </ul>
              </li>
              <li><a href="#">Dropdown 2</a></li>
              <li><a href="#">Dropdown 3</a></li>
              <li><a href="#">Dropdown 4</a></li>
            </ul>
          </li>
        </ul>
        <i class="mobile-nav-toggle d-xl-none bi bi-list"></i>
      </nav>

      <a class="btn-getstarted" href="index.html#News">Get Started</a>

    </div>
  </header>

  <main class="main">

    <!-- Hero Section -->
    <section id="hero" class="hero section">

      <div class="container">
        <div class="row gy-4">
          <div class="col-lg-6 order-2 order-lg-1 d-flex flex-column justify-content-center">
            <h1 class="">Better Solutions For Your Finance</h1>
            <p class="">We are team of talented designers making websites with CoinMarketCap API</p>
            <div class="d-flex">
              <a href="#about" class="btn-get-started">Get Started</a>
              <a href="https://www.youtube.com/watch?v=EJhuYk4PPaQ" class="glightbox btn-watch-video d-flex align-items-center"><i class="bi bi-play-circle"></i><span>Watch Video</span></a>
            </div>
          </div>
          <div class="col-lg-6 order-1 order-lg-2 hero-img">
            <img src="assets/img/hero-img.png" class="img-fluid animated" alt="">
          </div>
        </div>
      </div>

    </section>

    <section id="clients-2" class="clients-2 section">

      <div class="container">

        <div class="swiper">
          <script type="application/json" class="swiper-config">
            {
              "loop": true,
              "speed": 600,
              "autoplay": {
                "delay": 5000
              },
              "slidesPerView": "auto",
              "pagination": {
                "el": ".swiper-pagination",
                "type": "bullets",
                "clickable": true
              },
              "breakpoints": {
                "320": {
                  "slidesPerView": 2,
                  "spaceBetween": 40
                },
                "480": {
                  "slidesPerView": 3,
                  "spaceBetween": 60
                },
                "640": {
                  "slidesPerView": 4,
                  "spaceBetween": 80
                },
                "992": {
                  "slidesPerView": 5,
                  "spaceBetween": 120
                },
                "1200": {
                  "slidesPerView": 6,
                  "spaceBetween": 120
                }
              }
            }
          </script>
          <div class="swiper-wrapper align-items-center">
            <div class="swiper-slide"><img src="assets/img/clients/client-1.png" class="img-fluid" alt=""></div>
            <div class="swiper-slide"><img src="assets/img/clients/client-2.png" class="img-fluid" alt=""></div>
            <div class="swiper-slide"><img src="assets/img/clients/client-3.png" class="img-fluid" alt=""></div>
            <div class="swiper-slide"><img src="assets/img/clients/client-4.png" class="img-fluid" alt=""></div>
            <div class="swiper-slide"><img src="assets/img/clients/client-5.png" class="img-fluid" alt=""></div>
            <div class="swiper-slide"><img src="assets/img/clients/client-6.png" class="img-fluid" alt=""></div>
            <div class="swiper-slide"><img src="assets/img/clients/client-7.png" class="img-fluid" alt=""></div>
            <div class="swiper-slide"><img src="assets/img/clients/client-8.png" class="img-fluid" alt=""></div>
          </div>
        </div>

      </div>

    </section>

    <!-- News Section -->
    <section id="News" class="News section">

      <!-- Section Title -->
      <div class="container section-title" data-aos="fade-up">
        <h2 class="">Trade News</h2>
      </div><!-- End Section Title -->

      <div class="container">
        <h1 class="my-4">Data Koin</h1>
        <button id="monitorBtn" class="btn btn-primary mb-3">Monitor</button>
        <table id="coinTable" class="table table-striped table-bordered">
          <thead>
            <tr>
              <th>Rank</th>
              <th>Name</th>
              <th>Symbol</th>
              <th>Price (IDR)</th>
              <th>Volume (IDR)</th>
              <th>1h (%)</th>
              <th>1d (%)</th>
              <th>1w (%)</th>
              <th>Monitor</th>
              <th>Action</th>
            </tr>
          </thead>
          <tbody></tbody>
        </table>
      </div>

      <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
      <script src="https://cdn.datatables.net/1.11.4/js/jquery.dataTables.min.js"></script>
      <script src="https://cdn.datatables.net/1.11.4/js/dataTables.bootstrap4.min.js"></script>

      <script>
        $(document).ready(function() {
          const url = 'https://pro-api.coinmarketcap.com/v1/cryptocurrency/listings/latest';
          const parameters = {
            start: '1',
            limit: '1000', 
            convert: 'IDR' 
          };

          const headers = {
            Accept: 'application/json',
            'X-CMC_PRO_API_KEY': '2bbd134c-e258-4cc2-8751-72c770dfd744'
          };

          const qs = new URLSearchParams(parameters).toString();
          const requestUrl = `${url}?${qs}`;

          fetch(requestUrl, {
            method: 'GET',
            headers: headers
          })
            .then(response => {
              if (!response.ok) {
                throw new Error('Network response was not ok');
              }
              return response.json();
            })
            .then(data => {
              const coinTable = $('#coinTable').DataTable({
                data: data.data,
                columns: [
                  { data: 'cmc_rank' },
                  { data: 'name' },
                  { data: 'symbol' },
                  { data: 'quote.IDR.price',
                    render: function(data, type, row) {
                      return parseFloat(data).toLocaleString('id-ID', { style: 'currency', currency: 'IDR' });
                    }
                  },
                  { data: 'quote.IDR.volume_24h',
                    render: function(data, type, row) {
                      return parseFloat(data).toLocaleString('id-ID', { style: 'currency', currency: 'IDR' });
                    }
                  },
                  { data: 'quote.IDR.percent_change_1h', 
                    render: function(data, type, row) {
                      return parseFloat(data).toFixed(2) + "%";
                    }
                  },
                  { data: 'quote.IDR.percent_change_24h', 
                    render: function(data, type, row) {
                      return parseFloat(data).toFixed(2) + "%";
                    } 
                  },
                  { data: 'quote.IDR.percent_change_7d', 
                    render: function(data, type, row) {
                      return parseFloat(data).toFixed(2) + "%";
                    }
                  },
                  {
                    data: null,
                    render: function(data, type, row) {
                      return '<input type="checkbox" name="' + row.symbol + '" value="' + row.symbol + '">';
                    }
                  },
                  { 
                    data: null,
                    render: function(data, type, row) {
                      return '<button class="btn btn-primary">Action</button>';
                    }
                  }
                ],
                order: [[0, 'asc']], 
                paging: true,
                pageLength: 50 
              });
            })
            .catch(error => {
              console.error('Terjadi kesalahan ', error);
            });

          $('#monitorBtn').on('click', function() {
            const selectedSymbols = [];
            $('#coinTable tbody input[type="checkbox"]:checked').each(function() {
              selectedSymbols.push($(this).val());
            });
            const symbolsQuery = selectedSymbols.join(',');
            const monitorUrl = `monitor.php?coin=${symbolsQuery}`;
            window.open(monitorUrl, '_blank');
          });

          $('#coinTable tbody').on('click', 'button', function() {
            var data = coinTable.row($(this).parents('tr')).data();
            console.log(data);
          });
        });
      </script>

      <div class="tradingview-widget-container">
      <div class="tradingview-widget-container__widget"></div>
      <script type="text/javascript" src="https://s3.tradingview.com/external-embedding/embed-widget-ticker-tape.js" async>
        {
          "symbols" [
            {
              "proName": "FOREXCOM:SPXUSD",
              "title": "S&P 500 Index"
            },
            {
              "proName": "FOREXCOM:NSXUSD",
              "title": "US 100 Cash CFD"
            },
            {
              "proName": "FX_IDC:EURUSD",
              "title": "EUR to USD"
            },
            {
              "proName": "BITSTAMP:BTCUSD",
              "title": "Bitcoin"
            },
            {
              "proName": "BITSTAMP:ETHUSD",
              "title": "Ethereum"
            }
          ],
          "showSymbolLogo"; true,
          "isTransparent"; false,
          "displayMode"; "adaptive",
          "colorTheme"; "dark",
          "locale"; "en"
        }
      </script>
    </section>

    </section>

  <!-- Scroll Top -->
  <a href="#" id="scroll-top" class="scroll-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

  <!-- Preloader -->
  <div id="preloader"></div>

  <!-- Vendor JS Files -->
  <script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="assets/vendor/php-email-form/validate.js"></script>
  <script src="assets/vendor/aos/aos.js"></script>
  <script src="assets/vendor/glightbox/js/glightbox.min.js"></script>
  <script src="assets/vendor/swiper/swiper-bundle.min.js"></script>
  <script src="assets/vendor/waypoints/noframework.waypoints.js"></script>
  <script src="assets/vendor/imagesloaded/imagesloaded.pkgd.min.js"></script>
  <script src="assets/vendor/isotope-layout/isotope.pkgd.min.js"></script>

  <!-- Main JS File -->
  <script src="assets/js/main.js"></script>

</body>

</html>