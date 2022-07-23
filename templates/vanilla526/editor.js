// Headline
function showHeadline() {
    var iframe = document.getElementById("frame1");
    var elmnt = iframe.contentWindow.document.getElementById("headline");
    elmnt.style.position = "relative";
    elmnt.style.boxShadow = "0 0 0 1600px rgba(0,0,0,0.65)";
}

function delHeadline() {
    var iframe = document.getElementById("frame1");
    var elmnt = iframe.contentWindow.document.getElementById("headline");
    // elmnt.style.position = "auto";
    elmnt.style.boxShadow = "none";
}

