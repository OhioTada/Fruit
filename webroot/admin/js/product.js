/*
* HSCore
* @version: 4.1.0 (12 July, 2021)
* @author: HtmlStream
* @event-namespace: .HSCore
* @license: Htmlstream Libraries (https://htmlstream.com/licenses)
* Copyright 2021 Htmlstream
*/
"use strict";const HSCore={components:{},collection:{tooltips:[],popovers:[]},init:function(){const t=this,e=document.querySelectorAll('[data-bs-toggle="tooltip"]');for(let i=0;i<e.length;i+=1)t.collection.tooltips.push(new bootstrap.Tooltip(e[i]));const i=document.querySelectorAll('[data-bs-toggle="popover"]');for(let e=0;e<i.length;e+=1)t.collection.popovers.push(new bootstrap.Popover(i[e]));document.querySelectorAll("[data-bs-popover-dark]").forEach((function(t){t.addEventListener("click",(function(t){const e=document.querySelectorAll(".popover");e.length&&e[e.length-1].classList.add("popover-dark")}))}))},getTooltips:function(){return this.collection.tooltips},hideTooltips:function(){const t=this.getTooltips();for(let e=0;e<t.length;e+=1)t[e].hide()},getPopovers:function(){return this.collection.popovers},hidePopovers:function(){const t=this.getPopovers();for(let e=0;e<t.length;e+=1)t[e].hide()},disposePopovers:function(){const t=this.getPopovers();for(let e=0;e<t.length;e+=1)t[e].dispose()}};HSCore.init();const HSBsDropdown={init(t){this.setAnimations(),this.openOnHover()},scrollEvent:null,setAnimations(){window.addEventListener("show.bs.dropdown",(t=>{const e=t.target.closest(".table-responsive");e&&(this.scrollEvent=function(){new bootstrap.Dropdown(t.target).hide()},e.addEventListener("scroll",this.scrollEvent));if(!t.target.hasAttribute("data-bs-dropdown-animation"))return;const i=t.target.nextElementSibling;i.style.opacity=0,setTimeout((()=>{i.style.transform=`${i.style.transform} translateY(10px)`})),setTimeout((()=>{i.style.transform=`${i.style.transform} translateY(-10px)`,i.style.transition="transform 300ms, opacity 300ms",i.style.opacity=1}),100)})),window.addEventListener("hide.bs.dropdown",(t=>{const e=t.target.closest(".table-responsive");e&&e.removeEventListener("scroll",this.scrollEvent);if(!t.target.hasAttribute("data-bs-dropdown-animation"))return;const i=t.target.nextElementSibling;setTimeout((()=>{i.style.removeProperty("transform"),i.style.removeProperty("transition")}))}))},openOnHover(){Array.from(document.querySelectorAll("[data-bs-open-on-hover]")).forEach((t=>{var e;const i=new bootstrap.Dropdown(t);function o(){e=setTimeout((()=>{i.hide()}),500)}t.addEventListener("mouseenter",(()=>{clearTimeout(e),i.show()})),i._menu.addEventListener("mouseenter",(()=>{window.clearTimeout(e)})),Array.from([i._menu,t]).forEach((t=>t.addEventListener("mouseleave",o)))}))}}
/*
* HSMask Plugin
* @version: 2.0.1 (Sat, 30 Jul 2021)
* @requires: imask v1.14.16
* @author: HtmlStream
* @event-namespace: .HSMask
* @license: Htmlstream Libraries (https://htmlstream.com/)
* Copyright 2021 Htmlstream
*/;HSCore.components.HSMask={collection:[],dataAttributeName:"data-hs-mask-options",defaults:{mask:null},init(t,e,i){const o=this;let n;n=t instanceof HTMLElement?[t]:t instanceof Object?t:document.querySelectorAll(t);for(let t=0;t<n.length;t+=1)o.addToCollection(n[t],e,i||n[t].id);if(!o.collection.length)return!1;o._init()},addToCollection(t,e,i){const o=this;this.collection.push({$el:t,id:i||null,options:Object.assign({},o.defaults,t.hasAttribute(o.dataAttributeName)?JSON.parse(t.getAttribute(o.dataAttributeName)):{},e)})},getItems(){const t=this;let e=[];for(let i=0;i<t.collection.length;i+=1)e.push(t.collection[i].$initializedEl);return e},getItem(t){return"number"==typeof t?this.collection[t].$initializedEl:this.collection.find((e=>e.id===t)).$initializedEl},_init(){const t=this;for(let e=0;e<t.collection.length;e+=1){let i,o;t.collection[e].hasOwnProperty("$initializedEl")||(i=t.collection[e].options,o=t.collection[e].$el,t.collection[e].$initializedEl=new IMask(o,i))}}}
/*
* HSTomSelect Plugin
* @version: 1.0.0 (Mon, 24 May 2021)
* @requires: tom-select 1.7.26
* @author: HtmlStream
* @event-namespace: .HSTomSelect
* @license: Htmlstream Libraries (https://htmlstream.com/)
* Copyright 2021 Htmlstream
*/,HSCore.components.HSTomSelect={dataAttributeName:"data-hs-tom-select-options",defaults:{dropdownWrapperClass:"tom-select-custom",searchInDropdown:!0,plugins:["change_listener","hs_smart_position"],hideSelected:!1,render:{option:function(t,e){return t.optionTemplate||`<div>${t.text}</div>>`},item:function(t,e){return t.optionTemplate||`<div>${t.text}</div>>`}}},collection:[],init(t,e,i){const o=this;let n;n=t instanceof HTMLElement?[t]:t instanceof Object?t:document.querySelectorAll(t);for(let t=0;t<n.length;t+=1)o.addToCollection(n[t],e,i||n[t].id);if(!o.collection.length)return!1;o._init()},addToCollection(t,e,i){const o=this;this.collection.push({$el:t,id:i||null,options:Object.assign({},o.defaults,t.hasAttribute(o.dataAttributeName)?JSON.parse(t.getAttribute(o.dataAttributeName)):{},e)})},getItems(){const t=this;let e=[];for(let i=0;i<t.collection.length;i+=1)e.push(t.collection[i].$initializedEl);return e},getItem(t){return"number"==typeof t?this.collection[t].$initializedEl:this.collection.find((e=>e.id===t)).$initializedEl},_init(){const t=this;for(let e=0;e<t.collection.length;e+=1){let i,o;t.collection[e].hasOwnProperty("$initializedEl")||(i=t.collection[e].options,o=t.collection[e].$el,i.plugins.hasOwnProperty("hs_smart_position")&&!o.closest(".modal")&&(i.dropdownParent="body"),o.hasAttribute("multiple")&&(i.plugins=[...i.plugins,"remove_button"]),i.searchInDropdown&&(i.plugins=[...i.plugins,"dropdown_input"]),TomSelect.define("hs_smart_position",(function(t){this.hook("after","setup",(function(){this.$menu=this.dropdown_content.parentElement,this.on("dropdown_open",(t=>{const e=t.getBoundingClientRect(),o=this.wrapper.getBoundingClientRect();e.bottom>window.innerHeight&&(t.style.top=parseInt(t.style.top)-(this.control.clientHeight+t.clientHeight+10)+"px"),t.style.opacity=0,setTimeout((()=>{const n=parseInt(t.style.width);n>o.width&&i.dropdownLeft&&(t.style.left=parseInt(t.style.left)-Math.abs(e.width-n)+"px"),t.style.opacity=1}))})),window.addEventListener("scroll",(()=>function(t){const e=t.$menu.getBoundingClientRect();e.bottom>window.innerHeight?t.$menu.style.top=`-${t.$menu.clientHeight+10}px`:e.top<0&&(t.$menu.style.top=null)}(this)))}))})),t.collection[e].$initializedEl=new TomSelect(o,i),i.hideSearch&&t.hideSearch(t.collection[e].$initializedEl,i),i.disableSearch&&t.disableSearch(t.collection[e].$initializedEl,i),i.width&&t.width(t.collection[e].$initializedEl,i),i.singleMultiple&&t.singleMultiple(t.collection[e].$initializedEl,i),i.hidePlaceholderOnSearch&&t.hidePlaceholderOnSearch(t.collection[e].$initializedEl,i),i.create&&t.openIfEmpty(t.collection[e].$initializedEl,i),i.hideSelectedFromField&&t.hideSelectedFromField(t.collection[e].$initializedEl,i),i.dropdownWidth&&t.dropdownWidth(t.collection[e].$initializedEl,i),t.renderPlaceholder(t.collection[e].$initializedEl,i),t.wrapContainer(t.collection[e].$initializedEl,i))}},hideSearch(t,e){t.control_input.parentElement.removeChild(t.control_input)},disableSearch(t,e){t.control_input.readOnly=!0},singleMultiple(t,e){t.control.classList.add("hs-select-single-multiple");const i=(t.control_input.getAttribute("placeholder")||e.placeholder).replace(/(<([^>]+)>)/gi,""),o=e=>{e.target.closest("[data-selectable].selected")&&(e.target.classList.remove("selected"),setTimeout((()=>{t.removeItem(e.target.getAttribute("data-value"),!1),t.refreshItems()})))},n=e=>{if(!t.wrapper.querySelector(".ts-selected-count")){const e=document.createElement("span");e.classList.add("ts-selected-count"),t.wrapper.querySelector(".ts-control").appendChild(e)}return t.wrapper.querySelector(".ts-selected-count").innerHTML=e};t.items.length&&(e.searchInDropdown?n(t.items.length?`${t.items.length} item(s) selected`:i):t.control_input.setAttribute("placeholder",`${t.items.length} item(s) selected`)),t.on("dropdown_open",(t=>{t.addEventListener("mouseup",o)})),t.on("dropdown_close",(t=>{window.removeEventListener("mouseup",o)})),t.on("item_add",(()=>{t.items.length&&(e.searchInDropdown?n(`${t.items.length} item(s) selected`):t.control_input.setAttribute("placeholder",`${t.items.length} item(s) selected`))})),t.on("item_remove",(()=>{t.items.length?e.searchInDropdown?n(`${t.items.length} item(s) selected`):t.control_input.setAttribute("placeholder",`${t.items.length} item(s) selected`):e.searchInDropdown?n(i):t.control_input.setAttribute("placeholder",i)}))},width(t,e){t.wrapper.style.maxWidth=e.width},hidePlaceholderOnSearch(t,e){const i=(t.control_input.getAttribute("placeholder")||e.placeholder).replace(/(<([^>]+)>)/gi,"");i&&(t.on("dropdown_open",(()=>{t.control_input.setAttribute("placeholder","")})),t.on("dropdown_close",(()=>{t.control_input.setAttribute("placeholder",i)})))},openIfEmpty(t,e){t.control_input.addEventListener("focus",(()=>{t.$menu.querySelector(".option")||(t.open(),setTimeout((()=>{t.$menu.style.display="block",t.$menu.querySelector(".ts-dropdown-content").append(t.render("no_results"))}),10))}))},hideSelectedFromField(t,e){t.on("item_select",onSelect),t.on("item_add",onSelect)},dropdownWidth(t,e){t.on("dropdown_open",(()=>t.$menu.style.width=e.dropdownWidth))},width(t,e){t.wrapper.style.width=e.width},renderPlaceholder(t,e){if(e.singleMultiple||t.items.length)return;const i=t.input.getAttribute("placeholder")||e.placeholder;if(e.searchInDropdown&&!e.hideSelected){let e=null;const o=function(){if(e=t.wrapper.querySelector(".ts-custom-placeholder"),t.items.length&&e)return e.parentElement&&e.parentElement.removeChild(e),e=null;t.items.length||e||n()},n=function(){t.items.length||(t.wrapper.querySelector(".ts-control").innerHTML=`<span class="ts-custom-placeholder">${i}</span>`,e=t.wrapper.querySelector(".ts-custom-placeholder"))};n(),t.on("change",o)}i&&(t.control_input.offsetParent?function(e){t.control_input.setAttribute("placeholder",e.replace(/(<([^>]+)>)/gi,""))}(i):function(e){const i=()=>{t.control.innerHTML=`<div class="ts-custom-placeholder">${e}</div>`};i(),t.on("change",(()=>{t.items.length&&(()=>{const e=t.wrapper.querySelector(".items .ts-custom-placeholder");e&&e.parentElement&&e.parentElement.removeChild(e)})(),t.items.length||i()}))}(i))},wrapContainer(t,e){var i=document.createElement("div");i.className+=e.dropdownWrapperClass,t.$menu.parentNode.insertBefore(i,t.$menu),i.appendChild(t.$menu)}}
/*
* Clipboard wrapper
* @version: 2.0.0 (Sat, 30 Jul 2021)
* @author: HtmlStream
* @event-namespace: .HSCore.components.HSClipboard
* @license: Htmlstream Libraries (https://htmlstream.com/licenses)
* Copyright 2021 Htmlstream
*/,HSCore.components.HSClipboard={collection:[],dataAttributeName:"data-hs-clipboard-options",defaults:{type:null,contentTarget:null,classChangeTarget:null,defaultClass:null,successText:null,successClass:null,originalTitle:null},init(t,e={},i){const o=this;let n;n=t instanceof HTMLElement?[t]:t instanceof Object?t:document.querySelectorAll(t);for(let t=0;t<n.length;t+=1)o.addToCollection(n[t],e,i||n[t].id);if(!o.collection.length)return!1;o._init()},_init:function(t,e){const i=this;for(let e=0;e<i.collection.length;e+=1){let o,n;if(i.collection[e].hasOwnProperty("$initializedEl"))continue;o=i.collection[e].options,n=i.collection[e].$el,o.contentTarget&&i.setShortcodes(n,o),n.closest(".modal")&&(o.container=n.closest(".modal")),i.collection[e].$initializedEl=new ClipboardJS(n,o),"tooltip"===o.type?o.instanceTooltip=bootstrap.Tooltip.getOrCreateInstance(n):"popover"===o.type&&(o.instancePopover=new bootstrap.Popover(n));const l=function(){o.instanceTooltip.tip.style.display="none",n.setAttribute("data-bs-original-title",o.title),o.instanceTooltip.setContent(),setTimeout((()=>{o.instanceTooltip.tip.style.display="block"}),100),n.removeEventListener("mouseleave",l)};i.collection[e].$initializedEl.on("success",(()=>{if(o.successText||o.successClass){if(o.successText&&("tooltip"===o.type?(n.setAttribute("data-bs-original-title",o.successText),o.instanceTooltip.setContent(),o.instanceTooltip.show(),n.addEventListener("mouseleave",l)):"popover"===o.type?(t.setAttribute("data-bs-original-title",o.successText),o.instancePopover.show(),n.addEventListener("mouseleave",(()=>{n.setAttribute("data-bs-original-title",o.title),o.instancePopover.hide()}))):(n.lastChild.nodeValue=" "+o.successText+" ",setTimeout((function(){n.lastChild.nodeValue=o.defaultText}),800))),o.successClass)if(o.classChangeTarget){let t=document.querySelector(o.classChangeTarget);if(!t)return;t.classList.remove(o.defaultClass),t.classList.add(o.successClass),setTimeout((function(){t.classList.remove(o.successClass),t.classList.add(o.defaultClass)}),800)}else n.classList.remove(o.defaultClass),n.classList.add(o.successClass),setTimeout((function(){n.classList.remove(o.successClass),n.classList.add(o.defaultClass)}),800);if("cut"===o.action){const t=document.querySelector(o.contentTarget);t&&"TEXTAREA"===t.nodeName&&(t.value="")}}}))}},setShortcodes(t,e){let i=e,o=document.querySelector(i.contentTarget);"SELECT"===o.tagName||"INPUT"===o.tagName||"TEXTAREA"===o.tagName?i.shortcodes[i.contentTarget]=o.value:i.shortcodes[i.contentTarget]=o.outerHTML},addToCollection(t,e,i){e=Object.assign({shortcodes:{}},this.defaults,t.hasAttribute(this.dataAttributeName)?JSON.parse(t.getAttribute(this.dataAttributeName)):{},e),this.collection.push({$el:t,id:i||null,options:Object.assign({},e,{windowWidth:window.outerWidth,defaultText:t.lastChild.nodeValue,title:t.getAttribute("data-bs-original-title"),container:!!this.defaults.container&&document.querySelector(this.defaults.container),text:t=>{var i=JSON.parse(t.getAttribute("data-hs-clipboard-options"));return e.shortcodes[i.contentTarget]}})})},getItems(){const t=this;let e=[];for(let i=0;i<t.collection.length;i+=1)e.push(t.collection[i].$initializedEl);return e},getItem(t){return"number"==typeof t?this.collection[t].$initializedEl:this.collection.find((e=>e.id===t)).$initializedEl}}
/*
* Custombox wrapper
* @Datatables: 2.0.0 (Mon, 25 Nov 2019)
* @requires: jQuery v3.0 or later, DataTables v1.10.20
* @author: HtmlStream
* @event-namespace: .HSCore.components.HSDatatables
* @license: Htmlstream Libraries (https://htmlstream.com/licenses)
* Copyright 2020 Htmlstream
*/,HSCore.components.HSDatatables={collection:[],dataAttributeName:"data-hs-datatables-options",defaults:{paging:!0,info:{currentInterval:null,totalQty:null,divider:" to "},isSelectable:!1,isColumnsSearch:!1,isColumnsSearchTheadAfter:!1,pagination:null,paginationClasses:"pagination datatable-custom-pagination",paginationLinksClasses:"page-link",paginationItemsClasses:"page-item",paginationPrevClasses:"page-item",paginationPrevLinkClasses:"page-link",paginationPrevLinkMarkup:'<span aria-hidden="true">Prev</span>',paginationNextClasses:"page-item",paginationNextLinkClasses:"page-link",paginationNextLinkMarkup:'<span aria-hidden="true">Next</span>',detailsInvoker:null,select:null},init(t,e,i){const o=this;let n;n=t instanceof HTMLElement?[t]:t instanceof Object?t:document.querySelectorAll(t);for(let t=0;t<n.length;t+=1)o.addToCollection(n[t],e,i||n[t].id);if(!o.collection.length)return!1;o._init()},addToCollection(t,e,i){this.collection.push({$el:t,id:i||null,options:Object.assign({},this.defaults,t.hasAttribute(this.dataAttributeName)?JSON.parse(t.getAttribute(this.dataAttributeName)):{},e)})},getItems(){const t=this;let e=[];for(let i=0;i<t.collection.length;i+=1)e.push(t.collection[i].$initializedEl);return e},getItem(t){return"number"==typeof t?this.collection[t].$initializedEl:this.collection.find((e=>e.id===t)).$initializedEl},_init(){const t=this;for(let o=0;o<t.collection.length;o+=1){let n,l;if(!t.collection[o].hasOwnProperty("$initializedEl")){n=t.collection[o].options,l=$(t.collection[o].$el),t.collection[o].$initializedEl=l.DataTable(n);var e=new $.fn.dataTable.Api(l),i=function(){var t=e.page.info(),i=$("#"+e.context[0].nTable.id+"_paginate"),o=i.find(".paginate_button.previous"),s=i.find(".paginate_button.next"),a=i.find(".paginate_button:not(.previous):not(.next), .ellipsis");o.wrap('<span class="'+n.paginationItemsClasses+'"></span>'),o.addClass(n.paginationPrevLinkClasses).html(n.paginationPrevLinkMarkup),s.wrap('<span class="'+n.paginationItemsClasses+'"></span>'),s.addClass(n.paginationNextLinkClasses).html(n.paginationNextLinkMarkup),o.unwrap(o.parent()).wrap('<li class="paginate_item '+n.paginationItemsClasses+'"></li>'),o.hasClass("disabled")&&(o.removeClass("disabled"),o.parent().addClass("disabled")),s.unwrap(s.parent()).wrap('<li class="paginate_item '+n.paginationItemsClasses+'"></li>'),s.hasClass("disabled")&&(s.removeClass("disabled"),s.parent().addClass("disabled")),a.unwrap(a.parent()),a.each((function(){$(this).hasClass("current")?($(this).removeClass("current"),$(this).wrap('<li class="paginate_item '+n.paginationItemsClasses+' active"></li>')):$(this).wrap('<li class="paginate_item '+n.paginationItemsClasses+'"></li>')})),a.addClass(n.paginationLinksClasses),i.prepend('<ul id="'+e.context[0].nTable.id+'_pagination" class="'+n.paginationClasses+'"></ul>'),i.find(".paginate_item").appendTo("#"+e.context[0].nTable.id+"_pagination"),t.pages<=1?$("#"+n.pagination).hide():$("#"+n.pagination).show(),n.info.currentInterval&&$(n.info.currentInterval).html(t.start+1+n.info.divider+t.end),n.info.totalQty&&$(n.info.totalQty).html(t.recordsDisplay),n.scrollY&&l.find($(".dataTables_scrollBody thead tr")).css({visibility:"hidden"})};i(),t.collection[o].$initializedEl.on("draw",i),t.customPagination(l,t.collection[o].$initializedEl,n),t.customSearch(l,t.collection[o].$initializedEl,n),n.isColumnsSearch&&t.customColumnsSearch(l,t.collection[o].$initializedEl,n),t.customEntries(l,t.collection[o].$initializedEl,n),n.isSelectable&&t.rowChecking(l),t.details(l,n.detailsInvoker,t.collection[o].$initializedEl),n.select&&t.select(n.select,t.collection[o].$initializedEl)}}},customPagination:function(t,e,i){$("#"+i.pagination).append($("#"+e.context[0].nTable.id+"_paginate"))},customSearch:function(t,e,i){var o=i;$(o.search).on("keyup",(function(t){e.search(this.value).draw()})),$(o.search).on("input",(function(t){t.target.value||e.search("").draw()}))},customColumnsSearch:function(t,e,i){var o=i;e.columns().every((function(){var t=this;o.isColumnsSearchTheadAfter&&$(".dataTables_scrollFoot").insertAfter(".dataTables_scrollHead"),$("input",this.footer()).on("keyup change",(function(){t.search()!==this.value&&t.search(this.value).draw()})),$("select",this.footer()).on("change",(function(){t.search()!==this.value&&t.search(this.value).draw()}))}))},customEntries:function(t,e,i){$(i.entries).on("change",(function(){var t=$(this).val();e.page.len(t).draw()}))},rowChecking:function(t){$(t).on("change","input",(function(){$(this).parents("tr").toggleClass("checked")}))},format:function(t){return t},details:function(t,e,i){if(e){var o=this;$(t).on("click",e,(function(){var t=$(this).closest("tr"),e=i.row(t);e.child.isShown()?(e.child.hide(),t.removeClass("opened")):(e.child(o.format(t.data("details"))).show(),t.addClass("opened"))}))}},select:function(t,e){$(t.classMap.checkAll).on("click",(function(){$(this).is(":checked")?(e.rows().select(),e.rows().nodes().each((function(e){$(e).find(t.selector).prop("checked",!0)}))):(e.rows().deselect(),e.rows().nodes().each((function(e){$(e).find(t.selector).prop("checked",!1)})))})),e.on("select",(function(){$(t.classMap.counter).text(e.rows(".selected").data().length),e.rows().data().length!==e.rows(".selected").data().length?$(t.classMap.checkAll).prop("checked",!1):$(t.classMap.checkAll).prop("checked",!0),0===e.rows(".selected").data().length?$(t.classMap.counterInfo).hide():$(t.classMap.counterInfo).show()})).on("deselect",(function(){$(t.classMap.counter).text(e.rows(".selected").data().length),e.rows().data().length!==e.rows(".selected").data().length?$(t.classMap.checkAll).prop("checked",!1):$(t.classMap.checkAll).prop("checked",!0),0===e.rows(".selected").data().length?$(t.classMap.counterInfo).hide():$(t.classMap.counterInfo).show()}))}}
/*
* HSFullCalendar Plugin
* @version: 3.0.0 (Mon, 12 July 2021)
* @requires: jsVectorMap v5.8.0
* @author: HtmlStream
* @event-namespace: .HSFullCalendar
* @license: Htmlstream Libraries (https://htmlstream.com/)
* Copyright 2021 Htmlstream
*/,HSCore.components.HSFullCalendar={collection:[],dataAttributeName:"data-hs-fullcalendar-options",defaults:{contentHeight:"auto",dayMaxEventRows:2},init:function(t,e,i){const o=this;let n;n=t instanceof HTMLElement?[t]:t instanceof Object?t:document.querySelectorAll(t);for(let t=0;t<n.length;t+=1)o.addToCollection(n[t],e,i||n[t].id);if(!o.collection.length)return!1;o._init()},addToCollection(t,e,i){this.collection.push({$el:t,id:i||null,options:Object.assign({},this.defaults,t.hasAttribute(this.dataAttributeName)?JSON.parse(t.getAttribute(this.dataAttributeName)):{},e)})},getItems(){const t=this;let e=[];for(let i=0;i<t.collection.length;i+=1)e.push(t.collection[i].$initializedEl);return e},getItem(t){return"number"==typeof t?this.collection[t].$initializedEl:this.collection.find((e=>e.id===t)).$initializedEl},_init:function(){const t=this;for(let e=0;e<t.collection.length;e+=1)t.collection[e].hasOwnProperty("$initializedEl")||(t.collection[e].$initializedEl=new FullCalendar.Calendar(t.collection[e].$el,t.collection[e].options),t.collection[e].$initializedEl.render())}},
/*
* Flatpickr wrapper
* @version: 3.0.0 (Mon, 13 Jul 2021)
* @requires: flatpickr v4.6.9
* @author: HtmlStream
* @event-namespace: .HSCore.components.HSFlatpickr
* @license: Htmlstream Libraries (https://htmlstream.com/licenses)
* Copyright 2021 Htmlstream
*/
HSCore.components.HSFlatpickr={collection:[],dataAttributeName:"data-hs-flatpickr-options",defaults:{mode:"single",dateFormat:"d M Y",maxDate:!1,locale:{firstDayOfWeek:1,weekdays:{shorthand:["Su","Mo","Tu","We","Th","Fr","Sa"],longhand:[]},rangeSeparator:" - "},nextArrow:'<i class="bi-chevron-right flatpickr-custom-arrow"></i>',prevArrow:'<i class="bi-chevron-left flatpickr-custom-arrow"></i>',disableMobile:!0},init:function(t,e,i){const o=this;let n;n=t instanceof HTMLElement?[t]:t instanceof Object?t:document.querySelectorAll(t);for(let t=0;t<n.length;t+=1)o.addToCollection(n[t],e,i||n[t].id);if(!o.collection.length)return!1;o._init()},getItem(t){return"number"==typeof t?this.collection[t].$initializedEl:this.collection.find((e=>e.id===t)).$initializedEl},addToCollection(t,e,i){this.collection.push({$el:t,id:i||null,options:Object.assign({},this.defaults,t.hasAttribute(this.dataAttributeName)?JSON.parse(t.getAttribute(this.dataAttributeName)):{},e)})},_init:function(){const t=this;for(let e=0;e<t.collection.length;e+=1){let i,o,n;t.collection[e].hasOwnProperty("$initializedEl")||(i=t.collection[e].$el,o=t.collection[e].options,n=i,o.appendTo&&(o.appendTo=document.querySelector(o.appendTo)),n instanceof HTMLInputElement||(n=i.querySelector(".flatpickr-input")),n&&(i.style.width=12*n.value.length+"px"),t.collection[e].$initializedEl=flatpickr(i,o))}}}
/*
* Dropzone wrapper
* @version: 3.0.1 (Wed, 28 Jul 2021)
* @requires: dropzone v5.5.0
* @author: HtmlStream
* @event-namespace: .HSCore.components.HSDropzone
* @license: Htmlstream Libraries (https://htmlstream.com/licenses)
* Copyright 2021 Htmlstream
*/,HSCore.components.HSDropzone={collection:[],dataAttributeName:"data-hs-dropzone-options",defaults:{url:"https://httpbin.org/anything",thumbnailWidth:300,thumbnailHeight:300,previewTemplate:'<div class="col h-100 mb-4">    <div class="dz-preview dz-file-preview">      <div class="d-flex justify-content-end dz-close-icon">        <small class="bi-x" data-dz-remove></small>      </div>      <div class="dz-details d-flex">        <div class="dz-img flex-shrink-0">         <img class="img-fluid dz-img-inner" data-dz-thumbnail>        </div>        <div class="dz-file-wrapper flex-grow-1">         <h6 class="dz-filename">          <span class="dz-title" data-dz-name></span>         </h6>         <div class="dz-size" data-dz-size></div>        </div>      </div>      <div class="dz-progress progress">        <div class="dz-upload progress-bar bg-success" role="progressbar" style="width: 0" aria-valuenow="0" aria-valuemin="0" aria-valuemax="100" data-dz-uploadprogress></div>      </div>      <div class="d-flex align-items-center">        <div class="dz-success-mark">          <span class="bi-check-lg"></span>        </div>        <div class="dz-error-mark">          <span class="bi-x-lg"></span>        </div>        <div class="dz-error-message">          <small data-dz-errormessage></small>        </div>      </div>    </div></div>'},init(t,e,i){const o=this;let n;n=t instanceof HTMLElement?[t]:t instanceof Object?t:document.querySelectorAll(t);for(let t=0;t<n.length;t+=1)o.addToCollection(n[t],e,i||n[t].id);if(!o.collection.length)return!1;o._init()},addToCollection(t,e,i){const o=this;this.collection.push({$el:t,id:i||null,options:Object.assign({},o.defaults,t.hasAttribute(o.dataAttributeName)?JSON.parse(t.getAttribute(o.dataAttributeName)):{},e)})},getItems(){const t=this;let e=[];for(let i=0;i<t.collection.length;i+=1)e.push(t.collection[i].$initializedEl);return e},getItem(t){return"number"==typeof t?this.collection[t].$initializedEl:this.collection.find((e=>e.id===t)).$initializedEl},_init(){const t=this;for(let e=0;e<t.collection.length;e+=1){let i,o;t.collection[e].hasOwnProperty("$initializedEl")||(i=t.collection[e].options,o=t.collection[e].$el,t.collection[e].$initializedEl=new Dropzone(o,i))}}}
/*
* HSSortable Plugin
* @version: 3.0.0 (Thu, 14 Jul 2021)
* @requires: Sortable v1.14.0
* @author: HtmlStream
* @event-namespace: .HSSortable
* @license: Htmlstream Libraries (https://htmlstream.com/)
* Copyright 2021 Htmlstream
*/,HSCore.components.HSSortable={collection:[],dataAttributeName:"data-hs-sortable-options",defaults:{zoomOnScroll:!1},init:function(t,e,i){const o=this;let n;n=t instanceof HTMLElement?[t]:t instanceof Object?t:document.querySelectorAll(t);for(let t=0;t<n.length;t+=1)o.addToCollection(n[t],e,i||n[t].id);if(!o.collection.length)return!1;o._init()},addToCollection(t,e,i){this.collection.push({$el:t,id:i||null,options:Object.assign({},this.defaults,t.hasAttribute(this.dataAttributeName)?JSON.parse(t.getAttribute(this.dataAttributeName)):{},e)})},getItems(){const t=this;let e=[];for(let i=0;i<t.collection.length;i+=1)e.push(t.collection[i].$initializedEl);return e},getItem(t){return this.collection[t].$initializedEl},_init:function(){const t=this;for(let e=0;e<t.collection.length;e+=1)t.collection[e].hasOwnProperty("$initializedEl")||(t.collection[e].$initializedEl=new Sortable(t.collection[e].$el,t.collection[e].options))}};const validators={"data-hs-validation-equal-field":t=>{const e=document.querySelector(t.getAttribute("data-hs-validation-equal-field"));t.addEventListener("input",(i=>{e.value.toString().toLocaleLowerCase()!==i.target.value.toString().toLocaleLowerCase()?t.setCustomValidity("qual-field"):t.setCustomValidity(""),HSBsValidation.updateFieldStete(t)})),e.addEventListener("input",(e=>{t.value.toString().toLocaleLowerCase()!==e.target.value.toString().toLocaleLowerCase()?t.setCustomValidity("qual-field"):t.setCustomValidity(""),HSBsValidation.updateFieldStete(t)}))}},HSBsValidation={init(t,e){var i=document.querySelectorAll(t);return Array.prototype.slice.call(i).forEach((t=>{for(const e in validators)Array.prototype.slice.call(t.querySelectorAll(`[${e}]`)).forEach(validators[e]);this.addVlidationListners(t.elements),t.addEventListener("submit",(i=>{t.checkValidity()?this.onSubmit({event:i,form:t,options:e}):(i.preventDefault(),i.stopPropagation(),this.checkFieldsState(t.elements)),t.classList.add("was-validated")}),!1)})),this},addVlidationListners(t){Array.prototype.slice.call(t).forEach((t=>{const e=t.closest("[data-hs-validation-validate-class]");e&&(t.addEventListener("input",(t=>this.updateFieldStete(t.target))),t.addEventListener("focus",(t=>e.classList.add("focus"))),t.addEventListener("blur",(t=>e.classList.remove("focus"))))}))},checkFieldsState(t){Array.prototype.slice.call(t).forEach((t=>this.updateFieldStete(t)))},updateFieldStete(t){const e=t.closest("[data-hs-validation-validate-class]");e&&(t.checkValidity()?(e.classList.add("is-valid"),e.classList.remove("is-invalid")):(e.classList.add("is-invalid"),e.classList.remove("is-valid")))},onSubmit:t=>!(!t.options||"function"!=typeof t.options.onSubmit)&&t.options.onSubmit(t)}
/*
* Chart.js wrapper
* @version: 3.0.0 (Mon, 25 Nov 2021)
* @requires: Chart.js v2.8.0
* @author: HtmlStream
* @event-namespace: .HSCore.components.HSCharJS
* @license: Htmlstream Libraries (https://htmlstream.com/licenses)
* Copyright 2021 Htmlstream
*/;
/*
* Leaflet wrapper
* @version: 2.0.0 (Sat, 22 May 2021)
* @requires: Leafletjs v1.6.0
* @author: HtmlStream
* @event-namespace: .HSCore.components.HSLeaflet
* @license: Htmlstream Libraries (https://htmlstream.com/licenses)
* Copyright 2021 Htmlstream
*/
function isObject(t){return t&&"object"==typeof t&&!Array.isArray(t)}function mergeDeep(t,...e){if(!e.length)return t;const i=e.shift();if(isObject(t)&&isObject(i))for(const e in i)isObject(i[e])?(t[e]||Object.assign(t,{[e]:{}}),mergeDeep(t[e],i[e])):Object.assign(t,{[e]:i[e]});return mergeDeep(t,...e)}HSCore.components.HSChartJS={dataAttributeName:"data-hs-chartjs-options",defaults:{defaultThemeKey:"default",options:{responsive:!0,maintainAspectRatio:!1,plugins:{legend:{display:!1},tooltip:{enabled:!1,mode:"nearest",prefix:"",postfix:"",hasIndicator:!1,indicatorWidth:"8px",indicatorHeight:"8px",transition:"0.2s",lineWithLineColor:null,yearStamp:!0}},gradientPosition:{x0:0,y0:0,x1:0,y1:0}}},collection:[],themes:{},init(t,e,i){const o=this;let n;n=t instanceof HTMLElement?[t]:t instanceof Object?t:document.querySelectorAll(t);for(let t=0;t<n.length;t+=1)o.addToCollection(n[t],e,i||n[t].id);if(!o.collection.length)return!1;window.addEventListener("on-hs-appearance-change",(t=>this._updateTheme(t.detail))),o._init()},addToCollection(t,e,i){this.collection.push({$el:t,id:i||null,options:e||{},dataSettings:t.hasAttribute(this.dataAttributeName)?JSON.parse(t.getAttribute(this.dataAttributeName)):{}})},addTheme(t,e,i){const o=t;this.themes.hasOwnProperty(o)?this.themes[o][e]=i:this.themes[o]={[e]:i}},getTheme(t,e){return this.themes[t]&&this.themes[t][e]||console.error(`The element '${t}' or theme '${e}' was not found in the HSChartjs theme list.`),this.themes[t][e]},getItems(){const t=this;let e=[];for(let i=0;i<t.collection.length;i+=1)e.push(t.collection[i].$initializedEl);return e},getItem(t){return"number"==typeof t?this.collection[t].$initializedEl:this.collection.find((e=>e.id===t)).$initializedEl},lineMode(t,e){"line"===e.type&&e.data.datasets.forEach((i=>{if(Array.isArray(i.backgroundColor)){var o=t.getContext("2d").createLinearGradient(e.options.gradientPosition.x0,e.options.gradientPosition.y0,e.options.gradientPosition.x1,e.options.gradientPosition.y1);for(let t=0;t<i.backgroundColor.length;t++)o.addColorStop(t,i.backgroundColor[t]);i.backgroundColor=o,i.fill=!0}}))},extendChart(t,e,i){function o(t){let e=t.getBoundingClientRect();return{top:e.top+window.scrollY,left:e.left+window.scrollX}}if("line"===e.type&&e.options.plugins.tooltip.lineMode){var n=i.draw;i.draw=function(t){if(n.call(this,t),this.tooltip._active&&this.tooltip._active.length){this.tooltip._active[0];let t=this.canvas,i=document.querySelector(".hs-chartjs-tooltip-wrap"),n=document.querySelector("#chartjsTooltipLine"),l=e.options.plugins.tooltip.lineWithLineTopOffset>=0?e.options.plugins.tooltip.lineWithLineTopOffset:7,s=e.options.plugins.tooltip.lineWithLineBottomOffset>=0?e.options.plugins.tooltip.lineWithLineBottomOffset:43,a=document.querySelector("#chartjsTooltip");if(a&&!document.querySelector("#chartjsTooltip #chartjsTooltipLine")&&a.insertAdjacentHTML("beforeend",'<div id="chartjsTooltipLine"></div>'),!i)return;i.style.top=t.clientHeight/2-i.clientHeight+"px",n&&(n.style.top=`${-(o(i).top-o(t).top)+l}px`);let r=document.querySelector(".hs-chartjs-tooltip");if(i.offsetLeft+i.clientWidth>t.offsetLeft+t.clientWidth-100){if(!r)return;r.classList.remove("hs-chartjs-tooltip-right"),r.classList.add("hs-chartjs-tooltip-left")}else{if(!r)return;r.classList.add("hs-chartjs-tooltip-right"),r.classList.remove("hs-chartjs-tooltip-left")}n&&(n.style.position="absolute",n.style.width="2px",n.style.height=t.clientHeight-s+"px",n.style.backgroundColor=e.options.plugins.tooltip.lineWithLineColor,n.style.left=0,n.style.transform="translateX(-50%)",n.style.zIndex=0,n.style.transition="100ms")}},t.addEventListener("touchstart",(()=>{const e=document.getElementById("chartjsTooltip");e&&e.previousElementSibling!==t&&e.remove()})),t.addEventListener("mouseleave",(()=>{let t=document.querySelector("#lineTooltipChartJSStyles");t&&t.setAttribute("media","max-width: 1px")})),t.addEventListener("mouseenter",(()=>{let t=document.querySelector("#lineTooltipChartJSStyles");t&&t.removeAttribute("media")})),t.addEventListener("mousemove",(e=>{let i=document.querySelector(".hs-chartjs-tooltip-wrap"),n=o(t);i&&e.pageY-n.top>i.clientHeight/2&&e.pageY-n.top+i.offsetHeight/2<t.clientHeight&&(document.querySelector(".hs-chartjs-tooltip").style.top=e.pageY+i.clientHeight/2-(n.top+t.clientHeight/2)+"px")}))}},extendOptions(t,e,i,o){const n=(t,e,i=!1)=>{t=(t=>{let e;try{e=JSON.parse(JSON.stringify(t))}catch(i){e=Object.assign({},t)}return e})(t);const o=t=>t&&"object"==typeof t;return o(t)&&o(e)?(Object.keys(e).forEach((l=>{const s=t[l],a=e[l];Array.isArray(s)&&Array.isArray(a)?i?(t[l]=s.map(((t,e)=>a.length<=e?t:n(t,a[e],i))),a.length>s.length&&(t[l]=t[l].concat(a.slice(s.length)))):t[l]=s.concat(a):o(s)&&o(a)?t[l]=n(Object.assign({},s),a,i):t[l]=a})),t):e};let l=n(this.defaults,n(i,e,!0),!0);l=this._setTheme(l,t.id||o);n(l,"line"===l.type?{options:{scales:{y:{ticks:{callback:(t,e,i)=>{var o=l.options.scales.y.ticks.metric||"",n=l.options.scales.y.ticks.prefix||"",s=l.options.scales.y.ticks.postfix||"";return o&&t>100&&(t=t<1e6?t/1e3+"k":t/1e6+"kk"),n&&s?n+t+s:n?n+t:s?t+s:t}}}},elements:{line:{borderWidth:3},point:{pointStyle:"circle",radius:5,hoverRadius:7,borderWidth:3,hoverBorderWidth:3,backgroundColor:"#ffffff",hoverBackgroundColor:"#ffffff"}}}}:"bar"===i.type?{options:{scales:{y:{ticks:{callback:(t,e,i)=>{var o=l.options.scales.y.ticks.metric,n=l.options.scales.y.ticks.prefix,s=l.options.scales.y.ticks.postfix;return o&&t>100&&(t=t<1e6?t/1e3+"k":t/1e6+"kk"),n&&s?n+t+s:n?n+t:s?t+s:t}}}}}}:{},!0);return l.options.plugins.tooltip?n(l,{options:{plugins:{tooltip:{external:function(e){var i=document.getElementById("chartjsTooltip");if(i||((i=document.createElement("div")).id="chartjsTooltip",i.style.opacity=0,i.classList.add("hs-chartjs-tooltip-wrap"),i.innerHTML='<div class="hs-chartjs-tooltip"></div>',this.options.lineMode?t.closest(".chartjs-custom").appendChild(i):document.body.appendChild(i)),0===e.tooltip.opacity)return i.style.opacity=0,void i.parentNode.removeChild(i);if(i.classList.remove("above","below","no-transform"),e.tooltip.yAlign?i.classList.add(e.tooltip.yAlign):i.classList.add("no-transform"),e.tooltip.body){var o=e.tooltip.title||[],n=e.tooltip.body.map((function(t){return t.lines})),l=new Date,s='<header class="hs-chartjs-tooltip-header">';o.forEach((t=>{s+=this.options.yearStamp?t+", "+l.getFullYear():t})),s+='</header><div class="hs-chartjs-tooltip-body">',n.forEach(((t,i)=>{s+="<div>";var o=t[0],n=o,l=e.tooltip.labelColors[i].backgroundColor instanceof Object?e.tooltip.labelColors[i].borderColor:e.tooltip.labelColors[i].backgroundColor;s+=(this.options.hasIndicator?'<span class="d-inline-block rounded-circle me-1" style="width: '+this.options.indicatorWidth+"; height: "+this.options.indicatorHeight+"; background-color: "+l+'"></span>':"")+this.options.prefix+(o.length>3?n:t)+this.options.postfix,s+="</div>"})),s+="</div>",i.querySelector(".hs-chartjs-tooltip").innerHTML=s}var a=this._chart.canvas.getBoundingClientRect();i.style.opacity=1,this.options.lineMode?i.style.left=e.tooltip.caretX+"px":i.style.left=a.left+window.pageXOffset+e.tooltip.caretX-i.offsetWidth/2-3+"px",this.options.lineMode||(i.style.top=a.top+window.pageYOffset+e.tooltip.caretY-i.offsetHeight-25+"px"),i.style.pointerEvents="none",i.style.transition=this.options.transition}}}}},!0):l},destroy(t){let e=this._getSubject(t);if(e){e.$initializedEl.destroy();const i=e.$el.cloneNode(!0);if(e.$el.parentNode.replaceChild(i,e.$el),"number"==typeof t)this.collection.splice(t,1);else{const e=this.collection.findIndex((e=>e.id===t));this.collection.splice(e,1)}}},_getSubject(t){let e=null;return e="number"==typeof t?this.collection[t]:this.collection.find((e=>e.id===t)),e},_setTheme(t,e){const i=(t,e,o=!1)=>{t=(t=>{let e;try{e=JSON.parse(JSON.stringify(t))}catch(i){e=Object.assign({},t)}return e})(t);const n=t=>t&&"object"==typeof t;return n(t)&&n(e)?(Object.keys(e).forEach((l=>{const s=t[l],a=e[l];Array.isArray(s)&&Array.isArray(a)?o?(t[l]=s.map(((t,e)=>a.length<=e?t:i(t,a[e],o))),a.length>s.length&&(t[l]=t[l].concat(a.slice(s.length)))):t[l]=s.concat(a):n(s)&&n(a)?t[l]=i(Object.assign({},s),a,o):t[l]=a})),t):e};let o=localStorage.getItem("hs_theme")||window.hs_config.themeAppearance.layoutSkin;return"auto"===o&&(o=window.matchMedia("(prefers-color-scheme: dark)").matches?"dark":"default"),this.themes[e]&&o!==t.defaultThemeKey?i(t,this.themes[e][o],!0):t},_updateTheme(t){Object.keys(this.themes).forEach((t=>{let e=this.collection.findIndex((e=>e.id===t));e=e<0?t:e;const i=this.collection[e];if(i){let e=this.extendOptions(i.$el,i.options,i.dataSettings,t);i.$initializedEl.data=e.data,i.$initializedEl.options=e.options,this.lineMode(i.$el,e),i.$initializedEl.update()}}))},_init:function(t,e){const i=this;for(let t=0;t<i.collection.length;t+=1){let e,o;i.collection[t].hasOwnProperty("$initializedEl")||(o=i.collection[t].$el,e=i.extendOptions(o,i.collection[t].options,i.collection[t].dataSettings,t),i.lineMode(o,e),i.collection[t].$initializedEl=new Chart(o,e),i.extendChart(o,e,i.collection[t].$initializedEl))}}}
/*
* HSJsVectorMap Plugin
* @version: 3.0.0 (Mon, 02 July 2021)
* @requires: jsVectorMap v2.0.4
* @author: HtmlStream
* @event-namespace: .HSJsVectorMap
* @license: Htmlstream Libraries (https://htmlstream.com/)
* Copyright 2021 Htmlstream
*/,HSCore.components.HSJsVectorMap={collection:[],dataAttributeName:"data-hs-js-vector-map-options",defaults:{zoomOnScroll:!1},init:function(t,e,i){const o=this;let n;n=t instanceof HTMLElement?[t]:t instanceof Object?t:document.querySelectorAll(t);for(let t=0;t<n.length;t+=1)o.addToCollection(n[t],e,i||n[t].id);if(!o.collection.length)return!1;o._init()},addToCollection(t,e,i){this.collection.push({$el:t,id:i||null,options:Object.assign({},this.defaults,t.hasAttribute(this.dataAttributeName)?JSON.parse(t.getAttribute(this.dataAttributeName)):{},e)})},getItems(){const t=this;let e=[];for(let i=0;i<t.collection.length;i+=1)e.push(t.collection[i].$initializedEl);return e},getItem(t){return this.collection[t].$initializedEl},_init:function(){const t=this;for(let e=0;e<t.collection.length;e+=1){let i;if(t.collection[e].hasOwnProperty("$initializedEl"))continue;i=t.collection[e];const o=Object.assign({},{selector:i.$el},i.options);t.collection[e].$initializedEl=new jsVectorMap(o),window.addEventListener("resize",(()=>{t.collection[e].$initializedEl.updateSize()}))}}},
/*
* Chart.js wrapper
* @version: 3.0.0 (Mon, 27 Jun 2021)
* @requires: Chart.js v2.8.0
* @author: HtmlStream
* @event-namespace: .HSCore.components.HSCharJS
* @license: Htmlstream Libraries (https://htmlstream.com/licenses)
* Copyright 2021 Htmlstream
*/
HSCore.components.HSChartMatrixJS={dataAttributeName:"data-hs-chartjs-options",defaults:{type:"matrix",options:{animation:{duration:0},responsive:!0,maintainAspectRatio:!1,plugins:{legend:!1,tooltip:{enabled:!1,mode:"nearest"}},gradientPosition:{x0:0,y0:0,x1:0,y1:0}}},defaultThemeKey:"default",collection:[],themes:{},init(t,e,i){const o=this;let n;n=t instanceof HTMLElement?[t]:t instanceof Object?t:document.querySelectorAll(t);for(let t=0;t<n.length;t+=1)o.addToCollection(n[t],e,i||n[t].id);if(!o.collection.length)return!1;window.addEventListener("on-hs-appearance-change",(t=>this._updateTheme(t.detail))),o._init()},addToCollection(t,e,i){this.collection.push({$el:t,id:i||null,options:e||{},dataSettings:t.hasAttribute(this.dataAttributeName)?JSON.parse(t.getAttribute(this.dataAttributeName)):{}})},addTheme(t,e,i){const o=t;this.themes.hasOwnProperty(o)?this.themes[o][e]=i:this.themes[o]={[e]:i}},getTheme(t,e){return this.themes[t]&&this.themes[t][e]||console.error(`The element '${t}' or theme '${e}' was not found in the HSChartjs theme list.`),this.themes[t][e]},getItems(){const t=this;let e=[];for(let i=0;i<t.collection.length;i+=1)e.push(t.collection[i].$initializedEl);return e},getItem(t){return"number"==typeof t?this.collection[t].$initializedEl:this.collection.find((e=>e.id===t)).$initializedEl},_init:function(t,e){const i=this;for(let t=0;t<i.collection.length;t+=1){let e,o;i.collection[t].hasOwnProperty("$initializedEl")||(o=i.collection[t].$el,e=i.extendOptions(o,i.collection[t].options,i.collection[t].dataSettings,t),i.backgroundColor(e),i.legend(e),i.tooltip(),i.collection[t].$initializedEl=new Chart(o,e))}},backgroundColor(t){t.options.hasOwnProperty("matrixBackgroundColord")&&t.data.datasets.forEach((function(e){e.backgroundColor=function(e){var i=e.dataset.data[e.dataIndex].v,o=((t.options.matrixBackgroundColord.hasOwnProperty("additionToValue")?t.options.matrixBackgroundColord.additionToValue:5)+i)/t.options.matrixBackgroundColord.accent;return 0==i.toFixed()&&t.options.matrixBackgroundColord.hasOwnProperty("nullColor")?Chart.helpers.color(t.options.matrixBackgroundColord.nullColor).rgbString():Chart.helpers.color(t.options.matrixBackgroundColord.color).alpha(o).rgbString()}}))},legend(t){if(t.options.hasOwnProperty("matrixLegend")){for(var e=t.data.datasets[0].data[0].v,i=t.data.datasets[0].data[0].v,o=1;o<t.data.datasets[0].data.length;o++)t.data.datasets[0].data[o].v<e&&(e=t.data.datasets[0].data[o].v),t.data.datasets[0].data[o].v>i&&(i=t.data.datasets[0].data[o].v);e=e.toFixed(),i=i.toFixed();var n=[],l=t.options.matrixLegend.hasOwnProperty("stepSize")?t.options.matrixLegend.stepSize:i/10,s=t.options.matrixBackgroundColord.hasOwnProperty("additionToValue")?t.options.matrixBackgroundColord.additionToValue:5,a=document.querySelector(t.options.matrixLegend.container);a.classList.add("hs-chartjs-matrix-legend"),a.insertAdjacentHTML("beforeend",`<li class="hs-chartjs-matrix-legend-min">${e}</li>`);for(o=0;o<i;){var r=(s+o)/t.options.matrixBackgroundColord.accent;n.push('<li class="hs-chartjs-matrix-legend-item" style="background-color: '+Chart.helpers.color(t.options.matrixBackgroundColord.color).alpha(r).rgbString()+'"></li>'),o+=l}a.insertAdjacentHTML("beforeend",n.join("")),t.options.matrixLegend.metric&&i>100&&(i=i<1e6?i/1e3+"k":i/1e6+"kk"),a.insertAdjacentHTML("beforeend",`<li class="hs-chartjs-matrix-legend-max">${i}</li>`)}},tooltip(){window.addEventListener("mousemove",(function(t){if(!t.target.closest("canvas")){let t=document.querySelector(".hs-chartjs-tooltip-matrix");t&&t.parentElement.removeChild(t)}}))},extendOptions(t,e,i,o){const n=(t,e,i=!1)=>{t=(t=>{let e;try{e=JSON.parse(JSON.stringify(t))}catch(i){e=Object.assign({},t)}return e})(t);const o=t=>t&&"object"==typeof t;return o(t)&&o(e)?(Object.keys(e).forEach((l=>{const s=t[l],a=e[l];Array.isArray(s)&&Array.isArray(a)?i?(t[l]=s.map(((t,e)=>a.length<=e?t:n(t,a[e],i))),a.length>s.length&&(t[l]=t[l].concat(a.slice(s.length)))):t[l]=s.concat(a):o(s)&&o(a)?t[l]=n(Object.assign({},s),a,i):t[l]=a})),t):e};let l=n(this.defaults,n(i,e,!0),!0);return l.options=this._setTheme(l.options,t.id||o),l.options.plugins.tooltip.external=function(t){var e=document.getElementById("chartjsTooltip");if(e||((e=document.createElement("div")).id="chartjsTooltip",e.style.opacity=0,e.classList.add("hs-chartjs-tooltip-wrap"),e.classList.add("hs-chartjs-tooltip-matrix"),e.innerHTML='<div class="hs-chartjs-tooltip"></div>',document.body.appendChild(e)),"matrix"!==l.type&&0===t.tooltip.opacity)return e.style.opacity=0,void e.remove();if(e.classList.remove("above","below","no-transform"),t.tooltip.yAlign?e.classList.add(t.tooltip.yAlign):e.classList.add("no-transform"),t.tooltip.body){var i=t.tooltip.title||[],o=t.tooltip.body.map((function(t){return t.lines})),n=new Date,s='<header class="hs-chartjs-tooltip-header">';i.forEach((function(t){s+=t+", "+n.getFullYear()})),s+='</header><div class="hs-chartjs-tooltip-body">',o.forEach((function(e,i){s+="<div>";var o=e[0],n=o,a=t.tooltip.labelColors[i].backgroundColor instanceof Object?t.tooltip.labelColors[i].borderColor:t.tooltip.labelColors[i].backgroundColor;s+=(l.options.plugins.tooltip.hasIndicator?'<span class="d-inline-block rounded-circle mr-1" style="width: '+l.options.plugins.tooltip.indicatorWidth+"; height: "+l.options.plugins.tooltip.indicatorHeight+"; background-color: "+a+'"></span>':"")+(o.length>3?n:e),s+="</div>"})),s+="</div>",e.querySelector(".hs-chartjs-tooltip").innerHTML=s}var a=this._chart.canvas.getBoundingClientRect();e.style.opacity=1,e.style.left=a.left+window.pageXOffset+t.tooltip.caretX-e.offsetWidth/2-3+"px",e.style.top=a.top+window.pageYOffset+t.tooltip.caretY-e.offsetHeight-25+"px",e.style.pointerEvents="none",e.style.transition=l.options.plugins.tooltip.transition},l},_setTheme(t,e){const i=(t,e,o=!1)=>{t=(t=>{let e;try{e=JSON.parse(JSON.stringify(t))}catch(i){e=Object.assign({},t)}return e})(t);const n=t=>t&&"object"==typeof t;return n(t)&&n(e)?(Object.keys(e).forEach((l=>{const s=t[l],a=e[l];Array.isArray(s)&&Array.isArray(a)?o?(t[l]=s.map(((t,e)=>a.length<=e?t:i(t,a[e],o))),a.length>s.length&&(t[l]=t[l].concat(a.slice(s.length)))):t[l]=s.concat(a):n(s)&&n(a)?t[l]=i(Object.assign({},s),a,o):t[l]=a})),t):e};let o=localStorage.getItem("hs_theme")||window.hs_config.themeAppearance.layoutSkin;return"auto"===o&&(o=window.matchMedia("(prefers-color-scheme: dark)").matches?"dark":"default"),this.themes[e]&&o!==this.defaultThemeKey?i(t,this.themes[e][o].options,!0):t},_updateTheme(t){Object.keys(this.themes).forEach((t=>{let e=this.collection.findIndex((e=>e.id===t));e=e<0?t:e;const i=this.collection[e];if(i){let e=this.extendOptions(i.$el,i.options,i.dataSettings,t);i.$initializedEl.data=e.data,i.$initializedEl.options=e.options,i.$initializedEl.update()}}))}}
/*
* Quill wrapper
* @version: 2.0.0 (Wed, 28 Jul 2021)
* @requires: quill v1.3.7
* @author: HtmlStream
* @event-namespace: .HSCore.components.HSQuill
* @license: Htmlstream Libraries (https://htmlstream.com/licenses)
* Copyright 2021 Htmlstream
*/,HSCore.components.HSQuill={collection:[],dataAttributeName:"data-hs-quill-options",defaults:{theme:"snow",attach:!1},init(t,e,i){const o=this;let n;n=t instanceof HTMLElement?[t]:t instanceof Object?t:document.querySelectorAll(t);for(let t=0;t<n.length;t+=1)o.addToCollection(n[t],e,i||n[t].id);if(!o.collection.length)return!1;o._init()},addToCollection(t,e,i){const o=this;this.collection.push({$el:t,id:i||null,options:Object.assign({},o.defaults,t.hasAttribute(o.dataAttributeName)?JSON.parse(t.getAttribute(o.dataAttributeName)):{},e)})},getItems(){const t=this;let e=[];for(let i=0;i<t.collection.length;i+=1)e.push(t.collection[i].$initializedEl);return e},getItem(t){return"number"==typeof t?this.collection[t].$initializedEl:this.collection.find((e=>e.id===t)).$initializedEl},_init(){const t=this;for(let e=0;e<t.collection.length;e+=1){let i,o;t.collection[e].hasOwnProperty("$initializedEl")||(i=t.collection[e].options,o=t.collection[e].$el,t.collection[e].$initializedEl=new Quill(o,i),o.classList.add("hs-quill-initialized"),this.toolbarBottom(i,t.collection[e].$initializedEl))}},toolbarBottom:function(t,e){if(t.toolbarBottom){const i=e.container,o=i.previousElementSibling;if(i.parentElement.classList.add("ql-toolbar-bottom"),t.attach){document.querySelector(t.attach).addEventListener("shown.bs.modal",(()=>{i.style.paddingBottom=o.offsetHeight+"px"}))}else i.style.paddingBottom=o.offsetHeight+"px";o.style.position="absolute",o.style.width="100%",o.style.bottom=0}}},HSCore.components.HSLeaflet={init:function(t,e){if(this.$el="string"==typeof t?document.querySelector(t):t,this.$el){this.defaults={map:{coords:[51.505,-.09],zoom:13},layer:{token:"https://api.mapbox.com/styles/v1/{id}/tiles/{z}/{x}/{y}?access_token=pk.eyJ1IjoibWFwYm94IiwiYSI6ImNpejY4NXVycTA2emYycXBndHRqcmZ3N3gifQ.rJcFIG214AriISLbB6B5aw",id:"mapbox/streets-v11",maxZoom:18},marker:null};var i=this.$el.hasAttribute("data-hs-leaflet-options")?JSON.parse(this.$el.getAttribute("data-hs-leaflet-options")):{};this.settings=mergeDeep(this.defaults,{...e,...i});var o=L.map(this.$el,this.settings.map);if(o.setView(this.settings.map.coords,this.settings.map.zoom),L.tileLayer(this.settings.layer.token,this.settings.layer).addTo(o),this.settings.marker)for(var n=0;n<this.settings.marker.length;n++){this.settings.marker[n].icon=L.icon(this.settings.marker[n].icon);let t=L.marker(this.settings.marker[n].coords,this.settings.marker[n]).addTo(o);this.settings.marker[n].popup&&t.bindPopup(this.settings.marker[n].popup.text)}return o}}},
/*  * Circles wrapper
* @version: 2.0.0 (Mon, 25 Nov 2019)
* @requires: jQuery v3.0 or later, circles v0.0.6, appear.js v1.0.3
* @author: HtmlStream
* @event-namespace: .HSCore.components.HSCircles
* @license: Htmlstream Libraries (https://htmlstream.com/licenses)
* Copyright 2020 Htmlstream
*/
HSCore.components.HSCircles={dataAttributeName:"data-hs-circles-options",defaults:{radius:80,duration:1e3,wrpClass:"circles-wrap",colors:["#3170e5","#e7eaf3"],bounds:0,debounce:0,rtl:!1,isHideValue:!1,dividerSpace:null,isViewportInit:!1,fgStrokeLinecap:null,fgStrokeMiterlimit:null,additionalTextType:null,additionalText:null,textFontSize:null,textFontWeight:null,textColor:null,secondaryText:null,secondaryTextFontWeight:null,secondaryTextFontSize:null,secondaryTextColor:null},collection:[],init(t,e,i){const o=this;let n;n=t instanceof HTMLElement?[t]:t instanceof Object?t:document.querySelectorAll(t);for(let t=0;t<n.length;t+=1)o.addToCollection(n[t],e,i||n[t].id);if(!o.collection.length)return!1;o._init()},setId:function(t,e){t.setAttribute("id",e.id)},setTextStyles:function(t,e,i){t.querySelectorAll('[class="'+(e.textClass||i._textClass)+'"]').forEach((t=>{t.style.fontSize=`${e.textFontSize}px`,t.style.fontWeight=e.textFontWeight,t.style.color=e.textColor,t.style.lineHeight="normal",t.style.height="auto",t.style.top="",t.style.left=""}))},setRtl:function(t,e){t.querySelectorAll("svg").forEach((t=>{t.style.transform="transform"}))},setStrokeLineCap:function(t,e,i){t.querySelectorAll('[class="'+i._valClass+'"]').forEach((t=>{t.setAttribute("stroke-linecap",e.fgStrokeLinecap)}))},setStrokeMiterLimit:function(t,e,i){t.querySelectorAll('[class="'+i._valClass+'"]').forEach((t=>{t.setAttribute("stroke-miterlimit",e.fgStrokeMiterlimit)}))},initAppear:function(t,e,i,o){appear({bounds:e.bounds,debounce:e.debounce,elements:()=>document.querySelectorAll("#"+e.id),appear:function(t){i.update(e.mutatedValue)}})},addToCollection(t,e,i){const o=this,n=Object.assign({},o.defaults,t.hasAttribute(o.dataAttributeName)?JSON.parse(t.getAttribute(o.dataAttributeName)):{},e);this.collection.push({$el:t,options:Object.assign({},{id:"circle-"+Math.random().toString().slice(2),value:0,text:function(t){return"iconic"===n.type?n.icon:"prefix"===n.additionalTextType?n.secondaryText?(n.additionalText||"")+(n.isHideValue?"":t)+'<div style="margin-top: '+(n.dividerSpace/2+"px"||"0")+"; margin-bottom: "+(n.dividerSpace/2+"px"||"0")+';"></div><div style="font-weight: '+n.secondaryTextFontWeight+"; font-size: "+n.secondaryTextFontSize+"px; color: "+n.secondaryTextColor+';">'+n.secondaryText+"</div>":(n.additionalText||"")+(n.isHideValue?"":t):n.secondaryText?(n.isHideValue?"":t)+(n.additionalText||"")+'<div style="margin-top: '+(n.dividerSpace/2+"px"||"0")+"; margin-bottom: "+(n.dividerSpace/2+"px"||"0")+';"></div><div style="font-weight: '+n.secondaryTextFontWeight+"; font-size: "+n.secondaryTextFontSize+"px; color: "+n.secondaryTextColor+';">'+n.secondaryText+"</div>":(n.isHideValue?"":t)+(n.additionalText||"")}},n),id:i||null})},getItems(){const t=this;let e=[];for(let i=0;i<t.collection.length;i+=1)e.push(t.collection[i].$initializedEl);return e},getItem(t){return"number"==typeof t?this.collection[t].$initializedEl:this.collection.find((e=>e.id===t)).$initializedEl},_init(){const t=this;for(let e=0;e<t.collection.length;e+=1){let i,o;t.collection[e].hasOwnProperty("$initializedEl")||(i=t.collection[e].options,o=t.collection[e].$el,i.isViewportInit&&(i.mutatedValue=i.value,i.value=0),t.setId(o,i),t.collection[e].$initializedEl=Circles.create(i),t.setTextStyles(o,i,t.collection[e].$initializedEl),i.rtl&&t.setRtl(o,i),i.fgStrokeLinecap&&t.setStrokeLineCap(o,i,t.collection[e].$initializedEl),i.fgStrokeMiterlimit&&t.setStrokeMiterLimit(o,i,t.collection[e].$initializedEl),i.isViewportInit&&t.initAppear(o,i,t.collection[e].$initializedEl))}}},HSCore.components.HSList={collection:[],dataAttributeName:"data-hs-list-options",defaults:{searchMenu:!1,searchMenuDelay:300,searchMenuOutsideClose:!0,searchMenuInsideClose:!0,clearSearchInput:!0,keyboard:!1,empty:!1},init:function(t,e,i){const o=this;let n;n=t instanceof HTMLElement?[t]:t instanceof Object?t:document.querySelectorAll(t);for(let t=0;t<n.length;t+=1)o.addToCollection(n[t],e,i||n[t].id);return!!o.collection.length&&(o._init(),this)},initializeHover:function(t,e,i){const o=this;var n=t.querySelector(`.${i.searchClass}`),l=!1;n.addEventListener("keydown",(s=>{if(40===s.which)s.preventDefault(),o.searchMenuShow(t,e,i),(a=i.list.querySelector(".active"))?a.nextElementSibling&&((r=a.nextElementSibling).classList.add("active"),l.classList.remove("active"),l=r,i.list.offsetHeight<r.getBoundingClientRect().top&&(i.list.scrollTop=r.getBoundingClientRect().top+i.list.scrollTop)):(l=i.list.firstChild).classList.add("active");else if(38===s.which){var a,r;if(s.preventDefault(),a=i.list.querySelector(".active")){if(a.previousElementSibling)(r=a.previousElementSibling).classList.add("active"),l.classList.remove("active"),l=r,0>r.getBoundingClientRect().top&&(i.list.scrollTop=r.getBoundingClientRect().top+i.list.scrollTop-i.list.offsetHeight)}else(l=i.list.firstChild.parentNode).classList.add("active")}else if(13==s.which&&n.value.length>0){s.preventDefault();const t=l.querySelector("a").getAttribute("href");t&&(window.location=t)}}))},searchMenu:function(t,e,i){const o=this;if(0===t.querySelector(`.${i.searchClass}`).value.length||0===i.visibleItems.length&&!e.empty)return o.helpers.fadeOut(i.list,e.searchMenuDelay),o.helpers.hide(e.empty);o.searchMenuShow(t,e,i)},searchMenuShow:function(t,e,i){const o=this;if(o.helpers.fadeIn(i.list,e.searchMenuDelay),!i.visibleItems.length){var n=o.helpers.show(document.querySelector(e.empty).cloneNode(!0));i.list.innerHTML=n.outerHTML}},searchMenuHide:function(t,e,i){const o=this;var n=t.querySelector(`.${i.searchClass}`);e.searchMenuOutsideClose&&document.addEventListener("click",(()=>{o.helpers.fadeOut(i.list,e.searchMenuDelay),e.clearSearchInput&&(n.value="")})),e.searchMenuInsideClose||i.list.addEventListener("click",(t=>{t.stopPropagation(),e.clearSearchInput&&n.val("")}))},emptyBlock:function(t,e,i){const o=this;if(0===t.querySelector(`.${i.searchClass}`).value.length||0===i.visibleItems.length&&!e.empty)o.helpers.hide(e.empty);else if(o.helpers.fadeIn(i.list,e.searchMenuDelay),!i.visibleItems.length){var n=document.querySelector(e.empty).clone();o.helpers.show(n),i.list.innerHTML=n.outerHTML}},helpers:{fadeIn:(t,e)=>{if(!t||null!==t.offsetParent)return t;t.style.opacity=0,t.style.display="block";var i=+new Date,o=function(){t.style.opacity=+t.style.opacity+(new Date-i)/e,i=+new Date,+t.style.opacity<1&&(window.requestAnimationFrame&&requestAnimationFrame(o)||setTimeout(o,16))};o()},fadeOut:(t,e)=>{if(!t||null===t.offsetParent)return t;if(!e)return t.style.display="none";var i=setInterval((function(){t.style.opacity||(t.style.opacity=1),t.style.opacity>0?t.style.opacity-=.1:(clearInterval(i),t.style.display="none")}),e/10)},hide:t=>((t="object"==typeof t?t:document.querySelector(t))&&(t.style.display="none"),t),show:t=>((t="object"==typeof t?t:document.querySelector(t))&&(t.style.display="block"),t)},addToCollection(t,e,i){const o=this;this.collection.push({$el:t,id:i||null,options:Object.assign({},o.defaults,t.hasAttribute(o.dataAttributeName)?JSON.parse(t.getAttribute(o.dataAttributeName)):{},e)})},_init(){const t=this;for(let e=0;e<t.collection.length;e+=1){let i,o;t.collection[e].hasOwnProperty("$initializedEl")||(i=t.collection[e].$el,o=t.collection[e].options,t.collection[e].$initializedEl=new List(i,o,o.values),o.searchMenu&&t.helpers.hide(t.collection[e].$initializedEl.list),t.collection[e].$initializedEl.on("searchComplete",(()=>{o.searchMenu&&(t.searchMenu(i,o,t.collection[e].$initializedEl),t.searchMenuHide(i,o,t.collection[e].$initializedEl)),!o.searchMenu&&o.empty&&t.emptyBlock(i,o,t.collection[e].$initializedEl)})),o.searchMenu&&o.keyboard&&t.initializeHover(i,o,t.collection[e].$initializedEl))}},getItem(t){return"number"==typeof t?this.collection[t].$initializedEl:this.collection.find((e=>e.id===t)).$initializedEl}}
/*
* Daterangepicker wrapper
* @version: 2.0.0 (Thu, 15 Jul 2021)
* @requires: daterangepicker v3.0.5
* @author: HtmlStream
* @event-namespace: .HSCore.components.HSDaterangepicker
* @license: Htmlstream Libraries (https://htmlstream.com/licenses)
* Copyright 2021 Htmlstream
*/,HSCore.components.HSDaterangepicker={collection:[],dataAttributeName:"data-hs-daterangepicker-options",defaults:{nextArrow:'<i class="tio-chevron-right daterangepicker-custom-arrow"></i>',prevArrow:'<i class="tio-chevron-left daterangepicker-custom-arrow"></i>'},init:function(t,e,i){const o=this;let n;n=t instanceof HTMLElement?[t]:t instanceof Object?t:document.querySelectorAll(t);for(let t=0;t<n.length;t+=1)o.addToCollection(n[t],e,i||n[t].id);if(!o.collection.length)return!1;o._init()},getItem(t){return"number"==typeof t?this.collection[t].$initializedEl:this.collection.find((e=>e.id===t)).$initializedEl},addToCollection(t,e,i){this.collection.push({$el:t,id:i||null,options:Object.assign({},this.defaults,t.hasAttribute(this.dataAttributeName)?JSON.parse(t.getAttribute(this.dataAttributeName)):{},e)})},_init:function(){const t=this;for(let e=0;e<t.collection.length;e+=1){const i=t.collection[e].options,o=t.collection[e].$el;i.disablePrevDates&&(i.minDate=moment().format("MM/DD/YYYY"));const n=$(o).daterangepicker(i);function l(){(i.prevArrow||i.nextArrow)&&($(".daterangepicker .prev").html(i.prevArrow),$(".daterangepicker .next").html(i.nextArrow))}t.collection[e].$initializedEl=n,n.on("showCalendar.daterangepicker",(function(t){l()}))}}};


// End js Theme

const $layouts = document.querySelectorAll('[name="layout"]')
const cutElement = (wrapper) => {
  const $wrapper = document.createElement('div')
  $wrapper.innerHTML = wrapper.children[0].outerHTML

  return $wrapper.children[0]
}

new Promise((resolve, reject) => {
  const settings = {
    skin: HSThemeAppearance.getAppearance() || 'default',
    layout: window.localStorage.getItem('layout') || 'default',
    fluid: window.localStorage.getItem('builderFluidSwitch') || false,
    sidebarNavOptions: window.localStorage.getItem('sidebarNavOptions') || 'pills',
  }

  const checkFluid = function () {
    let $contentContainers;
    if (settings.fluid === 'true') {
      document.querySelectorAll('header .container').forEach(function ($container) {
        $container.classList.remove('container')
        $container.classList.add('container-fluid')
      })
      $contentContainers = document.querySelectorAll('.content.container')
      $contentContainers.forEach(function ($contentContainer) {
        $contentContainer.classList.remove('container')
        $contentContainer.classList.add('container-fluid')
      })
    } else {
      $contentContainers = document.querySelectorAll('.content.container-fluid')
      $contentContainers.forEach(function ($contentContainer) {
        $contentContainer.classList.remove('container-fluid')
        $contentContainer.classList.add('container')
      })
    }
  }

  const initHeader = function () {
    const $script = document.createElement('script')
    $script.innerText = `new HSMegaMenu('.js-mega-menu', {
          desktop: {
            position: 'left'
          }
        })`

    window.addEventListener('load', function () {
      document.body.appendChild($script)
      setTimeout(function () {
        window.scrollTo(0, 0)
      })
    })
  }

  document.querySelectorAll('[name="sidebarNavOptions"]')
      .forEach($control => {
        if ($control.value === settings.sidebarNavOptions) {
          $control.checked = true
        }
      })

  $layouts.forEach($control => {
    if ($control.value === settings.layout && !document.querySelector('[name="headerLayoutOptions"]:checked')) {
      $control.checked = true
    }
  })

  document.querySelectorAll('[name="layoutSkinsRadio"]')
      .forEach($control => {
        if ($control.value === settings.skin) {
          $control.checked = true
        }
      })

  const $builderFluidSwitch = document.querySelector('#builderFluidSwitch')
  $builderFluidSwitch.checked = settings.fluid === 'true'

  let $sidebarNavOptions = document.querySelectorAll('[name="sidebarNavOptions"]')

  // Set layout
  if (settings.layout === 'default') {
    $builderFluidSwitch.disabled = true
    $sidebarNavOptions.forEach(option => option.disabled = false)
    const $header = cutElement(document.querySelector('.js-build-layout-header-double'))
  } else if (settings.layout === 'navbar-dark') {
    $builderFluidSwitch.disabled = true
    const $aside = document.querySelector('.navbar-vertical-aside')
    $aside.classList.remove('bg-white')
    $aside.classList.add('bg-dark', 'navbar-dark')
  } else if (settings.layout === 'double-header') {
    document.body.className = 'footer-offset'
    document.querySelectorAll('aside').forEach(function (aside) {
      aside.remove()
    })

    document.querySelector('header').remove()
    const $header = cutElement(document.querySelector('.js-build-layout-header-double'))
    document.body.prepend($header)

    initHeader()
    checkFluid()
    $sidebarNavOptions.forEach(option => {
      option.disabled = true
      option.checked = false
    })
  } else if (settings.layout === 'single-header') {
    document.body.className = 'footer-offset'
    document.querySelectorAll('aside').forEach(function (aside) {
      aside.remove()
    })

    document.querySelector('header').remove()
    const $header = cutElement(document.querySelector('.js-build-layout-header-default'))
    document.body.prepend($header)

    initHeader()
    checkFluid()
    $sidebarNavOptions.forEach(option => {
      option.disabled = true
      option.checked = false
    })
  }

  // Set vartical navar pills/tab style
  if (settings.sidebarNavOptions === 'tabs') {
    $navPills = document.querySelector('.nav-pills')
    if ($navPills) {
      $navPills.classList.remove('nav-pills')
      $navPills.classList.add('nav-tabs')
    }
  }

  // Remove mockups
  document.querySelector('.js-build-layouts').remove()

  // Event listener to disable/enable fluid checkbox
  document.querySelectorAll('[name="layout"]').forEach(function ($control) {
    $control.addEventListener('change', event => {
      if (event.target.value !== 'default' && event.target.value !== 'navbar-dark') {
        $sidebarNavOptions.forEach(option => option.disabled = true)
        return $builderFluidSwitch.disabled = false
      }

      $sidebarNavOptions.forEach(option => option.disabled = false)
      $builderFluidSwitch.disabled = true
    })
  })

  return resolve(true)
}).then(function () {
  // Show body after build
  document.body.style.opacity = 1

  // Submit
  document.querySelector('#js-builder-preview').addEventListener('click', function () {
    $controlSkin = document.querySelector('[name="layoutSkinsRadio"]:checked').value
    $sidebarNavOptions = document.querySelector('[name="sidebarNavOptions"]:checked')
    $sidebarNavOptions = $sidebarNavOptions ? $sidebarNavOptions.value : null
    $controlLayout = document.querySelector('[name="layout"]:checked').value
    $fluid = document.querySelector('#builderFluidSwitch').checked
    HSThemeAppearance.setAppearance($controlSkin)
    window.localStorage.setItem('layout', $controlLayout)
    window.localStorage.setItem('builderFluidSwitch', $fluid)
    window.localStorage.setItem('sidebarNavOptions', $sidebarNavOptions)
    location.reload()
  })

  // Reset
  document.querySelector('#js-builder-reset').addEventListener('click', function () {
    HSThemeAppearance.setAppearance('default')
    window.localStorage.setItem('layout', 'default')
    window.localStorage.setItem('builderFluidSwitch', false)
    window.localStorage.setItem('sidebarNavOptions', 'pills')
    location.reload()
  })
});

// End demo.js

(function() {
    window.onload = function () {
      

      // INITIALIZATION OF NAVBAR VERTICAL ASIDE
      // =======================================================
      new HSSideNav('.js-navbar-vertical-aside').init()


      // INITIALIZATION OF FORM SEARCH
      // =======================================================
      new HSFormSearch('.js-form-search')


      // INITIALIZATION OF BOOTSTRAP DROPDOWN
      // =======================================================
      HSBsDropdown.init()


      // INITIALIZATION OF SELECT
      // =======================================================
      HSCore.components.HSTomSelect.init('.js-select')


      // INITIALIZATION OF ADD FIELD
      // =======================================================
      new HSAddField('.js-add-field', {
        addedField: field => {
          HSCore.components.HSTomSelect.init(field.querySelector('.js-select-dynamic'))
        }
      })


      // INITIALIZATION OF  QUANTITY COUNTER
      // =======================================================
      new HSQuantityCounter('.js-quantity-counter')


      // INITIALIZATION OF DROPZONE
      // =======================================================
      HSCore.components.HSDropzone.init('.js-dropzone')


      // INITIALIZATION OF QUILLJS EDITOR
      // =======================================================
      HSCore.components.HSQuill.init('.js-quill')
    }
  })()


  (function () {
    // STYLE SWITCHER
    // =======================================================
    const $dropdownBtn = document.getElementById('selectThemeDropdown') // Dropdowon trigger
    const $variants = document.querySelectorAll(`[aria-labelledby="selectThemeDropdown"] [data-icon]`) // All items of the dropdown

    // Function to set active style in the dorpdown menu and set icon for dropdown trigger
    const setActiveStyle = function () {
      $variants.forEach($item => {
        if ($item.getAttribute('data-value') === HSThemeAppearance.getOriginalAppearance()) {
          $dropdownBtn.innerHTML = `<i class="${$item.getAttribute('data-icon')}" />`
          return $item.classList.add('active')
        }

        $item.classList.remove('active')
      })
    }

    // Add a click event to all items of the dropdown to set the style
    $variants.forEach(function ($item) {
      $item.addEventListener('click', function () {
        HSThemeAppearance.setAppearance($item.getAttribute('data-value'))
      })
    })

    // Call the setActiveStyle on load page
    setActiveStyle()

    // Add event listener on change style to call the setActiveStyle function
    window.addEventListener('on-hs-appearance-change', function () {
      setActiveStyle()
    })
  })()