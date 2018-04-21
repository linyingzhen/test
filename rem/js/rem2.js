(function() {
    let currClientWidth, fontValue, originWidth;
    originWidth = 750;
    __resize();
    window.addEventListener("resize", __resize, false);

    function __resize() {
        currClientWidth = document.documentElement.clientWidth;
        if (currClientWidth > 1024) {
            currClientWidth = 1024
        }
        if (currClientWidth > 768 && currClientWidth < 1024) {
            currClientWidth = 768
        }
        if (currClientWidth < 320) {
            currClientWidth = 320
        }
        fontValue = ((625 * currClientWidth) / originWidth).toFixed(2);
        document.documentElement.style.fontSize = fontValue + "%"
    }
})();