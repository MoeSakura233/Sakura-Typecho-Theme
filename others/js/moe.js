//痿了美观放在这儿的版权声明（我事屑
console.log(`${'\n'} %c Web & CSS Disign By Ohmyga . %c https://www.ohmyga.cn ${'\n'}`, 'color: #fadfa3; background: #030307; padding:5px 0;', 'background: #fadfa3; padding:5px 0;');
console.log(`${'\n'} %c Theme by Sakura . %c https://www.imsakura.cn ${'\n'}`, 'color: #fadfa3; background: #030307; padding:5px 0;', 'background: #fadfa3; padding:5px 0;');

//获取Cookie
getCookie = function(cookieName) {
 var name = cookieName + "=";
 var ca = document.cookie.split(';');
 for(var i=0; i<ca.length; i++) {
  var c = ca[i].trim();
  if (c.indexOf(name)==0) return c.substring(name.length,c.length);
 }
 return false;
}

//夜间模式
nads = function() {
 if (getCookie('Night') == 'on') {
  document.getElementsByTagName("body")[0].className="moe-dark";
 }else if(getCookie('Night') == 'off') {
  document.getElementsByTagName("body")[0].className="";
 }
}
nads();

loadStart = function() {
 NProgress.start();
 var loading = document.getElementById("moe-apps");
 loading.setAttribute("class", "moe-pjax-loading");
}

loadEnd = function() {
 setTimeout(function(){
  NProgress.done();
  var loaded = document.getElementById("moe-apps");
  loaded.setAttribute("class", "moe-pjax-loaded");
 }, 100);
}

//PAJX
var pjax = new Pjax({
 elements: "a",
 selectors: ["title", "#moe-apps"],
 timeout: 10000,
 cacheBust: false,
 scrollRestoration: true
});

document.addEventListener('pjax:send', function(){
 loadStart();
});

document.addEventListener('pjax:success', function() {
 checkBtn();
 hightlights();
 var newContent = document.querySelector("#moe-apps");
 pjax.refresh(newContent);
});

document.addEventListener('pjax:complete', function(){
 loadEnd();
 if (typeof _hmt !== 'undefined'){_hmt.push(['_trackPageview', location.pathname + location.search]);}
});

//setp设定
setp = function() {
 var sep = document.getElementById('moe-setting');
 if(getComputedStyle) {
  var compStyle = document.defaultView.getComputedStyle(setp, false);
  var getDisplay = compStyle['display'];
 }else{
  var comstyle=div.currentStyle;
  var getDisplay =comstyle['display'];
 }
 if (getDisplay == 'none' || getDisplay == 'undefined' || getDisplay == null) {
  sep.setAttribute('style', 'display:block');
  sep.setAttribute('class', 'moe-setting-open');
 }else if (getDisplay == 'block') {
  sep.classList.remove("moe-setting-open");
  setTimeout(function(){
   sep.setAttribute('style', 'display:none');
  }, 301);
 }
}

//夜间模式
setbutton = function(type) {
 if(type == 'nad') {
  if (getCookie('Night') == 'on') {
   var nad = document.getElementById('nad');
   document.cookie="Night=off;path=/";
   nad.classList.remove("moe-obut-label-on");
   nad.setAttribute("class", "moe-obut-label moe-obut-label-off");
   nads();
  }else if (getCookie('Night') == 'off' || getCookie('Night') == false) {
   var nad = document.getElementById('nad');
   document.cookie="Night=on;path=/";
   nad.classList.remove("moe-obut-label-off");
   nad.setAttribute("class", "moe-obut-label moe-obut-label-on");
   nads();
  }
 }
}

//checkbtn
checkBtn = function() {
 var nad = document.getElementById('nad');
 var audio = document.getElementById('audio');
 if (getCookie('Night') == 'on') {
  nad.setAttribute('class', 'moe-obut-label moe-obut-label-on');
  nads();
 }
}
checkBtn();