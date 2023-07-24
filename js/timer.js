$(function () {
    document.body.scrollTop = 0;
});

var scrollPositions = [
    { position: 0, timeout: 10000 },
    { position: 13300, timeout: 2000 },
    { position: 14147, timeout: 4000 },
    { position: 15380, timeout: 5000 },
    { position: 15570, timeout: 27000 },
    { position: 15680, timeout: 4000 },
    { position: 15870, timeout: 3000 },
    { position: 16000, timeout: 5000 },
    { position: 16300, timeout: 3000 },
    { position: 16400, timeout: 3000 },
    { position: 16500, timeout: 3000 },
    { position: 16700, timeout: 4000 },
    { position: 17500, timeout: 11000 },
    { position: 18300, timeout: 5000 },
    { position: 18500, timeout: 5000 },
    { position: 18700, timeout: 7000 },
    { position: 18800, timeout: 13000 },
    { position: 19400, timeout: 45000 }
];

window.addEventListener("scroll", function () {
    var scroll = this.scrollY;

    scrollPositions.forEach(function (pos) {
        if (scroll >= pos.position && scroll < pos.position + pos.timeout) {
            $("body,html").css('overflow', 'hidden'); // hide scrollbar

            setTimeout(function () {
                $("body,html").css('overflow', 'auto'); // show scrollbar
            }, pos.timeout);

            // Once a position is matched, remove it from the array
            scrollPositions = scrollPositions.filter(function (p) {
                return p.position !== pos.position;
            });

            return false; // Exit the loop after finding the first matching position
        }
    });
});
