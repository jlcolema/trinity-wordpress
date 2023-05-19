!function(t,e){"object"==typeof exports&&"undefined"!=typeof module?module.exports=e():"function"==typeof define&&define.amd?define(e):t.Glide=e()}(this,function(){"use strict";var i={type:"slider",startAt:0,perView:1,focusAt:0,gap:10,autoplay:!1,hoverpause:!0,keyboard:!0,swipeThreshold:80,dragThreshold:120,perTouch:!1,touchRatio:.5,touchAngle:45,animationDuration:400,rewindDuration:800,animationTimingFunc:"cubic-bezier(0.165, 0.840, 0.440, 1.000)",throttle:10,direction:"ltr",peek:0,breakpoints:{},classes:{direction:{ltr:"glide--ltr",rtl:"glide--rtl"},slider:"glide--slider",carousel:"glide--carousel",swipeable:"glide--swipeable",dragging:"glide--dragging",cloneSlide:"glide__slide--clone",activeNav:"glide__bullet--active",activeSlide:"glide__slide--active",disabledArrow:"glide__arrow--disabled"}};function s(t){console.error("[Glide warn]: "+t)}function o(t,e){if(!(t instanceof e))throw new TypeError("Cannot call a class as a function")}var n="function"==typeof Symbol&&"symbol"==typeof Symbol.iterator?function(t){return typeof t}:function(t){return t&&"function"==typeof Symbol&&t.constructor===Symbol&&t!==Symbol.prototype?"symbol":typeof t},t=function(t,e,n){return e&&r(t.prototype,e),n&&r(t,n),t};function r(t,e){for(var n=0;n<e.length;n++){var i=e[n];i.enumerable=i.enumerable||!1,i.configurable=!0,"value"in i&&(i.writable=!0),Object.defineProperty(t,i.key,i)}}function u(t,e,n){null===t&&(t=Function.prototype);var i=Object.getOwnPropertyDescriptor(t,e);return void 0!==i?"value"in i?i.value:void 0!==(i=i.get)?i.call(n):void 0:null!==(i=Object.getPrototypeOf(t))?u(i,e,n):void 0}var a=Object.assign||function(t){for(var e=1;e<arguments.length;e++){var n,i=arguments[e];for(n in i)Object.prototype.hasOwnProperty.call(i,n)&&(t[n]=i[n])}return t};function f(t){return parseInt(t)}function c(t){return"string"==typeof t}function l(t){var e=void 0===t?"undefined":n(t);return"function"===e||"object"===e&&t}function d(t){return"function"==typeof t}function h(t){return void 0===t}function p(t){return t.constructor===Array}function v(t,e,n){Object.defineProperty(t,e,n)}t(e,[{key:"on",value:function(t,e){if(p(t))for(var n=0;n<t.length;n++)this.on(t[n],e);this.hop.call(this.events,t)||(this.events[t]=[]);var i=this.events[t].push(e)-1;return{remove:function(){delete this.events[t][i]}}}},{key:"emit",value:function(t,e){if(p(t))for(var n=0;n<t.length;n++)this.emit(t[n],e);this.hop.call(this.events,t)&&this.events[t].forEach(function(t){t(e||{})})}}]);var m=e;function e(){var t=0<arguments.length&&void 0!==arguments[0]?arguments[0]:{};o(this,e),this.events=t,this.hop=t.hasOwnProperty}t(y,[{key:"mount",value:function(){var t=0<arguments.length&&void 0!==arguments[0]?arguments[0]:{};return this._e.emit("mount.before"),l(t)?this._c=function(t,e,n){var i,o,r={};for(i in e)d(e[i])?r[i]=e[i](t,r,n):s("Extension must be a function");for(o in r)d(r[o].mount)&&r[o].mount();return r}(this,t,this._e):s("You need to provide a object on `mount()`"),this._e.emit("mount.after"),this}},{key:"update",value:function(){var t=0<arguments.length&&void 0!==arguments[0]?arguments[0]:{};return this.settings=a({},this.settings,t),t.hasOwnProperty("startAt")&&(this.index=t.startAt),this._e.emit("update"),this}},{key:"go",value:function(t){return this._c.Run.make(t),this}},{key:"move",value:function(t){return this._c.Transition.disable(),this._c.Move.make(t),this}},{key:"destroy",value:function(){return this._e.emit("destroy"),this}},{key:"play",value:function(){var t=0<arguments.length&&void 0!==arguments[0]&&arguments[0];return t&&(this.settings.autoplay=t),this._e.emit("play"),this}},{key:"pause",value:function(){return this._e.emit("pause"),this}},{key:"disable",value:function(){return this.disabled=!0,this}},{key:"enable",value:function(){return this.disabled=!1,this}},{key:"on",value:function(t,e){return this._e.on(t,e),this}},{key:"isType",value:function(t){return this.settings.type===t}},{key:"settings",get:function(){return this._o},set:function(t){l(t)?this._o=t:s("Options must be an `object` instance.")}},{key:"index",get:function(){return this._i},set:function(t){this._i=f(t)}},{key:"type",get:function(){return this.settings.type}},{key:"disabled",get:function(){return this._d},set:function(t){this._d=!!t}}]);var g=y;function y(t){var e,n=1<arguments.length&&void 0!==arguments[1]?arguments[1]:{};o(this,y),this._c={},this._e=new m,this.disabled=!1,this.selector=t,this.settings=(e=a({},t=i,n=n),n.hasOwnProperty("classes")&&(e.classes=a({},t.classes,n.classes),n.classes.hasOwnProperty("direction"))&&(e.classes.direction=a({},t.classes.direction,n.classes.direction)),e),this.index=this.settings.startAt}function b(){return(new Date).getTime()}function w(n,i,o){function r(){l=!1===o.leading?0:b(),s=null,c=n.apply(u,a),s||(u=a=null)}function t(){var t=b(),e=(l||!1!==o.leading||(l=t),i-(t-l));return u=this,a=arguments,e<=0||i<e?(s&&(clearTimeout(s),s=null),l=t,c=n.apply(u,a),s||(u=a=null)):s||!1===o.trailing||(s=setTimeout(r,e)),c}var s=void 0,u=void 0,a=void 0,c=void 0,l=0;o=o||{};return t.cancel=function(){clearTimeout(s),l=0,s=u=a=null},t}var _={ltr:["marginLeft","marginRight"],rtl:["marginRight","marginLeft"]};function k(t){for(var e=t.parentNode.firstChild,n=[];e;e=e.nextSibling)1===e.nodeType&&e!==t&&n.push(e);return n}function S(t){return!!(t&&t instanceof window.HTMLElement)}var H='[data-glide-el="track"]',T=(t(x,[{key:"on",value:function(t,e,n){c(t)&&(t=[t]);for(var i=0;i<t.length;i++)this.listeners[t[i]]=n,e.addEventListener(t[i],this.listeners[t[i]],!1)}},{key:"off",value:function(t,e){c(t)&&(t=[t]);for(var n=0;n<t.length;n++)e.removeEventListener(t[n],this.listeners[t[n]],!1)}},{key:"destroy",value:function(){delete this.listeners}}]),x);function x(){var t=0<arguments.length&&void 0!==arguments[0]?arguments[0]:{};o(this,x),this.listeners=t}var O=["ltr","rtl"],R={">":"<","<":">","=":"="},A=[function(e,n){return{modify:function(t){return t+n.Gaps.value*e.index}}},function(t,e){return{modify:function(t){return t+e.Clones.grow/2}}},function(n,i){return{modify:function(t){var e;return 0<=n.settings.focusAt?l(e=i.Peek.value)?t-e.before:t-e:t}}},function(r,s){return{modify:function(t){var e=s.Gaps.value,n=s.Sizes.width,i=r.settings.focusAt,o=s.Sizes.slideWidth;return"center"===i?t-(n/2-o/2):t-o*i-e*i}}},function(t,e){return{modify:function(t){return e.Direction.is("rtl")?-t:t}}}],M=["touchstart","mousedown"],C=["touchmove","mousemove"],z=["touchend","touchcancel","mouseup","mouseleave"],D=["mousedown","mousemove","mouseup","mouseleave"];function P(t){var n;return l(t)?(n=t,Object.keys(n).sort().reduce(function(t,e){return t[e]=n[e],t[e],t},{})):(s("Breakpoints option must be an object"),{})}var E={Html:function(e,t){var n={mount:function(){this.root=e.selector,this.track=this.root.querySelector(H),this.slides=Array.from(this.wrapper.children).filter(function(t){return!t.classList.contains(e.settings.classes.cloneSlide)})}};return v(n,"root",{get:function(){return n._r},set:function(t){S(t=c(t)?document.querySelector(t):t)?n._r=t:s("Root element must be a existing Html node")}}),v(n,"track",{get:function(){return n._t},set:function(t){S(t)?n._t=t:s("Could not find track element. Please use "+H+" attribute.")}}),v(n,"wrapper",{get:function(){return n.track.children[0]}}),n},Translate:function(o,r,s){var u={set:function(t){n=o,i=r;var n,i,t=function(t){for(var e=0;e<A.length;e++)t=A[e](n,i).modify(t);return t}(t);r.Html.wrapper.style.transform="translate3d("+-1*t+"px, 0px, 0px)"},remove:function(){r.Html.wrapper.style.transform=""}};return s.on("move",function(t){var e=r.Gaps.value,n=r.Sizes.length,i=r.Sizes.slideWidth;return o.isType("carousel")&&r.Run.isOffset("<")?(r.Transition.after(function(){s.emit("translate.jump"),u.set(i*(n-1))}),u.set(-i-e*n)):o.isType("carousel")&&r.Run.isOffset(">")?(r.Transition.after(function(){s.emit("translate.jump"),u.set(0)}),u.set(i*n+e*n)):u.set(t.movement)}),s.on("destroy",function(){u.remove()}),u},Transition:function(n,e,t){var i=!1,o={compose:function(t){var e=n.settings;return i?t+" 0ms "+e.animationTimingFunc:t+" "+this.duration+"ms "+e.animationTimingFunc},set:function(){e.Html.wrapper.style.transition=this.compose(0<arguments.length&&void 0!==arguments[0]?arguments[0]:"transform")},remove:function(){e.Html.wrapper.style.transition=""},after:function(t){setTimeout(function(){t()},this.duration)},enable:function(){i=!1,this.set()},disable:function(){i=!0,this.set()}};return v(o,"duration",{get:function(){var t=n.settings;return n.isType("slider")&&e.Run.offset?t.rewindDuration:t.animationDuration}}),t.on("move",function(){o.set()}),t.on(["build.before","resize","translate.jump"],function(){o.disable()}),t.on("run",function(){o.enable()}),t.on("destroy",function(){o.remove()}),o},Direction:function(t,e,n){var i={mount:function(){this.value=t.settings.direction},resolve:function(t){var e=t.slice(0,1);return this.is("rtl")?t.split(e).join(R[e]):t},is:function(t){return this.value===t},addClass:function(){e.Html.root.classList.add(t.settings.classes.direction[this.value])},removeClass:function(){e.Html.root.classList.remove(t.settings.classes.direction[this.value])}};return v(i,"value",{get:function(){return i._v},set:function(t){O.includes(t)?i._v=t:s("Direction value must be `ltr` or `rtl`")}}),n.on(["destroy","update"],function(){i.removeClass()}),n.on("update",function(){i.mount()}),n.on(["build.before","update"],function(){i.addClass()}),i},Peek:function(n,t,e){var i={mount:function(){this.value=n.settings.peek}};return v(i,"value",{get:function(){return i._v},set:function(t){l(t)?(t.before=f(t.before),t.after=f(t.after)):t=f(t),i._v=t}}),v(i,"reductor",{get:function(){var t=i.value,e=n.settings.perView;return l(t)?t.before/e+t.after/e:2*t/e}}),e.on(["resize","update"],function(){i.mount()}),i},Sizes:function(t,n,e){var i={setupSlides:function(){for(var t=n.Html.slides,e=0;e<t.length;e++)t[e].style.width=this.slideWidth+"px"},setupWrapper:function(t){n.Html.wrapper.style.width=this.wrapperSize+"px"},remove:function(){for(var t=n.Html.slides,e=0;e<t.length;e++)t[e].style.width="";n.Html.wrapper.style.width=""}};return v(i,"length",{get:function(){return n.Html.slides.length}}),v(i,"width",{get:function(){return n.Html.root.offsetWidth}}),v(i,"wrapperSize",{get:function(){return i.slideWidth*i.length+n.Gaps.grow+n.Clones.grow}}),v(i,"slideWidth",{get:function(){return i.width/t.settings.perView-n.Peek.reductor-n.Gaps.reductor}}),e.on(["build.before","resize","update"],function(){i.setupSlides(),i.setupWrapper()}),e.on("destroy",function(){i.remove()}),i},Gaps:function(e,r,t){var n={mount:function(){this.value=e.settings.gap},apply:function(t){for(var e=0,n=t.length;e<n;e++){var i=t[e].style,o=r.Direction.value;i[_[o][0]]=0!==e?this.value/2+"px":"",e!==t.length-1?i[_[o][1]]=this.value/2+"px":i[_[o][1]]=""}},remove:function(t){for(var e=0,n=t.length;e<n;e++){var i=t[e].style;i.marginLeft="",i.marginRight=""}}};return v(n,"value",{get:function(){return n._v},set:function(t){n._v=f(t)}}),v(n,"grow",{get:function(){return n.value*(r.Sizes.length-1)}}),v(n,"reductor",{get:function(){var t=e.settings.perView;return n.value*(t-1)/t}}),t.on("update",function(){n.mount()}),t.on(["build.after","update"],w(function(){n.apply(r.Html.wrapper.children)},30)),t.on("destroy",function(){n.remove(r.Html.wrapper.children)}),n},Move:function(t,n,e){var i={mount:function(){this._o=0},make:function(){var t=this;this.offset=0<arguments.length&&void 0!==arguments[0]?arguments[0]:0,e.emit("move",{movement:this.value}),n.Transition.after(function(){e.emit("move.after",{movement:t.value})})}};return v(i,"offset",{get:function(){return i._o},set:function(t){i._o=h(t)?0:f(t)}}),v(i,"translate",{get:function(){return n.Sizes.slideWidth*t.index}}),v(i,"value",{get:function(){var t=this.offset,e=this.translate;return n.Direction.is("rtl")?e+t:e-t}}),e.on(["build.before","run"],function(){i.make()}),i},Clones:function(s,u,t){var e={mount:function(){this.items=[],s.isType("carousel")&&(this.pattern=this.map(),this.items=this.collect())},map:function(){for(var t=0<arguments.length&&void 0!==arguments[0]?arguments[0]:[],e=s.settings.perView,n=u.Html.slides.length,i=0;i<Math.max(1,Math.floor(e/n));i++){for(var o=0;o<=n-1;o++)t.push(""+o);for(var r=n-1;0<=r;r--)t.unshift("-"+r)}return t},collect:function(){for(var t=0<arguments.length&&void 0!==arguments[0]?arguments[0]:[],e=this.pattern,n=0;n<e.length;n++){var i=u.Html.slides[Math.abs(e[n])].cloneNode(!0);i.classList.add(s.settings.classes.cloneSlide),t.push(i)}return t},append:function(){for(var t=this.items,e=this.pattern,n=0;n<t.length;n++){var i=t[n];i.style.width=u.Sizes.slideWidth+"px","-"===e[n][0]?u.Html.wrapper.insertBefore(i,u.Html.slides[0]):u.Html.wrapper.appendChild(i)}},remove:function(){for(var t=this.items,e=0;e<t.length;e++)t[e].remove()}};return v(e,"grow",{get:function(){return(u.Sizes.slideWidth+u.Gaps.value)*e.items.length}}),t.on("update",function(){e.remove(),e.mount(),e.append()}),t.on("build.before",function(){s.isType("carousel")&&e.append()}),t.on("destroy",function(){e.remove()}),e},Resize:function(t,e,n){var i=new T,o={mount:function(){this.bind()},bind:function(){i.on("resize",window,w(function(){n.emit("resize")},t.settings.throttle))},unbind:function(){i.off("resize",window)}};return n.on("destroy",function(){o.unbind(),i.destroy()}),o},Build:function(n,i,t){var e={mount:function(){t.emit("build.before"),this.typeClass(),this.activeClass(),t.emit("build.after")},typeClass:function(){i.Html.root.classList.add(n.settings.classes[n.settings.type])},activeClass:function(){var e=n.settings.classes,t=i.Html.slides[n.index];t.classList.add(e.activeSlide),k(t).forEach(function(t){t.classList.remove(e.activeSlide)})},removeClasses:function(){var e=n.settings.classes;i.Html.root.classList.remove(e[n.settings.type]),i.Html.slides.forEach(function(t){t.classList.remove(e.activeSlide)})}};return t.on(["destroy","update"],function(){e.removeClasses()}),t.on(["resize","update"],function(){e.mount()}),t.on("move.after",function(){e.activeClass()}),e},Run:function(r,n,s){var t={mount:function(){this._o=!1},make:function(t){var e=this;r.disabled||(r.disable(),this.move=t,s.emit("run.before",this.move),this.calculate(),s.emit("run",this.move),n.Transition.after(function(){(e.isOffset("<")||e.isOffset(">"))&&(e._o=!1,s.emit("run.offset",e.move)),s.emit("run.after",e.move),r.enable()}))},calculate:function(){var t=this.move,e=this.length,n=t.steps,i=t.direction,o="number"==typeof f(n)&&0!==f(n);switch(i){case">":">"===n?r.index=e:this.isEnd()?(this._o=!0,r.index=0,s.emit("run.end",t)):o?r.index+=Math.min(e-r.index,-f(n)):r.index++;break;case"<":"<"===n?r.index=0:this.isStart()?(this._o=!0,r.index=e,s.emit("run.start",t)):o?r.index-=Math.min(r.index,f(n)):r.index--;break;case"=":r.index=n}},isStart:function(){return 0===r.index},isEnd:function(){return r.index===this.length},isOffset:function(t){return this._o&&this.move.direction===t}};return v(t,"move",{get:function(){return this._m},set:function(t){this._m={direction:t.substr(0,1),steps:t.substr(1)?t.substr(1):0}}}),v(t,"length",{get:function(){return n.Html.slides.length-1}}),v(t,"offset",{get:function(){return this._o}}),t},Swipe:function(r,s,u){var e=new T,a=0,c=0,l=0,n=!1,t={mount:function(){this.bindSwipeStart()},start:function(t){n||r.disabled||(this.disable(),t=this.touches(t),a=null,c=f(t.pageX),l=f(t.pageY),this.bindSwipeMove(),this.bindSwipeEnd(),u.emit("swipe.start"))},move:function(t){if(!r.disabled){var e=r.settings,n=this.touches(t),i=f(n.pageX)-c,n=f(n.pageY)-l,o=Math.abs(i<<2),n=Math.abs(n<<2),o=Math.sqrt(o+n),n=Math.sqrt(n);if(180*(a=Math.asin(n/o))/Math.PI<e.touchAngle&&s.Move.make(i*parseFloat(e.touchRatio)),!(180*a/Math.PI<e.touchAngle))return!1;t.stopPropagation(),t.preventDefault(),s.Html.root.classList.add(e.classes.dragging),u.emit("swipe.move")}},end:function(t){var e,n,i,o;r.disabled||(e=r.settings,n=this.touches(t),t=this.threshold(t),n=n.pageX-c,i=180*a/Math.PI,o=Math.round(n/s.Sizes.slideWidth),this.enable(),t<n&&i<e.touchAngle?(e.perTouch&&(o=Math.min(o,f(e.perTouch))),s.Direction.is("rtl")&&(o=-o),s.Run.make(s.Direction.resolve("<"+o))):n<-t&&i<e.touchAngle?(e.perTouch&&(o=Math.max(o,-f(e.perTouch))),s.Direction.is("rtl")&&(o=-o),s.Run.make(s.Direction.resolve(">"+o))):s.Move.make(),s.Html.root.classList.remove(e.classes.dragging),this.unbindSwipeMove(),this.unbindSwipeEnd(),u.emit("swipe.end"))},bindSwipeStart:function(){var t=r.settings;t.swipeThreshold&&e.on(M[0],s.Html.wrapper,this.start.bind(this)),t.dragThreshold&&e.on(M[1],s.Html.wrapper,this.start.bind(this))},unbindSwipeStart:function(){e.off(M[0],s.Html.wrapper),e.off(M[1],s.Html.wrapper)},bindSwipeMove:function(){e.on(C,s.Html.wrapper,w(this.move.bind(this),r.settings.throttle))},unbindSwipeMove:function(){e.off(C,s.Html.wrapper)},bindSwipeEnd:function(){e.on(z,s.Html.wrapper,this.end.bind(this))},unbindSwipeEnd:function(){e.off(z,s.Html.wrapper)},touches:function(t){return D.includes(t.type)?t:t.touches[0]||t.changedTouches[0]},threshold:function(t){var e=r.settings;return D.includes(t.type)?e.dragThreshold:e.swipeThreshold},enable:function(){return n=!1,s.Transition.enable(),this},disable:function(){return n=!0,s.Transition.disable(),this}};return u.on("build.after",function(){s.Html.root.classList.add(r.settings.classes.swipeable)}),u.on("destroy",function(){t.unbindSwipeStart(),t.unbindSwipeMove(),t.unbindSwipeEnd(),e.destroy()}),t},Images:function(t,e,n){var i=new T,o={mount:function(){this.bind()},bind:function(){i.on("dragstart",e.Html.wrapper,this.dragstart)},unbind:function(){i.off("dragstart",e.Html.wrapper)},dragstart:function(t){t.preventDefault()}};return n.on("destroy",function(){o.unbind(),i.destroy()}),o},Anchors:function(t,e,n){var i=new T,o=!1,r=!1,s={mount:function(){this._a=e.Html.wrapper.querySelectorAll("a"),this.bind()},bind:function(){i.on("click",e.Html.wrapper,this.click)},unbind:function(){i.off("click",e.Html.wrapper)},click:function(t){t.stopPropagation(),r&&t.preventDefault()},detach:function(){if(r=!0,!o){for(var t=0;t<this.items.length;t++)this.items[t].draggable=!1,this.items[t].dataset.href=this.items[t].getAttribute("href"),this.items[t].removeAttribute("href");o=!0}return this},attach:function(){if(r=!1,o){for(var t=0;t<this.items.length;t++)this.items[t].draggable=!0,this.items[t].setAttribute("href",this.items[t].dataset.href),delete this.items[t].dataset.href;o=!1}return this}};return v(s,"items",{get:function(){return s._a}}),n.on("swipe.move",function(){s.detach()}),n.on("swipe.end",function(){e.Transition.after(function(){s.attach()})}),n.on("destroy",function(){s.attach(),s.unbind(),i.destroy()}),s},Controls:function(n,e,t){var i=new T,o={mount:function(){this._n=e.Html.root.querySelectorAll('[data-glide-el="controls[nav]"]'),this._i=e.Html.root.querySelectorAll('[data-glide-el^="controls"]'),this.addBindings()},setActive:function(){for(var t=0;t<this._n.length;t++)this.addClass(this._n[t].children)},removeActive:function(){for(var t=0;t<this._n.length;t++)this.removeClass(this._n[t].children)},addClass:function(t){var e=n.settings,t=t[n.index];t.classList.add(e.classes.activeNav),k(t).forEach(function(t){t.classList.remove(e.classes.activeNav)})},removeClass:function(t){t[n.index].classList.remove(n.settings.classes.activeNav)},addBindings:function(){for(var t=0;t<this._i.length;t++)this.bind(this._i[t].children)},removeBindings:function(){for(var t=0;t<this._i.length;t++)this.unbind(this._i[t].children)},bind:function(t){for(var e=0;e<t.length;e++)i.on(["click","touchstart"],t[e],this.click)},unbind:function(t){for(var e=0;e<t.length;e++)i.off(["click","touchstart"],t[e])},click:function(t){t.preventDefault(),e.Run.make(e.Direction.resolve(t.currentTarget.dataset.glideDir))}};return v(o,"items",{get:function(){return o._i}}),t.on(["mount.after","move.after"],function(){o.setActive()}),t.on("destroy",function(){o.removeBindings(),o.removeActive(),i.destroy()}),o},Keyboard:function(t,e,n){var i=new T,o={mount:function(){t.settings.keyboard&&this.bind()},bind:function(){i.on("keyup",document,this.press)},unbind:function(){i.off("keyup",document)},press:function(t){39===t.keyCode&&e.Run.make(e.Direction.resolve(">")),37===t.keyCode&&e.Run.make(e.Direction.resolve("<"))}};return n.on(["destroy","update"],function(){o.unbind()}),n.on("update",function(){o.mount()}),n.on("destroy",function(){i.destroy()}),o},Autoplay:function(e,n,t){var i=new T,o={mount:function(){this.start(),e.settings.hoverpause&&this.bind()},start:function(){var t=this;e.settings.autoplay&&h(this._i)&&(this._i=setInterval(function(){t.stop(),n.Run.make(">"),t.start()},this.time))},stop:function(){this._i=clearInterval(this._i)},bind:function(){var t=this;i.on("mouseover",n.Html.root,function(){t.stop()}),i.on("mouseout",n.Html.root,function(){t.start()})},unbind:function(){i.off(["mouseover","mouseout"],n.Html.root)}};return v(o,"time",{get:function(){var t=n.Html.slides[e.index].getAttribute("data-glide-autoplay");return f(t||e.settings.autoplay)}}),t.on(["destroy","update"],function(){o.unbind()}),t.on(["run.before","pause","destroy","swipe.start","update"],function(){o.stop()}),t.on(["run.after","play","swipe.end"],function(){o.start()}),t.on("update",function(){o.mount()}),t.on("destroy",function(){i.destroy()}),o},Breakpoints:function(t,e,n){var i=new T,o=t.settings,r=P(r=o.breakpoints),s=a({},o),u={match:function(t){if(void 0!==window.matchMedia)for(var e in t)if(t.hasOwnProperty(e)&&window.matchMedia("(max-width: "+e+"px)").matches)return t[e];return s}};return a(o,u.match(r)),i.on("resize",window,w(function(){a(o,u.match(r))},t.settings.throttle)),n.on("update",function(){r=P(r),s=a({},o)}),n.on("destroy",function(){i.off("resize",window)}),u}},j=L;if("function"!=typeof g&&null!==g)throw new TypeError("Super expression must either be null or a function, not "+typeof g);function L(){o(this,L);var t=this,e=(L.__proto__||Object.getPrototypeOf(L)).apply(this,arguments);if(t)return!e||"object"!=typeof e&&"function"!=typeof e?t:e;throw new ReferenceError("this hasn't been initialised - super() hasn't been called")}return j.prototype=Object.create(g&&g.prototype,{constructor:{value:j,enumerable:!1,writable:!0,configurable:!0}}),g&&(Object.setPrototypeOf?Object.setPrototypeOf(j,g):j.__proto__=g),t(L,[{key:"mount",value:function(){var t=0<arguments.length&&void 0!==arguments[0]?arguments[0]:{};return u(L.prototype.__proto__||Object.getPrototypeOf(L.prototype),"mount",this).call(this,a({},E,t))}}]),L});var glideHero=new Glide(".hero",{perView:5,gap:35,breakpoints:{1100:{perView:4},900:{perView:3},700:{perView:2}}});glideHero.mount();