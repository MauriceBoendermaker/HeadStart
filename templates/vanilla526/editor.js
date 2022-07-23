// Headline
function showHeadline() {
    var iframe = document.getElementById("frame1");
    var elmnt = iframe.contentWindow.document.getElementById("show-Headline");
    elmnt.style.position = "relative";
    elmnt.style.borderRadius = "25px";
    elmnt.style.boxShadow = "0 0 0 2000px rgba(0, 0, 0, 0.75)";
    elmnt.style.transition = "ease-in-out box-shadow 0.5s";
}

function delHeadline() {
    var iframe = document.getElementById("frame1");
    var elmnt = iframe.contentWindow.document.getElementById("show-Headline");
    elmnt.style.boxShadow = "none";
    elmnt.style.position = "static";
}

// StrongSubHeadline
function showStrongSubHeadline() {
    var iframe = document.getElementById("frame1");
    var elmnt = iframe.contentWindow.document.getElementById("show-StrongSubHeadline");
    elmnt.style.position = "relative";
    elmnt.style.borderRadius = "25px";
    elmnt.style.boxShadow = "0 0 0 2000px rgba(0, 0, 0, 0.75)";
    elmnt.style.transition = "ease-in-out box-shadow 0.5s";
}

function delStrongSubHeadline() {
    var iframe = document.getElementById("frame1");
    var elmnt = iframe.contentWindow.document.getElementById("show-StrongSubHeadline");
    elmnt.style.boxShadow = "none";
    elmnt.style.position = "static";
}

