// Load the header and footer

$(function() {
    var includes = $("[data-include]");
    jQuery.each(includes, function() {
        var file = $(this).data("include") + ".html";
        console.log(file);
        $(this).load(file);
    });
});

// Google Tag Manager

(function(w, d, s, l, i) {
    console.log(w, d, s, l, i);
    w[l] = w[l] || [];
    w[l].push({
        "gtm.start": new Date().getTime(),
        event: "gtm.js"
    });
    var f = d.getElementsByTagName(s)[0],
        j = d.createElement(s),
        dl = l != "dataLayer" ? "&l=" + l : "";
    j.async = true;
    j.src = "https://www.googletagmanager.com/gtm.js?id=" + i + dl;
    f.parentNode.insertBefore(j, f);
})(window, document, "script", "dataLayer", "GTM-TB48ZGS");

// Global site tag (gtag.js) - Google Analytics

document.createTextNode(
    "<script async src='https://www.googletagmanager.com/gtag/js?id=UA-160690896-1' />"
);

window.dataLayer = window.dataLayer || [];
function gtag() {
    console.log(arguments), dataLayer.push(arguments);
}
gtag("js", new Date());
gtag("config", "UA-160690896-1");

function handleSelect(elm) {
    window.location = `${elm.value}.html`;
}

