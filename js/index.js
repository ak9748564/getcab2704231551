window.addEventListener("scroll", function() {
    var sec2 = document.querySelector("#sec2");
    var sec1 = document.querySelector("#sec1");
    var inner_sec1 = document.querySelector("#inner_sec1")
    sec2.classList.toggle("sticky", window.scrollY > 0)
    sec2.classList.toggle("sticky2", window.scrollY > 600)
    sec1.classList.toggle("none", window.scrollY > 0)
    inner_sec1.classList.toggle("sticky1", window.scrollY > 0)
});



var show_menu = document.querySelectorAll(".show_menu");
show_menu[0].addEventListener("mouseover", function() {
    document.getElementsByClassName("inner_ul")[0].style.display = "block";
});
show_menu[0].addEventListener("mouseout", function() {
    document.getElementsByClassName("inner_ul")[0].style.display = "none";
});
show_menu[1].addEventListener("mouseover", function() {
    document.getElementsByClassName("inner_ul")[1].style.display = "block";
});
show_menu[1].addEventListener("mouseout", function() {
    document.getElementsByClassName("inner_ul")[1].style.display = "none";
});
show_menu[2].addEventListener("mouseover", function() {
    document.getElementsByClassName("inner_ul")[2].style.display = "block";
});
show_menu[2].addEventListener("mouseout", function() {
    document.getElementsByClassName("inner_ul")[2].style.display = "none";
});




var about_us_show_menu = document.querySelectorAll(".about_us_show_menu");
about_us_show_menu[0].addEventListener("mouseover", function() {
    document.getElementsByClassName("about_us")[0].style.display = "block";
});
about_us_show_menu[1].addEventListener("mouseover", function() {
    document.getElementsByClassName("about_us")[1].style.display = "block";
});
about_us_show_menu[2].addEventListener("mouseover", function() {
    document.getElementsByClassName("about_us")[2].style.display = "block";
});




var about_us = document.getElementsByClassName("about_us");
about_us[0].addEventListener("mouseover", function() {
    document.getElementsByClassName("about_us")[0].style.display = "block";
});
about_us[0].addEventListener("mouseout", function() {
    document.getElementsByClassName("about_us")[0].style.display = "none";
});
about_us[1].addEventListener("mouseover", function() {
    document.getElementsByClassName("about_us")[1].style.display = "block";
});
about_us[1].addEventListener("mouseout", function() {
    document.getElementsByClassName("about_us")[1].style.display = "none";
});
about_us[2].addEventListener("mouseover", function() {
    document.getElementsByClassName("about_us")[2].style.display = "block";
});
about_us[2].addEventListener("mouseout", function() {
    document.getElementsByClassName("about_us")[2].style.display = "none";
});



document.getElementsByClassName("inner_ul")[1].onmouseout = function() {
    document.getElementsByClassName("about_us")[0].style.display = "none";
    document.getElementsByClassName("about_us")[1].style.display = "none";
    document.getElementsByClassName("about_us")[2].style.display = "none";
};


var our_news_show_menu = document.querySelectorAll(".our_news_show_menu");
our_news_show_menu[0].addEventListener("mouseover", function() {
    document.getElementsByClassName("our_news")[0].style.display = "block";
});
our_news_show_menu[1].addEventListener("mouseover", function() {
    document.getElementsByClassName("our_news")[1].style.display = "block";
});
our_news_show_menu[2].addEventListener("mouseover", function() {
    document.getElementsByClassName("our_news")[2].style.display = "block";
});




var our_news = document.querySelectorAll(".our_news");
our_news[0].addEventListener("mouseover", function() {
    document.getElementsByClassName("our_news")[0].style.display = "block";
});
our_news[0].addEventListener("mouseout", function() {
    document.getElementsByClassName("our_news")[0].style.display = "block";
});
our_news[1].addEventListener("mouseover", function() {
    document.getElementsByClassName("our_news")[1].style.display = "block";
});
our_news[1].addEventListener("mouseout", function() {
    document.getElementsByClassName("our_news")[1].style.display = "none";
});
our_news[2].addEventListener("mouseover", function() {
    document.getElementsByClassName("our_news")[2].style.display = "block";
});
our_news[2].addEventListener("mouseout", function() {
    document.getElementsByClassName("our_news")[2].style.display = "none";
});



document.getElementsByClassName("inner_ul")[2].onmouseout = function() {
    document.getElementsByClassName("our_news")[0].style.display = "none";
    document.getElementsByClassName("our_news")[1].style.display = "none";
    document.getElementsByClassName("our_news")[2].style.display = "none";
};

document.getElementById("menu_icon").onclick = function(){
    document.getElementById("menu").style.display = "block";
    document.getElementById("sec2").style.display = "none";
    document.getElementById("sec1").style.display = "none";


}
document.getElementById("cross_icon").onclick = function(){
    document.getElementById("menu").style.display = "none";
    document.getElementById("sec2").style.display = "block";
    document.getElementById("sec1").style.display = "block";
}

document.getElementsByClassName("li")[0].onclick = function(){
    if(document.getElementsByClassName("ul")[0].style.display == "none")
    {
    document.getElementsByClassName("ul")[0].style.display = "block";
    }
    else{
        document.getElementsByClassName("ul")[0].style.display = "none";
    }
};
document.getElementsByClassName("li")[1].onclick = function(){
    if(document.getElementsByClassName("ul")[1].style.display == "none")
    {
    document.getElementsByClassName("ul")[1].style.display = "block";
    }
    else{
        document.getElementsByClassName("ul")[1].style.display = "none";
    }
};
document.getElementsByClassName("li")[2].onclick = function(){
    if(document.getElementsByClassName("ul")[2].style.display == "none")
    {
    document.getElementsByClassName("ul")[2].style.display = "block";
    }
    else{
        document.getElementsByClassName("ul")[2].style.display = "none";
    }
};




document.getElementsByClassName("li_li_about_us")[0].onclick = function(){
    if(document.getElementsByClassName("ul_ul_about_us")[0].style.display == "none")
    {
    document.getElementsByClassName("ul_ul_about_us")[0].style.display = "block";
    }
    else{
        document.getElementsByClassName("ul_ul_about_us")[0].style.display = "none";
    }
};
document.getElementsByClassName("li_li_about_us")[1].onclick = function(){
    if(document.getElementsByClassName("ul_ul_about_us")[1].style.display == "none")
    {
    document.getElementsByClassName("ul_ul_about_us")[1].style.display = "block";
    }
    else{
        document.getElementsByClassName("ul_ul_about_us")[1].style.display = "none";
    }
};
document.getElementsByClassName("li_li_about_us")[2].onclick = function(){
    if(document.getElementsByClassName("ul_ul_about_us")[2].style.display == "none")
    {
    document.getElementsByClassName("ul_ul_about_us")[2].style.display = "block";
    }
    else{
        document.getElementsByClassName("ul_ul_about_us")[2].style.display = "none";
    }
};




document.getElementsByClassName("li_li_our_news")[0].onclick = function(){
    if(document.getElementsByClassName("ul_ul_our_news")[0].style.display == "none")
    {
    document.getElementsByClassName("ul_ul_our_news")[0].style.display = "block";
    }
    else{
        document.getElementsByClassName("ul_ul_our_news")[0].style.display = "none";
    }
};
document.getElementsByClassName("li_li_our_news")[1].onclick = function(){
    if(document.getElementsByClassName("ul_ul_our_news")[1].style.display == "none")
    {
    document.getElementsByClassName("ul_ul_our_news")[1].style.display = "block";
    }
    else{
        document.getElementsByClassName("ul_ul_our_news")[1].style.display = "none";
    }
};
document.getElementsByClassName("li_li_our_news")[2].onclick = function(){
    if(document.getElementsByClassName("ul_ul_our_news")[2].style.display == "none")
    {
    document.getElementsByClassName("ul_ul_our_news")[2].style.display = "block";
    }
    else{
        document.getElementsByClassName("ul_ul_our_news")[2].style.display = "none";
    }
};

