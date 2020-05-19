!function(e,n,t){function r(e,n){return typeof e===n}function o(){var e,n,t,o,i,s,l;for(var a in C)if(C.hasOwnProperty(a)){if(e=[],n=C[a],n.name&&(e.push(n.name.toLowerCase()),n.options&&n.options.aliases&&n.options.aliases.length))for(t=0;t<n.options.aliases.length;t++)e.push(n.options.aliases[t].toLowerCase());for(o=r(n.fn,"function")?n.fn():n.fn,i=0;i<e.length;i++)s=e[i],l=s.split("."),1===l.length?w[l[0]]=o:(!w[l[0]]||w[l[0]]instanceof Boolean||(w[l[0]]=new Boolean(w[l[0]])),w[l[0]][l[1]]=o),g.push((o?"":"no-")+l.join("-"))}}function i(e){var n=_.className,t=w._config.classPrefix||"";if(b&&(n=n.baseVal),w._config.enableJSClass){var r=new RegExp("(^|\\s)"+t+"no-js(\\s|$)");n=n.replace(r,"$1"+t+"js$2")}w._config.enableClasses&&(n+=" "+t+e.join(" "+t),b?_.className.baseVal=n:_.className=n)}function s(){return"function"!=typeof n.createElement?n.createElement(arguments[0]):b?n.createElementNS.call(n,"http://www.w3.org/2000/svg",arguments[0]):n.createElement.apply(n,arguments)}function l(){var e=n.body;return e||(e=s(b?"svg":"body"),e.fake=!0),e}function a(e,t,r,o){var i,a,f,u,p="modernizr",c=s("div"),d=l();if(parseInt(r,10))for(;r--;)f=s("div"),f.id=o?o[r]:p+(r+1),c.appendChild(f);return i=s("style"),i.type="text/css",i.id="s"+p,(d.fake?d:c).appendChild(i),d.appendChild(c),i.styleSheet?i.styleSheet.cssText=e:i.appendChild(n.createTextNode(e)),c.id=p,d.fake&&(d.style.background="",d.style.overflow="hidden",u=_.style.overflow,_.style.overflow="hidden",_.appendChild(d)),a=t(c,e),d.fake?(d.parentNode.removeChild(d),_.style.overflow=u,_.offsetHeight):c.parentNode.removeChild(c),!!a}function f(e){return e.replace(/([a-z])-([a-z])/g,function(e,n,t){return n+t.toUpperCase()}).replace(/^-/,"")}function u(e,n){return!!~(""+e).indexOf(n)}function p(e,n){return function(){return e.apply(n,arguments)}}function c(e,n,t){var o;for(var i in e)if(e[i]in n)return!1===t?e[i]:(o=n[e[i]],r(o,"function")?p(o,t||n):o);return!1}function d(e){return e.replace(/([A-Z])/g,function(e,n){return"-"+n.toLowerCase()}).replace(/^ms-/,"-ms-")}function m(n,t,r){var o;if("getComputedStyle"in e){o=getComputedStyle.call(e,n,t);var i=e.console;if(null!==o)r&&(o=o.getPropertyValue(r));else if(i){var s=i.error?"error":"log";i[s].call(i,"getComputedStyle returning null, its possible modernizr test results are inaccurate")}}else o=!t&&n.currentStyle&&n.currentStyle[r];return o}function v(n,r){var o=n.length;if("CSS"in e&&"supports"in e.CSS){for(;o--;)if(e.CSS.supports(d(n[o]),r))return!0;return!1}if("CSSSupportsRule"in e){for(var i=[];o--;)i.push("("+d(n[o])+":"+r+")");return i=i.join(" or "),a("@supports ("+i+") { #modernizr { position: absolute; } }",function(e){return"absolute"==m(e,null,"position")})}return t}function y(e,n,o,i){function l(){p&&(delete T.style,delete T.modElem)}if(i=!r(i,"undefined")&&i,!r(o,"undefined")){var a=v(e,o);if(!r(a,"undefined"))return a}for(var p,c,d,m,y,h=["modernizr","tspan","samp"];!T.style&&h.length;)p=!0,T.modElem=s(h.shift()),T.style=T.modElem.style;for(d=e.length,c=0;d>c;c++)if(m=e[c],y=T.style[m],u(m,"-")&&(m=f(m)),T.style[m]!==t){if(i||r(o,"undefined"))return l(),"pfx"!=n||m;try{T.style[m]=o}catch(e){}if(T.style[m]!=y)return l(),"pfx"!=n||m}return l(),!1}function h(e,n,t,o,i){var s=e.charAt(0).toUpperCase()+e.slice(1),l=(e+" "+z.join(s+" ")+s).split(" ");return r(n,"string")||r(n,"undefined")?y(l,n,o,i):(l=(e+" "+j.join(s+" ")+s).split(" "),c(l,n,t))}var g=[],C=[],S={_version:"3.5.0",_config:{classPrefix:"",enableClasses:!0,enableJSClass:!0,usePrefixes:!0},_q:[],on:function(e,n){var t=this;setTimeout(function(){n(t[e])},0)},addTest:function(e,n,t){C.push({name:e,fn:n,options:t})},addAsyncTest:function(e){C.push({name:null,fn:e})}},w=function(){};w.prototype=S,w=new w;var x=S._config.usePrefixes?" -webkit- -moz- -o- -ms- ".split(" "):["",""];S._prefixes=x;var _=n.documentElement,b="svg"===_.nodeName.toLowerCase(),P="Moz O ms Webkit",j=S._config.usePrefixes?P.toLowerCase().split(" "):[];S._domPrefixes=j;var z=(S.testStyles=a,S._config.usePrefixes?P.split(" "):[]);S._cssomPrefixes=z;var E=function(n){var r,o=x.length,i=e.CSSRule;if(void 0===i)return t;if(!n)return!1;if(n=n.replace(/^@/,""),(r=n.replace(/-/g,"_").toUpperCase()+"_RULE")in i)return"@"+n;for(var s=0;o>s;s++){var l=x[s];if(l.toUpperCase()+"_"+r in i)return"@-"+l.toLowerCase()+"-"+n}return!1};S.atRule=E;var N={elem:s("modernizr")};w._q.push(function(){delete N.elem});var T={style:N.elem.style};w._q.unshift(function(){delete T.style}),S.testAllProps=h;var k=S.prefixed=function(e,n,t){return 0===e.indexOf("@")?E(e):(-1!=e.indexOf("-")&&(e=f(e)),n?h(e,n,t):h(e,"pfx"))};w.addTest("objectfit",!!k("objectFit"),{aliases:["object-fit"]}),o(),i(g),delete S.addTest,delete S.addAsyncTest;for(var L=0;L<w._q.length;L++)w._q[L]();e.Modernizr=w}(window,document);