function incDesc(desc) {
    document.getElementById(desc).style.fontSize = "xx-large";
    document.getElementById(desc).style.fontWeight = "bold";
    document.addEventListener("mouseout", function () {
        document.getElementById(desc).style.fontSize = "initial";
        document.getElementById(desc).style.fontWeight = "initial";
    })
}

function hlCell() {
    var tdLen = document.getElementsByTagName("td").length;
    for (i = 0; i < tdLen; i++) {
        const tmp = i;
        document.getElementsByTagName("td")[tmp].addEventListener("mouseover", function () {
            document.getElementsByTagName("td")[tmp].style.background = "rgba(69,69,69,0.48)";
        })
        document.getElementsByTagName("td")[tmp].addEventListener("mouseout", function () {
            document.getElementsByTagName("td")[tmp].style.background = "initial";
        })
    }
}

function count() {
    document.getElementById('textarea').onkeyup = function () {
        document.getElementById('chars').innerHTML = (200 - this.value.length);
    };

}


