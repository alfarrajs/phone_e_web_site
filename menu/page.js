!function(r,i){function o(){}var n,s,l,d,c,u,f,p,e,t,a,m,y,v,h=".26680508",_=r.head;"function"==typeof[].indexOf&&_&&(i.a2a=i.a2a||{},n=i.a2a_config=i.a2a_config||{},e=(s=r.currentScript)&&s.src?s.src:"",NodeList&&NodeList.prototype.forEach&&(i.a2a.init=function(e,t){void 0===t&&(t=n);var a=":not([data-a2a-url]):not(.a2a_target)";r.querySelectorAll(".a2a_dd"+a+",.a2a_kit"+a).forEach(function(e){e.matches(".a2a_kit .a2a_dd");e.a2a_index||null!==e.getAttribute("data-a2a-url")||e.matches(".a2a_kit .a2a_dd")||(e.dataset.a2aUrl=t.linkurl||"",t.linkname&&(e.dataset.a2aTitle=t.linkname))}),delete n.linkurl,delete n.linkname},i.a2a_init=i.a2a.init,!s||s.async||s.defer||i.a2a.init("page",{linkurl:n.linkurl,linkname:n.linkname})),i.a2a.page||(i.a2a.page=!0,l=[],["init_all","svg_css"].forEach(function(a){i.a2a[a]=function(){for(var e=[],t=0;t<arguments.length;t++)e[t]=arguments[t];l.push([a,e])}}),a=(v=n.static_server)?v+"/":"https://static.addtoany.com/menu/",t=e&&-1!==e.split("/")[2].indexOf("addtoany"),d=(t=(d=!v&&t?e:a).match(/^[^?#]+\//))?t[0]:d,c=function(e,t,a){void 0===e&&(e=d+"eso"+h+".js"),void 0===t&&(t=!1);var n=r.createElement((a=void 0===a?!1:a)?"link":"script"),i="module",a=(a?(a="preload",n.href=e,n.rel=t?i+a:a,t||(n.as="script")):(n.src=e,t&&(n.type=i,n.onerror=function(){return c()})),s&&s.nonce?s.nonce:null);a&&(n.nonce=a),_.appendChild(n)},f="a2a_sm_ifr",p=function(){var e,t,a,n;t="a2a_menu_container",e=r.getElementById(t),i.a2a.main=u=e||r.createElement("div"),u.id!=t&&(u.style.position="static",r.body.insertBefore(u,null)),i.addEventListener("message",function(e){var t;".addtoany.com"===e.origin.substr(-13)&&"object"==typeof(e=e.data)&&e.a2a&&(e.h1&&(i.a2a.h1=!0),"function"==typeof(t=i.a2a.userServices)?t(e.user_services):i.a2a.userServices=e.user_services,r.getElementById(f).style.display="none")}),e=r.createElement("iframe"),t=r.createElement("div"),a=e.style,n=t.style,e.id=f,a.width=a.height=n.width=n.height="1px",a.top=a.left=a.border="0",a.position=n.position="absolute",a.zIndex=n.zIndex="100000",e.title="AddToAny Utility Frame",e.setAttribute("transparency","true"),e.setAttribute("allowTransparency","true"),e.setAttribute("frameBorder","0"),e.src="https://static.addtoany.com/menu/sm.24.html#type=core&event=load",n.top="0",n.visibility="hidden",u.insertBefore(t,null),t.insertBefore(e,null),p=o},r.body&&p(),"function"==typeof(e="".matchAll)&&e.toString().includes("[native code]")?(t=a+(v?"":"svg/"),c((e=d+(v?"":"modules/"))+"core"+h+".js",!0),a=document.createElement("link").relList.supports("modulepreload"),n.overlays&&n.overlays.length&&a&&c(e+"overlays"+h+".js",!0,!0),r.querySelector('.a2a_dd:empty,.a2a_kit [class*="a2a_button_"]:empty')&&i.a2a.h1&&c(t+"icons.31.svg.js",!1,!0)):c(),m=function(e){var t=i.a2a.core;"function"!=typeof t||e?e?e():i.a2a.core=function(e){return m(e)}:t()},v=function(){y||(y=!0,p(),m(),l.forEach(function(e){var t;(t=i.a2a)[e[0]].apply(t,e[1])}))},"loading"!==r.readyState?v():(r.addEventListener("readystatechange",v),r.addEventListener("DOMContentLoaded",v))))}(document,window);