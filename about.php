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
            width: 162px;
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
            <div><a href="">HOME&nbsp;&nbsp;</a>&nbsp;&nbsp;/&nbsp;&nbsp;ABOUT US</div>
            <h1 style="text-align: center;">About Us</h1>
        </div>
    </div>
    <div id="section4i">
        <h1>MAIN FEATURES</h1>
        <h2>Our Benefits</h2>
        <div>
            <div class="inner_section1">
                <div><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-tag" viewBox="0 0 16 16">
                        <path d="M6 4.5a1.5 1.5 0 1 1-3 0 1.5 1.5 0 0 1 3 0zm-1 0a.5.5 0 1 0-1 0 .5.5 0 0 0 1 0z" />
                        <path d="M2 1h4.586a1 1 0 0 1 .707.293l7 7a1 1 0 0 1 0 1.414l-4.586 4.586a1 1 0 0 1-1.414 0l-7-7A1 1 0 0 1 1 6.586V2a1 1 0 0 1 1-1zm0 5.586 7 7L13.586 9l-7-7H2v4.586z" />
                    </svg>
                    <div>
                        <a href="fixed_price.php">Fixed Price</a>
                        <p>The fixed fare is set in every taximeter as the main tariff.</p>
                    </div>
                </div>
                <div><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-cash-coin" viewBox="0 0 16 16">
                        <path fill-rule="evenodd" d="M11 15a4 4 0 1 0 0-8 4 4 0 0 0 0 8zm5-4a5 5 0 1 1-10 0 5 5 0 0 1 10 0z" />
                        <path d="M9.438 11.944c.047.596.518 1.06 1.363 1.116v.44h.375v-.443c.875-.061 1.386-.529 1.386-1.207 0-.618-.39-.936-1.09-1.1l-.296-.07v-1.2c.376.043.614.248.671.532h.658c-.047-.575-.54-1.024-1.329-1.073V8.5h-.375v.45c-.747.073-1.255.522-1.255 1.158 0 .562.378.92 1.007 1.066l.248.061v1.272c-.384-.058-.639-.27-.696-.563h-.668zm1.36-1.354c-.369-.085-.569-.26-.569-.522 0-.294.216-.514.572-.578v1.1h-.003zm.432.746c.449.104.655.272.655.569 0 .339-.257.571-.709.614v-1.195l.054.012z" />
                        <path d="M1 0a1 1 0 0 0-1 1v8a1 1 0 0 0 1 1h4.083c.058-.344.145-.678.258-1H3a2 2 0 0 0-2-2V3a2 2 0 0 0 2-2h10a2 2 0 0 0 2 2v3.528c.38.34.717.728 1 1.154V1a1 1 0 0 0-1-1H1z" />
                        <path d="M9.998 5.083 10 5a2 2 0 1 0-3.132 1.65 5.982 5.982 0 0 1 3.13-1.567z" />
                    </svg>
                    <div>
                        <a href="no_fee.php">No Fee</a>
                        <p>We guarantee fixed price and you should not pay tips.</p>
                    </div>
                </div>
            </div>
            <div class="inner_section1">
                <img src="images/car.jpg" alt="">
            </div>
            <div class="inner_section1">
                <div>
                    <div>
                        <a href="pleasure.php">100% Pleasure</a>
                        <p>We have a lot of standing customers and high ratings.

                        </p>
                    </div><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-hand-thumbs-up" viewBox="0 0 16 16">
                        <path d="M8.864.046C7.908-.193 7.02.53 6.956 1.466c-.072 1.051-.23 2.016-.428 2.59-.125.36-.479 1.013-1.04 1.639-.557.623-1.282 1.178-2.131 1.41C2.685 7.288 2 7.87 2 8.72v4.001c0 .845.682 1.464 1.448 1.545 1.07.114 1.564.415 2.068.723l.048.03c.272.165.578.348.97.484.397.136.861.217 1.466.217h3.5c.937 0 1.599-.477 1.934-1.064a1.86 1.86 0 0 0 .254-.912c0-.152-.023-.312-.077-.464.201-.263.38-.578.488-.901.11-.33.172-.762.004-1.149.069-.13.12-.269.159-.403.077-.27.113-.568.113-.857 0-.288-.036-.585-.113-.856a2.144 2.144 0 0 0-.138-.362 1.9 1.9 0 0 0 .234-1.734c-.206-.592-.682-1.1-1.2-1.272-.847-.282-1.803-.276-2.516-.211a9.84 9.84 0 0 0-.443.05 9.365 9.365 0 0 0-.062-4.509A1.38 1.38 0 0 0 9.125.111L8.864.046zM11.5 14.721H8c-.51 0-.863-.069-1.14-.164-.281-.097-.506-.228-.776-.393l-.04-.024c-.555-.339-1.198-.731-2.49-.868-.333-.036-.554-.29-.554-.55V8.72c0-.254.226-.543.62-.65 1.095-.3 1.977-.996 2.614-1.708.635-.71 1.064-1.475 1.238-1.978.243-.7.407-1.768.482-2.85.025-.362.36-.594.667-.518l.262.066c.16.04.258.143.288.255a8.34 8.34 0 0 1-.145 4.725.5.5 0 0 0 .595.644l.003-.001.014-.003.058-.014a8.908 8.908 0 0 1 1.036-.157c.663-.06 1.457-.054 2.11.164.175.058.45.3.57.65.107.308.087.67-.266 1.022l-.353.353.353.354c.043.043.105.141.154.315.048.167.075.37.075.581 0 .212-.027.414-.075.582-.05.174-.111.272-.154.315l-.353.353.353.354c.047.047.109.177.005.488a2.224 2.224 0 0 1-.505.805l-.353.353.353.354c.006.005.041.05.041.17a.866.866 0 0 1-.121.416c-.165.288-.503.56-1.066.56z" />
                    </svg>
                </div>
                <div>
                    <div>
                        <a href="nationwide.php">Nationwide</a>
                        <p>Our application is the easiest way to book a taxi.

                        </p>
                    </div><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-globe" viewBox="0 0 16 16">
                        <path d="M0 8a8 8 0 1 1 16 0A8 8 0 0 1 0 8zm7.5-6.923c-.67.204-1.335.82-1.887 1.855A7.97 7.97 0 0 0 5.145 4H7.5V1.077zM4.09 4a9.267 9.267 0 0 1 .64-1.539 6.7 6.7 0 0 1 .597-.933A7.025 7.025 0 0 0 2.255 4H4.09zm-.582 3.5c.03-.877.138-1.718.312-2.5H1.674a6.958 6.958 0 0 0-.656 2.5h2.49zM4.847 5a12.5 12.5 0 0 0-.338 2.5H7.5V5H4.847zM8.5 5v2.5h2.99a12.495 12.495 0 0 0-.337-2.5H8.5zM4.51 8.5a12.5 12.5 0 0 0 .337 2.5H7.5V8.5H4.51zm3.99 0V11h2.653c.187-.765.306-1.608.338-2.5H8.5zM5.145 12c.138.386.295.744.468 1.068.552 1.035 1.218 1.65 1.887 1.855V12H5.145zm.182 2.472a6.696 6.696 0 0 1-.597-.933A9.268 9.268 0 0 1 4.09 12H2.255a7.024 7.024 0 0 0 3.072 2.472zM3.82 11a13.652 13.652 0 0 1-.312-2.5h-2.49c.062.89.291 1.733.656 2.5H3.82zm6.853 3.472A7.024 7.024 0 0 0 13.745 12H11.91a9.27 9.27 0 0 1-.64 1.539 6.688 6.688 0 0 1-.597.933zM8.5 12v2.923c.67-.204 1.335-.82 1.887-1.855.173-.324.33-.682.468-1.068H8.5zm3.68-1h2.146c.365-.767.594-1.61.656-2.5h-2.49a13.65 13.65 0 0 1-.312 2.5zm2.802-3.5a6.959 6.959 0 0 0-.656-2.5H12.18c.174.782.282 1.623.312 2.5h2.49zM11.27 2.461c.247.464.462.98.64 1.539h1.835a7.024 7.024 0 0 0-3.072-2.472c.218.284.418.598.597.933zM10.855 4a7.966 7.966 0 0 0-.468-1.068C9.835 1.897 9.17 1.282 8.5 1.077V4h2.355z" />
                    </svg>
                </div>
            </div>
        </div>
    </div>
    <div id="section2i" style="background-image:url(images/background-3.jpg);padding:80px 0px;background-repeat:no-repeat;height:100%;  background-size: cover;">
        <div class="section2i"></div>
        <div class="section2i" style="background:none;">
            <div style="margin:50px auto;max-width:800px;padding:25px;">
                <p style="font-family:'Dosis',sans-serif;font-size:13px;font-weight:800;color:#ffc000;line-height:20px;background:white;text-align:center;letter-spacing:1px;background:none;">WHAT WE OFFER</p>
                <p style="font-family: 'Raleway', sans-serif;font-weight:900;color:#ffffff;line-height:54px;text-align:center;letter-spacing:2px;">Welcome To Us</p>
                <p style="font-family:'Dosis',sans-serif;font-size: 14px;font-weight:500;color:#fff;line-height:19px;text-align:center;letter-spacing:1px;">We created our taxi to help you to find the most dependable and highest quality taxi services, anytime and anywhere. All our drivers are uniformed and fully licensed.</p>
            </div>
            <div id="inner_section1" style="background:none;">
                <div class="inner_big_section1">
                    <div class="inner_small_section1">
                        <svg xmlns="http://www.w3.org/2000/svg" width="50" height="50" fill="currentColor" class="bi bi-pin-map" viewBox="0 0 16 16" style="margin:20px auto;display:block;color:#ffc000;">
                            <path fill-rule="evenodd" d="M3.1 11.2a.5.5 0 0 1 .4-.2H6a.5.5 0 0 1 0 1H3.75L1.5 15h13l-2.25-3H10a.5.5 0 0 1 0-1h2.5a.5.5 0 0 1 .4.2l3 4a.5.5 0 0 1-.4.8H.5a.5.5 0 0 1-.4-.8l3-4z" />
                            <path fill-rule="evenodd" d="M8 1a3 3 0 1 0 0 6 3 3 0 0 0 0-6zM4 4a4 4 0 1 1 4.5 3.969V13.5a.5.5 0 0 1-1 0V7.97A4 4 0 0 1 4 3.999z" />
                        </svg>
                        <a href="address_pickup.php" class="section2i_a">Address Pickup</a>
                        <p style="color:#c9c9c9;letter-spacing:1px;">We always pick up our clients on time, 24/7 availability.</p>
                    </div>
                    <div class="inner_small_section1">
                        <svg xmlns="http://www.w3.org/2000/svg" width="50" height="50" fill="currentColor" class="bi bi-send" viewBox="0 0 16 16" style="margin:20px auto;display:block;color:#ffc000;">
                            <path d="M15.854.146a.5.5 0 0 1 .11.54l-5.819 14.547a.75.75 0 0 1-1.329.124l-3.178-4.995L.643 7.184a.75.75 0 0 1 .124-1.33L15.314.037a.5.5 0 0 1 .54.11ZM6.636 10.07l2.761 4.338L14.13 2.576 6.636 10.07Zm6.787-8.201L1.591 6.602l4.339 2.76 7.494-7.493Z" />
                        </svg>
                        <a href="airport_transfer.php" class="section2i_a">Airport Transfer</a>
                        <p style="color:#c9c9c9;letter-spacing:1px;">GetCab specialized in 24 hours airport transfer service.</p>
                    </div>
                </div>
                <div class="inner_big_section1">
                    <div class="inner_small_section1">
                        <svg xmlns="http://www.w3.org/2000/svg" width="50" height="50" fill="currentColor" class="bi bi-map-fill" viewBox="0 0 16 16" style="margin:20px auto;display:block;color:#ffc000;">
                            <path fill-rule="evenodd" d="M16 .5a.5.5 0 0 0-.598-.49L10.5.99 5.598.01a.5.5 0 0 0-.196 0l-5 1A.5.5 0 0 0 0 1.5v14a.5.5 0 0 0 .598.49l4.902-.98 4.902.98a.502.502 0 0 0 .196 0l5-1A.5.5 0 0 0 16 14.5V.5zM5 14.09V1.11l.5-.1.5.1v12.98l-.402-.08a.498.498 0 0 0-.196 0L5 14.09zm5 .8V1.91l.402.08a.5.5 0 0 0 .196 0L11 1.91v12.98l-.5.1-.5-.1z" />
                        </svg>
                        <a href="long_distance.php" class="section2i_a">Long Distance</a>
                        <p style="color:#c9c9c9;letter-spacing:1px;">We offer you a long distance taxi service to anywhere.</p>
                    </div>
                    <div class="inner_small_section1" style="border:0px solid white;">
                        <svg xmlns="http://www.w3.org/2000/svg" width="50" height="50" fill="currentColor" class="bi bi-ticket-perforated" viewBox="0 0 16 16" style="margin:20px auto;display:block;color:#ffc000;">
                            <path d="M4 4.85v.9h1v-.9H4Zm7 0v.9h1v-.9h-1Zm-7 1.8v.9h1v-.9H4Zm7 0v.9h1v-.9h-1Zm-7 1.8v.9h1v-.9H4Zm7 0v.9h1v-.9h-1Zm-7 1.8v.9h1v-.9H4Zm7 0v.9h1v-.9h-1Z" />
                            <path d="M1.5 3A1.5 1.5 0 0 0 0 4.5V6a.5.5 0 0 0 .5.5 1.5 1.5 0 1 1 0 3 .5.5 0 0 0-.5.5v1.5A1.5 1.5 0 0 0 1.5 13h13a1.5 1.5 0 0 0 1.5-1.5V10a.5.5 0 0 0-.5-.5 1.5 1.5 0 0 1 0-3A.5.5 0 0 0 16 6V4.5A1.5 1.5 0 0 0 14.5 3h-13ZM1 4.5a.5.5 0 0 1 .5-.5h13a.5.5 0 0 1 .5.5v1.05a2.5 2.5 0 0 0 0 4.9v1.05a.5.5 0 0 1-.5.5h-13a.5.5 0 0 1-.5-.5v-1.05a2.5 2.5 0 0 0 0-4.9V4.5Z" />
                        </svg>
                        <a href="taxi_tours.php" class="section2i_a">Taxi Tours</a>
                        <p style="color:#c9c9c9;letter-spacing:1px;">We offer taxi tours of various durations and complexity.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div id="section8i" style="background: none;padding-top:0px;">
        <div>
            <h1>CLIENTS ABOUT US</h1>
            <h2 style="color:#343332;">Testimonials</h2>
            <div style="max-width:800px;"><?php include "our_testimonials.php";?></div>
        </div>
    </div>
    <script>
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