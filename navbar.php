<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://fonts.googleapis.com/css2?family=Dosis:wght@500;700&family=Karla:wght@200&family=Lato&family=Montserrat:wght@100&family=Nanum+Gothic:wght@400;800&family=Raleway:wght@500;700;900&family=Source+Sans+Pro&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Dosis:wght@500;800&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Dosis:wght@500;800&family=Raleway:wght@600;900&display=swap" rel="stylesheet">
    <style>
        * {
            margin: 0;
            padding: 0;
        }

        nav {
            position: fixed;
            width: 100%;
            height: 170px;
        }

        nav.fixed {
            height: 80px;
            background: #272727;
        }

        nav.fixed2 {
            height: 80px;
            background: white;
        }

        nav #section1n {
            height: 40px;
            background: #272727;
        }

        nav #section1n.none {
            display: none;
        }

        nav #section1n>div {
            max-width: 1170px;
            margin: auto;
        }

        nav #section1n>div>div {
            float: right;
            color: #6d6d6d;
        }

        nav #section1n div a {
            text-decoration: none;
            color: #6d6d6d;
            line-height: 40px;
            font-family: 'Dosis', sans-serif;
            font-weight: 500;
            font-size: 13px;
        }

        nav #section1n div svg {
            color: #ffc000;
        }

        nav #section2n {
            height: 130px;
            z-index: 1;
            width: 100%;
            position: fixed;
            display: flex;
            justify-content: center;
            align-items: center;
        }

        nav #section2n #inner_sec1 {
            width: 1170px;
            display: flex;
            justify-content: space-between;
        }

        nav #section2n.fixed1 {
            height: 80px;
            display: flex;
            justify-content: center;
            align-items: center;
        }

        nav #section2n.fixed3 {
            height: 80px;
            display: flex;
            justify-content: center;
            align-items: center;
        }

        nav #section2n #inner_sec1 ul {
            display: flex;
        }

        nav #section2n #inner_sec1>ul>li {
            list-style: none;
            padding: 0px 11px;
        }

        nav #section2n #inner_sec1 ul li a:hover {
            background: #ffc000;
            transition: 0.5s;
            color: white;
        }

        nav #section2n #inner_sec1 ul li a {
            text-decoration: none;
            font-family: 'Raleway', sans-serif;
            font-weight: 700;
            color: white;
            padding: 7px 15px;
            font-size: 14px;
            line-height: 40px;
            border-radius: 15px;
        }

        #menu_icon {
            display: none;
        }

        #mobile_menu {
            overflow: scroll;
            height: 100vh;
        }

        #menu_icon {
            display: none;
        }

        #mobile_menu ul {
            display: block;
            width: 184px;
            margin: 30px auto;
            overflow: hidden;
        }

        #mobile_menu ul li {
            list-style: none;
        }

        #mobile_menu ul li a:hover {
            list-style: none;
            color: #ffc000;
        }

        #mobile_menu ul li a {
            font-family: 'Raleway', sans-serif;
            font-weight: 500;
            font-size: 26px;
            line-height: 39px;
            text-decoration: none;
            color: white;
            letter-spacing: 2px;
        }

        @media(max-width:1450px) {

            nav #section1n>div,
            nav #section2n #inner_sec1 {
                width: 1000px;
            }
        }

        @media(max-width:1250px) {

            nav #section1n>div,
            nav #section2n #inner_sec1 {
                width: 915px;
            }
        }

        @media(max-width:950px) {

            nav #section1n>div,
            nav #section2n #inner_sec1 {
                width: 700px;
            }

            nav #section2n #inner_sec1 #menu_icon {
                display: block;
            }

            nav #section2n #inner_sec1 #ul {
                display: none;
            }
        }

        @media(max-width:750px) {

            nav #section1n>div,
            nav #section2n #inner_sec1 {
                width: 600px;
            }
        }

        @media(max-width:650px) {

            nav #section1n>div,
            nav #section2n #inner_sec1 {
                width: 450px;
            }
        }

        @media(max-width:500px) {
            nav #section2n #inner_sec1 {
                width: 100%;
                padding: 0px 25px;
            }

            nav #section1n>div {
                max-width: 80%;
                /* float: none; */
                text-align: center;
            }
        }
    </style>
</head>

<body>
    <nav style="z-index:10;">
        <div id="section1n">
            <div>
                <div>
                    <a href=""><svg xmlns="http://www.w3.org/2000/svg" width="10" height="10" fill="currentColor" class="bi bi-telephone-fill" viewBox="0 0 16 16">
                            <path fill-rule="evenodd" d="M1.885.511a1.745 1.745 0 0 1 2.61.163L6.29 2.98c.329.423.445.974.315 1.494l-.547 2.19a.678.678 0 0 0 .178.643l2.457 2.457a.678.678 0 0 0 .644.178l2.189-.547a1.745 1.745 0 0 1 1.494.315l2.306 1.794c.829.645.905 1.87.163 2.611l-1.034 1.034c-.74.74-1.846 1.065-2.877.702a18.634 18.634 0 0 1-7.01-4.42 18.634 18.634 0 0 1-4.42-7.009c-.362-1.03-.037-2.137.703-2.877L1.885.511z" />
                        </svg>&nbsp;&nbsp;&nbsp;8(800)7668990</a>
                    &nbsp;&nbsp;&nbsp;|&nbsp;&nbsp;&nbsp;
                    <a href=""><svg xmlns="http://www.w3.org/2000/svg" width="10" height="10" fill="currentColor" class="bi bi-telephone-fill" viewBox="0 0 16 16">
                            <path fill-rule="evenodd" d="M1.885.511a1.745 1.745 0 0 1 2.61.163L6.29 2.98c.329.423.445.974.315 1.494l-.547 2.19a.678.678 0 0 0 .178.643l2.457 2.457a.678.678 0 0 0 .644.178l2.189-.547a1.745 1.745 0 0 1 1.494.315l2.306 1.794c.829.645.905 1.87.163 2.611l-1.034 1.034c-.74.74-1.846 1.065-2.877.702a18.634 18.634 0 0 1-7.01-4.42 18.634 18.634 0 0 1-4.42-7.009c-.362-1.03-.037-2.137.703-2.877L1.885.511z" />
                        </svg>&nbsp;&nbsp;&nbsp;8(800)7668991</a>
                </div>
            </div>
        </div>
        <div id="section2n">
            <div id="inner_sec1" style>
                <div style="padding-top:5px;"><img src="images/light-logo-nocopyright.png" alt="light-logo-nocopyright.png" class="other_pages_logo"></div>
                <ul id="ul" style="margin-bottom: 0;">
                    <li><a href="index.php" class="desktop_links">HOME</a></li>
                    <li><a href="about.php" class="desktop_links">ABOUT US</a></li>
                    <li><a href="get_a_cab.php" class="desktop_links">GET A CAB</a></li>
                    <li><a href="reviews.php" class="desktop_links">REVIEWS</a></li>
                    <li><a href="our_news.php" class="desktop_links">OUR NEWS</a></li>
                    <li><a href="contact.php" class="desktop_links">CONTACT US</a></li>
                </ul>
                <div id="menu_icon">
                    <svg xmlns="http://www.w3.org/2000/svg" width="30" height="30" fill="currentColor" class="bi bi-list" viewBox="0 0 16 16" style="color:#ffc000;">
                        <path fill-rule="evenodd" d="M2.5 12a.5.5 0 0 1 .5-.5h10a.5.5 0 0 1 0 1H3a.5.5 0 0 1-.5-.5zm0-4a.5.5 0 0 1 .5-.5h10a.5.5 0 0 1 0 1H3a.5.5 0 0 1-.5-.5zm0-4a.5.5 0 0 1 .5-.5h10a.5.5 0 0 1 0 1H3a.5.5 0 0 1-.5-.5z" />
                    </svg>
                </div>
            </div>
        </div>
        <div id="mobile_menu" style="background:#272727;width:100vw;min-height:100vh;display:none;z-index:5;padding-top:70px;">
            <center style="display:flex;justify-content:center;">
                <img src="images/light-logo-nocopyright.png" alt="light-logo-nocopyright.png" class="other_pages_logo">
            </center>
            <div id="cross_icon" style="position: fixed;top:25px;right:25px;">
                <svg xmlns="http://www.w3.org/2000/svg" width="30" height="30" fill="currentColor" class="bi bi-x" viewBox="0 0 16 16" style="color:#ffc000;">
                    <path d="M4.646 4.646a.5.5 0 0 1 .708 0L8 7.293l2.646-2.647a.5.5 0 0 1 .708.708L8.707 8l2.647 2.646a.5.5 0 0 1-.708.708L8 8.707l-2.646 2.647a.5.5 0 0 1-.708-.708L7.293 8 4.646 5.354a.5.5 0 0 1 0-.708z" />
                </svg>
            </div>
            <ul>
                <li><a href="index.php">HOME</a></li>
                <li><a href="about.php">ABOUT US</a></li>
                <li><a href="get_a_cab.php">GET A CAB</a></li>
                <li><a href="reviews.php">REVIEWS</a></li>
                <li><a href="our_news">OUR NEWS</a></li>
                <li><a href="contact.php">CONTACT US</a></li>
            </ul>
        </div>
    </nav>
    <script>
        if (!(window.location.href == "http://localhost/new/get_cab_new/index.php")) {
            var section2n = document.querySelector("#section2n");
            section2n.style.height = "80px";
            var desktop_links = document.getElementsByClassName("desktop_links");
            document.getElementsByClassName("other_pages_logo")[0].src = "images/logo-nocopyright.png";
            document.getElementsByClassName("other_pages_logo")[1].src = "images/logo-nocopyright.png";
            desktop_links[0].style.color = "#343332";
            desktop_links[1].style.color = "#343332";
            desktop_links[2].style.color = "#343332";
            desktop_links[3].style.color = "#343332";
            desktop_links[4].style.color = "#343332";
            desktop_links[5].style.color = "#343332";
            document.getElementById("section1n").style.background = "#f1f1f1";
        } 
        else{
            document.getElementById("section1n").style.background = "#272727";
        }
        

        // desktop_links[0].addEventListener("mouseover", function() {
        //     desktop_links[0].style.color = "#fff";
        // });
        // desktop_links[0].addEventListener("mouseout", function() {
        //     desktop_links[0].style.color = "#343332";
        // });
        // desktop_links[1].addEventListener("mouseover", function() {
        //     desktop_links[1].style.color = "#fff";
        // });
        // desktop_links[1].addEventListener("mouseout", function() {
        //     desktop_links[1].style.color = "#343332";
        // });
        // desktop_links[2].addEventListener("mouseover", function() {
        //     desktop_links[2].style.color = "#fff";
        // });
        // desktop_links[2].addEventListener("mouseout", function() {
        //     desktop_links[2].style.color = "#343332";
        // });
        // desktop_links[3].addEventListener("mouseover", function() {
        //     desktop_links[3].style.color = "#fff";
        // });
        // desktop_links[3].addEventListener("mouseout", function() {
        //     desktop_links[3].style.color = "#343332";
        // });
        // desktop_links[4].addEventListener("mouseover", function() {
        //     desktop_links[4].style.color = "#fff";
        // });
        // desktop_links[4].addEventListener("mouseout", function() {
        //     desktop_links[4].style.color = "#343332";
        // });
        // desktop_links[5].addEventListener("mouseover", function() {
        //     desktop_links[5].style.color = "#fff";
        // });
        // desktop_links[5].addEventListener("mouseout", function() {
        //     desktop_links[5].style.color = "#343332";
        // });
        window.addEventListener("scroll", function() {
            if (!(window.location.href == "http://localhost/new/get_cab_new/index.php")) {
                var nav = document.querySelector("nav");
                var section1n = document.querySelector("#section1n");
                var section2n = document.querySelector("#section2n");
                nav.classList.toggle("fixed2", window.scrollY > 0);
                section1n.classList.toggle("none", window.scrollY > 0);
                section2n.classList.toggle("fixed3", window.scrollY > 0);
            } else {
                var nav = document.querySelector("nav");
                var section1n = document.querySelector("#section1n");
                var section2n = document.querySelector("#section2n");
                nav.classList.toggle("fixed", window.scrollY > 0);
                section1n.classList.toggle("none", window.scrollY > 0);
                section2n.classList.toggle("fixed1", window.scrollY > 0);
            }

        });

        document.getElementById("menu_icon").onclick = function() {
            document.getElementById("mobile_menu").style.display = "block";
            document.getElementById("section2n").style.display = "none";
            document.getElementById("section1n").style.display = "none";


        }
        document.getElementById("cross_icon").onclick = function() {
            document.getElementById("mobile_menu").style.display = "none";
            document.getElementById("section2n").style.display = "flex";
        }
    </script>
</body>

</html>