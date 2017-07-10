let poster = document.body.querySelectorAll(".poster");
for (let i = 0; i <10; i++) {
    poster[i].addEventListener("mouseover", function () {
        console.log(".details"+i);
        document.body.querySelector(".details"+i).style.opacity = "1";
    });
    
    poster[i].addEventListener("mouseout", function () {
        console.log(".details"+i);
        document.body.querySelector(".details"+i).style.opacity = "0";
    });
}
