// -----------up to top---------

//Khi người dùng cuộn chuột thì gọi hàm scrollFunction
window.onscroll = function() {
    scrollFunction()
};
// khai báo hàm scrollFunction
function scrollFunction() {
    // Kiểm tra vị trí hiện tại của con trỏ so với nội dung trang
    if (document.body.scrollTop > 20 || document.documentElement.scrollTop > 20) {
        //nếu lớn hơn 20px thì hiện button
        document.getElementById("myBtn").style.display = "block";
    } else {
        //nếu nhỏ hơn 20px thì ẩn button
        document.getElementById("myBtn").style.display = "none";
    }
}
//gán sự kiện click cho button
document.getElementById('myBtn').addEventListener("click", function() {
    //Nếu button được click thì nhảy về đầu trang
    document.body.scrollTop = 0;
    document.documentElement.scrollTop = 0;
});

var close = document.getElementById("hidesearch");
var showsearch = document.getElementById("mySearch");
var demomenu = document.getElementById("boxmenu-andemo");

function closesearch() {
    close.style.display = "none";
}

function showSearch() {
    close.style.display = "block";
}

var showboxmenu = document.getElementById("myhidemenu");


// var clossboxmenu = document.getElementById("myMenu");

function closemenu() {
    // demomenu.style.display = "none";
    showboxmenu.style.display = "none";

}

function showmenu() {
    // demomenu.style.display = "block";
    showboxmenu.style.display = "block";

}



//-----------  progess bar------------
// let progress = document.getElementById('progressbar');
// let tongheight = document.body.scrollHeight - window.innerHeight;
// window.onscroll = function() {
//     let heightprogress = (window.pageYOffset / tongheight) * 100;
//     progress.style.height = heightprogress + "%";
// }