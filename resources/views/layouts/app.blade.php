<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">

<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0, minimum-scale=1.0, maximum-scale=1.0, user-scalable=no">

    <title>@yield('title','mshop首页')</title>

    <link href="/assets/shop/AmazeUI-2.4.2/assets/css/amazeui.css" rel="stylesheet" type="text/css" />
    <link href="/assets/shop/AmazeUI-2.4.2/assets/css/admin.css" rel="stylesheet" type="text/css" />

    <link href="/assets/shop/basic/css/demo.css" rel="stylesheet" type="text/css" />

    <link href="/assets/shop/css/hmstyle.css" rel="stylesheet" type="text/css"/>
    <link href="/assets/shop/css/skin.css" rel="stylesheet" type="text/css" />
    <script src="/assets/shop/AmazeUI-2.4.2/assets/js/jquery.min.js"></script>
    <script src="/assets/shop/AmazeUI-2.4.2/assets/js/amazeui.min.js"></script>

</head>

<body>

<!-- –––––––––––––––[ HEADER ]––––––––––––––– -->
@include('common.home._header')
@include('common.home._search')
<!-- –––––––––––––––[ HEADER ]––––––––––––––– -->


@yield('content')

<!-- –––––––––––––––[ FOOTER ]––––––––––––––– -->
@include('common.home._footer')
<!-- –––––––––––––––[ FOOTER ]––––––––––––––– -->

<!-- –––––––––––––––[ SIDEBAR ]––––––––––––––– -->
@include('common.home._sidebar')
<!-- –––––––––––––––[ SIDEBAR]––––––––––––––– -->


</body>


<script>
    window.jQuery || document.write('<script src="/assets/shop/basic/js/jquery.min.js "><\/script>');
</script>

<script type="text/javascript " src="/assets/shop/basic/js/quick_links.js "></script>


</html>