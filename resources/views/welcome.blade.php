<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title></title>
    <style>

@import url('https://fonts.googleapis.com/css?family=Lato:100,100i,300,300i,400,400i,700,700i,900,900i');

*{
  box-sizing:border-box;
}

html, body {
    width: 100%;
    height: 100%;
    margin:0px;
    padding.0px;
    font-family: 'Lato', sans-serif;
}

.container{
  width: 100%;
  height: 100%;
  background-color: #3E3C40;
}

.popup {
    margin: 0 auto;
    background-color: #fff;
    position: absolute;
    top: 50%;

    left: 50%;
    transform: translateX(-50%) translateY(-50%);
    border-radius: 12px;
    width: 480px;
  text-align: center;
  padding: 40px 30px;
}

.popup__title {
    text-align: center;
    color: #726C77;
    font-size: 26px;
    margin-top: 10px;
  transition: 0.2s opacity linear;
    -webkit-transition: 0.2s opacity linear;
    -ms-transition: 0.2s opacity linear;
    -o-transition: 0.2s opacity linear;
    -moz-transition: 0.2s opacity linear;
}

.popup__btn {
    background-color: #B669F4;
    color: #fff;
    text-decoration: none;
    line-height: 40px;
    display: inline-block;
    padding: 0 45px;
    font-size: 14px;
    border-radius: 20px;
    transition: 0.2s opacity linear;
    -webkit-transition: 0.2s opacity linear;
    -ms-transition: 0.2s opacity linear;
    -o-transition: 0.2s opacity linear;
    -moz-transition: 0.2s opacity linear;
}

.slider__container {
    padding: 40px 40px 60px;
  position: relative;
}

.slider {
    height: 5px;
    width: 100%;
    background-color: #D8D6DD;
    border-radius: 3px;
    position: relative;
      transition: 0.2s all linear;
    -webkit-transition: 0.2s all linear;
    -ms-transition: 0.2s all linear;
    -o-transition: 0.2s all linear;
    -moz-transition: 0.2s all linear;
}

.slider__dot {
    width: 35px;
    height: 35px;
    border-radius: 50%;
    background-color: #fff;
    cursor:pointer;
    box-shadow: 0px 5px 10px rgba(0,0,0,0.3);
    position: absolute;
    top: 50%;
    transform: translateY(-50%);
  margin-left: -17px;
  z-index: 1;
}

.slider__inner {
    height: 5px;
  top: -1px;
  border-radius:0;
    width: 0%;
    border-radius: 3px;
    position: relative;
    background-image: linear-gradient(to right top, #22bdde, #00d0d6, #00dfb0, #41e974, #a8eb12);

}

.active .popup__title{
  opacity: 0.2;
}

.active .popup__btn{
  opacity: 0.4;
}

.active .slider__img{
  opacity: 1;
}

.active .slider{
  background-color: #B8B7BA;
}

.right{
  left:50%;
  transform: translateX(0);
}

.left{
    right:-50%;
  transform: translateX(-100%);

}

.slider__icon {
    position: absolute;
    width: 20px;
    height: 20px;
    top: 33px;
    fill: rgb(216, 214, 221);
}

.active .slider__icon{
  fill: #B8B7BA;
}

.slider__icon--left{
    left: -5px;
}

.slider__icon--right{
  right: -5px;
}
.slider__icon--big {
    width: 65px;
    height: 65px;
}

.slider__img {
    position: absolute;
  margin-left: -32px;
        transition: 0.1s all ease-out;
    -webkit-transition: 0.1s all ease-out;
    -ms-transition: 0.1s all ease-out;
    -o-transition: 0.1s all ease-out;
    -moz-transition: 0.1s all ease-out;
  top: -90px;
  opacity: 0;
}

.slider__icon--big{
  fill:#B669F4;
}

.icon__path{
    transition: 0.5s all linear;
    -webkit-transition: 0.5s all linear;
    -ms-transition: 0.5s all linear;
    -o-transition: 0.5s all linear;
    -moz-transition: 0.5s all linear;
}

    </style>
</head>
<body>
<section class="container">
  <div class="popup">
    <h1 class="popup__title">How satisfied are you?</h1>
    <div class="slider__container"><svg version="1.1"class="slider__icon slider__icon--left"  xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" viewBox="0 0 485 485" style="enable-background:new 0 0 485 485;" xml:space="preserve">
<g>
    <path d="M413.974,71.026C368.171,25.225,307.274,0,242.5,0S116.829,25.225,71.026,71.026C25.225,116.829,0,177.726,0,242.5   s25.225,125.671,71.026,171.474C116.829,459.775,177.726,485,242.5,485s125.671-25.225,171.474-71.026   C459.775,368.171,485,307.274,485,242.5S459.775,116.829,413.974,71.026z M242.5,455C125.327,455,30,359.673,30,242.5   S125.327,30,242.5,30S455,125.327,455,242.5S359.673,455,242.5,455z" ></path>
    <path d="M318.514,231.486c19.299,0,35-15.701,35-35s-15.701-35-35-35s-35,15.701-35,35S299.215,231.486,318.514,231.486z" ></path>
    <path d="M166.486,231.486c19.299,0,35-15.701,35-35s-15.701-35-35-35s-35,15.701-35,35S147.187,231.486,166.486,231.486z" ></path>
    <path d="M242.5,271.486c-59.419,0-113.17,37.504-133.751,93.324l28.147,10.379c16.254-44.084,58.693-73.703,105.604-73.703   s89.35,29.619,105.604,73.703l28.147-10.379C355.67,308.99,301.919,271.486,242.5,271.486z" ></path>
</g>

</svg>
          <div class="slider" id="slider">
            <div class="slider__img">
              <svg version="1.1" class="slider__icon--big" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" width="510px" height="510px" viewBox="0 0 510 510" style="enable-background:new 0 0 510 510;" xml:space="preserve">
<g>
    <g >
        <path class="icon__path" id="test" d="M344.25,229.5c20.4,0,38.25-17.85,38.25-38.25S364.65,153,344.25,153S306,170.85,306,191.25S323.85,229.5,344.25,229.5z     M165.75,229.5c20.4,0,38.25-17.85,38.25-38.25S186.15,153,165.75,153s-38.25,17.85-38.25,38.25S145.35,229.5,165.75,229.5z     M255,408c66.3,0,122.4-43.35,145.35-102h-290.7C132.6,364.65,188.7,408,255,408z M255,0C114.75,0,0,114.75,0,255    s114.75,255,255,255s255-114.75,255-255S395.25,0,255,0z M255,459c-112.2,0-204-91.8-204-204S142.8,51,255,51s204,91.8,204,204    S367.2,459,255,459z" >

    </path>
    </g>
        </g></svg>
            </div>
              <div class="slider__dot"></div>
              <div class="slider__inner"></div>
          </div>
      <svg version="1.1" class="slider__icon slider__icon--right" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" width="510px" height="510px" viewBox="0 0 510 510" style="enable-background:new 0 0 510 510;" xml:space="preserve">
<g>
    <g >
        <path d="M344.25,229.5c20.4,0,38.25-17.85,38.25-38.25S364.65,153,344.25,153S306,170.85,306,191.25S323.85,229.5,344.25,229.5z     M165.75,229.5c20.4,0,38.25-17.85,38.25-38.25S186.15,153,165.75,153s-38.25,17.85-38.25,38.25S145.35,229.5,165.75,229.5z     M255,408c66.3,0,122.4-43.35,145.35-102h-290.7C132.6,364.65,188.7,408,255,408z M255,0C114.75,0,0,114.75,0,255    s114.75,255,255,255s255-114.75,255-255S395.25,0,255,0z M255,459c-112.2,0-204-91.8-204-204S142.8,51,255,51s204,91.8,204,204    S367.2,459,255,459z" ></path>
    </g>
        </g></svg>
    </div>
    <a href="#" class="popup__btn">Submit</a>
  </div>
</section>

<script src="https://code.jquery.com/jquery-3.6.3.slim.js" integrity="sha256-DKU1CmJ8kBuEwumaLuh9Tl/6ZB6jzGOBV/5YpNE2BWc=" crossorigin="anonymous"></script>

<script>

$(function(){
  var down = false;
  var dot = $('.slider__dot');
  var emoji = $('.slider__img')
  var position = $('#slider').width()/2;
  var popup = $('.popup');
  dot.css('left', position);
  emoji.css('left', position);

  $('#slider').mousedown(function(e){
    if(e.which==1){
      down = true;
    popup.addClass('active');
    }
  });

  $(window).mouseup(function(){
    if(down==true){
      down = false;
    popup.removeClass('active');
    }
  });

  $(window).mousemove(function(e){
   var perc = 0;
   var moveX,moveXInner;
    if(down==true){

    moveX = e.pageX - $('#slider').offset().left;
    moveXInner = e.pageX - $('#slider').offset().left - position;

    if(moveX<0){  moveX=0; moveXInner=187;}
    if(moveX>340){
      moveX=340;
      moveXInner=187;
    }

      if(moveX>position){
      $('.slider__icon--big').css('fill', '#41e974');
      $('.icon__path').attr('d', 'M344.25,229.5c20.4,0,38.25-17.85,38.25-38.25S364.65,153,344.25,153S306,170.85,306,191.25S323.85,229.5,344.25,229.5z     M165.75,229.5c20.4,0,38.25-17.85,38.25-38.25S186.15,153,165.75,153s-38.25,17.85-38.25,38.25S145.35,229.5,165.75,229.5z     M255,408c66.3,0,122.4-43.35,145.35-102h-290.7C132.6,364.65,188.7,408,255,408z M255,0C114.75,0,0,114.75,0,255    s114.75,255,255,255s255-114.75,255-255S395.25,0,255,0z M255,459c-112.2,0-204-91.8-204-204S142.8,51,255,51s204,91.8,204,204    S367.2,459,255,459z');        $('.slider__inner').removeClass('left').addClass('right');
        perc = (moveXInner*position/2)/100;

      }
      if(moveX<position){
        $('.icon__path').attr('d', 'M344.3,229.5c20.4,0,38.3-17.9,38.3-38.3S364.6,153,344.3,153S306,170.9,306,191.3S323.9,229.5,344.3,229.5z         M165.8,229.5c20.4,0,38.3-17.9,38.3-38.3S186.1,153,165.8,153s-38.3,17.9-38.3,38.3S145.4,229.5,165.8,229.5z M258.2,276           c-66.3-0.2-122.5,43-145.7,101.6l290.7,0.9C380.4,319.7,324.5,276.2,258.2,276z M255,0C114.8,0,0,114.8,0,255s114.8,255,255,255         s255-114.8,255-255S395.3,0,255,0z M255,459c-112.2,0-204-91.8-204-204S142.8,51,255,51s204,91.8,204,204S367.2,459,255,459z');
        $('.slider__icon--big').css('fill', '#D7290C');
        $('.slider__inner').removeClass('right').addClass('left');

        perc = Math.abs((moveXInner*position/2)/100);
            console.log(perc);
      }
    $('.slider__inner').css('width', perc);
    dot.css('left', moveX );
      emoji.css('left', moveX);
    }
  });
});

</script>
</body>
</html>
