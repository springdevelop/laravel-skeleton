<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
    <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">
        <meta property="og:locale" content="vi_VN" />
<meta property="og:type" content="article" />
<meta property="og:title" content="Bạn muốn đồng hành cùng HueIC chung tay vì cộng đồng?" />
<meta property="og:description" content='Cấp phát miễn phí Nước rửa tay khô diệt khuẩn, chứa cồn y tế, nano Ag, tinh dầu tự nhiên, cùng bà con vượt qua mùa dịch.' />
<meta property="og:url" content="https://congdong.hueic.edu.vn" />
<meta property="og:site_name" content="Chương trình vì cộng đồng của Trường cao đẳng công nghiệp huế" />
<meta property="article:tag" content="Nước rửa tay khô Diệt khuẩn" />
<meta property="article:tag" content="Nước rửa tay khô Diệt khuẩn cho cộng đồng" />
<meta property="article:tag" content="trường cao đẳng công nghiệp huế" />
<meta property="og:image" content="https://congdong.hueic.edu.vn/images/hueic.jpg" />
<meta property="og:image:secure_url" content="https://congdong.hueic.edu.vn/images/hueic.jpg" />
        <title>HUEIC vì cộng đồng</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">
        <link href="https://fonts.googleapis.com/css?family=Ma+Shan+Zheng&display=swap" rel="stylesheet">
         <link href="{{ asset('/css/app.css') }}" rel="stylesheet">
<!-- Global site tag (gtag.js) - Google Analytics -->
<script async src="https://www.googletagmanager.com/gtag/js?id=UA-68497858-3"></script>
<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());

  gtag('config', 'UA-68497858-3');
</script>

    </head>
    <body>
        <div id="app">
            <router-view></router-view>
        </div>
        <script type="text/javascript" src="{{asset('js/app.js') }}"></script>
    </body>
</html>
