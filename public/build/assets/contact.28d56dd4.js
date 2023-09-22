$(document).ready(function(){checkall("contact-check-all","contact-chkbox"),$("#input-search").on("keyup",function(){var a=new RegExp($(this).val(),"i");$(".searchable-items .items:not(.items-header-section)").hide(),$(".searchable-items .items:not(.items-header-section)").filter(function(){return a.test($(this).text())}).show()}),$(".view-grid").on("click",function(a){a.preventDefault(),$(this).parents(".switch").find(".view-list").removeClass("active-view"),$(this).addClass("active-view"),$(this).parents(".searchable-container").removeClass("list"),$(this).parents(".searchable-container").addClass("grid"),$(this).parents(".searchable-container").find(".searchable-items").removeClass("list"),$(this).parents(".searchable-container").find(".searchable-items").addClass("grid")}),$(".view-list").on("click",function(a){a.preventDefault(),$(this).parents(".switch").find(".view-grid").removeClass("active-view"),$(this).addClass("active-view"),$(this).parents(".searchable-container").removeClass("grid"),$(this).parents(".searchable-container").addClass("list"),$(this).parents(".searchable-container").find(".searchable-items").removeClass("grid"),$(this).parents(".searchable-container").find(".searchable-items").addClass("list")}),$("#btn-add-contact").on("click",function(a){$("#addContactModal #btn-add").show(),$("#addContactModal #btn-edit").hide(),$("#addContactModal").modal("show")});function o(){$(".delete").on("click",function(a){a.preventDefault(),$(this).parents(".items").remove()})}function I(){$("#btn-add").click(function(){var a=$(this).parents(".modal-content"),n=a.find("#c-name"),i=a.find("#c-email"),s=a.find("#c-occupation"),c=a.find("#c-phone"),d=a.find("#c-location"),e=document.getElementsByClassName("validation-text"),l=/^.+@[^\.].*\.[a-z]{2,}$/,m=/^\d*\.?\d*$/,u=n.val(),r=i.val(),h=s.val(),v=c.val(),f=d.val();if(u==""?(e[0].innerHTML="Name must be filled out",e[0].style.display="block"):e[0].style.display="none",r==""?(e[1].innerHTML="Email Id must be filled out",e[1].style.display="block"):l.test(r)==!1?(e[1].innerHTML="Invalid Email",e[1].style.display="block"):e[1].style.display="none",v==""?(e[2].innerHTML="Invalid (Enter 10 Digits)",e[2].style.display="block"):m.test(v)==!1?(e[2].innerHTML="Please Enter A numeric value",e[2].style.display="block"):e[2].style.display="none",u==""||r==""||l.test(r)==!1||v==""||m.test(v)==!1)return!1;let g='<div class="items"><div class="item-content"><div class="user-profile"><div class="n-chk align-self-center text-center"><label class="new-control new-checkbox checkbox-primary"><input type="checkbox" class="new-control-input contact-chkbox"><span class="new-control-indicator"></span></label></div><img src="../src/assets/img/90x90.jpg"><div class="user-meta-info"><p class="user-name" data-name='+u+">"+u+'</p><p class="user-work" data-occupation='+h+">"+h+'</p></div></div><div class="user-email"><p class="info-title">Email: </p><p class="usr-email-addr" data-email='+r+">"+r+'</p></div><div class="user-location"><p class="info-title">Location: </p><p class="usr-location" data-location='+f+">"+f+'</p></div><div class="user-phone"><p class="info-title">Phone: </p><p class="usr-ph-no" data-phone='+v+">"+v+'</p></div><div class="action-btn"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-edit-2 edit"><path d="M17 3a2.828 2.828 0 1 1 4 4L7.5 20.5 2 22l1.5-5.5L17 3z"></path></svg><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-user-minus delete"><path d="M16 21v-2a4 4 0 0 0-4-4H5a4 4 0 0 0-4 4v2"></path><circle cx="8.5" cy="7" r="4"></circle><line x1="23" y1="11" x2="17" y2="11"></line></svg>';$(".searchable-items > .items-header-section").after(g),$("#addContactModal").modal("hide"),n.val(""),i.val(""),s.val(""),c.val(""),d.val(""),o(),y(),checkall("contact-check-all","contact-chkbox")})}$("#addContactModal").on("hidden.bs.modal",function(a){var n=document.getElementById("c-name"),i=document.getElementById("c-email"),s=document.getElementById("c-occupation"),c=document.getElementById("c-phone"),d=document.getElementById("c-location"),e=document.getElementsByClassName("validation-text");n.value="",i.value="",s.value="",c.value="",d.value="";for(var l=0;l<e.length;l++)a.preventDefault(),e[l].style.display="none"});function y(){$(".edit").on("click",function(a){$("#addContactModal #btn-add").hide(),$("#addContactModal #btn-edit").show();var n=$(this).parents(".items"),i=$("#addContactModal"),s=n.find(".user-name"),c=n.find(".usr-email-addr"),d=n.find(".user-work"),e=n.find(".usr-ph-no"),l=n.find(".usr-location"),m=s.attr("data-name"),u=c.attr("data-email"),r=d.attr("data-occupation"),h=e.attr("data-phone"),v=l.attr("data-location"),f=i.find("#c-name"),g=i.find("#c-email"),x=i.find("#c-occupation"),M=i.find("#c-phone"),E=i.find("#c-location");f.val(m),g.val(u),x.val(r),M.val(h),E.val(v),$("#addContactModal").modal("show"),$("#btn-edit").off("click").click(function(){var p=$(this).parents(".modal-content"),V=p.find("#c-name"),L=p.find("#c-email"),N=p.find("#c-occupation"),B=p.find("#c-phone"),H=p.find("#c-location"),b=V.val(),k=L.val(),_=N.val(),w=B.val(),C=H.val();s.text(b),c.text(k),d.text(_),e.text(w),l.text(C),s.attr("data-name",b),c.attr("data-email",k),d.attr("data-occupation",_),e.attr("data-phone",w),l.attr("data-location",C),$("#addContactModal").modal("hide")})})}$(".delete-multiple").on("click",function(){var a=$(".contact-chkbox:checked").parents(".items");a.remove()}),o(),I(),y()});var t=document.getElementsByClassName("validation-text"),P=/^.+@[^\.].*\.[a-z]{2,}$/,T=/^\d{10}$/;let A=document.getElementById("c-name");A.addEventListener("input",function(){this.value==""?(t[0].innerHTML="Name Required",t[0].style.display="block"):t[0].style.display="none"});let D=document.getElementById("c-email");D.addEventListener("input",function(){let o=this.value;o==""?(t[1].innerHTML="Email Required",t[1].style.display="block"):P.test(o)==!1?(t[1].innerHTML="Invalid Email",t[1].style.display="block"):t[1].style.display="none"});let R=document.getElementById("c-phone");R.addEventListener("input",function(){let o=this.value;o==""?(t[2].innerHTML="Phone Number Required",t[2].style.display="block"):T.test(o)==!1?(t[2].innerHTML="Invalid (Enter 10 Digits)",t[2].style.display="block"):t[2].style.display="none"});
