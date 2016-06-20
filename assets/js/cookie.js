$(document).ready(function() {
    var consentIsSet = "unknown";
    var cookieBanner = "#cookieBanner";
    var consentString = "cookieConsent=";


    function setCookie(console_log, banner_text, consent) {
        console.log(console_log);
        $(cookieBanner).text(banner_text);
        $(cookieBanner).fadeOut(50);
        var d = new Date();
        var exdays = 30*12; //  1 year
        d.setTime(d.getTime()+(exdays*24*60*60*1000));
        var expires = "expires="+d.toGMTString();
        document.cookie = consentString + consent + "; " + expires + ";path=/";
        consentIsSet = consent;
    }

    function denyConsent() {
        setCookie("Consent denied", "You disallowed the use of cookies.", "false");
        $(window).unbind("scroll");
        $("a:not(.noconsent)").unbind("click");
    }

    function grantConsent() {
        if (consentIsSet == "true") return;
        setCookie("Consent granted", " ", "true");
        doConsent();
    }

    function doConsent() {
        console.log("Consent was granted");
    }


    var cookies = document.cookie.split(";");
    for (var i = 0; i < cookies.length; i++) {
        var c = cookies[i].trim();
        if (c.indexOf(consentString) == 0) {
            consentIsSet = c.substring(consentString.length, c.length);
        }
    }

    if (consentIsSet == "unknown") {
        $(cookieBanner).fadeIn();
        var pageName = location.pathname.substr(location.pathname.lastIndexOf("/") + 1);
        if (pageName != "cookies.html") $(window).scroll(grantConsent); // XXX you may edit this name
        $("a:not(.noconsent)").click(grantConsent);
        $(".denyConsent").click(denyConsent);
        // allow re-enabling cookies
        $(".allowConsent").click(grantConsent);
    }
    else if (consentIsSet == "true") doConsent();
});