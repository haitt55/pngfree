$(function(){try{var a=getInjectData()}catch(e){a=1}try{setTimeout(function(){$("#flexBox-images").flexImages({rowHeight:280,container:".bnPic-list",truncate:!0})},500)}catch(e){}var e=function(){void 0!==a&&1==a.type&&1==no_bot&&($(".details-lists").hasClass("loaded")||(console.log($(".details-lists").hasClass("loaded")),$(".details-lists").addClass("loaded"),$.post("/api/recommend/element",{_csrf:csrf,id:a.id,keyword:a.search_recommend_word},function(e){200==e.status&&($(".recommend-detail-element").html(e.data.element),$(".recommend-detail-back").html(e.data.back),$("img.lazy").lazyload({effect:"fadeIn"}),$("#flexBox-images").flexImages({rowHeight:280,container:".bnPic-list",truncate:!0}))},"json")))},n=$(window).height();try{var t=$(".details-lists").offset().top}catch(e){t=0}var o=$(window).scrollTop();0<t&&t<n+o+100&&e(),$(window).scroll(function(){0<t&&t<n+$(this).scrollTop()+100&&e()}),1==no_bot&&$.getJSON("/api/view/index",{_csrf:csrf,id:a.id,type:a.type}),$("#vrf_file").click(function(){if(!Pngtree.BaseFun.IsLogin())return!1;var e=$(this).data("id");if(0==vip_type)return Pngtree.publicPopup("bg-buyNow","pop-buyNow","199"),!1;$.getJSON("/api/message/vrf-file",{id:e},function(e){if(!e.status||""==e.url)return Pngtree.publicPopup("bg-addName","pop-buyNow","200"),!1;window.location.href=e.url})}),$(".close-btn1").click("click",function(){$(".qbweb-win").hide()}),$(".btn-buynow").click(function(){$(".bg-buyNow").fadeOut(20)}),$("#add_name").click(function(){var e=$("[data-ele_id]").data("ele_id"),n=$("#u_name").val();if(""==n)return alert("Sorry Name cannot be empty"),!1;$.getJSON("/api/message/vrf-name",{name:n,id:e},function(e){return console.log(e.url),e.status&&""!=e.url&&($(".bg-addName").fadeOut(300),window.location.href=e.url),!1})}),$("#down-ele-vrf").on("click",function(){$(".bg-domnPng").fadeOut(10)}),$(".add-close").on("click",function(){var e=this;$(e).parent().animate({height:0},"3000",function(){$(e).parents(".qbweb-win").fadeOut()})}),$(".p-two").on("click",function(){Pngtree.publicPopup("Standard-LicenseBg","Standard-License",410)}),$(".complain-form").on({blur:function(){""==$.trim($(this).val())?($(this).addClass("warning"),$(this).siblings(".label-title").removeClass("on")):$(this).removeClass("warning")},focus:function(){$(this).siblings(".label-title").addClass("on")}},"input:not(.coop-issue)"),$(".complain-form").on({blur:function(){""==$.trim($(this).val())?($(this).addClass("warning"),$(this).parent().parent().children(".form-error").css("opacity",1),$(this).siblings(".label-title").removeClass("on")):($(this).removeClass("warning"),$(this).parent().parent().children(".form-error").css("opacity",0))},focus:function(){$(this).siblings(".label-title").addClass("on")}},"textarea"),$(".complains").click(function(){$(".complain-for-commercial").show()}),$(".complain-for-commercial").click(function(){$(this).fadeOut(200)}),$(".complain-for-commercial .close-btn").on("click",function(){$(".complain-for-commercial").fadeOut(200)}),$(".complain-form").click(function(e){(e=e||window.event).stopPropagation()}),$(".popup-thanks .btn").click(function(){$(".popup-thanks").fadeOut(200)}),$(".complain-form").click(function(e){(e=e||window.event).stopPropagation()}),$(".complain-for-commercial .btn").on("click",function(){var e=$(".coop-name").val(),n=$(".coop-email").val(),t=$(".coop-original-link").val(),a=$(".coop-contact").val(),o=$.trim($("link[rel=alternate]").attr("href"));return""==e?($(".coop-name").addClass("warning"),!1):""==n?($(".coop-email").addClass("warning"),!1):""==t?($(".coop-original-link").addClass("warning"),!1):Pngtree.BaseFun.Base_IsEmail(n)?!$(this).hasClass("warning")&&void $.post("/api/message/info",{email:n,url:o,username:e,link:t,contact:a,_csrf:csrf},function(e){200==e.rep?($(".complain-for-commercial").hide(),$(".popup-thanks").fadeIn(200)):alert("Oops! Sorry, there is something wrong. Please try again."),$(".complain-for-commercial .btn").removeClass("warning")},"json"):($(".coop-email").addClass("warning"),!1)}),$(".del-data").on("click",function(){var e=$(this).data("id"),n=$(this).data("type");if(!confirm("Did you confirm the deletion?"))return!1;$.getJSON("/api/message/so-delete",{id:e,type:n},function(e){console.log(e),200==e.status?(alert("Delete Success"),window.location.reload()):alert("Delete Failed")})}),addLoadEvent(function(){var e=a.share_id;""!=e&&$.getJSON("/api/message/share-statis",{_csrf:csrf,type:e})}),$("img").on("mousedown",function(e){e.preventDefault()}),$(".share-way").on("click",".share-two",function(){$.getJSON("/api/message/share-click",{_csrf:csrf,type:2})}),$(".share-way").on("click",".share-one",function(){$.getJSON("/api/message/share-click",{_csrf:csrf,type:1})}),$(".share-way").on("click",".share-three",function(){$.getJSON("/api/message/share-click",{_csrf:csrf,type:3})}),function(){$(".fontdetails-banner-inp");for(var e=$(".fontdetails-banner-letter"),n=0;n<e.length;n++){var t=2*Math.random(),a=e[n];a.innerText,a.style.animationDelay=t+"s"}}();1==a.seo_type&&1==no_bot&&$.getJSON("/api/email/already-back",{_csrf:csrf},function(e){var n;1==e.rep&&(n=function(){ga("pngtree.send","event","detail-seo-back","show")},setTimeout(function(){n(),$.getJSON("/api/email/show-back",{_csrf:csrf}),$(".hover-window").addClass("show")},1e4))}),$(".hover-window .close-hover").on("click",function(){var e=$(this);if(e.hasClass("close-return"))return!1;ga("pngtree.send","event","detail-seo-back","close"),e.addClass("close-return"),$(".hover-window").removeClass("show")}),$(".set-log").on("click",function(){var e=$(this).data("id"),n=$(this).data("type");$.getJSON("/api/email/set-log",{id:e,type:n},function(e){console.log(e),e.rep?alert("记录成功"):alert("已经记录")})}),$(".search-dropdown").on("click",".recent-search span",function(){$(this).css("cursor","pointer");var e=$(this).attr("data-val"),n=parseInt($(this).parents(".serach-box").find(".search-type a.on").data("type"));Pngtree.BaseFun.SearchClick(n,e)}),$(".search-dropdown").on("click","p",function(){var e=$(this).attr("data-val"),n=parseInt($(this).parents(".serach-box").find(".search-type a.on").data("type"));Pngtree.BaseFun.SearchClick(n,e)}),$(".down-font-png").on("click",function(){$(this);ga("pngtree.send","event","detail-font-down","click","png")}),$(".down-font-psd").on("click",function(){$(this);ga("pngtree.send","event","detail-font-down","click","psd")}),$(".btn-copy").on("click",function(){var e=$(".un_upgradeInfor-copy-link").val(),n=document.createElement("input");n.value=e,document.body.appendChild(n),n.select(),document.execCommand("Copy"),n.className="oInput",n.style.display="none",$(this).html("Successful copy");var t="";switch(a.type){case 1:t="Element";break;case 2:t="Back";break;case 5:t="Template";break;case 6:t="PPT";break;case 7:t="Font"}Pngtree.BaseFun.Ga_Deploy("Copy",t,"click")}),$(document).on("click",function(e){"detailsearch-select-checked"===e.target.className?$(e.target).parents(".detailsearch-select").toggleClass("on"):$(".detailsearch-select").removeClass("on")}),$(".detailsearch-select").on("click","li",function(){$(".detailsearch-select-checked").text($(this).text())}),$(".element-clickme").on("click",function(){Pngtree.BaseFun.Ga_Deploy("Element_Detail","Click_Here","click")}),$(".tem-clickme").on("click",function(){Pngtree.BaseFun.Ga_Deploy("Template_Detail","Click_Here","click")}),$(".font-clickme").on("click",function(){Pngtree.BaseFun.Ga_Deploy("Font_Detail","Click_Here","click")}),$(".back_clickme").on("click",function(){Pngtree.BaseFun.Ga_Deploy("Back_Detail","Click_Here","click")}),$(".element_down_jpg").on("click",function(){Pngtree.BaseFun.Ga_Deploy("Element_Detail","Down_JPG","click")}),$(".back_jpg").on("click",function(){Pngtree.BaseFun.Ga_Deploy("Back_Detail","Down_JPG","click")}),$(".back_rar").on("click",function(){Pngtree.BaseFun.Ga_Deploy("Back_Detail","Down_RAR","click")}),$(".element_down_rar").on("click",function(){Pngtree.BaseFun.Ga_Deploy("Element_Detail","Down_RAR","click")}),$(".font-png").on("click",function(){Pngtree.BaseFun.Ga_Deploy("Font_Detail","Down_Png","click")}),$(".font-pad").on("click",function(){Pngtree.BaseFun.Ga_Deploy("Font_Detail","Down_Psd","click")}),$(".font-list-click").on("click",function(){Pngtree.BaseFun.Ga_Deploy("Font_Detail","Small_List","click")}),Pngtree.BaseFun.Ga_Deploy_Href(".element_cate_click","Element_Detail","Cate"),Pngtree.BaseFun.Ga_Deploy_Href(".font-cate","Font-Detail","Cate"),Pngtree.BaseFun.Ga_Deploy_Href(".back-cate","Back_Detail","Cate"),$(".element_like").on("click",function(){Pngtree.BaseFun.Ga_Deploy("Element_Detail","Like","click")}),$(".ele_der").on("click",function(){Pngtree.BaseFun.Ga_Deploy("Element_Detail","Desiger","click")}),Pngtree.BaseFun.Ga_Deploy_Href(".ele_keyword a","Element_Detail","Keyword_List"),Pngtree.BaseFun.Ga_Deploy_Href(".tem_keyword a","Template_Detail","Keyword_List"),Pngtree.BaseFun.Ga_Deploy_Href(".back_keyword a","Back_Detail","Keyword_List"),Pngtree.BaseFun.Ga_Deploy_Href(".font-keyword a","Font_Detail","Keyword_List"),Pngtree.BaseFun.Ga_Deploy_Href(".ele_report","Element_Detail","Report"),Pngtree.BaseFun.Ga_Deploy_Href(".tem_report","Template_Detail","Report"),Pngtree.BaseFun.Ga_Deploy_Href(".back_report","Back_Detail","Report"),Pngtree.BaseFun.Ga_Deploy_Href(".font-report","Font_Detail","Report"),Pngtree.BaseFun.Ga_Deploy_Href(".ele_recommend a","Element_Detail","Recommend_List"),Pngtree.BaseFun.Ga_Deploy_Href(".tem_recommend a","Template_Detail","Recommend_List"),Pngtree.BaseFun.Ga_Deploy_Href(".back_recommend a","Back_Detail","Recommend_List"),Pngtree.BaseFun.Ga_Deploy_Class(".element-list-click","Element_Detail","List","ga"),Pngtree.BaseFun.Ga_Deploy_Class(".back-list-click","Element_Detail","List","ga"),$(".down-agree").on("click",function(){Pngtree.BaseFun.Ga_Deploy("Element_Template_Font_PRF","click","click")})});