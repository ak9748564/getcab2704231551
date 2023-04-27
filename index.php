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
    <title>GET CAB</title>
    <link rel="stylesheet" href="css/animate.css">
    <link rel="stylesheet" href="css/index.css">

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
    <link rel="stylesheet" href="css/media.css">
</head>

<body>
    <div id="section1i">
        <div>
            <div class="inner_section1" style="height: 110px;text-align:center;overflow:hidden;">
                <div class="animate_text" id="animate1" style="height: 110px;">
                    <div id="div11">
                        <p class="text1" id="text11">ENJOY COMFORTABLE TRIP</p>
                    </div>
                    <div id="div21">
                        <p class="text2" id="text21">Order Taxi Online</p>
                    </div>
                </div>
                <div class="animate_text" id="animate2" style="height: 110px;">
                    <div id="div12">
                        <p class="text1" id="text12">YOU'RE IN SAFE HANDS</p>
                    </div>
                    <div id="div22">
                        <p class="text2" id="text22">Best Taxi Service</p>
                    </div>
                </div>
                <div class="animate_text" id="animate3" style="height: 110px;">
                    <div id="div13">
                        <p class="text1" id="text13">FAST, AFFORDABLE, SECURE!</p>
                    </div>
                    <div id="div23">
                        <p class="text2" id="text23">Find Your Taxi</p>
                    </div>
                </div>
            </div>
            <div class="inner_section1" id="form_d_none">
                <form action="manage_forms.php" method="post">
                    <div>
                        <div>
                            <svg xmlns="http://www.w3.org/2000/svg" width="12" height="12" fill="currentColor" class="bi bi-geo-alt-fill" viewBox="0 0 16 16">
                                <path d="M8 16s6-5.686 6-10A6 6 0 0 0 2 6c0 4.314 6 10 6 10zm0-7a3 3 0 1 1 0-6 3 3 0 0 1 0 6z" />
                            </svg>
                            <input type="text" placeholder="Start Destination" name="start" style="border:none;">
                        </div>
                        <div>
                            <svg xmlns="http://www.w3.org/2000/svg" width="12" height="12" fill="currentColor" class="bi bi-geo-alt-fill" viewBox="0 0 16 16">
                                <path d="M8 16s6-5.686 6-10A6 6 0 0 0 2 6c0 4.314 6 10 6 10zm0-7a3 3 0 1 1 0-6 3 3 0 0 1 0 6z" />
                            </svg>
                            <input type="text" placeholder="End Destination" name="end">
                        </div>
                        <div>
                            <svg xmlns="http://www.w3.org/2000/svg" width="12" height="12" fill="currentColor" class="bi bi-clock" viewBox="0 0 16 16">
                                <path d="M8 3.5a.5.5 0 0 0-1 0V9a.5.5 0 0 0 .252.434l3.5 2a.5.5 0 0 0 .496-.868L8 8.71V3.5z" />
                                <path d="M8 16A8 8 0 1 0 8 0a8 8 0 0 0 0 16zm7-8A7 7 0 1 1 1 8a7 7 0 0 1 14 0z" />
                            </svg>
                            <input type="date" name="date">
                        </div>
                        <div style="padding: 8px;">
                            <select name="car_class" id="" style="border:none;">
                                <option value="">Car Class</option>
                                <option value="Economy">Economy</option>
                                <option value="Standard">Standard</option>
                                <option value="Business">Business</option>
                            </select>
                        </div>
                        <div>
                            <svg xmlns="http://www.w3.org/2000/svg" width="12" height="12" fill="currentColor" class="bi bi-telephone-fill" viewBox="0 0 16 16">
                                <path fill-rule="evenodd" d="M1.885.511a1.745 1.745 0 0 1 2.61.163L6.29 2.98c.329.423.445.974.315 1.494l-.547 2.19a.678.678 0 0 0 .178.643l2.457 2.457a.678.678 0 0 0 .644.178l2.189-.547a1.745 1.745 0 0 1 1.494.315l2.306 1.794c.829.645.905 1.87.163 2.611l-1.034 1.034c-.74.74-1.846 1.065-2.877.702a18.634 18.634 0 0 1-7.01-4.42 18.634 18.634 0 0 1-4.42-7.009c-.362-1.03-.037-2.137.703-2.877L1.885.511z" />
                            </svg>
                            <input type="text" placeholder="Your Phone" name="phonenumber">
                        </div>
                    </div>
                    <div id="checkbox" style="width:400px;display:flex;align-items:center;margin:20px auto;color:white;">
                        <input type="checkbox" name="" id="" style="margin-left:-4px;margin-right:9px;">
                        I agree that my submitted data is collected and stored
                    </div>
                    <div id="book_now" style="margin: auto;width:200px;"><input type="submit" value="Book Now!" name="book_now" style="width:200px;margin:30px auto;font-size:20px;padding:15px 30px;background:#ffc000;border-radius:30px;border:none"></div>
                </form>
            </div>
        </div>
    </div>
    <div id="section2i">
        <div id="form_d_block" class="section2i" >
            <div style="margin-bottom:30px;display:block;">
                <div>
                    <div>
                        <p style="font-family:'Dosis', sans-serif;font-size:15px;line-height:20px;font-weight:700;color:#ffc000;text-align:center;letter-spacing:2px;">ENJOY COMFORTABLE TRIP</p>
                    </div>
                    <div>
                        <p style="font-family: 'Raleway', sans-serif;font-size: 32px;line-height: 40px;font-weight: 900;color: #343332;text-align:center;letter-spacing:3px;">Book Taxi Online</p>
                    </div>
                </div>
                <form action="#" method="post">
                    <div>
                        <div style="border:1px solid #343332;">
                            <svg xmlns="http://www.w3.org/2000/svg" width="12" height="12" fill="currentColor" class="bi bi-geo-alt-fill" viewBox="0 0 16 16">
                                <path d="M8 16s6-5.686 6-10A6 6 0 0 0 2 6c0 4.314 6 10 6 10zm0-7a3 3 0 1 1 0-6 3 3 0 0 1 0 6z" />
                            </svg>
                            <input type="text" placeholder="Start Destination">
                        </div>

                        <div style="border:1px solid #343332;">
                            <svg xmlns="http://www.w3.org/2000/svg" width="12" height="12" fill="currentColor" class="bi bi-geo-alt-fill" viewBox="0 0 16 16">
                                <path d="M8 16s6-5.686 6-10A6 6 0 0 0 2 6c0 4.314 6 10 6 10zm0-7a3 3 0 1 1 0-6 3 3 0 0 1 0 6z" />
                            </svg>
                            <input type="text" placeholder="End Destination">
                        </div>

                        <div style="border:1px solid #343332;">
                            <svg xmlns="http://www.w3.org/2000/svg" width="12" height="12" fill="currentColor" class="bi bi-clock" viewBox="0 0 16 16">
                                <path d="M8 3.5a.5.5 0 0 0-1 0V9a.5.5 0 0 0 .252.434l3.5 2a.5.5 0 0 0 .496-.868L8 8.71V3.5z" />
                                <path d="M8 16A8 8 0 1 0 8 0a8 8 0 0 0 0 16zm7-8A7 7 0 1 1 1 8a7 7 0 0 1 14 0z" />
                            </svg>
                            <input type="date">
                        </div>

                        <div style="border:1px solid #343332;">
                            <input type="text" placeholder="Car Class">
                        </div>

                        <div style="border:1px solid #343332;">
                            <svg xmlns="http://www.w3.org/2000/svg" width="12" height="12" fill="currentColor" class="bi bi-telephone-fill" viewBox="0 0 16 16">
                                <path fill-rule="evenodd" d="M1.885.511a1.745 1.745 0 0 1 2.61.163L6.29 2.98c.329.423.445.974.315 1.494l-.547 2.19a.678.678 0 0 0 .178.643l2.457 2.457a.678.678 0 0 0 .644.178l2.189-.547a1.745 1.745 0 0 1 1.494.315l2.306 1.794c.829.645.905 1.87.163 2.611l-1.034 1.034c-.74.74-1.846 1.065-2.877.702a18.634 18.634 0 0 1-7.01-4.42 18.634 18.634 0 0 1-4.42-7.009c-.362-1.03-.037-2.137.703-2.877L1.885.511z" />
                            </svg>
                            <input type="text" placeholder="Your Phone">
                        </div>

                        <div id="checkbox" style="margin-top: 20px;"><input type="checkbox" name="" id="">
                            <p style="font-family: 'Dosis', sans-serif;font-size: 14px;line-height: 20px;font-weight: 500;color: #343332;">I agree that my submitted data is collected and stored</p>
                        </div>
                        <div id="book_now"><input type="submit" value="Book Now!" name="book_now"></div>
                    </div>
                </form>
            </div>
        </div>
        <div class="section2i">
            <div style="margin:50px auto;max-width:800px;background:white;padding:25px;">
                <p style="font-family:'Dosis',sans-serif;font-size:13px;font-weight:800;color:#ffc000;line-height:20px;background:white;text-align:center;letter-spacing:1px;">WHAT WE OFFER</p>
                <p style="font-family: 'Raleway', sans-serif;font-weight:900;color:#343332;line-height:54px;text-align:center;background:white;letter-spacing:2px;">Welcome To Us</p>
                <p style="font-family:'Dosis',sans-serif;font-size: 14px;font-weight:500;color:#6d6d6d;line-height:19px;background:white;text-align:center;letter-spacing:1px;">We created our taxi to help you to find the most dependable and highest quality taxi services, anytime and anywhere. All our drivers are uniformed and fully licensed.</p>
            </div>
            <div id="inner_section1">
                <div class="inner_big_section1">
                    <div class="inner_small_section1">
                        <svg xmlns="http://www.w3.org/2000/svg" width="50" height="50" fill="currentColor" class="bi bi-pin-map" viewBox="0 0 16 16" style="margin:20px auto;display:block;color:#ffc000;">
                            <path fill-rule="evenodd" d="M3.1 11.2a.5.5 0 0 1 .4-.2H6a.5.5 0 0 1 0 1H3.75L1.5 15h13l-2.25-3H10a.5.5 0 0 1 0-1h2.5a.5.5 0 0 1 .4.2l3 4a.5.5 0 0 1-.4.8H.5a.5.5 0 0 1-.4-.8l3-4z" />
                            <path fill-rule="evenodd" d="M8 1a3 3 0 1 0 0 6 3 3 0 0 0 0-6zM4 4a4 4 0 1 1 4.5 3.969V13.5a.5.5 0 0 1-1 0V7.97A4 4 0 0 1 4 3.999z" />
                        </svg>
                        <a href="address_pickup.php">Address Pickup</a>
                        <p>We always pick up our clients on time, 24/7 availability.</p>
                    </div>
                    <div class="inner_small_section1">
                        <svg xmlns="http://www.w3.org/2000/svg" width="50" height="50" fill="currentColor" class="bi bi-send" viewBox="0 0 16 16" style="margin:20px auto;display:block;color:#ffc000;">
                            <path d="M15.854.146a.5.5 0 0 1 .11.54l-5.819 14.547a.75.75 0 0 1-1.329.124l-3.178-4.995L.643 7.184a.75.75 0 0 1 .124-1.33L15.314.037a.5.5 0 0 1 .54.11ZM6.636 10.07l2.761 4.338L14.13 2.576 6.636 10.07Zm6.787-8.201L1.591 6.602l4.339 2.76 7.494-7.493Z" />
                        </svg>
                        <a href="airport_transfer.php">Airport Transfer</a>
                        <p>GetCab specialized in 24 hours airport transfer service.</p>
                    </div>
                </div>
                <div class="inner_big_section1">
                    <div class="inner_small_section1">
                        <svg xmlns="http://www.w3.org/2000/svg" width="50" height="50" fill="currentColor" class="bi bi-map-fill" viewBox="0 0 16 16" style="margin:20px auto;display:block;color:#ffc000;">
                            <path fill-rule="evenodd" d="M16 .5a.5.5 0 0 0-.598-.49L10.5.99 5.598.01a.5.5 0 0 0-.196 0l-5 1A.5.5 0 0 0 0 1.5v14a.5.5 0 0 0 .598.49l4.902-.98 4.902.98a.502.502 0 0 0 .196 0l5-1A.5.5 0 0 0 16 14.5V.5zM5 14.09V1.11l.5-.1.5.1v12.98l-.402-.08a.498.498 0 0 0-.196 0L5 14.09zm5 .8V1.91l.402.08a.5.5 0 0 0 .196 0L11 1.91v12.98l-.5.1-.5-.1z" />
                        </svg>
                        <a href="long_distance.php">Long Distance</a>
                        <p>We offer you a long distance taxi service to anywhere.</p>
                    </div>
                    <div class="inner_small_section1" style="border:0px solid white;">
                        <svg xmlns="http://www.w3.org/2000/svg" width="50" height="50" fill="currentColor" class="bi bi-ticket-perforated" viewBox="0 0 16 16" style="margin:20px auto;display:block;color:#ffc000;">
                            <path d="M4 4.85v.9h1v-.9H4Zm7 0v.9h1v-.9h-1Zm-7 1.8v.9h1v-.9H4Zm7 0v.9h1v-.9h-1Zm-7 1.8v.9h1v-.9H4Zm7 0v.9h1v-.9h-1Zm-7 1.8v.9h1v-.9H4Zm7 0v.9h1v-.9h-1Z" />
                            <path d="M1.5 3A1.5 1.5 0 0 0 0 4.5V6a.5.5 0 0 0 .5.5 1.5 1.5 0 1 1 0 3 .5.5 0 0 0-.5.5v1.5A1.5 1.5 0 0 0 1.5 13h13a1.5 1.5 0 0 0 1.5-1.5V10a.5.5 0 0 0-.5-.5 1.5 1.5 0 0 1 0-3A.5.5 0 0 0 16 6V4.5A1.5 1.5 0 0 0 14.5 3h-13ZM1 4.5a.5.5 0 0 1 .5-.5h13a.5.5 0 0 1 .5.5v1.05a2.5 2.5 0 0 0 0 4.9v1.05a.5.5 0 0 1-.5.5h-13a.5.5 0 0 1-.5-.5v-1.05a2.5 2.5 0 0 0 0-4.9V4.5Z" />
                        </svg>
                        <a href="taxi_tours.php">Taxi Tours</a>
                        <p>We offer taxi tours of various durations and complexity.</p>
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
    <div id="section5i">
        <div>
            <img src="images/woman.jpg" alt="" style="width:100%;">
        </div>
        <div>
            <h2>REWARDS AS YOU TRAVEL</h2>
            <h1>Get Your Rewards</h1>
            <p>GetCab service helps you to find the highest quality taxi services anytime. Our drivers are uniformed, fully licensed and the office staff is trained to the highest standards.We can help you to save time and money. Our main idea is based on establishing a direct connection between drivers and passengers.</p>
            <a href="about.php">
                <div>Learn More</div>
            </a>
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
    <div id="section7i">
        <div>
            <h1>STAY IN TOUCH</h1>
            <h2>Latest News</h2>
            <div>
                <div>
                    <div class="dots_container" style="display: flex;justify-content:center;align-items:center;">
                        <img src="images/image-14-370x300.jpg" style="width: 100%;">
                        <!-- <div style="display: flex;justify-content:center;align-items:center;opacity:0.5;" class="overlay">
                            <div style="display: flex;justify-content:center;align-items:center;">
                                <div class="dots d_left"></div>
                                <div class="dots"></div>
                                <div class="dots d_right"></div>
                            </div>
                        </div> -->
                    </div>
                    <div style="margin-top: 40px;align-items:center;"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-clock" viewBox="0 0 16 16" style="color:#ffc000;margin-right:10px;">
                            <path d="M8 3.5a.5.5 0 0 0-1 0V9a.5.5 0 0 0 .252.434l3.5 2a.5.5 0 0 0 .496-.868L8 8.71V3.5z" />
                            <path d="M8 16A8 8 0 1 0 8 0a8 8 0 0 0 0 16zm7-8A7 7 0 1 1 1 8a7 7 0 0 1 14 0z" />
                        </svg><a href="">21 August, 2016 </a><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-chat-fill" viewBox="0 0 16 16" style="color:#ffc000;margin-right:10px;margin-left:10px;">
                            <path d="M8 15c4.418 0 8-3.134 8-7s-3.582-7-8-7-8 3.134-8 7c0 1.76.743 3.37 1.97 4.6-.097 1.016-.417 2.13-.771 2.966-.079.186.074.394.273.362 2.256-.37 3.597-.938 4.18-1.234A9.06 9.06 0 0 0 8 15z" />
                        </svg><a href="">3 Comments </a><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-heart-fill" viewBox="0 0 16 16" style="color:#ffc000;margin-right:10px;margin-left:10px;">
                            <path fill-rule="evenodd" d="M8 1.314C12.438-3.248 23.534 4.735 8 15-7.534 4.736 3.562-3.248 8 1.314z" />
                        </svg><a href="">0 Likes</a>
                    </div>
                    <a href="">How to Get Discount With Our Mobile Application</a>
                    <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet</p>
                    <a href="our_news_details.php">
                        <div class="read_more" style="width:127px;">Read More</div>
                    </a>
                </div>
                <div>
                    <div class="dots_container" style="display: flex;justify-content:center;align-items:center;">
                        <img src="images/image-1-370x300.jpg" style="width: 100%;">
                        <!-- <div style="display: flex;justify-content:center;align-items:center;opacity:0.5;" class="overlay">
                            <div style="display: flex;justify-content:center;align-items:center;">
                                <div class="dots d_left"></div>
                                <div class="dots"></div>
                                <div class="dots d_right"></div>
                            </div>
                        </div> -->
                    </div>
                    <div style="margin-top: 40px;align-items:center;"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-clock" viewBox="0 0 16 16" style="color:#ffc000;margin-right:10px;">
                            <path d="M8 3.5a.5.5 0 0 0-1 0V9a.5.5 0 0 0 .252.434l3.5 2a.5.5 0 0 0 .496-.868L8 8.71V3.5z" />
                            <path d="M8 16A8 8 0 1 0 8 0a8 8 0 0 0 0 16zm7-8A7 7 0 1 1 1 8a7 7 0 0 1 14 0z" />
                        </svg><a href="">21 August, 2016 </a><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-chat-fill" viewBox="0 0 16 16" style="color:#ffc000;margin-right:10px;margin-left:10px;">
                            <path d="M8 15c4.418 0 8-3.134 8-7s-3.582-7-8-7-8 3.134-8 7c0 1.76.743 3.37 1.97 4.6-.097 1.016-.417 2.13-.771 2.966-.079.186.074.394.273.362 2.256-.37 3.597-.938 4.18-1.234A9.06 9.06 0 0 0 8 15z" />
                        </svg><a href="">3 Comments </a><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-heart-fill" viewBox="0 0 16 16" style="color:#ffc000;margin-right:10px;margin-left:10px;">
                            <path fill-rule="evenodd" d="M8 1.314C12.438-3.248 23.534 4.735 8 15-7.534 4.736 3.562-3.248 8 1.314z" />
                        </svg><a href="">0 Likes</a>
                    </div>
                    <a href="our_news_details.php">Get the Best Price Of Taxi In Your Town</a>
                    <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet</p>
                    <a href="">
                        <div class="read_more" style="width:127px;">Read More</div>
                    </a>
                </div>
                <div>
                    <div class="dots_container" style="display: flex;justify-content:center;align-items:center;">
                        <img src="images/image-10-370x300.jpg" style="width: 100%;">
                        <!-- <div style="display: flex;justify-content:center;align-items:center;opacity:0.5;" class="overlay">
                            <div style="display: flex;justify-content:center;align-items:center;">
                                <div class="dots d_left"></div>
                                <div class="dots"></div>
                                <div class="dots d_right"></div>
                            </div>
                        </div> -->
                    </div>
                    <div style="margin-top:40px;align-items:center;"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-clock" viewBox="0 0 16 16" style="color:#ffc000;margin-right:10px;">
                            <path d="M8 3.5a.5.5 0 0 0-1 0V9a.5.5 0 0 0 .252.434l3.5 2a.5.5 0 0 0 .496-.868L8 8.71V3.5z" />
                            <path d="M8 16A8 8 0 1 0 8 0a8 8 0 0 0 0 16zm7-8A7 7 0 1 1 1 8a7 7 0 0 1 14 0z" />
                        </svg><a href="">21 August, 2016 </a><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-chat-fill" viewBox="0 0 16 16" style="color:#ffc000;margin-right:10px;margin-left:10px;">
                            <path d="M8 15c4.418 0 8-3.134 8-7s-3.582-7-8-7-8 3.134-8 7c0 1.76.743 3.37 1.97 4.6-.097 1.016-.417 2.13-.771 2.966-.079.186.074.394.273.362 2.256-.37 3.597-.938 4.18-1.234A9.06 9.06 0 0 0 8 15z" />
                        </svg><a href="">3 Comments </a><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-heart-fill" viewBox="0 0 16 16" style="color:#ffc000;margin-right:10px;margin-left:10px;">
                            <path fill-rule="evenodd" d="M8 1.314C12.438-3.248 23.534 4.735 8 15-7.534 4.736 3.562-3.248 8 1.314z" />
                        </svg><a href="">0 Likes</a>
                    </div>
                    <a href="">Which City Has the Largest Taxi Cab FLeet in the World? </a>
                    <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet</p>
                    <a href="our_news_details.php">
                        <div class="read_more" style="width:127px;">Read More</div>
                    </a>
                </div>
            </div>
        </div>
    </div>
    <div id="section8i">
        <div>
            <h1>CLIENTS ABOUT US</h1>
            <h2>Testimonials</h2>
            <div style="max-width:800px;"><?php include "our_testimonials.php"; ?></div>
        </div>
    </div>
    <div id="section9i" style="display:flex;align-items:center;justify-content:center;">
        <div>
            <h1>HOW CAN WE HELP YOU?</h1>
            <h2>Have a Questions?</h2>
            <p>If you have any comments, suggestions or questions, please do not hesitate to contact us. Our high-quality office staff will help you and answer all your questions.</p>
            <div>
                <div>
                    <div style="width:60px;margin:auto;">
                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-pin-map" viewBox="0 0 16 16" style="background:#ffc000;border-radius:50%;padding:10px;height:60px;width:60px;color:white;">
                            <path fill-rule="evenodd" d="M3.1 11.2a.5.5 0 0 1 .4-.2H6a.5.5 0 0 1 0 1H3.75L1.5 15h13l-2.25-3H10a.5.5 0 0 1 0-1h2.5a.5.5 0 0 1 .4.2l3 4a.5.5 0 0 1-.4.8H.5a.5.5 0 0 1-.4-.8l3-4z" />
                            <path fill-rule="evenodd" d="M8 1a3 3 0 1 0 0 6 3 3 0 0 0 0-6zM4 4a4 4 0 1 1 4.5 3.969V13.5a.5.5 0 0 1-1 0V7.97A4 4 0 0 1 4 3.999z" />
                        </svg>
                    </div>
                    <h1>OUR ADDRESS</h1>
                    <h2>550 Mill Pond Ave. Arlington, MA 02474</h2>
                </div>
                <div style="border-left:1px solid #e6e6e6;border-right:1px solid #e6e6e6;">
                    <div style="width:60px;margin:auto;">
                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-telephone-fill" viewBox="0 0 16 16" style="background:#ffc000;border-radius:50%;padding:10px;height:60px;width:60px;color:white;">
                            <path fill-rule="evenodd" d="M1.885.511a1.745 1.745 0 0 1 2.61.163L6.29 2.98c.329.423.445.974.315 1.494l-.547 2.19a.678.678 0 0 0 .178.643l2.457 2.457a.678.678 0 0 0 .644.178l2.189-.547a1.745 1.745 0 0 1 1.494.315l2.306 1.794c.829.645.905 1.87.163 2.611l-1.034 1.034c-.74.74-1.846 1.065-2.877.702a18.634 18.634 0 0 1-7.01-4.42 18.634 18.634 0 0 1-4.42-7.009c-.362-1.03-.037-2.137.703-2.877L1.885.511z" />
                        </svg>
                    </div>
                    <h1>OUR PHONES</h1>
                    <h2>0800555321 0800533312</h2>
                </div>
                <div>
                    <div style="width:60px;margin:auto;">
                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-chat-dots" viewBox="0 0 16 16" style="background:#ffc000;border-radius:50%;padding:10px;height:60px;width:60px;color:white;">
                            <path d="M5 8a1 1 0 1 1-2 0 1 1 0 0 1 2 0zm4 0a1 1 0 1 1-2 0 1 1 0 0 1 2 0zm3 1a1 1 0 1 0 0-2 1 1 0 0 0 0 2z" />
                            <path d="m2.165 15.803.02-.004c1.83-.363 2.948-.842 3.468-1.105A9.06 9.06 0 0 0 8 15c4.418 0 8-3.134 8-7s-3.582-7-8-7-8 3.134-8 7c0 1.76.743 3.37 1.97 4.6a10.437 10.437 0 0 1-.524 2.318l-.003.011a10.722 10.722 0 0 1-.244.637c-.079.186.074.394.273.362a21.673 21.673 0 0 0 .693-.125zm.8-3.108a1 1 0 0 0-.287-.801C1.618 10.83 1 9.468 1 8c0-3.192 3.004-6 7-6s7 2.808 7 6c0 3.193-3.004 6-7 6a8.06 8.06 0 0 1-2.088-.272 1 1 0 0 0-.711.074c-.387.196-1.24.57-2.634.893a10.97 10.97 0 0 0 .398-2z" />
                        </svg>
                    </div>
                    <h1>OUR MAIL</h1>
                    <h2>taxiservicegetcab@info.com</h2>
                </div>
            </div>
        </div>
    </div>
    <div id="section10i" style="background: #f7f7f7;">
        <div style="padding: 70px 0px;">
            <form action="manage_forms.php" method="post">
                <div>
                    <div>
                        <div class="mb-1 input" style="border:2px solid #f7f7f7;">
                            <input type="text" class="form-control shadow-none" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Your Name" style="border-radius:0;padding:10px 15px;" name="name">
                        </div>
                        <div class="input" style="border:2px solid #f7f7f7;">
                            <input type="text" class="form-control shadow-none" id="exampleInputPassword1" placeholder="Your Phone" style="border-radius:0;padding:10px 15px;" name="phonenumber">
                        </div>
                    </div>

                    <div>
                        <div class="mb-1 input">
                            <input type="email" class="form-control shadow-none" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Your Email" style="border-radius:0;padding:10px 15px;" name="email">
                        </div>
                        <div class="input">
                            <input type="text" class="form-control shadow-none" id="exampleInputPassword1" placeholder="Your City" style="border-radius:0;padding:10px 15px;" name="city">
                        </div>
                    </div>

                    <div>
                        <div class="mb-3 input" style="border:2px solid #f7f7f7;">
                            <textarea class="form-control shadow-none" id="exampleFormControlTextarea1" rows="3" placeholder="Your Question" style="border-radius:0;padding:10px 15px;" name="message"></textarea>
                        </div>
                    </div>
                </div>
                <div class="mb-3 form-check" style="margin: auto;max-width:500px;padding:35px;">
                    <input type="checkbox" class="form-check-input" id="exampleCheck1" style="margin-right: 8px;">
                    <label class="form-check-label" for="exampleCheck1">I agree that my submitted data is being collected and stored.</label>
                </div>
                <div style="width:170px;margin:30px auto;"><button type="submit" class="read_more" style="border:none;width:170px;margin:auto;padding:20px 30px;" name="contact_us">Send a Request</button></div>

            </form>
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

        var dots_container = document.getElementsByClassName("dots_container");
        var d_left = document.getElementsByClassName("d_left");
        var d_right = document.getElementsByClassName("d_right");
        var overlay = document.getElementsByClassName("overlay");

        dots_container[0].addEventListener("mouseover", function() {
            overlay[0].style.background = "#272727";
            overlay[0].style.transition = "0.33s";
            d_left[0].style.right = "6px";
            d_left[0].style.transition = "0.33s";
            d_right[0].style.left = "6px";
            d_right[0].style.transition = "0.33s";
        });
        dots_container[0].addEventListener("mouseout", function() {
            d_left[0].style.right = "-6px";
            d_left[0].style.transition = "0.33s";
            d_right[0].style.left = "-6px";
            d_right[0].style.transition = "0.33s";
        });

        var input = document.getElementsByClassName("input");
        input[0].addEventListener("mouseover", function() {
            input[0].style.border = "2px solid #ffc000";
        });
        input[0].addEventListener("mouseout", function() {
            input[0].style.border = "2px solid #f7f7f7";
        });
        input[1].addEventListener("mouseover", function() {
            input[1].style.border = "2px solid #ffc000";
        });
        input[1].addEventListener("mouseout", function() {
            input[1].style.border = "2px solid #f7f7f7";
        });
        input[2].addEventListener("mouseover", function() {
            input[2].style.border = "2px solid #ffc000";
        });
        input[2].addEventListener("mouseout", function() {
            input[2].style.border = "2px solid #f7f7f7";
        });
        input[3].addEventListener("mouseover", function() {
            input[3].style.border = "2px solid #ffc000";
        });
        input[3].addEventListener("mouseout", function() {
            input[3].style.border = "2px solid #f7f7f7";
        });
        input[4].addEventListener("mouseover", function() {
            input[4].style.border = "2px solid #ffc000";
        });
        input[4].addEventListener("mouseout", function() {
            input[4].style.border = "2px solid #f7f7f7";
        });
    </script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-pprn3073KE6tl6bjs2QrFaJGz5/SUsLqktiwsUTF55Jfv3qYSDhgCecCxMW52nD2" crossorigin="anonymous"></script>

</body>

</html>
<?php include "footer.php"; ?>