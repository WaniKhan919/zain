<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title dir="rtl">خدمات زين</title>
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css" integrity="sha384-xOolHFLEh07PJGoPkLv1IbcEPTNtaed2xpHsD9ESMhqIYd0nLMwNLD69Npy4HI+N" crossorigin="anonymous">
  <style>
    body{
      background: linear-gradient(90deg, rgb(50, 179, 172) 0%, rgb(84, 56, 104) 100%) !important;
    }
    .zain-logo{
      height: 28px;
    }
    .card-header{
      border: none;
    }
    .card-header h1{
      font-weight: 700;
    }
    .lead{
      font-size: 1.175em;
      font-weight: 300;
    }
  </style>
</head>
<body >
  <div class="container mb-5"  dir="rtl">
    <nav class="navbar navbar-expand-lg"  dir="rtl">
      <a class="navbar-brand" href="#"  dir="rtl">
        <img src="{{ asset('front_assets/logo/zain-white.png') }}" class="zain-logo" alt="">
      </a>
    </nav>
    <div class="container mt-5" >
      <div class="row">
        <div class="col-lg-2"></div>
        <div class="col-lg-8">
            <div class="card">
              <div class="card-header  bg-white">
                <h1 dir="ltr" class="text-center">{{ $data->title }}</h1>
              </div>
              <div class="card-body">
                <div class="row">
                  <div class="col-lg-8 m-auto">
                    <p dir="ltr" class="text-center lead">{{ $data->description }}</p>
                  </div>
                </div>
                <div class="col text-center">
                  <a href="tel:{{ $service->shortcode ?? '' }}" dir="ltr" class="btn btn-primary sub">{{ $data->button }}</a>
                  <a href="{{ url($service->offerUrl ?? '') }}" dir="ltr" class="btn btn-outline-primary sub"> الاشتراك</a>
                </div>
              </div>
            </div>
        </div>
        <div class="col-lg-2"></div>
      </div>
    </div>
  </div>
  
  <script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-Fy6S3B9q64WdZWQUiU+q4/2Lc9npb8tCaSX9FK7E8HnRr0Jz8D6OP9dO5Vg3Q9ct" crossorigin="anonymous"></script>
<script>
  $('.sub').click(function (e) { 
    $.ajax({
      type: "get",
      url: "{{  }}",
      data: "data",
      dataType: "dataType",
      success: function (response) {
        
      }
    });
    
  });
</script>
</body>
</html>