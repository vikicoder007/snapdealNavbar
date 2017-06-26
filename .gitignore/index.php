<!DOCTYPE html>
<html lang="en">
<head>
  <title>Shoping</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
  <style>
.content_container {
    width: 100%;
    padding: 5px;
    margin-top: 15px;
    margin-bottom: 5px;
    float: left;
}
.content_btn {
    display: inline-block;
    border-radius: 2px;
    padding: 10px 20px;
    font-size: 13px;
    font-weight: 500;
    transition: box-shadow .2s ease;
    vertical-align: super;
    cursor: pointer;
    outline: none;
    background: #2874f0;
    color: #fff;
    box-shadow: 0 2px 4px 0 rgba(0,0,0,.2);
    border: none;
    font-weight: bold;
}
.product_slider_item {
    text-align: center;
}
.product_slider_item > a {
    line-height: 30px;
}
.product_slider_item_price {
    width: 100%;
    color: gray;
    float: left;
    text-align: center;
    font-size: 13px;
}
.product_slider_item_title {
    display: block;
    width: 100%;
    color: #000;
    font-weight: bold;
    float: left;
    text-align: center;
}
.product_slider_item_discount {
    width: 100%;
    color: gray;
    font-weight: bold;
    float: left;
    text-align: center;
}
.product_slider_item > img {
    width: 100%;
}
.content_box {
    background: #fff;
    height: auto;
    width: 100%;
    float: left;
    padding: 10px 0px;
}
.data_slider_nav_left {
    position: absolute;
    top: 25%;
    left: 0px;
    background: #fff;
    width: 50px;
    text-align: center;
    font-size: 30px;
    color: #000;
padding: 35px 10px;
    box-shadow: 3px 0px 5px 0px #00000080;
    border-top-right-radius: 5px;
    border-bottom-right-radius: 5px;
    border: none;
}
.data_slider_nav_right {
    position: absolute;
    top: 25%;
    right: 0px;
    background: #fff;
    width: 50px;
    text-align: center;
    font-size: 30px;
    color: #000;
padding: 35px 10px;
    box-shadow: -3px 2px 5px 0px #00000080;
    border-top-left-radius: 5px;
    border-bottom-left-radius: 5px;
    border: none;
}

body {
    background-color: #fff1f1 !important;
}
.nav_quicklinks {
    height: auto;
    background: #fff;
    padding: 8px;
}
.nav_quicklinks a {
    color: #000;
    font-size: 14px;
    padding: 0px 10px;
    border-right: 1px solid #f2cdcd99;
    display: block;
    float: left;
    border-left: 1px solid #f2cdcd99;
    font-weight: 400;
}

.pr{
position:relative;
}
.nav_mini_menu {
    float: right;
    width: auto;
}
.drop_data {
    position: absolute;
    background: #fff;
    height: 300px;
    width: 100%;
    top: 20px;
    left: 0px;
    z-index: 1111;
    display: none;
}

.drop_data:hover{
 display: block;
}

.nav_dropdowns a:hover .drop_data {
 display: block;
}
.nav_dropdowns a {
    color: #fff;
    font-weight: bold;
    padding: 0px 5px;
    text-align: center;
    text-decoration: none;
    display: block;
    float: left;
}

.nav_mini_menu > a {
    display: block;
    float: left;
    color: #fff;
    font-weight: bold;
    padding: 0px 10px;
    margin-bottom: 5px;
    font-size: 12px;
    text-decoration: none;
}
.cart_items_count {
    background-color: #2469d9;
    box-shadow: 0 2px 4px 0 rgba(0,0,0,.23),inset 1px 1px 0 0 hsla(0,0%,100%,.2);
    padding: 10px 0;
    text-align: center;
    height: 40px;
    border-radius: 2px;
    margin-top: 0px;
    width: 120px;
    display: inline-block;
    border: none;
    color: #fff;
    font-weight: bold;
}
.s_navbar {
    height: 85px;
    width: 100%;
    background: #2874f0;
    position: fixed;
    z-index: 111;
    top: 0px;
    left: 0px;
    padding: 10px 0px;
}
.nav_dropdowns {
    margin-top: 85px;
    width: 100%;
    height: auto;
    background: #2874f0;
    padding: 5px 0px;
}

.nav_search_holder {
    width: 100%;
}

.nav_search_holder > input {
    width: 90%;
    height: 40px;
    border: none;
    padding: 10px;
    border-top-left-radius: 3px;
    border-bottom-left-radius: 3px;
    box-shadow: 0 2px 4px 0 rgba(0,0,0,.23),inset 1px 1px 0 0 hsla(0,0%,100%,.2);
}

.nav_search_holder > button {
    width: 10%;
    height: 40px;
    border: none;
    margin: 0px;
    border-top-right-radius: 3px;
    border-bottom-right-radius: 3px;
    background: #eadf07;
    box-shadow: 0 2px 4px 0 rgba(0,0,0,.23),inset 1px 1px 0 0 hsla(0,0%,100%,.2);
}


.w100{
width:100%;
}
.mt100{
margin-top:100px;
}
  </style>
</head>
<body>

<div class="s_navbar">
<div class="container">
<div class="row">
  <div class="col-sm-12 ">
    <div class="nav_mini_menu">
      <a href="#">Sell on Flipcart</a>
      <a href="#">Advertise</a>
      <a href="#">Gift Card</a>
      <a href="#">24x7 Customer Care</a>
      <a href="#">Track Order</a>
      <a href="#">Sign up</a>
      <a href="#">Login</a>
 </div>
 </div>
</div>
<div class="row">
  <div class="col-sm-2"><img class="w100" src="https://img1a.flixcart.com/www/linchpin/fk-cp-zion/img/fk-logo_9fddff.png"></div>
  <div class="col-sm-8"><div class="nav_search_holder"><input type="text"><button>Seach</button></div></div>
  <div class="col-sm-2"><button class="cart_items_count">Cart 0 Items</button></div>
</div>
</div>
</div>


<div class="nav_dropdowns">
<div class="container">
<div class="row">
<div class="col-sm-10 col-sm-offset-1 pr">
<a href="#">Menu Name <span class="glyphicon glyphicon-chevron-down"></span><div class="drop_data"></div></a>
<a href="#">Menu Name <span class="glyphicon glyphicon-chevron-down"></span><div class="drop_data"></div></a>
<a href="#">Menu Name <span class="glyphicon glyphicon-chevron-down"></span><div class="drop_data"></div></a>
<a href="#">Menu Name <span class="glyphicon glyphicon-chevron-down"></span><div class="drop_data"></div></a>
<a href="#">Menu Name <span class="glyphicon glyphicon-chevron-down"></span><div class="drop_data"></div></a>
<a href="#">Menu Name <span class="glyphicon glyphicon-chevron-down"></span><div class="drop_data"></div></a>

</div>
</div>
</div>
</div>


<div class="nav_quicklinks">
<div class="container">
<div class="row">
<div class="col-sm-10 col-sm-offset-1 pr">
<a href="#">Go quickly to <span class="glyphicon glyphicon-hand-right"></span></a>
<a href="#">Item</a>
<a href="#">Item</a>
<a href="#">Item</a>
<a href="#">Item</a>
<a href="#">Item</a>
<a href="#">Item</a>
<a href="#">Item</a>
</div>
</div>
</div>
</div>

<div class="content_container">
<div class="content_box">
<div class="col-sm-2">
<h3 style="margin-top: 40%;font-size: 30px;margin-bottom: 20px;" >Top Offers</h3>
<button class="content_btn">View All</button>
</div>
<div class="col-sm-10">





<div id="myCarousel" class="carousel slide" data-ride="carousel">


  <!-- Wrapper for slides -->
  <div class="carousel-inner">
    <div class="item active">
     <div class="col-sm-3 product_slider_item">
           <img src="https://rukminim1.flixcart.com/image/400/400/television/f/7/f/micromax-40a6300fhd-original-imaesby4phgzcwhw.jpeg?q=70">
            <a class="product_slider_item_title" href="#">Vu 80cm (32) HD Ready LED TV </a>
            <a class="product_slider_item_discount" href="#">Flat Rs 3,000 Off</a>
            <a class="product_slider_item_price" href="#">Now Rs 17,900 </a>
    </div>
     <div class="col-sm-3 product_slider_item">
           <img src="https://rukminim1.flixcart.com/image/400/400/television/f/7/f/micromax-40a6300fhd-original-imaesby4phgzcwhw.jpeg?q=70">
            <a class="product_slider_item_title" href="#">Vu 80cm (32) HD Ready LED TV </a>
            <a class="product_slider_item_discount" href="#">Flat Rs 3,000 Off</a>
            <a class="product_slider_item_price" href="#">Now Rs 17,900 </a>
    </div>
     <div class="col-sm-3 product_slider_item">
           <img src="https://rukminim1.flixcart.com/image/400/400/television/f/7/f/micromax-40a6300fhd-original-imaesby4phgzcwhw.jpeg?q=70">
            <a class="product_slider_item_title" href="#">Vu 80cm (32) HD Ready LED TV </a>
            <a class="product_slider_item_discount" href="#">Flat Rs 3,000 Off</a>
            <a class="product_slider_item_price" href="#">Now Rs 17,900 </a>
    </div>
     <div class="col-sm-3 product_slider_item">
           <img src="https://rukminim1.flixcart.com/image/400/400/television/f/7/f/micromax-40a6300fhd-original-imaesby4phgzcwhw.jpeg?q=70">
            <a class="product_slider_item_title" href="#">Vu 80cm (32) HD Ready LED TV </a>
            <a class="product_slider_item_discount" href="#">Flat Rs 3,000 Off</a>
            <a class="product_slider_item_price" href="#">Now Rs 17,900 </a>
    </div>
    </div>

    <div class="item ">
     <div class="col-sm-3 product_slider_item">
           <img src="https://rukminim1.flixcart.com/image/400/400/television/f/7/f/micromax-40a6300fhd-original-imaesby4phgzcwhw.jpeg?q=70">
            <a class="product_slider_item_title" href="#">Vu 80cm (32) HD Ready LED TV </a>
            <a class="product_slider_item_discount" href="#">Flat Rs 3,000 Off</a>
            <a class="product_slider_item_price" href="#">Now Rs 17,900 </a>
    </div>
     <div class="col-sm-3 product_slider_item">
           <img src="https://rukminim1.flixcart.com/image/400/400/television/f/7/f/micromax-40a6300fhd-original-imaesby4phgzcwhw.jpeg?q=70">
            <a class="product_slider_item_title" href="#">Vu 80cm (32) HD Ready LED TV </a>
            <a class="product_slider_item_discount" href="#">Flat Rs 3,000 Off</a>
            <a class="product_slider_item_price" href="#">Now Rs 17,900 </a>
    </div>
     <div class="col-sm-3 product_slider_item">
           <img src="https://rukminim1.flixcart.com/image/400/400/television/f/7/f/micromax-40a6300fhd-original-imaesby4phgzcwhw.jpeg?q=70">
            <a class="product_slider_item_title" href="#">Vu 80cm (32) HD Ready LED TV </a>
            <a class="product_slider_item_discount" href="#">Flat Rs 3,000 Off</a>
            <a class="product_slider_item_price" href="#">Now Rs 17,900 </a>
    </div>
     <div class="col-sm-3 product_slider_item">
           <img src="https://rukminim1.flixcart.com/image/400/400/television/f/7/f/micromax-40a6300fhd-original-imaesby4phgzcwhw.jpeg?q=70">
            <a class="product_slider_item_title" href="#">Vu 80cm (32) HD Ready LED TV </a>
            <a class="product_slider_item_discount" href="#">Flat Rs 3,000 Off</a>
            <a class="product_slider_item_price" href="#">Now Rs 17,900 </a>
    </div>
    </div>

    <div class="item ">
     <div class="col-sm-3 product_slider_item">
           <img src="https://rukminim1.flixcart.com/image/400/400/television/f/7/f/micromax-40a6300fhd-original-imaesby4phgzcwhw.jpeg?q=70">
            <a class="product_slider_item_title" href="#">Vu 80cm (32) HD Ready LED TV </a>
            <a class="product_slider_item_discount" href="#">Flat Rs 3,000 Off</a>
            <a class="product_slider_item_price" href="#">Now Rs 17,900 </a>
    </div>
     <div class="col-sm-3 product_slider_item">
           <img src="https://rukminim1.flixcart.com/image/400/400/television/f/7/f/micromax-40a6300fhd-original-imaesby4phgzcwhw.jpeg?q=70">
            <a class="product_slider_item_title" href="#">Vu 80cm (32) HD Ready LED TV </a>
            <a class="product_slider_item_discount" href="#">Flat Rs 3,000 Off</a>
            <a class="product_slider_item_price" href="#">Now Rs 17,900 </a>
    </div>
     <div class="col-sm-3 product_slider_item">
           <img src="https://rukminim1.flixcart.com/image/400/400/television/f/7/f/micromax-40a6300fhd-original-imaesby4phgzcwhw.jpeg?q=70">
            <a class="product_slider_item_title" href="#">Vu 80cm (32) HD Ready LED TV </a>
            <a class="product_slider_item_discount" href="#">Flat Rs 3,000 Off</a>
            <a class="product_slider_item_price" href="#">Now Rs 17,900 </a>
    </div>
     <div class="col-sm-3 product_slider_item">
           <img src="https://rukminim1.flixcart.com/image/400/400/television/f/7/f/micromax-40a6300fhd-original-imaesby4phgzcwhw.jpeg?q=70">
            <a class="product_slider_item_title" href="#">Vu 80cm (32) HD Ready LED TV </a>
            <a class="product_slider_item_discount" href="#">Flat Rs 3,000 Off</a>
            <a class="product_slider_item_price" href="#">Now Rs 17,900 </a>
    </div>
    </div>

    <div class="item ">
     <div class="col-sm-3 product_slider_item">
           <img src="https://rukminim1.flixcart.com/image/400/400/television/f/7/f/micromax-40a6300fhd-original-imaesby4phgzcwhw.jpeg?q=70">
            <a class="product_slider_item_title" href="#">Vu 80cm (32) HD Ready LED TV </a>
            <a class="product_slider_item_discount" href="#">Flat Rs 3,000 Off</a>
            <a class="product_slider_item_price" href="#">Now Rs 17,900 </a>
    </div>
     <div class="col-sm-3 product_slider_item">
           <img src="https://rukminim1.flixcart.com/image/400/400/television/f/7/f/micromax-40a6300fhd-original-imaesby4phgzcwhw.jpeg?q=70">
            <a class="product_slider_item_title" href="#">Vu 80cm (32) HD Ready LED TV </a>
            <a class="product_slider_item_discount" href="#">Flat Rs 3,000 Off</a>
            <a class="product_slider_item_price" href="#">Now Rs 17,900 </a>
    </div>
     <div class="col-sm-3 product_slider_item">
           <img src="https://rukminim1.flixcart.com/image/400/400/television/f/7/f/micromax-40a6300fhd-original-imaesby4phgzcwhw.jpeg?q=70">
            <a class="product_slider_item_title" href="#">Vu 80cm (32) HD Ready LED TV </a>
            <a class="product_slider_item_discount" href="#">Flat Rs 3,000 Off</a>
            <a class="product_slider_item_price" href="#">Now Rs 17,900 </a>
    </div>
     <div class="col-sm-3 product_slider_item">
           <img src="https://rukminim1.flixcart.com/image/400/400/television/f/7/f/micromax-40a6300fhd-original-imaesby4phgzcwhw.jpeg?q=70">
            <a class="product_slider_item_title" href="#">Vu 80cm (32) HD Ready LED TV </a>
            <a class="product_slider_item_discount" href="#">Flat Rs 3,000 Off</a>
            <a class="product_slider_item_price" href="#">Now Rs 17,900 </a>
    </div>
    </div>
  </div>

  <!-- Left and right controls -->
  <a class="data_slider_nav_left" href="#myCarousel" data-slide="prev">
    <span class="glyphicon glyphicon-chevron-left"></span>
    <span class="sr-only">Previous</span>
  </a>
  <a class="data_slider_nav_right" href="#myCarousel" data-slide="next">
    <span class="glyphicon glyphicon-chevron-right"></span>
    <span class="sr-only">Next</span>
  </a>
</div>
</div>




</div>
</div>


<div class="content_container">
 <img  class="w100" src="https://rukminim1.flixcart.com/merch/2752/194/images/1494369281526.jpg?q=50">
</div>






<div class="content_container">
<div class="content_box">
<div class="col-sm-2">
<h3 style="margin-top: 40%;font-size: 30px;margin-bottom: 20px;" >Top Offers</h3>
<button class="content_btn">View All</button>
</div>
<div class="col-sm-10">





<div id="myCarousel" class="carousel slide" data-ride="carousel">


  <!-- Wrapper for slides -->
  <div class="carousel-inner">
    <div class="item active">
     <div class="col-sm-3 product_slider_item">
           <img src="https://rukminim1.flixcart.com/image/400/400/television/f/7/f/micromax-40a6300fhd-original-imaesby4phgzcwhw.jpeg?q=70">
            <a class="product_slider_item_title" href="#">Vu 80cm (32) HD Ready LED TV </a>
            <a class="product_slider_item_discount" href="#">Flat Rs 3,000 Off</a>
            <a class="product_slider_item_price" href="#">Now Rs 17,900 </a>
    </div>
     <div class="col-sm-3 product_slider_item">
           <img src="https://rukminim1.flixcart.com/image/400/400/television/f/7/f/micromax-40a6300fhd-original-imaesby4phgzcwhw.jpeg?q=70">
            <a class="product_slider_item_title" href="#">Vu 80cm (32) HD Ready LED TV </a>
            <a class="product_slider_item_discount" href="#">Flat Rs 3,000 Off</a>
            <a class="product_slider_item_price" href="#">Now Rs 17,900 </a>
    </div>
     <div class="col-sm-3 product_slider_item">
           <img src="https://rukminim1.flixcart.com/image/400/400/television/f/7/f/micromax-40a6300fhd-original-imaesby4phgzcwhw.jpeg?q=70">
            <a class="product_slider_item_title" href="#">Vu 80cm (32) HD Ready LED TV </a>
            <a class="product_slider_item_discount" href="#">Flat Rs 3,000 Off</a>
            <a class="product_slider_item_price" href="#">Now Rs 17,900 </a>
    </div>
     <div class="col-sm-3 product_slider_item">
           <img src="https://rukminim1.flixcart.com/image/400/400/television/f/7/f/micromax-40a6300fhd-original-imaesby4phgzcwhw.jpeg?q=70">
            <a class="product_slider_item_title" href="#">Vu 80cm (32) HD Ready LED TV </a>
            <a class="product_slider_item_discount" href="#">Flat Rs 3,000 Off</a>
            <a class="product_slider_item_price" href="#">Now Rs 17,900 </a>
    </div>
    </div>

    <div class="item ">
     <div class="col-sm-3 product_slider_item">
           <img src="https://rukminim1.flixcart.com/image/400/400/television/f/7/f/micromax-40a6300fhd-original-imaesby4phgzcwhw.jpeg?q=70">
            <a class="product_slider_item_title" href="#">Vu 80cm (32) HD Ready LED TV </a>
            <a class="product_slider_item_discount" href="#">Flat Rs 3,000 Off</a>
            <a class="product_slider_item_price" href="#">Now Rs 17,900 </a>
    </div>
     <div class="col-sm-3 product_slider_item">
           <img src="https://rukminim1.flixcart.com/image/400/400/television/f/7/f/micromax-40a6300fhd-original-imaesby4phgzcwhw.jpeg?q=70">
            <a class="product_slider_item_title" href="#">Vu 80cm (32) HD Ready LED TV </a>
            <a class="product_slider_item_discount" href="#">Flat Rs 3,000 Off</a>
            <a class="product_slider_item_price" href="#">Now Rs 17,900 </a>
    </div>
     <div class="col-sm-3 product_slider_item">
           <img src="https://rukminim1.flixcart.com/image/400/400/television/f/7/f/micromax-40a6300fhd-original-imaesby4phgzcwhw.jpeg?q=70">
            <a class="product_slider_item_title" href="#">Vu 80cm (32) HD Ready LED TV </a>
            <a class="product_slider_item_discount" href="#">Flat Rs 3,000 Off</a>
            <a class="product_slider_item_price" href="#">Now Rs 17,900 </a>
    </div>
     <div class="col-sm-3 product_slider_item">
           <img src="https://rukminim1.flixcart.com/image/400/400/television/f/7/f/micromax-40a6300fhd-original-imaesby4phgzcwhw.jpeg?q=70">
            <a class="product_slider_item_title" href="#">Vu 80cm (32) HD Ready LED TV </a>
            <a class="product_slider_item_discount" href="#">Flat Rs 3,000 Off</a>
            <a class="product_slider_item_price" href="#">Now Rs 17,900 </a>
    </div>
    </div>

    <div class="item ">
     <div class="col-sm-3 product_slider_item">
           <img src="https://rukminim1.flixcart.com/image/400/400/television/f/7/f/micromax-40a6300fhd-original-imaesby4phgzcwhw.jpeg?q=70">
            <a class="product_slider_item_title" href="#">Vu 80cm (32) HD Ready LED TV </a>
            <a class="product_slider_item_discount" href="#">Flat Rs 3,000 Off</a>
            <a class="product_slider_item_price" href="#">Now Rs 17,900 </a>
    </div>
     <div class="col-sm-3 product_slider_item">
           <img src="https://rukminim1.flixcart.com/image/400/400/television/f/7/f/micromax-40a6300fhd-original-imaesby4phgzcwhw.jpeg?q=70">
            <a class="product_slider_item_title" href="#">Vu 80cm (32) HD Ready LED TV </a>
            <a class="product_slider_item_discount" href="#">Flat Rs 3,000 Off</a>
            <a class="product_slider_item_price" href="#">Now Rs 17,900 </a>
    </div>
     <div class="col-sm-3 product_slider_item">
           <img src="https://rukminim1.flixcart.com/image/400/400/television/f/7/f/micromax-40a6300fhd-original-imaesby4phgzcwhw.jpeg?q=70">
            <a class="product_slider_item_title" href="#">Vu 80cm (32) HD Ready LED TV </a>
            <a class="product_slider_item_discount" href="#">Flat Rs 3,000 Off</a>
            <a class="product_slider_item_price" href="#">Now Rs 17,900 </a>
    </div>
     <div class="col-sm-3 product_slider_item">
           <img src="https://rukminim1.flixcart.com/image/400/400/television/f/7/f/micromax-40a6300fhd-original-imaesby4phgzcwhw.jpeg?q=70">
            <a class="product_slider_item_title" href="#">Vu 80cm (32) HD Ready LED TV </a>
            <a class="product_slider_item_discount" href="#">Flat Rs 3,000 Off</a>
            <a class="product_slider_item_price" href="#">Now Rs 17,900 </a>
    </div>
    </div>

    <div class="item ">
     <div class="col-sm-3 product_slider_item">
           <img src="https://rukminim1.flixcart.com/image/400/400/television/f/7/f/micromax-40a6300fhd-original-imaesby4phgzcwhw.jpeg?q=70">
            <a class="product_slider_item_title" href="#">Vu 80cm (32) HD Ready LED TV </a>
            <a class="product_slider_item_discount" href="#">Flat Rs 3,000 Off</a>
            <a class="product_slider_item_price" href="#">Now Rs 17,900 </a>
    </div>
     <div class="col-sm-3 product_slider_item">
           <img src="https://rukminim1.flixcart.com/image/400/400/television/f/7/f/micromax-40a6300fhd-original-imaesby4phgzcwhw.jpeg?q=70">
            <a class="product_slider_item_title" href="#">Vu 80cm (32) HD Ready LED TV </a>
            <a class="product_slider_item_discount" href="#">Flat Rs 3,000 Off</a>
            <a class="product_slider_item_price" href="#">Now Rs 17,900 </a>
    </div>
     <div class="col-sm-3 product_slider_item">
           <img src="https://rukminim1.flixcart.com/image/400/400/television/f/7/f/micromax-40a6300fhd-original-imaesby4phgzcwhw.jpeg?q=70">
            <a class="product_slider_item_title" href="#">Vu 80cm (32) HD Ready LED TV </a>
            <a class="product_slider_item_discount" href="#">Flat Rs 3,000 Off</a>
            <a class="product_slider_item_price" href="#">Now Rs 17,900 </a>
    </div>
     <div class="col-sm-3 product_slider_item">
           <img src="https://rukminim1.flixcart.com/image/400/400/television/f/7/f/micromax-40a6300fhd-original-imaesby4phgzcwhw.jpeg?q=70">
            <a class="product_slider_item_title" href="#">Vu 80cm (32) HD Ready LED TV </a>
            <a class="product_slider_item_discount" href="#">Flat Rs 3,000 Off</a>
            <a class="product_slider_item_price" href="#">Now Rs 17,900 </a>
    </div>
    </div>
  </div>

  <!-- Left and right controls -->
  <a class="data_slider_nav_left" href="#myCarousel" data-slide="prev">
    <span class="glyphicon glyphicon-chevron-left"></span>
    <span class="sr-only">Previous</span>
  </a>
  <a class="data_slider_nav_right" href="#myCarousel" data-slide="next">
    <span class="glyphicon glyphicon-chevron-right"></span>
    <span class="sr-only">Next</span>
  </a>
</div>
</div>




</div>
</div>









</body>
</html>
