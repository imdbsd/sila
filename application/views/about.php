
<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml">

<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <title>About | SILA</title>
    <meta name="author" content="Alvaro Trigo Lopez" />
    <meta name="description" content="fullPage full-screen apple iphone 5c similar website. Reproducing one sigle scrolling site like Apple iPhone." />
    <meta name="keywords"  content="fullpage,jquery,demo,screen,fullscreen,apple,iphone5c,iphone5s,iphone,iphone-5c,like,reproduce,similar,how to" />
    <meta name="Resource-type" content="Document" />

    <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
  <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>


    <link rel="stylesheet" type="text/css" href="<?=base_url();?>assets/css/jquery.fullPage.css" />
    <link rel="stylesheet" type="text/css" href="<?=base_url();?>assets/css/examples.css" />
    <style>


    body{
        color: #333;
        font-family: "Lucida Grande", "Lucida Sans Unicode", Helvetica, Arial, Verdana, sans-serif;
    }


    /* Style for our header texts
    * --------------------------------------- */
    h1{
        font-size: 5em;
        font-family: arial,helvetica;
        margin:0;
        padding:0;
    }
    h2{
        font-size: 2em;
        margin: 0 0 18px 0;
        font-family: arial,helvetica;
    }




    /* Common styles
    * --------------------------------------- */
    img{
        -webkit-transition: all 0.7s ease-out;
        -moz-transition: all 0.7s ease-out;
        -o-transition: all 0.7s ease-out;
        transition: all 0.7s ease-out;
    }
    .section{
        text-align:center;
        overflow:hidden;
    }
    .wrap{
        width: 1180px;
        height: 100%;
        margin-left: auto;
        margin-right: auto;
        position: relative;
    }
    .box{
        text-align: left;
        color: #808080;
        font-size: 1.2em;
        line-height: 1.6em;
    }




    /* Section 0
    * --------------------------------------- */
    #section0{
        padding: 60px 0;
        background: radial-gradient(circle at 1.98% 31.93%, rgba(255, 81, 47, 0.45), transparent 100%), 
        radial-gradient(circle at 98.02% 98.95%, rgba(240, 152, 25,0.45), transparent 100%), 
        radial-gradient(circle at 50% 50%, rgba(182, 182, 182,0.45), rgba(182, 182, 182,0.45) 100%),
        url(<?=base_url();?>assets/image/bg_laundry.jpg);

    }
    #section0 img{
        height: 100%;
        margin: 40px 0 0 0;
    }




    /* Section 1
    * --------------------------------------- */
    #section1 img{
        position:absolute;
        left: 40px;
        top: 100px;
    }

    #section1 .box{
        position: absolute;
        top: 50%;
        left: 50%;
        margin-top: -192px;
        margin-left: 89px;
        width: 395px;
        z-index: 1;
    }
    #section1 .imgsContainer{
        display: block;
        position: absolute;
        z-index: 1;
        top: 42%;
        left: 58%;
        margin-top: -325px;
        margin-left: -747px;
        width: 800px;
        height: 696px;
    }
    #section1 img{
        /*height: 100%;*/
    }
    #section1 .phone3{
        margin-top: 150px;
    }
    #section1 .phone4{
        margin-top: 350px;
    }
    ul, ol{
        list-style: inherit;
    }
    /*screen resolutions between 620px and 800px*/
    @media all and (min-width: 620px) and (max-width: 800px){
        #section1 .imgsContainer{
            margin-top: -278px;
            margin-left: -685px;
            width: 647px;
            height: 563px;
        }
    }

    /*screen resolutions lower than 620px*/
    @media all and (max-width: 620px){
        #section1 .imgsContainer{
            margin-top: -208px;
            margin-left: -516px;
            width: 534px;
            height: 464px;
        }
    }
    #iphone2{
        z-index: 10;
    }
    #iphone2.active{
        -webkit-transform: translate3d(-134px, 0px, 0px);
        -moz-transform: translate3d(-134px, 0px, 0px);
        -ms-transform:translate3d(-134px, 0px, 0px);
        transform: translate3d(-134px, 0px, 0px);
    }

    #iphone3{
        z-index: 12;
    }
    #iphone3.active{
        -webkit-transform: translate3d(213px, 0px, 0px);
        -moz-transform: translate3d(213px, 0px, 0px);
        -ms-transform:translate3d(213px, 0px, 0px);
        transform: translate3d(221px, 0px, 0px);
    }

    #iphone4{
        z-index: 13;
        left: 140px;
    }

    #iphone4.active{
        -webkit-transform: translate3d(548px, 0px, 0px);
        -moz-transform: translate3d(548px, 0px, 0px);
        -ms-transform:translate3d(548px, 0px, 0px);
        transform: translate3d(500px, 0px, 0px);
    }




    /* Section 2
    * --------------------------------------- */
    #section2 img{
        position:absolute;
    }
    #section2 .imgsContainer,
    #staticImg .imgsContainer,
    #section3 .imgsContainer{
        position: absolute;
        z-index: 1;
        left: 50%;
        display: block;
        margin-top: -288px;
        margin-left: -636px;
        width: 0;
        height: 0;

        -webkit-transition: all 1.2s ease-in-out;
        -moz-transition: all 1.2s ease-in-out;
        -o-transition: all 1.2s ease-in-out;
        transition: all 1.2s ease-in-out;
    }

    #section2.moveUp .imgsContainer{
        top: 50%;
    }

    #section2.moveDown .imgsContainer,
    #staticImg .imgsContainer{
        top: 90%;
    }

    #section2.active .imgsContainer{
        top: 50%;
    }

    #section2 .box{
        top: 22%;
        left: 42%;
        position: absolute;
        width: 582px;
    }

    #iphone-yellow{
        top: -35px;
        left: -222px;
    }

    #iphone-red{
        top: 0px;
        left: -50px;
    }

    #iphone-blue{
        top: 320px;
        left: 448px;
    }

    #iphone-green{
        left: 106px;
        position:absolute;
    }

    #staticImg{
        display: block;
        position: absolute;
        z-index: 1;
        top: 200%;
        left: 0;
        width: 100%;
        min-width: 980px;
        height: 100%;

        -webkit-transition: all 0.7s ease-out;
        -moz-transition: all 0.7s ease-out;
        -o-transition: all 0.7s ease-out;
        transition: all 0.7s ease-out;

        -webkit-backface-visibility: hidden;
        -webkit-perspective: 1000;
    }
    #staticImg.moveDown{
    -webkit-transform: translate3d(0, 100%, 0);
      -ms-transform: translate3d(0, 100%, 0);
          transform: translate3d(0, 100%, 0);
    }
    #staticImg.moveUp{

    -webkit-transform: translate3d(0, 0, 0);
      -ms-transform: translate3d(0, 0, 0);
          transform: translate3d(0, 0, 0);
    }
    #staticImg.moveDown .imgsContainer{
            top: 50%;
    }
    #staticImg.moveDown img{
        top: 155px;
    }

    #staticImg.active .imgsContainer{
        top: 50%;
    }


    #staticImg.active img{
        top: 487px;
    }





    /* Section 3
    * --------------------------------------- */
    #section3 .row .img-team{
        left: 270px;
        margin-top: 50px;
    }
    #section3 .imgsContainer{
        top: 50%;
    }

    #section3 img{
        top: 155px;
        left: 455px;
        position: absolute;
    }
    #section3 .box{
        text-align: center;
        margin: 10% 0 0 0;
    }



    /* Overwriting fullPage.js tooltip color
    * --------------------------------------- */
    .fp-tooltip{
        color: #AAA;
    }
    #fp-nav span, .fp-slidesNav span{
        border-color: #AAA;
    }
    #fp-nav li .active span, .fp-slidesNav .active span{
        background: #AAA;
    }

    </style>

    <!--[if IE]>
        <script type="text/javascript">
             var console = { log: function() {} };
        </script>
    <![endif]-->

    <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.8.3/jquery.min.js"></script>
    <script src="http://ajax.googleapis.com/ajax/libs/jqueryui/1.9.1/jquery-ui.min.js"></script>

    <script type="text/javascript" src="<?=base_url();?>assets/js/jquery.fullPage.js"></script>
    <script type="text/javascript" src="<?=base_url();?>assets/js/examples.js"></script>

    <script type="text/javascript">
        $(document).ready(function() {
            $('#fullpage').fullpage({
                'verticalCentered': false,
                'css3': true,
                'sectionsColor': ['#F0F2F4', '#fff', '#fff', '#fff'],
                'navigation': true,
                'navigationPosition': 'right',
                'navigationTooltips': ['fullPage.js', 'Powerful', 'Amazing', 'Simple'],

                'afterLoad': function(anchorLink, index){
                    if(index == 2){
                        $('#iphone3, #iphone2, #iphone4').addClass('active');
                    }
                },

                'onLeave': function(index, nextIndex, direction){
                    if (index == 3 && direction == 'down'){
                        $('.section').eq(index -1).removeClass('moveDown').addClass('moveUp');
                    }
                    else if(index == 3 && direction == 'up'){
                        $('.section').eq(index -1).removeClass('moveUp').addClass('moveDown');
                    }

                    $('#staticImg').toggleClass('active', (index == 2 && direction == 'down' ) || (index == 4 && direction == 'up'));
                    $('#staticImg').toggleClass('moveDown', nextIndex == 4);
                    $('#staticImg').toggleClass('moveUp', index == 4 && direction == 'up');
                }
            });
        });
    </script>

</head>
<body>

<!-- <select id="demosMenu">
  <option selected>Choose Demo</option>
  <option id="backgrounds">Background images</option>
  <option id="backgroundVideo">Background video</option>
  <option id="gradientBackgrounds">Gradient backgrounds</option>
  <option id="backgroundsFixed">Fixed fullscreen backgrounds</option>
  <option id="looping">Looping</option>
  <option id="noAnchor">No anchor links</option>
  <option id="scrollingSpeed">Scrolling speed</option>
  <option id="easing">Easing</option>
  <option id="callbacks">Callbacks</option>
  <option id="css3">CSS3</option>
  <option id="continuous">Continuous scrolling</option>
  <option id="normalScroll">Normal scrolling</option>
  <option id="scrollBar">Scroll bar enabled</option>
  <option id="scrolling">Scroll inside sections and slides</option>
  <option id="navigationV">Vertical navigation dots</option>
  <option id="navigationH">Horizontal navigation dots</option>
  <option id="fixedHeaders">Fixed headers</option>
  <option id="apple">Apple iPhone demo (animations)</option>
  <option id="oneSection">One single section</option>
  <option id="responsiveHeight">Responsive Height</option>
  <option id="responsiveWidth">Responsive Width</option>
  <option id="methods">Methods</option>
</select> -->

<div id="fullpage">
    <!-- <div id="staticImg">
        <div class="imgsContainer">
            <img src="imgs/iphone-green.png" alt="iphone" id="iphone-green" />
        </div>
    </div> -->

    <div class="section " id="section0">
        <h1>About SILA</h1> 
        <h3>Sistem Informasi Laundry Online</h3>
        <img src="<?=base_url();?>assets/image/pic1.png" alt="iphone" />
    </div>
    <div class="section" id="section1">
        <div class="wrap">
            <div class="imgsContainer">
                <img src="<?=base_url();?>assets/image/phone1.png" alt="iphone" id="iphone2" />
                <img src="<?=base_url();?>assets/image/phone2.png" alt="iphone" id="iphone3" class="phone3" />
                <img src="<?=base_url();?>assets/image/phone3.png" alt="iphone" id="iphone4" class="phone4" />
            </div>

            <div class="box">
                <h2>Kemudahan bagi pelanggan</h2>
                 Nikmati kemudahan dalam bertransaksi laundry dengan fitur yang ditawarkan sila seperti : 
                 <ul>
                    <li>Tracking transaksi</li>
                    <li>Checkharga</li>
                 </ul>
            </div>
        </div>
    </div>

    <div class="section moveDown" id="section2">
        <div class="wrap">
            <div class="imgsContainer">
                <!-- <img src="imgs/iphone-yellow.png" alt="iphone" id="iphone-yellow" /> -->
                <img src="<?=base_url();?>assets/image/desktop.png" alt="iphone" id="iphone-red"  />
                <img src="<?=base_url();?>assets/image/pic5.png" alt="iphone" id="iphone-blue" />
            </div>

            <div class="box">
                <h2>Powerfull bagi admin</h2>
                Fitur - fiture yang bermanfaat bagi admin seperti
                <ul>
                    <li>Mengolah transaksi</li>
                    <li>Mengolah tarif</li>
                </ul>
            </div>
        </div>
    </div>
    <div class="section moveDown" id="section3">
        <div class="wrap">
            <div class="box">
                <h2>Our Team</h2>
                Kelompok 6 Full Team
                <!-- <div class="row">
                    <div></div>
                </div> -->
            </div>
        </div>
        <div class="row">
            <!-- <img src="imgs/iphone-two.png" alt="iphone" id="iphone-two" /> -->
            <img src="<?=base_url();?>assets/image/human/team.png" at="iphone" class="img-team" />

        </div>
    </div>
</div>

</body>
</html>