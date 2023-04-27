<?php include "navbar.php"; ?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://fonts.googleapis.com/css2?family=Dosis:wght@500;700&family=Karla:wght@200&family=Lato&family=Montserrat:wght@100&family=Nanum+Gothic:wght@400;800&family=Raleway:wght@500;700;900&family=Source+Sans+Pro&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Dosis:wght@500;800&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Dosis:wght@500;800&family=Raleway:wght@600;900&display=swap" rel="stylesheet">
    <title>Document</title>
    <link rel="stylesheet" href="css/index.css">
    <link rel="stylesheet" href="css/media.css">
    <style>
        * {
            margin: 0;
            padding: 0;
        }

        #section1a {
            height: 290px;
            padding-top: 120px;
        }

        #section1a>div {
            background-image: url("images/header.jpg");
            height: 100%;
            padding: 80px 0px;
            background-position: top center;
            background-repeat: no-repeat;
        }

        #section1a>div>div {
            font-family: "Dosis", sans-serif;
            font-size: 15px;
            line-height: 20px;
            font-weight: 700;
            color: #ffc000;
            width: 124px;
            margin: auto;
            letter-spacing: 2px;
        }

        #section1a>div>div>a {
            color: #ffc000;
            text-decoration: none;
        }

        #section1a>div>div>a:hover {
            color: #ff9800;
        }

        #section1a>div>h1 {
            font-family: "Raleway", sans-serif;
            font-size: 67px;
            line-height: 77px;
            font-weight: 900;
            color: white;
        }
    </style>
</head>

<body>

    <div id="section1a">
        <div>
            <div style="width:166px;"><a href="">HOME&nbsp;&nbsp;</a>&nbsp;&nbsp;/&nbsp;&nbsp;GET A CAB</div>
            <h1 style="text-align: center;">Get a Cab</h1>
        </div>
    </div>
    <div id="section1i" style="background: none;">
        <div>
            <div class="inner_section1" style="height: 110px;text-align:center;overflow:hidden;">
            </div>
            <div class="inner_section1">
                <h1 style="text-align:center;font-family:'Dosis',sans-serif;font-size:13px;line-height:20px;color:#ffc000;letter-spacing:1px;font-weight:800;margin:15px 0px;">ENJOY COMFORTABLE TRIP</h1>
                <h2 style="text-align:center;font-family:'Raleway',sans-serif;font-size:45px;line-height:54px;color:#343332;letter-spacing:1px;font-weight:900;margin:30px 0px;">Book Taxi Online</h2>

                <form action="manage_forms.php" method="post">
                    <div>
                        <div style="border: 1px solid #e6e6e6;">
                            <svg xmlns="http://www.w3.org/2000/svg" width="12" height="12" fill="currentColor" class="bi bi-geo-alt-fill" viewBox="0 0 16 16">
                                <path d="M8 16s6-5.686 6-10A6 6 0 0 0 2 6c0 4.314 6 10 6 10zm0-7a3 3 0 1 1 0-6 3 3 0 0 1 0 6z" />
                            </svg>
                            <input type="text" placeholder="Start Destination" name="start">
                        </div>
                        <div style="border: 1px solid #e6e6e6;">
                            <svg xmlns="http://www.w3.org/2000/svg" width="12" height="12" fill="currentColor" class="bi bi-geo-alt-fill" viewBox="0 0 16 16">
                                <path d="M8 16s6-5.686 6-10A6 6 0 0 0 2 6c0 4.314 6 10 6 10zm0-7a3 3 0 1 1 0-6 3 3 0 0 1 0 6z" />
                            </svg>
                            <input type="text" placeholder="End Destination" name="end">
                        </div>
                        <div style="border: 1px solid #e6e6e6;">
                            <svg xmlns="http://www.w3.org/2000/svg" width="12" height="12" fill="currentColor" class="bi bi-clock" viewBox="0 0 16 16">
                                <path d="M8 3.5a.5.5 0 0 0-1 0V9a.5.5 0 0 0 .252.434l3.5 2a.5.5 0 0 0 .496-.868L8 8.71V3.5z" />
                                <path d="M8 16A8 8 0 1 0 8 0a8 8 0 0 0 0 16zm7-8A7 7 0 1 1 1 8a7 7 0 0 1 14 0z" />
                            </svg>
                            <input type="date" name="date">
                        </div>
                        <div style="padding: 8px;border: 1px solid #e6e6e6;">
                            <select name="car_class" id="" style="border:none;" name="car_class">
                                <option value="">Car Class</option>
                                <option value="Economy">Economy</option>
                                <option value="Standard">Standard</option>
                                <option value="Business">Business</option>
                            </select>
                        </div>
                        <div style="border: 1px solid #e6e6e6;">
                            <svg xmlns="http://www.w3.org/2000/svg" width="12" height="12" fill="currentColor" class="bi bi-telephone-fill" viewBox="0 0 16 16">
                                <path fill-rule="evenodd" d="M1.885.511a1.745 1.745 0 0 1 2.61.163L6.29 2.98c.329.423.445.974.315 1.494l-.547 2.19a.678.678 0 0 0 .178.643l2.457 2.457a.678.678 0 0 0 .644.178l2.189-.547a1.745 1.745 0 0 1 1.494.315l2.306 1.794c.829.645.905 1.87.163 2.611l-1.034 1.034c-.74.74-1.846 1.065-2.877.702a18.634 18.634 0 0 1-7.01-4.42 18.634 18.634 0 0 1-4.42-7.009c-.362-1.03-.037-2.137.703-2.877L1.885.511z" />
                            </svg>
                            <input type="text" placeholder="Your Phone" name="phonenumber">
                        </div>
                    </div>
                    <div id="checkbox" style="width:400px;display:flex;align-items:center;margin:20px auto;color:#343332;">
                        <input type="checkbox" name="" id="" style="margin-left:-4px;margin-right:9px;">
                        I agree that my submitted data is collected and stored
                    </div>
                    <div id="book_now"><input type="submit" value="Book Now!" name="book_now"></div>
                </form>
            </div>
        </div>
    </div>
    <div id="section6i">
        <div>
            <h1>CAR CLASSES AND RATES</h1>
            <h2>Choose Your Car</h2>
            <div>
                <div class="hover_gold">
                    <div style="width:85px;height:85px;display:flex;justify-content:center;align-items:center;border-radius:45px;margin:auto;background:#272727;" class="ring_gold">
                        <div style="width:70px;height:70px;border-radius:40px;background:#ffc000;z-index:1;">
                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 640 512" height="50" width="50" style="color:white;margin-top:7px;margin-left:2px;">
                                <!--! Font Awesome Pro 6.1.1 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license (Commercial License) Copyright 2022 Fonticons, Inc. -->
                                <path d="M640 320V368C640 385.7 625.7 400 608 400H574.7C567.1 445.4 527.6 480 480 480C432.4 480 392.9 445.4 385.3 400H254.7C247.1 445.4 207.6 480 160 480C112.4 480 72.94 445.4 65.33 400H32C14.33 400 0 385.7 0 368V256C0 228.9 16.81 205.8 40.56 196.4L82.2 92.35C96.78 55.9 132.1 32 171.3 32H353.2C382.4 32 409.1 45.26 428.2 68.03L528.2 193C591.2 200.1 640 254.8 640 319.1V320zM171.3 96C158.2 96 146.5 103.1 141.6 116.1L111.3 192H224V96H171.3zM272 192H445.4L378.2 108C372.2 100.4 362.1 96 353.2 96H272V192zM525.3 400C527 394.1 528 389.6 528 384C528 357.5 506.5 336 480 336C453.5 336 432 357.5 432 384C432 389.6 432.1 394.1 434.7 400C441.3 418.6 459.1 432 480 432C500.9 432 518.7 418.6 525.3 400zM205.3 400C207 394.1 208 389.6 208 384C208 357.5 186.5 336 160 336C133.5 336 112 357.5 112 384C112 389.6 112.1 394.1 114.7 400C121.3 418.6 139.1 432 160 432C180.9 432 198.7 418.6 205.3 400z" />
                            </svg>
                        </div>
                    </div>
                    <div class="bg_gold">
                        <h1>Economy Class</h1>
                        <h2>Our taxi service offers a big car selection from luxury vehicles to budget cars</h2>
                        <h3 class="h3">$1,5/mi</h3>
                    </div>
                </div>
                <div class="hover_gold">
                    <div style="width:85px;height:85px;display:flex;justify-content:center;align-items:center;border-radius:45px;margin:auto;background:#272727;" class="ring_gold">
                        <div style="width:70px;height:70px;border-radius:40px;background:#ffc000;z-index:1;">
                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 640 512" height="50" width="50" style="color:white;margin-top:7px;margin-left:2px;">
                                <!--! Font Awesome Pro 6.1.1 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license (Commercial License) Copyright 2022 Fonticons, Inc. -->
                                <path d="M640 320V368C640 385.7 625.7 400 608 400H574.7C567.1 445.4 527.6 480 480 480C432.4 480 392.9 445.4 385.3 400H254.7C247.1 445.4 207.6 480 160 480C112.4 480 72.94 445.4 65.33 400H32C14.33 400 0 385.7 0 368V256C0 228.9 16.81 205.8 40.56 196.4L82.2 92.35C96.78 55.9 132.1 32 171.3 32H353.2C382.4 32 409.1 45.26 428.2 68.03L528.2 193C591.2 200.1 640 254.8 640 319.1V320zM171.3 96C158.2 96 146.5 103.1 141.6 116.1L111.3 192H224V96H171.3zM272 192H445.4L378.2 108C372.2 100.4 362.1 96 353.2 96H272V192zM525.3 400C527 394.1 528 389.6 528 384C528 357.5 506.5 336 480 336C453.5 336 432 357.5 432 384C432 389.6 432.1 394.1 434.7 400C441.3 418.6 459.1 432 480 432C500.9 432 518.7 418.6 525.3 400zM205.3 400C207 394.1 208 389.6 208 384C208 357.5 186.5 336 160 336C133.5 336 112 357.5 112 384C112 389.6 112.1 394.1 114.7 400C121.3 418.6 139.1 432 160 432C180.9 432 198.7 418.6 205.3 400z" />
                            </svg>
                        </div>
                    </div>
                    <div class="bg_gold">
                        <h1>Economy Class</h1>
                        <h2>Our taxi service offers a big car selection from luxury vehicles to budget cars</h2>
                        <h3 class="h3">$1,5/mi</h3>
                    </div>
                </div>
                <div class="hover_gold">
                    <div style="width:85px;height:85px;display:flex;justify-content:center;align-items:center;border-radius:45px;margin:auto;background:#272727;" class="ring_gold">
                        <div style="width:70px;height:70px;border-radius:40px;background:#ffc000;z-index:1;">
                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 640 512" height="50" width="50" style="color:white;margin-top:7px;margin-left:2px;">
                                <!--! Font Awesome Pro 6.1.1 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license (Commercial License) Copyright 2022 Fonticons, Inc. -->
                                <path d="M640 320V368C640 385.7 625.7 400 608 400H574.7C567.1 445.4 527.6 480 480 480C432.4 480 392.9 445.4 385.3 400H254.7C247.1 445.4 207.6 480 160 480C112.4 480 72.94 445.4 65.33 400H32C14.33 400 0 385.7 0 368V256C0 228.9 16.81 205.8 40.56 196.4L82.2 92.35C96.78 55.9 132.1 32 171.3 32H353.2C382.4 32 409.1 45.26 428.2 68.03L528.2 193C591.2 200.1 640 254.8 640 319.1V320zM171.3 96C158.2 96 146.5 103.1 141.6 116.1L111.3 192H224V96H171.3zM272 192H445.4L378.2 108C372.2 100.4 362.1 96 353.2 96H272V192zM525.3 400C527 394.1 528 389.6 528 384C528 357.5 506.5 336 480 336C453.5 336 432 357.5 432 384C432 389.6 432.1 394.1 434.7 400C441.3 418.6 459.1 432 480 432C500.9 432 518.7 418.6 525.3 400zM205.3 400C207 394.1 208 389.6 208 384C208 357.5 186.5 336 160 336C133.5 336 112 357.5 112 384C112 389.6 112.1 394.1 114.7 400C121.3 418.6 139.1 432 160 432C180.9 432 198.7 418.6 205.3 400z" />
                            </svg>
                        </div>
                    </div>
                    <div class="bg_gold">
                        <h1>Economy Class</h1>
                        <h2>Our taxi service offers a big car selection from luxury vehicles to budget cars</h2>
                        <h3 class="h3">$1,5/mi</h3>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div id="section3i">
        <div id="inner_section1">
            <p style="font-family:'Dosis',sans-serif;font-size:13px;font-weight:800;color:#ffc000;line-height:20px;letter-spacing:1px;">DOWNLOAD FOR FREE</p>
            <p style="font-family:'Raleway',sans-serif;font-weight:800;color:#ffffff;letter-spacing:1px;">Download the App</p>
            <p style="font-family:'Dosis',sans-serif;font-size:14px;font-weight:800;color:#e6e6e6;line-height:19px;margin-top:15px;">Upload our own taxi application to your smartphone and discover just how easy booking a taxi can be. With this application, you can order a taxi quickly.</p>
            <div id="inner_section2">
                <div style="margin: 20px;"><img src="images/gp.png"></div>
                <div style="margin: 20px;"><img src="images/ap.png"></div>
            </div>
        </div>
    </div>
    <script>
        var hover_gold = document.getElementsByClassName("hover_gold");
        var ring_gold = document.getElementsByClassName("ring_gold");
        var bg_gold = document.getElementsByClassName("bg_gold");
        var h3 = document.getElementsByClassName("h3");
        hover_gold[0].addEventListener("mouseover", function() {
            bg_gold[0].style.background = "#ffc000";
            ring_gold[0].style.background = "#ffc000";
            h3[0].style.color = "#fff";
        });
        hover_gold[0].addEventListener("mouseout", function() {
            bg_gold[0].style.background = "#272727";
            ring_gold[0].style.background = "#272727";
            h3[0].style.color = "#ffc000";
        });
        hover_gold[1].addEventListener("mouseover", function() {
            bg_gold[1].style.background = "#ffc000";
            ring_gold[1].style.background = "#ffc000";
            h3[1].style.color = "#ffc000";
        });
        hover_gold[1].addEventListener("mouseout", function() {
            bg_gold[1].style.background = "#272727";
            ring_gold[1].style.background = "#272727";
            h3[1].style.color = "#ffc000";
        });
        hover_gold[2].addEventListener("mouseover", function() {
            bg_gold[2].style.background = "#ffc000";
            ring_gold[2].style.background = "#ffc000";
            h3[2].style.color = "#ffc000";
        });
        hover_gold[2].addEventListener("mouseout", function() {
            bg_gold[2].style.background = "#272727";
            ring_gold[2].style.background = "#272727";
            h3[2].style.color = "#ffc000";
        });


        var section2i_a = document.getElementsByClassName("section2i_a");
        section2i_a[0].style.color = "#fff";
        section2i_a[1].style.color = "#fff";
        section2i_a[2].style.color = "#fff";
        section2i_a[3].style.color = "#fff";
        section2i_a[0].addEventListener("mouseover", function() {
            section2i_a[0].style.color = "#ffc000";
        });
        section2i_a[0].addEventListener("mouseout", function() {
            section2i_a[0].style.color = "#fff";
        });
        section2i_a[1].addEventListener("mouseover", function() {
            section2i_a[1].style.color = "#ffc000";
        });
        section2i_a[1].addEventListener("mouseout", function() {
            section2i_a[1].style.color = "#fff";
        });
        section2i_a[2].addEventListener("mouseover", function() {
            section2i_a[2].style.color = "#ffc000";
        });
        section2i_a[2].addEventListener("mouseout", function() {
            section2i_a[2].style.color = "#fff";
        });
        section2i_a[3].addEventListener("mouseover", function() {
            section2i_a[3].style.color = "#ffc000";
        });
        section2i_a[3].addEventListener("mouseout", function() {
            section2i_a[3].style.color = "#fff";
        });
    </script>
</body>

</html>
<?php include "footer.php"; ?>