document.addEventListener('DOMContentLoaded', function() {
    const block = document.getElementsByClassName('portfolio-group');
    const body = document.body;

    for (let i = 0; i < block.length; i++) {
        const element = block[i];
        element.addEventListener('click', function () {
            console.log(element);
            if (body.classList.contains('no_scroll')) {
                body.classList.remove('no_scroll');
            }else {
                body.classList.add('no_scroll');
            }       
        });
    }
});
