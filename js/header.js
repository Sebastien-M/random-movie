let click = 0;
document.body.querySelector("#other").addEventListener("click", function(e) {
    click += 1;
    if (click % 2 === 0) {
        document.body.querySelector(".loading").style.opacity = 0;
    } else {
        document.body.querySelector(".loading").style.opacity = 1;
    }
})