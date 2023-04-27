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

        footer {
            padding-top: 40px;
            background: #272727;
        }

        footer #section1f,
        footer #section2f,
        footer #section3f,
        footer #copyright {
            max-width: 1170px;
            margin: auto;
            padding-bottom:60px;
        }
        footer #section1f,
        footer #section2f,
        footer #section3f
        {
            padding-top: 30px;
            display: flex;
        }

        footer #section2f,
        footer #section3f {
            display: none;
        }
        footer #section1f .section1f
        {
            width: 25%;
            padding: 20px;
        }
        footer #section1f .section1f h1,
        footer #section2f>div h1,
        footer #section3f>div h1 
        {
            font-family: 'Raleway', sans-serif;
            font-size: 19px;
            line-height: 25px;
            font-weight: 600;
            color: #ffffff;
            letter-spacing: 1px;
        }
        footer #section1f .section1f:nth-child(1) p,
        footer #section2f div p,
        footer #section3f div:nth-child(1) p
        {
            font-family: 'Dosis', sans-serif;
            font-size: 13px;
            line-height: 21px;
            font-weight: 500;
            color: #c8c8c8;
            letter-spacing: 1px;
            margin-top: 40px;
        }
        footer #section1f  .section1f ul li,
        footer #section2f  div ul li,
        footer #section3f  div ul li
         {
            list-style: none;
        }
        footer #section1f .section1f:nth-child(2)>div {
            display: flex;
            margin-top: 60px;
        }
        footer #section1f .section1f:nth-child(2)>div ul {
            padding-right: 20px;
        }
        footer #section1f .section1f:nth-child(2)>div ul li {
            display: flex;
            align-items: center;
        }
        footer #section1f .section1f:nth-child(3) ul,
        footer #section3f div:nth-child(1) ul
         {
            margin-top: 60px;
        }
        footer #section1f .section1f:nth-child(3) ul li,
        footer #section3f div:nth-child(1) ul li
         {
            line-height: 30px;
        }
        footer #section1f .section1f:nth-child(3) ul li a,footer #section1f .section1f:nth-child(3) ul li p,
        footer #section3f div:nth-child(1) ul li a 
        {
            text-decoration: none;
            font-family: 'Dosis', sans-serif;
            font-size: 14px;
            line-height: 19px;
            font-weight: 400;
            color: #c8c8c8;
            letter-spacing: 1px;
        }
        footer #section1f .section1f:nth-child(4) h2,
        footer #section2f div:nth-child(1) h2,
        footer #section3f div:nth-child(2) h2
        {
            text-decoration: none;
            font-family: 'Dosis', sans-serif;
            font-size: 14px;
            line-height: 19px;
            font-weight: 500;
            color: #c8c8c8;
            letter-spacing: 1px;
            margin-top: 60px;
        }
        footer #section1f .section1f:nth-child(4)>div input,
        footer #section2f div:nth-child(1)>div input,
        footer #section3f div:nth-child(2)>div input 
        {
            margin-top: 15px;
            padding: 15px;
            border-radius: 25px;
        }
        footer #section1f .section1f:nth-child(3) ul li svg,
        footer #section2f div:nth-child(1) ul li svg,
        footer #section3f div:nth-child(1) ul li svg 
        {
            color: #ffc000;
            margin-right: 6px;
            width: 12px;
            height: 12px;
        }
        footer #section2f>div
        {
            width: 100%;
            padding: 20px;
        }
        footer #section1f .section1f:nth-child(2)>div ul li svg {
            color: #ffc000;
            margin-right: 6px;
            width: 10px;
            height: 10px;
        }
        footer #section1f .section1f:nth-child(2)>div ul li a {
            text-decoration: none;
            font-family: 'Dosis', sans-serif;
            font-size: 13px;
            line-height: 21px;
            font-weight: 500;
            color: #c8c8c8;
            letter-spacing: 1px;
        }
        footer #section3f
                {
            width: 50%;
            padding: 20px;
        }

        
        footer #copyright {
            padding: 20px 0px;
            max-width: 1170px;
            margin: auto;
            border-top: 1px solid #525252;
            font-family: 'Dosis', sans-serif;
            font-size: 13px;
            line-height: 21px;
            font-weight: 500;
            color: #c8c8c8;
        }

        @media(max-width:1450px) {

            footer #section1f,
            footer #section2f,
            footer #section3f,
            footer #copyright {
                max-width: 1000px;
            }
        }

        @media(max-width:1250px) {

            footer #section1f,
            footer #section2f,
            footer #section3f,
            footer #copyright {
                max-width: 900px;
            }
        }

        @media(max-width:950px) {

            footer #section1f,
            footer #section2f,
            footer #section3f,
            footer #copyright {
                max-width: 700px;
            }
            
            footer #section2f
            {
                display: block;
            }
            footer #section1f .section1f:nth-child(4)
            {
                display: none;
            }
            footer #section1f .section1f
            {
               width: 33.33%;
            }

        }

        @media(max-width:850px) {}

        @media(max-width:750px) {

            footer #section1f,
            footer #section2f,
            footer #section3f,
            footer #copyright {
                max-width: 600px;
            }
            footer #section2f
            {
                display: none;
            }
            footer #section3f
            {
                display: flex;
                width: 100%;
            }
            footer #section1f .section1f:nth-child(3)
            {
                display: none;
            }
            footer #section3f>div
            {
               width: 50%;
            }
            footer #section1f .section1f
            {
               width: 50%;
            }
        }

        @media(max-width:650px) {

            footer #section1f,
            footer #section2f,
            footer #section3f,
            footer #copyright {
                max-width: 450px;
            }
        }

        @media(max-width:500px) {

            footer #section1f,            
            footer #copyright {
                padding: 0px 25px;
            }
            footer #section2f
            {
                display: none;
            }
            footer #section3f
            {
                display: none;
            }
            footer #section1f
            {
                display: block;
            }
            footer #section1f .section1f
            {
                width: 80%;
                margin: auto;
            }
            footer #section1f .section1f:nth-child(3),footer #section1f .section1f:nth-child(4)
            {
                display: block;
              
            }
            footer #section1f .section1f:nth-child(2) ul{
                padding: 0px;
            }
        }
    </style>
</head>

<body>
    <footer>
        <div id="section1f">
            <div class="section1f">
                <img src="images/footer-logo-nocopyright.png" alt="">
                <p>We created our taxi to help you to find the most dependable and highest quality taxi services, anytime and anywhere without any problems.</p>
            </div>
            <div class="section1f">
                <h1>Useful Links</h1>
                <div>
                    <ul>
                        <li><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-caret-right-fill" viewBox="0 0 16 16">
                                <path d="m12.14 8.753-5.482 4.796c-.646.566-1.658.106-1.658-.753V3.204a1 1 0 0 1 1.659-.753l5.48 4.796a1 1 0 0 1 0 1.506z" />
                            </svg><a href="">Home</a></li>
                        <li><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-caret-right-fill" viewBox="0 0 16 16">
                                <path d="m12.14 8.753-5.482 4.796c-.646.566-1.658.106-1.658-.753V3.204a1 1 0 0 1 1.659-.753l5.48 4.796a1 1 0 0 1 0 1.506z" />
                            </svg><a href="">Get a Cab</a></li>
                        <li><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-caret-right-fill" viewBox="0 0 16 16">
                                <path d="m12.14 8.753-5.482 4.796c-.646.566-1.658.106-1.658-.753V3.204a1 1 0 0 1 1.659-.753l5.48 4.796a1 1 0 0 1 0 1.506z" />
                            </svg><a href="">Our News</a></li>
                    </ul>
                    <ul>
                        <li><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-caret-right-fill" viewBox="0 0 16 16">
                                <path d="m12.14 8.753-5.482 4.796c-.646.566-1.658.106-1.658-.753V3.204a1 1 0 0 1 1.659-.753l5.48 4.796a1 1 0 0 1 0 1.506z" />
                            </svg><a href="">About Us</a></li>
                        <li><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-caret-right-fill" viewBox="0 0 16 16">
                                <path d="m12.14 8.753-5.482 4.796c-.646.566-1.658.106-1.658-.753V3.204a1 1 0 0 1 1.659-.753l5.48 4.796a1 1 0 0 1 0 1.506z" />
                            </svg><a href="">Reviews</a></li>
                        <li><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-caret-right-fill" viewBox="0 0 16 16">
                                <path d="m12.14 8.753-5.482 4.796c-.646.566-1.658.106-1.658-.753V3.204a1 1 0 0 1 1.659-.753l5.48 4.796a1 1 0 0 1 0 1.506z" />
                            </svg><a href="">Contacts</a></li>
                    </ul>
                </div>
            </div>
            <div class="section1f">
                <h1>Contact Info</h1>
                <ul>
                    <li><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-envelope-fill" viewBox="0 0 16 16">
                            <path d="M.05 3.555A2 2 0 0 1 2 2h12a2 2 0 0 1 1.95 1.555L8 8.414.05 3.555ZM0 4.697v7.104l5.803-3.558L0 4.697ZM6.761 8.83l-6.57 4.027A2 2 0 0 0 2 14h12a2 2 0 0 0 1.808-1.144l-6.57-4.027L8 9.586l-1.239-.757Zm3.436-.586L16 11.801V4.697l-5.803 3.546Z" />
                        </svg><a href="">taxiservice@info.com</a></li>
                    <li><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-telephone-fill" viewBox="0 0 16 16">
                            <path fill-rule="evenodd" d="M1.885.511a1.745 1.745 0 0 1 2.61.163L6.29 2.98c.329.423.445.974.315 1.494l-.547 2.19a.678.678 0 0 0 .178.643l2.457 2.457a.678.678 0 0 0 .644.178l2.189-.547a1.745 1.745 0 0 1 1.494.315l2.306 1.794c.829.645.905 1.87.163 2.611l-1.034 1.034c-.74.74-1.846 1.065-2.877.702a18.634 18.634 0 0 1-7.01-4.42 18.634 18.634 0 0 1-4.42-7.009c-.362-1.03-.037-2.137.703-2.877L1.885.511z" />
                        </svg><a href="">8(800)7668990</a></li>
                    <li style="display: flex;align-items:center;padding:0;"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-geo-alt-fill" viewBox="0 0 16 16">
                            <path d="M8 16s6-5.686 6-10A6 6 0 0 0 2 6c0 4.314 6 10 6 10zm0-7a3 3 0 1 1 0-6 3 3 0 0 1 0 6z" />
                        </svg>
                        <p style="margin-top:0px;">550 Mill Pond Ave. Arlington</p>
                    </li>
                </ul>
            </div>
            <div class="section1f">
                <h1>Subscribe to Us</h1>
                <h2>Subscribe to Our Newsletters!</h2>
                <div><input type="email" name="" id="" placeholder="Enter your e-mail"></div>
            </div>
        </div>
        <div id="section2f">
            <div>
                <h1>Subscribe to Us</h1>
                <h2>Subscribe to Our Newsletters!</h2>
                <div><input type="email" name="" id="" placeholder="Enter your e-mail"></div>
            </div>
        </div>
        <div id="section3f">
            <div>
                <h1>Contact Info</h1>
                <ul>
                    <li><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-envelope-fill" viewBox="0 0 16 16">
                            <path d="M.05 3.555A2 2 0 0 1 2 2h12a2 2 0 0 1 1.95 1.555L8 8.414.05 3.555ZM0 4.697v7.104l5.803-3.558L0 4.697ZM6.761 8.83l-6.57 4.027A2 2 0 0 0 2 14h12a2 2 0 0 0 1.808-1.144l-6.57-4.027L8 9.586l-1.239-.757Zm3.436-.586L16 11.801V4.697l-5.803 3.546Z" />
                        </svg><a href="">taxiservice@info.com</a></li>
                    <li><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-telephone-fill" viewBox="0 0 16 16">
                            <path fill-rule="evenodd" d="M1.885.511a1.745 1.745 0 0 1 2.61.163L6.29 2.98c.329.423.445.974.315 1.494l-.547 2.19a.678.678 0 0 0 .178.643l2.457 2.457a.678.678 0 0 0 .644.178l2.189-.547a1.745 1.745 0 0 1 1.494.315l2.306 1.794c.829.645.905 1.87.163 2.611l-1.034 1.034c-.74.74-1.846 1.065-2.877.702a18.634 18.634 0 0 1-7.01-4.42 18.634 18.634 0 0 1-4.42-7.009c-.362-1.03-.037-2.137.703-2.877L1.885.511z" />
                        </svg><a href="">8(800)7668990</a></li>
                    <li style="display: flex;align-items:center;padding:0;"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-geo-alt-fill" viewBox="0 0 16 16">
                            <path d="M8 16s6-5.686 6-10A6 6 0 0 0 2 6c0 4.314 6 10 6 10zm0-7a3 3 0 1 1 0-6 3 3 0 0 1 0 6z" />
                        </svg>
                        <p style="margin-top:0px;">550 Mill Pond Ave. Arlington</p>
                    </li>
                </ul>
            </div>
            <div>
                <h1>Subscribe to Us</h1>
                <h2>Subscribe to Our Newsletters!</h2>
                <div><input type="email" name="" id="" placeholder="Enter your e-mail"></div>
            </div>
        </div>
        <div id="copyright">
            <p><a>AncoraThemes</a> © 2022. All Rights Reserved.</p>
            <div>

            </div>
        </div>
    </footer>
</body>

</html>