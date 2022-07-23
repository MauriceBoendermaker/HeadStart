// Headline
function showHeadline() {
    var iframe = document.getElementById("frame1");
    var elmnt = iframe.contentWindow.document.getElementById("show-Headline");
    elmnt.style.position = "relative";
    elmnt.style.boxShadow = "0 0 0 1600px rgba(0,0,0,0.65)";
}

function delHeadline() {
    var iframe = document.getElementById("frame1");
    // elmnt.style.position = "auto";
    var elmnt = iframe.contentWindow.document.getElementById("show-Headline");
    elmnt.style.boxShadow = "none";
}

