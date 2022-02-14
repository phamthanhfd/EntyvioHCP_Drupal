var url = window.location.href;
var domain = window.location.host;
var server = "";
if (domain.indexOf('www.') === -1) {
  server = domain;
} else {
  var domainArray = domain.split('www.');
  server = domainArray[1];
}
var digitalData = {}; // Data Layer Object Created
digitalData.page = {
  "pageName": "", // set down below
  "pageURL": url,
  "siteName": domain,
  "pageType": "",
  "server": server,
};

$.urlParam = function (name) {
  var results = new RegExp('[\?&]' + name + '=([^&#]*)').exec(window.location.href);
  if (results == null) {
    return "null:";
  } else if (name !== 'utm_term')
    return decodeURI(results[1]) + ":" || 0;
  else
    return decodeURI(results[1]) + ":" || 0;
};

var campaignValues = "";
var url = window.location.href.slice(window.location.href.indexOf('?') + 1).split('&');
var utm_source = $.urlParam('utm_source');
var utm_medium = $.urlParam('utm_medium');
var utm_campaign = $.urlParam('utm_campaign');
var utm_content = $.urlParam('utm_content');
var utm_term = $.urlParam('utm_term');
var utm_adid = $.urlParam('utm_adid');

campaignValues = utm_source + utm_medium + utm_campaign + utm_content + utm_term + utm_adid;
campaignValues = campaignValues.replace(/^:/, ''); // if first char is colon, remove it
if (campaignValues.substring(campaignValues.length - 1) === ":") { // last character is colon, remove it
  campaignValues = campaignValues.substring(0, campaignValues.length - 1);
}
campaignValues = campaignValues.replace("::", ":"); // remove duplicate colon

if (campaignValues !== "" || campaignValues !== 'undefined') { // null check to prevent code from breaking
  digitalData.page["campaign"] = campaignValues;
}

var subsection = "";
if (window.location.pathname == "/") {
  // console.log("home");
  digitalData.page["subsectionL1"] = "home";
  digitalData.page["channel"] = "home";
  digitalData.page["pageName"] = "Home"
} else if (window.location.pathname == "/404") {
  // console.log("pageType = errorPage");
  digitalData.page["pageType"] = "errorPage";
} else if (window.location.pathname.length > 1) {
  digitalData.page["pageName"] = document.title;
  subsection = window.location.pathname;
  // console.log("subsection: "+subsection);
}

x = subsection.split("/");

for (i = 1; i < x.length; i++) {
  if (i == 1) {
    // console.log("channel = "+x[1]);     
    digitalData.page["channel"] = x[1];
  }
  digitalData.page["subsectionL" + i] = x[i];
  // console.log("subsectionL"+i+" = "+x[i]);
}