/**
 * Analytics entry point.
 */

// Google Tag Manager
(function(w, d, s, l, i) {
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
})(window, document, "script", "dataLayer", document.getElementsByName('google-analytics')[0].content);

// Global site tag (gtag.js) - Google Analytics
document.createTextNode("<script async src='https://www.googletagmanager.com/gtag/js?id=UA-160690896-1' />");

window.dataLayer = window.dataLayer || [];
function gtag() {
    dataLayer.push(arguments);
}
gtag("js", new Date());
gtag("config", "UA-160690896-1");


// Hotjar Tracking Code for www.covid-solidarity.org
(function(h,o,t,j,a,r){
    h.hj=h.hj||function(){(h.hj.q=h.hj.q||[]).push(arguments)};
    h._hjSettings={hjid:1736549,hjsv:6};
    a=o.getElementsByTagName('head')[0];
    r=o.createElement('script');r.async=1;
    r.src=t+h._hjSettings.hjid+j+h._hjSettings.hjsv;
    a.appendChild(r);
})(window,document,'https://static.hotjar.com/c/hotjar-','.js?sv=');


// Facebook Share
(function(d, s, id) {
  console.log(d, s, id)
  var js, fjs = d.getElementsByTagName(s)[0];
  if (d.getElementById(id)) return;
  js = d.createElement(s); js.id = id;
  js.src = "https://connect.facebook.net/en_US/sdk.js#xfbml=1&version=v3.0";
  fjs.parentNode.insertBefore(js, fjs);
}(document, 'script', 'facebook-jssdk'));
