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

<body><?php if (isset($_POST['goto'])) {
            include_once("connection.php");
            $post_id = $_POST['post_id'];
            $sql = "SELECT * FROM posts WHERE post_id=$post_id";
            $result = mysqli_query($conn, $sql);
            $header = 0;
            while ($row = $result->fetch_assoc()) {
        ?>
            <div id="section1a" style="height:380px;">
                <div>
                    <div style="width:36%;"><a href="">HOME&nbsp;&nbsp;</a>&nbsp;&nbsp;/&nbsp;&nbsp;ALL POSTS&nbsp;&nbsp;/&nbsp;&nbsp;<?php echo $row['category']; ?>&nbsp;&nbsp;/&nbsp;&nbsp;<?php echo strtoupper($row['heading']); ?></div>
                    <h1 style="text-align: center;"><?php echo $row['heading']; ?></h1>
                </div>
            </div>
            <div id="section2on">
                <div>
                    <div id="containeron">
                        <div id="cont1on">
                            <div class="containeron">
                                <a href=""><?php echo $row['heading']; ?></a>
                                <img src="../images/<?php echo $row['media_source']; ?>" alt="" style="width:100%;margin-top:50px;">
                                <div style="margin-top: 40px;align-items:center;"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-clock" viewBox="0 0 16 16" style="color:#ffc000;margin-right:10px;">
                                        <path d="M8 3.5a.5.5 0 0 0-1 0V9a.5.5 0 0 0 .252.434l3.5 2a.5.5 0 0 0 .496-.868L8 8.71V3.5z" />
                                        <path d="M8 16A8 8 0 1 0 8 0a8 8 0 0 0 0 16zm7-8A7 7 0 1 1 1 8a7 7 0 0 1 14 0z" />
                                    </svg><a href=""><?php echo $row['post_date-time']; ?></a><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-chat-fill" viewBox="0 0 16 16" style="color:#ffc000;margin-right:10px;margin-left:10px;">
                                        <path d="M8 15c4.418 0 8-3.134 8-7s-3.582-7-8-7-8 3.134-8 7c0 1.76.743 3.37 1.97 4.6-.097 1.016-.417 2.13-.771 2.966-.079.186.074.394.273.362 2.256-.37 3.597-.938 4.18-1.234A9.06 9.06 0 0 0 8 15z" />
                                    </svg><a href=""><?php echo $row['number_of_comments']; ?> Comments </a><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-heart-fill" viewBox="0 0 16 16" style="color:#ffc000;margin-right:10px;margin-left:10px;">
                                        <path fill-rule="evenodd" d="M8 1.314C12.438-3.248 23.534 4.735 8 15-7.534 4.736 3.562-3.248 8 1.314z" />
                                    </svg><a href=""><?php echo $row['number_of_likes']; ?> Likes</a>
                                </div>
                                <p><?php echo $row['content']; ?></p>
                            </div>


                            <div style="display: flex;justify-content:space-between;align-items:center;">
                                <div>
                                    <div style="display: flex;align-items:center;" id="categories">
                                        <h1>Categories:&nbsp;</h1><a><?php echo $row['category']; ?></a>
                                    </div>
                                    <div style="display: flex;align-items:center;" id="tags">
                                        <h1>Tags:&nbsp;</h1><a><?php echo $row['tag']; ?></a>
                                    </div>
                                </div>

                                <div class="our_news_links_icon">
                                    <a href=""><svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="currentColor" class="bi bi-twitter" viewBox="0 0 16 16">
                                            <path d="M5.026 15c6.038 0 9.341-5.003 9.341-9.334 0-.14 0-.282-.006-.422A6.685 6.685 0 0 0 16 3.542a6.658 6.658 0 0 1-1.889.518 3.301 3.301 0 0 0 1.447-1.817 6.533 6.533 0 0 1-2.087.793A3.286 3.286 0 0 0 7.875 6.03a9.325 9.325 0 0 1-6.767-3.429 3.289 3.289 0 0 0 1.018 4.382A3.323 3.323 0 0 1 .64 6.575v.045a3.288 3.288 0 0 0 2.632 3.218 3.203 3.203 0 0 1-.865.115 3.23 3.23 0 0 1-.614-.057 3.283 3.283 0 0 0 3.067 2.277A6.588 6.588 0 0 1 .78 13.58a6.32 6.32 0 0 1-.78-.045A9.344 9.344 0 0 0 5.026 15z" />
                                        </svg></a>
                                    <a href=""><svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="currentColor" class="bi bi-facebook" viewBox="0 0 16 16">
                                            <path d="M16 8.049c0-4.446-3.582-8.05-8-8.05C3.58 0-.002 3.603-.002 8.05c0 4.017 2.926 7.347 6.75 7.951v-5.625h-2.03V8.05H6.75V6.275c0-2.017 1.195-3.131 3.022-3.131.876 0 1.791.157 1.791.157v1.98h-1.009c-.993 0-1.303.621-1.303 1.258v1.51h2.218l-.354 2.326H9.25V16c3.824-.604 6.75-3.934 6.75-7.951z" />
                                        </svg></a>
                                    <a href=""><svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="currentColor" class="bi bi-envelope" viewBox="0 0 16 16">
                                            <path d="M0 4a2 2 0 0 1 2-2h12a2 2 0 0 1 2 2v8a2 2 0 0 1-2 2H2a2 2 0 0 1-2-2V4Zm2-1a1 1 0 0 0-1 1v.217l7 4.2 7-4.2V4a1 1 0 0 0-1-1H2Zm13 2.383-4.708 2.825L15 11.105V5.383Zm-.034 6.876-5.64-3.471L8 9.583l-1.326-.795-5.64 3.47A1 1 0 0 0 2 13h12a1 1 0 0 0 .966-.741ZM1 11.105l4.708-2.897L1 5.383v5.722Z" />
                                        </svg></a>
                                </div>
                            </div>

                            <div style="display: flex;padding:30px;margin-top:30px;background:#f7f7f7;" id="author">
                                <div><img src="../images/author1 (1).jpeg" alt=""></div>
                                <div style="padding:0px 20px;">
                                    <h1>ABOUT AUTHOR</h1>
                                    <h2>John Snow</h2>
                                    <p>Lorem ipsum dolor sit amet, ei habemus nominavi inimicus usu, ei est quem indoctum aliquando. His an dolorum eloque ei vel quidam feugiat admodum. Lorem ipsum dolor sit amet, ei habemus nominavi inimicus.</p>
                                </div>

                            </div>
                            <hr style="margin:80px 0px ;">

                            <h1 id="comments_heading">Comments</h1>
                            <div>
                                <?php
                                include_once("connection.php");
                                $post_id = $_POST['post_id'];
                                $sql1 = "SELECT * FROM comments WHERE post_id=$post_id";
                                $result1 = mysqli_query($conn, $sql1);
                                while ($row1 = $result1->fetch_assoc()) {
                                    echo "<div class='comments'><div style='width: 120px;'><img src='images/user_profile_comment.png' style='width: 100%;'></div><div style='padding:0px 20px;'><h1>by $row1[name] Posted $row1[comment_date_time]</h1><h2>$row1[comment_msg]</h2><h3 class='reply'>REPLY</h3></div></div>";
                                }
                                ?>

                            </div>
                            <hr style="margin:80px 0px ;">
                            <h1 id="comments_heading">Add your comment</h1>
                            <div>
                                <form action="manage_forms.php" method="post">
                                    <div style="width:100%;" id="name_email">
                                        <div class="mb-3 shadow-none brd" style="border:2px solid #fff;border-radius:0px;">
                                            <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Your Name" style="box-shadow: none;border-radius:0px;" name="name">
                                        </div>
                                        <div class="mb-3  brd shadow-none" style="border:2px solid #fff;border-radius:0px;">
                                            <input type="email" class="form-control" id="exampleInputPassword1" placeholder="Your Email" style="box-shadow: none;border-radius:0px;" name="email">
                                        </div>
                                    </div>
                                    <div class="mb-3 shadow-none brd" style="margin: 10px;border:2px solid #fff;border-radius:0px;">
                                        <textarea class="form-control" id="exampleFormControlTextarea1" rows="5" placeholder="Your Comment" style="box-shadow: none;border-radius:0px;" name="comment_msg"></textarea>
                                    </div>
                                    <input type="hidden" name="post_id" value="">
                                    <div class="mb-3 form-check" style="border:2px solid #fff;">
                                        <input type="checkbox" class="form-check-input" id="exampleCheck1">
                                        <label class="form-check-label" for="exampleCheck1">By using this form you agree with the storage and handling of your data by this website. *</label>
                                    </div>
                                    <input type="hidden" name="post_id" value="<?php echo $row['post_id'];?>">
                                    <button type="submit" class="read_more" style="border:none;width:160px;" name="comment">Send Message</button>
                                </form>

                            </div>
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
    <?php }
        } ?>
    <script>
        window.addEventListener("scroll", function() {
            if (window.scrollY > 860) {
                document.getElementById("sidebaron_outer").style.position = "sticky";
                document.getElementById("sidebaron_outer").style.top = "-400px";
            }
        });
        var brd = document.getElementsByClassName("brd");
        brd[0].addEventListener("mouseover", function() {
            brd[0].style.border = "2px solid #ffc000";
        });
        brd[0].addEventListener("mouseout", function() {
            brd[0].style.border = "2px solid #fff";
        });
        brd[1].addEventListener("mouseover", function() {
            brd[1].style.border = "2px solid #ffc000";
        });
        brd[1].addEventListener("mouseout", function() {
            brd[1].style.border = "2px solid #fff";
        });
        brd[2].addEventListener("mouseover", function() {
            brd[2].style.border = "2px solid #ffc000";
        });
        brd[2].addEventListener("mouseout", function() {
            brd[2].style.border = "2px solid #fff";
        });
    </script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-pprn3073KE6tl6bjs2QrFaJGz5/SUsLqktiwsUTF55Jfv3qYSDhgCecCxMW52nD2" crossorigin="anonymous"></script>
</body>

</html>
<?php include "footer.php"; ?>