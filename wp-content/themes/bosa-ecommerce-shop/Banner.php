<!DOCTYPE html>
<html lang="en">

<head> <meta charset="UTF-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Document</title>

<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.1/css/all.min.css" integrity="sha512-MV7K8+y+gLIBoVD59lQIYicR65iaqukzvf/nwasF0nqhPay5w/9lJmVM2hMDcnK1OnMGCdVK+iQrJ7lzPJQd1w=="
 crossorigin="anonymous" referrerpolicy="no-referrer" />

</head>
<style>
   
/* Slideshow container */
.slider{
  width: 100%;
  display: flex;

}
.sidebar{
  margin-left: 10%;
  width: 20%;
}
.sidebar ul{
  list-style-type: none;
}
.sidebar-title {
  margin-top: 0px;
}
.sidebar-title li {

  padding: 7px;
  border: 1px solid black;
}
.sidebar-title a{
  text-decoration: none;
  color: black;
  text-align: left;
  font-size: 15px;
   display: flex;
  justify-content: space-between;
}
.sidebar-title a img {
width: 22px;
}
.slideshow-container {
  margin-left: 35%;
  max-width: 100%;
  position: relative;
  margin: auto;
}

/* Next & previous buttons */
.prev, .next {
  cursor: pointer;
  position: absolute;
  top: 50%;
  width: auto;
  padding: 16px;
  margin-top: -22px;
  color: white;
  font-weight: bold;
  font-size: 18px;
  transition: 0.6s ease;
  border-radius: 0 3px 3px 0;
  user-select: none;
}

/* Position the "next button" to the right */
.next {
  right: 0;
  border-radius: 3px 0 0 3px;
}

/* On hover, add a black background color with a little bit see-through */
.prev:hover, .next:hover {
  background-color: rgba(0,0,0,0.8);
}

/* Caption text */
.text {
  color: http://localhost/wordpress/index.php/shop/f2f2f2;
  font-size: 15px;
  padding: 8px 12px;
  position: absolute;
  bottom: 8px;
  width: 100%;
  text-align: center;
}

/* Number text (1/3 etc) */

/* The dots/bullets/indicators */
.dot {
  cursor: pointer;
  height: 15px;
  width: 15px;
  margin: 0 2px;
  background-color: http://localhost/wordpress/index.php/shop/bbb;
  border-radius: 50%;
  display: inline-block;
  transition: background-color 0.6s ease;
}

.active, .dot:hover {
  background-color: http://localhost/wordpress/index.php/shop/717171;
}

/* Fading animation */
.fade {
  animation-name: fade;
  animation-duration: 1.5s;
}

@keyframes fade {
  from {opacity: .4} 
  to {opacity: 1}
}

/* On smaller screens, decrease text size */
@media only screen and (max-width: 300px) {
  .prev, .next,.text {font-size: 11px}
}

</style>
<body>
    
  <div class="slider">    
    <div class="sidebar">
 <nav class="h-100">
  <ul class="sidebar-title">
   <li class="">
  <a href="http://localhost/wordpress/index.php/shop/" class="" title="??i???n tho???i, m??y t??nh b???ng">
   <img src="//bizweb.dktcdn.net/100/411/009/themes/877814/assets/menu_icon_1.png?1667276071688"
    alt="??i???n tho???i, m??y t??nh b???ng">
   ??i???n tho???i, m??y t??nh b???ng <i class="fas fa-chevron-right float-right"
    data-toggle-submenu=""></i> </a>
   </li>
   <li class="">
  <a href="http://localhost/wordpress/index.php/shop/" class="" title="L??m ?????p - S???c kh???e">
   <img src="//bizweb.dktcdn.net/100/411/009/themes/877814/assets/menu_icon_2.png?1667276071688"
    alt="L??m ?????p - S???c kh???e">
   L??m ?????p - S???c kh???e <i class="fas fa-chevron-right float-right" data-toggle-submenu=""></i>
  </a>
   </li>
   <li class="">
  <a href="http://localhost/wordpress/index.php/shop/" class="" title="????? ch??i, M??? v?? b??">
   <img src="//bizweb.dktcdn.net/100/411/009/themes/877814/assets/menu_icon_3.png?1667276071688"
    alt="????? ch??i, M??? v?? b??">
   ????? ch??i, M??? v?? b?? <i class="fas fa-chevron-right float-right" data-toggle-submenu=""></i>
  </a>
   </li>
   <li class="">
  <a href="http://localhost/wordpress/index.php/shop/" class="" title="H??ng ti??u d??ng, th???c ph???m">
   <img src="//bizweb.dktcdn.net/100/411/009/themes/877814/assets/menu_icon_4.png?1667276071688"
    alt="H??ng ti??u d??ng, th???c ph???m">
   H??ng ti??u d??ng, th???c ph???m <i class="fas fa-chevron-right float-right"
    data-toggle-submenu=""></i> </a>
   </li>
   <li class="">
  <a href="http://localhost/wordpress/index.php/shop/" class="" title="??i???n t??? - ??i???n l???nh">
   <img src="//bizweb.dktcdn.net/100/411/009/themes/877814/assets/menu_icon_5.png?1667276071688"
    alt="??i???n t??? - ??i???n l???nh">
   ??i???n t??? - ??i???n l???nh <i class="fas fa-chevron-right float-right" data-toggle-submenu=""></i>
  </a>
   </li>
   <li class="">
  <a href="http://localhost/wordpress/index.php/shop/" class="" title="Th???i trang, ph??? ki???n">
   <img src="//bizweb.dktcdn.net/100/411/009/themes/877814/assets/menu_icon_6.png?1667276071688"
    alt="Th???i trang, ph??? ki???n">
   Th???i trang, ph??? ki???n <i class="fas fa-chevron-right float-right" data-toggle-submenu=""></i>
  </a>
   </li>
<li class="">
  <a href="http://localhost/wordpress/index.php/shop/" class="" title="??i???n gia d???ng">
   <img src="//bizweb.dktcdn.net/100/411/009/themes/877814/assets/menu_icon_7.png?1667276071688"
    alt="??i???n gia d???ng">
   ??i???n gia d???ng <i class="fas fa-chevron-right float-right" data-toggle-submenu=""></i> </a>
   </li>
   <li class="">
  <a href="http://localhost/wordpress/index.php/shop/" class="" title="Th??? thao, d?? ngo???i">
   <img src="//bizweb.dktcdn.net/100/411/009/themes/877814/assets/menu_icon_8.png?1667276071688"
    alt="Th??? thao, d?? ngo???i">
   Th??? thao, d?? ngo???i <i class="fas fa-chevron-right float-right" data-toggle-submenu=""></i>
  </a>
   </li>
   <li class="">
  <a href="http://localhost/wordpress/index.php/shop/" class="" title="Nh?? c???a ?????i s???ng">
   <img src="//bizweb.dktcdn.net/100/411/009/themes/877814/assets/menu_icon_9.png?1667276071688"
    alt="Nh?? c???a ?????i s???ng">
   Nh?? c???a ?????i s???ng <i class="fas fa-chevron-right float-right" data-toggle-submenu=""></i></a>
   </li>
   <li class="">
  <a href="http://localhost/wordpress/index.php/shop/" class="" title="Sales page">
   <img src="//bizweb.dktcdn.net/100/411/009/themes/877814/assets/menu_icon_10.png?1667276071688"
    alt="Sales page">
   Sales page <i class="fas fa-chevron-right float-right" data-toggle-submenu=""></i> </a>
   </li>
  </ul>
 </nav>
</div>
    <div class="slide">
      <div class="slideshow-container">
        <div class="mySlides fade">

          <img src="https://bizweb.dktcdn.net/100/411/009/themes/877814/assets/slider_1.jpg?1667276071688"
            style="width:100%">
          <div class="text"></div>
        </div>
        <div class="mySlides fade">
          <img src="https://bizweb.dktcdn.net/100/411/009/themes/877814/assets/slider_2.jpg?1667276071688"
            style="width:100%">
          <div class="text"></div>
        </div>
        <div class="mySlides fade">
          <img src="https://bizweb.dktcdn.net/100/411/009/themes/877814/assets/slider_1.jpg?1667276071688"
            style="width:100%">
          <div class="text"></div>
        </div>
        <a class="prev" onclick="plusSlides(-1)">???</a>
        <a class="next" onclick="plusSlides(1)">???</a>

      </div>
      <br>
      <div style="text-align:center">
        <span class="dot" onclick="currentSlide(1)"></span>
        <span class="dot" onclick="currentSlide(2)"></span>
        <span class="dot" onclick="currentSlide(3)"></span>
      </div>
    </div>

  </div>
  <script>
let slideIndex = 0;
showSlides();

function showSlides() {
  let i;
  let slides = document.getElementsByClassName("mySlides");
  let dots = document.getElementsByClassName("dot");
  for (i = 0; i < slides.length; i++) {
    slides[i].style.display = "none";  
  }
  slideIndex++;
  if (slideIndex > slides.length) {slideIndex = 1}    
  for (i = 0; i < dots.length; i++) {
    dots[i].className = dots[i].className.replace(" active", "");
  }
  slides[slideIndex-1].style.display = "block";  
  dots[slideIndex-1].className += " active";
  setTimeout(showSlides, 3000); // Change image every 2 seconds
}
</script>
</body>

</html>
