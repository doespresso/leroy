!function(a,b){"object"==typeof exports?b(exports):"function"==typeof define&&define.amd?define(["exports"],b):b(window)}(this,function(a){a.Router=function(a){function b(a,b){return g.push(new h(a,b)),this}function c(a){return f=a,this}function d(a){for(var b,c=!1,d=0;d<g.length;d++)if(g[d].match(a)){c=!0,b=g[d].run();break}return c||(b=f()),b}function e(){var b,c,e=function(){c=window.location.hash.substr(("#"+a).length)||"/",b!==c&&(b=c,d(c))};e(),"onhashchange"in window&&(!document.documentMode||document.documentMode>=8)?window.onhashchange=e:setInterval(e,50)}var f,g=[],h=function(a,b){function c(b){var c=a.replace(/[-[\]{}()|?*+.,\\^$|#\s]/g,"\\$&").replace(/(:[a-z]+)/gi,"(\\w+)");return c=new RegExp("^"+c+"$"),e=c.exec(b),!!e}function d(){for(var c=a.match(/(:\w+|\([^)]+\))/g)||[],d=0;d<c.length;d++){var g=":"===c[d].substr(0,1)?c[d].substr(1):c[d];f[g]=e[d+1]}return b.apply(this,(e||[]).slice(1))}var e=[],f={};return{request:f,match:c,run:d}};return{when:b,otherwise:c,match:d,listen:e}}});