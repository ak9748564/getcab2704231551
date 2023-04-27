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
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
    <title>Document</title>
    <link rel="stylesheet" href="css/index.css">
    <link rel="stylesheet" href="css/media.css">
    <link rel="stylesheet" href="css/our_news.css">

</head>

<body>
    <?php
    include_once("connection.php");
    $sql = "SELECT * FROM posts";
    $result = mysqli_query($conn, $sql);
    $header = 0;
    while ($row = $result->fetch_assoc()) {
    ?><?php
        if ($header == 0) {
            echo "<div id='section1a' style='height:380px;'><div><div style='width:168px;'><a>HOME&nbsp;&nbsp;</a>&nbsp;&nbsp;/&nbsp;&nbsp;ALL POSTS</div><h1 style='text-align: center;'>All Posts</h1></div></div><div id='section2on'><div><div id='containeron'>
            <div id='cont1on'>";
        }
        ?>

    <div class="containeron">
        <a><?php echo $row['heading']; ?></a>
        <?php
        if ($row['media_type'] == "image") {
            echo "<img src='images/$row[media_source]' style='width:100%;margin-top:50px;'>";
        }
        if ($row['media_type'] == "video") {
            echo "<video src='$row[media_source]' controls style='width: 100%;'></video>";
        }
        if ($row['media_type'] == "slider") {
            echo "<div id='carouselExampleInterval' class='carousel slide' data-bs-ride='carousel' style='margin-top:50px;'><div class='carousel-inner'>";
            $sql1 = "SELECT * FROM slides WHERE post_id=$row[post_id]";
            $result1 = mysqli_query($conn, $sql1);
            $first_slide = 0;
            while ($row1 = $result1->fetch_assoc()) {
                if ($first_slide == 0) {
                    echo "<div class='carousel-item active' data-bs-interval='10000'><img src='images/$row1[source]' class='d-block w-100'></div>";
                } else {
                    echo "<div class='carousel-item' data-bs-interval='2000'><img src='images/$row1[source]' class='d-block w-100'></div>";
                }
                $first_slide = 1;
            }
            echo "</div><button class='carousel-control-prev' type='button' data-bs-target='#carouselExampleInterval' data-bs-slide='prev'><span class='carousel-control-prev-icon' aria-hidden='true'></span><span class='visually-hidden'>Previous</span></button>
                                <button class='carousel-control-next' type='button' data-bs-target='#carouselExampleInterval' data-bs-slide='next'><span class='carousel-control-next-icon' aria-hidden='true'></span><span class='visually-hidden'>Next</span></button></div>";
        }
        ?>
        <div style="margin-top:40px;align-items:center;">
            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-clock" viewBox="0 0 16 16" style="color:#ffc000;margin-right:10px;">
                <path d="M8 3.5a.5.5 0 0 0-1 0V9a.5.5 0 0 0 .252.434l3.5 2a.5.5 0 0 0 .496-.868L8 8.71V3.5z" />
                <path d="M8 16A8 8 0 1 0 8 0a8 8 0 0 0 0 16zm7-8A7 7 0 1 1 1 8a7 7 0 0 1 14 0z" />
            </svg>
            <a><?php echo $row['post_date-time']; ?></a><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-chat-fill" viewBox="0 0 16 16" style="color:#ffc000;margin-right:10px;margin-left:10px;">
                <path d="M8 15c4.418 0 8-3.134 8-7s-3.582-7-8-7-8 3.134-8 7c0 1.76.743 3.37 1.97 4.6-.097 1.016-.417 2.13-.771 2.966-.079.186.074.394.273.362 2.256-.37 3.597-.938 4.18-1.234A9.06 9.06 0 0 0 8 15z" />
            </svg><a href=""><?php echo $row['number_of_comments']; ?> Comments </a><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-heart-fill" viewBox="0 0 16 16" style="color:#ffc000;margin-right:10px;margin-left:10px;">
                <path fill-rule="evenodd" d="M8 1.314C12.438-3.248 23.534 4.735 8 15-7.534 4.736 3.562-3.248 8 1.314z" />
            </svg><a href=""><?php echo $row['number_of_likes']; ?> Likes</a>
        </div>
        <p><?php echo $row['content']; ?></p>
        <form action="our_news_details_dynamic.php" method="post"><div  ><input type="hidden" value="<?php echo $row['post_id'];?>" name="post_id">
    <input type="submit" value="Read More" name="goto" class="read_more" style="width:127px;border:none;">
    </div>
    </form>
        
            
    </div>
    <hr style="margin:80px 0px ;">
<?php $header = 1;
    }
    mysqli_close($conn); ?>
</div>
</div>

<div id="sidebaron_outer" style="background:#f7f7f7;height:100%;">
    <div id="sidebaron" style="height:100%;">
        <div class="sidebaron">
            <div class="sidebaron_elements">
                <h1>Categories</h1>
                <ul>
                    <li><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-caret-right-fill" viewBox="0 0 16 16">
                            <path d="m12.14 8.753-5.482 4.796c-.646.566-1.658.106-1.658-.753V3.204a1 1 0 0 1 1.659-.753l5.48 4.796a1 1 0 0 1 0 1.506z" />
                        </svg><a href="">City Life</a></li>
                    <li><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-caret-right-fill" viewBox="0 0 16 16">
                            <path d="m12.14 8.753-5.482 4.796c-.646.566-1.658.106-1.658-.753V3.204a1 1 0 0 1 1.659-.753l5.48 4.796a1 1 0 0 1 0 1.506z" />
                        </svg><a href="">Passengers</a></li>
                    <li><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-caret-right-fill" viewBox="0 0 16 16">
                            <path d="m12.14 8.753-5.482 4.796c-.646.566-1.658.106-1.658-.753V3.204a1 1 0 0 1 1.659-.753l5.48 4.796a1 1 0 0 1 0 1.506z" />
                        </svg><a href="">Service</a></li>
                    <li><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-caret-right-fill" viewBox="0 0 16 16">
                            <path d="m12.14 8.753-5.482 4.796c-.646.566-1.658.106-1.658-.753V3.204a1 1 0 0 1 1.659-.753l5.48 4.796a1 1 0 0 1 0 1.506z" />
                        </svg><a href="">Traffic</a></li>
                    <li><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-caret-right-fill" viewBox="0 0 16 16">
                            <path d="m12.14 8.753-5.482 4.796c-.646.566-1.658.106-1.658-.753V3.204a1 1 0 0 1 1.659-.753l5.48 4.796a1 1 0 0 1 0 1.506z" />
                        </svg><a href="">Urban Jungle</a></li>
                    <li><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-caret-right-fill" viewBox="0 0 16 16">
                            <path d="m12.14 8.753-5.482 4.796c-.646.566-1.658.106-1.658-.753V3.204a1 1 0 0 1 1.659-.753l5.48 4.796a1 1 0 0 1 0 1.506z" />
                        </svg><a href="">VIP taxi</a></li>
                </ul>
            </div>
            <div class="sidebaron_elements">
                <h1>Search</h1>
                <div style="background:white;display:flex;justify-content:space-between;align-items:center;"><input id="input" type="text" placeholder="Search..." style="padding:10px;border:none;"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-search" viewBox="0 0 16 16" style="margin-right:15px;">
                        <path d="M11.742 10.344a6.5 6.5 0 1 0-1.397 1.398h-.001c.03.04.062.078.098.115l3.85 3.85a1 1 0 0 0 1.415-1.414l-3.85-3.85a1.007 1.007 0 0 0-.115-.1zM12 6.5a5.5 5.5 0 1 1-11 0 5.5 5.5 0 0 1 11 0z" />
                    </svg></div>
            </div>
            <div class="sidebaron_elements">
                <h1>Archive</h1>
                <ul>
                    <li><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-caret-right-fill" viewBox="0 0 16 16">
                            <path d="m12.14 8.753-5.482 4.796c-.646.566-1.658.106-1.658-.753V3.204a1 1 0 0 1 1.659-.753l5.48 4.796a1 1 0 0 1 0 1.506z" />
                        </svg><a href="">October 2016</a></li>
                    <li><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-caret-right-fill" viewBox="0 0 16 16">
                            <path d="m12.14 8.753-5.482 4.796c-.646.566-1.658.106-1.658-.753V3.204a1 1 0 0 1 1.659-.753l5.48 4.796a1 1 0 0 1 0 1.506z" />
                        </svg><a href="">September 2016</a></li>
                    <li><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-caret-right-fill" viewBox="0 0 16 16">
                            <path d="m12.14 8.753-5.482 4.796c-.646.566-1.658.106-1.658-.753V3.204a1 1 0 0 1 1.659-.753l5.48 4.796a1 1 0 0 1 0 1.506z" />
                        </svg><a href="">August 2016</a></li>
                </ul>
            </div>
            <div class="sidebaron_elements">
                <h1>Calendar</h1>
            </div>
            <div class="sidebaron_elements">
                <h1>Recent Posts</h1>
                <ul>
                    <li><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-caret-right-fill" viewBox="0 0 16 16">
                            <path d="m12.14 8.753-5.482 4.796c-.646.566-1.658.106-1.658-.753V3.204a1 1 0 0 1 1.659-.753l5.48 4.796a1 1 0 0 1 0 1.506z" />
                        </svg><a href="">Taxi Benefits that Save Time and Money</a></li>
                    <li><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-caret-right-fill" viewBox="0 0 16 16">
                            <path d="m12.14 8.753-5.482 4.796c-.646.566-1.658.106-1.658-.753V3.204a1 1 0 0 1 1.659-.753l5.48 4.796a1 1 0 0 1 0 1.506z" />
                        </svg><a href="">Taxi Service for Kids</a></li>
                    <li><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-caret-right-fill" viewBox="0 0 16 16">
                            <path d="m12.14 8.753-5.482 4.796c-.646.566-1.658.106-1.658-.753V3.204a1 1 0 0 1 1.659-.753l5.48 4.796a1 1 0 0 1 0 1.506z" />
                        </svg><a href="">5 Countries with the Worst Drivers</a></li>
                </ul>
            </div>
            <div class="sidebaron_elements">
                <h1>Tags</h1>
                <p>application</p>
                <p>cabs</p>
                <p>cities</p>
                <p>driver</p>
                <p>lifestyle</p>
                <p>yellow taxi</p>
            </div>
        </div>
        <div class="sidebaron">
            <div class="sidebaron_bigger_elements" style="display:flex;justify-content:space-between;">
                <div class="sidebaron_elements">
                    <h1>Categories</h1>
                    <ul>
                        <li><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-caret-right-fill" viewBox="0 0 16 16">
                                <path d="m12.14 8.753-5.482 4.796c-.646.566-1.658.106-1.658-.753V3.204a1 1 0 0 1 1.659-.753l5.48 4.796a1 1 0 0 1 0 1.506z" />
                            </svg><a href="">City Life</a></li>
                        <li><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-caret-right-fill" viewBox="0 0 16 16">
                                <path d="m12.14 8.753-5.482 4.796c-.646.566-1.658.106-1.658-.753V3.204a1 1 0 0 1 1.659-.753l5.48 4.796a1 1 0 0 1 0 1.506z" />
                            </svg><a href="">Passengers</a></li>
                        <li><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-caret-right-fill" viewBox="0 0 16 16">
                                <path d="m12.14 8.753-5.482 4.796c-.646.566-1.658.106-1.658-.753V3.204a1 1 0 0 1 1.659-.753l5.48 4.796a1 1 0 0 1 0 1.506z" />
                            </svg><a href="">Service</a></li>
                        <li><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-caret-right-fill" viewBox="0 0 16 16">
                                <path d="m12.14 8.753-5.482 4.796c-.646.566-1.658.106-1.658-.753V3.204a1 1 0 0 1 1.659-.753l5.48 4.796a1 1 0 0 1 0 1.506z" />
                            </svg><a href="">Traffic</a></li>
                        <li><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-caret-right-fill" viewBox="0 0 16 16">
                                <path d="m12.14 8.753-5.482 4.796c-.646.566-1.658.106-1.658-.753V3.204a1 1 0 0 1 1.659-.753l5.48 4.796a1 1 0 0 1 0 1.506z" />
                            </svg><a href="">Urban Jungle</a></li>
                        <li><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-caret-right-fill" viewBox="0 0 16 16">
                                <path d="m12.14 8.753-5.482 4.796c-.646.566-1.658.106-1.658-.753V3.204a1 1 0 0 1 1.659-.753l5.48 4.796a1 1 0 0 1 0 1.506z" />
                            </svg><a href="">VIP taxi</a></li>
                    </ul>
                </div>
                <div class="sidebaron_elements">
                    <h1>Search</h1>
                    <div style="background:white;display:flex;justify-content:space-between;align-items:center;"><input id="input" type="text" placeholder="Search..." style="padding:10px;border:none;"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-search" viewBox="0 0 16 16" style="margin-right:15px;">
                            <path d="M11.742 10.344a6.5 6.5 0 1 0-1.397 1.398h-.001c.03.04.062.078.098.115l3.85 3.85a1 1 0 0 0 1.415-1.414l-3.85-3.85a1.007 1.007 0 0 0-.115-.1zM12 6.5a5.5 5.5 0 1 1-11 0 5.5 5.5 0 0 1 11 0z" />
                        </svg></div>
                </div>
                <div class="sidebaron_elements">
                    <h1>Archive</h1>
                    <ul>
                        <li><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-caret-right-fill" viewBox="0 0 16 16">
                                <path d="m12.14 8.753-5.482 4.796c-.646.566-1.658.106-1.658-.753V3.204a1 1 0 0 1 1.659-.753l5.48 4.796a1 1 0 0 1 0 1.506z" />
                            </svg><a href="">October 2016</a></li>
                        <li><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-caret-right-fill" viewBox="0 0 16 16">
                                <path d="m12.14 8.753-5.482 4.796c-.646.566-1.658.106-1.658-.753V3.204a1 1 0 0 1 1.659-.753l5.48 4.796a1 1 0 0 1 0 1.506z" />
                            </svg><a href="">September 2016</a></li>
                        <li><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-caret-right-fill" viewBox="0 0 16 16">
                                <path d="m12.14 8.753-5.482 4.796c-.646.566-1.658.106-1.658-.753V3.204a1 1 0 0 1 1.659-.753l5.48 4.796a1 1 0 0 1 0 1.506z" />
                            </svg><a href="">August 2016</a></li>
                    </ul>
                </div>
            </div>
            <div class="sidebaron_bigger_elements" style="display:flex;justify-content:space-between;">
                <div class="sidebaron_elements">
                    <h1>Calendar</h1>
                </div>
                <div class="sidebaron_elements">
                    <h1>Recent Posts</h1>
                    <ul>
                        <li><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-caret-right-fill" viewBox="0 0 16 16">
                                <path d="m12.14 8.753-5.482 4.796c-.646.566-1.658.106-1.658-.753V3.204a1 1 0 0 1 1.659-.753l5.48 4.796a1 1 0 0 1 0 1.506z" />
                            </svg><a href="">Taxi Benefits that Save Time and Money</a></li>
                        <li><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-caret-right-fill" viewBox="0 0 16 16">
                                <path d="m12.14 8.753-5.482 4.796c-.646.566-1.658.106-1.658-.753V3.204a1 1 0 0 1 1.659-.753l5.48 4.796a1 1 0 0 1 0 1.506z" />
                            </svg><a href="">Taxi Service for Kids</a></li>
                        <li><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-caret-right-fill" viewBox="0 0 16 16">
                                <path d="m12.14 8.753-5.482 4.796c-.646.566-1.658.106-1.658-.753V3.204a1 1 0 0 1 1.659-.753l5.48 4.796a1 1 0 0 1 0 1.506z" />
                            </svg><a href="">5 Countries with the Worst Drivers</a></li>
                    </ul>
                </div>
                <div class="sidebaron_elements">
                    <h1>Tags</h1>
                    <p>application</p>
                    <p>cabs</p>
                    <p>cities</p>
                    <p>driver</p>
                    <p>lifestyle</p>
                    <p>yellow taxi</p>
                </div>
            </div>
        </div>
        <div class="sidebaron">
            <div class="sidebaron_bigger_elements" style="display:flex;justify-content:space-between;">
                <div class="sidebaron_elements">
                    <h1>Categories</h1>
                    <ul>
                        <li><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-caret-right-fill" viewBox="0 0 16 16">
                                <path d="m12.14 8.753-5.482 4.796c-.646.566-1.658.106-1.658-.753V3.204a1 1 0 0 1 1.659-.753l5.48 4.796a1 1 0 0 1 0 1.506z" />
                            </svg><a href="">City Life</a></li>
                        <li><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-caret-right-fill" viewBox="0 0 16 16">
                                <path d="m12.14 8.753-5.482 4.796c-.646.566-1.658.106-1.658-.753V3.204a1 1 0 0 1 1.659-.753l5.48 4.796a1 1 0 0 1 0 1.506z" />
                            </svg><a href="">Passengers</a></li>
                        <li><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-caret-right-fill" viewBox="0 0 16 16">
                                <path d="m12.14 8.753-5.482 4.796c-.646.566-1.658.106-1.658-.753V3.204a1 1 0 0 1 1.659-.753l5.48 4.796a1 1 0 0 1 0 1.506z" />
                            </svg><a href="">Service</a></li>
                        <li><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-caret-right-fill" viewBox="0 0 16 16">
                                <path d="m12.14 8.753-5.482 4.796c-.646.566-1.658.106-1.658-.753V3.204a1 1 0 0 1 1.659-.753l5.48 4.796a1 1 0 0 1 0 1.506z" />
                            </svg><a href="">Traffic</a></li>
                        <li><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-caret-right-fill" viewBox="0 0 16 16">
                                <path d="m12.14 8.753-5.482 4.796c-.646.566-1.658.106-1.658-.753V3.204a1 1 0 0 1 1.659-.753l5.48 4.796a1 1 0 0 1 0 1.506z" />
                            </svg><a href="">Urban Jungle</a></li>
                        <li><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-caret-right-fill" viewBox="0 0 16 16">
                                <path d="m12.14 8.753-5.482 4.796c-.646.566-1.658.106-1.658-.753V3.204a1 1 0 0 1 1.659-.753l5.48 4.796a1 1 0 0 1 0 1.506z" />
                            </svg><a href="">VIP taxi</a></li>
                    </ul>
                </div>
                <div class="sidebaron_elements">
                    <h1>Search</h1>
                    <div style="background:white;display:flex;justify-content:space-between;align-items:center;"><input id="input" type="text" placeholder="Search..." style="padding:10px;border:none;"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-search" viewBox="0 0 16 16" style="margin-right:15px;">
                            <path d="M11.742 10.344a6.5 6.5 0 1 0-1.397 1.398h-.001c.03.04.062.078.098.115l3.85 3.85a1 1 0 0 0 1.415-1.414l-3.85-3.85a1.007 1.007 0 0 0-.115-.1zM12 6.5a5.5 5.5 0 1 1-11 0 5.5 5.5 0 0 1 11 0z" />
                        </svg></div>
                </div>
            </div>
            <div class="sidebaron_bigger_elements" style="display:flex;justify-content:space-between;">
                <div class="sidebaron_elements">
                    <h1>Archive</h1>
                    <ul>
                        <li><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-caret-right-fill" viewBox="0 0 16 16">
                                <path d="m12.14 8.753-5.482 4.796c-.646.566-1.658.106-1.658-.753V3.204a1 1 0 0 1 1.659-.753l5.48 4.796a1 1 0 0 1 0 1.506z" />
                            </svg><a href="">October 2016</a></li>
                        <li><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-caret-right-fill" viewBox="0 0 16 16">
                                <path d="m12.14 8.753-5.482 4.796c-.646.566-1.658.106-1.658-.753V3.204a1 1 0 0 1 1.659-.753l5.48 4.796a1 1 0 0 1 0 1.506z" />
                            </svg><a href="">September 2016</a></li>
                        <li><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-caret-right-fill" viewBox="0 0 16 16">
                                <path d="m12.14 8.753-5.482 4.796c-.646.566-1.658.106-1.658-.753V3.204a1 1 0 0 1 1.659-.753l5.48 4.796a1 1 0 0 1 0 1.506z" />
                            </svg><a href="">August 2016</a></li>
                    </ul>
                </div>
                <div class="sidebaron_elements">
                    <h1>Calendar</h1>
                </div>
            </div>
            <div class="sidebaron_bigger_elements" style="display:flex;justify-content:space-between;">
                <div class="sidebaron_elements">
                    <h1>Recent Posts</h1>
                    <ul>
                        <li><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-caret-right-fill" viewBox="0 0 16 16">
                                <path d="m12.14 8.753-5.482 4.796c-.646.566-1.658.106-1.658-.753V3.204a1 1 0 0 1 1.659-.753l5.48 4.796a1 1 0 0 1 0 1.506z" />
                            </svg><a href="">Taxi Benefits that Save Time and Money</a></li>
                        <li><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-caret-right-fill" viewBox="0 0 16 16">
                                <path d="m12.14 8.753-5.482 4.796c-.646.566-1.658.106-1.658-.753V3.204a1 1 0 0 1 1.659-.753l5.48 4.796a1 1 0 0 1 0 1.506z" />
                            </svg><a href="">Taxi Service for Kids</a></li>
                        <li><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-caret-right-fill" viewBox="0 0 16 16">
                                <path d="m12.14 8.753-5.482 4.796c-.646.566-1.658.106-1.658-.753V3.204a1 1 0 0 1 1.659-.753l5.48 4.796a1 1 0 0 1 0 1.506z" />
                            </svg><a href="">5 Countries with the Worst Drivers</a></li>
                    </ul>
                </div>
                <div class="sidebaron_elements">
                    <h1>Tags</h1>
                    <p>application</p>
                    <p>cabs</p>
                    <p>cities</p>
                    <p>driver</p>
                    <p>lifestyle</p>
                    <p>yellow taxi</p>
                </div>
            </div>
        </div>
    </div>
</div>
</div>
</div>

<script>
    var cont1on = document.getElementById("cont1on");
    var cont2on = document.getElementById("cont2on");
    var cont3on = document.getElementById("cont3on");
    var cont4on = document.getElementById("cont4on");
    var a1 = document.getElementsByClassName("a1");
    var a2 = document.getElementsByClassName("a2");
    var a3 = document.getElementsByClassName("a3");
    var a4 = document.getElementsByClassName("a4");
    // a1[0].style.color = "#ffc000";




    window.addEventListener("scroll", function() {
        if (window.scrollY > 860) {
            document.getElementById("sidebaron_outer").style.position = "sticky";
            document.getElementById("sidebaron_outer").style.top = "-400px";
        }
    });
</script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-pprn3073KE6tl6bjs2QrFaJGz5/SUsLqktiwsUTF55Jfv3qYSDhgCecCxMW52nD2" crossorigin="anonymous"></script>
</body>

</html>
<?php include "footer.php"; ?>