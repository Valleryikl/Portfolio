document.addEventListener('DOMContentLoaded', function() {
    const prev = document.querySelector('#prev');
    const next = document.querySelector('#next');
    let hobbyLine = document.querySelector('.hobby-line');
    let circles = document.querySelectorAll('.circle');
    let count = 0;
    console.log(circles);
    circles[count].style.backgroundColor = "#B97EFF";
    next.addEventListener('click', function() {
    circles[count].style.backgroundColor = "inherit";
        if (count > 1) {
            count = 0;
        } else {
            count += 1;
        }
        hobbyLine.style.marginLeft = -count + "00%";
        circles[count].style.backgroundColor = "#B97EFF";
    })
    prev.addEventListener('click', function() {
    circles[count].style.backgroundColor = "inherit";

        if(count < 1) {
            count = 2;
        } else {
            count -= 1;
        }
        hobbyLine.style.marginLeft = -count + "00%";
        circles[count].style.backgroundColor = "#B97EFF";

    })
    for (let index = 0; index < circles.length; index++) {
        circles[index].addEventListener('click', function() {
            for (let i = 0; i < circles.length; i++) {
                circles[i].style.backgroundColor = "inherit";
            }
            this.style.backgroundColor = "#B97EFF";
            hobbyLine.style.marginLeft = `-${index}00%`;
        });
    }
})