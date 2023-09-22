window.addEventListener("load",function(){try{if(getcorkThemeObject=localStorage.getItem("theme"),getParseObject=JSON.parse(getcorkThemeObject),ParsedObject=getParseObject,ParsedObject.settings.layout.darkMode){var e="dark";Apex.tooltip={theme:e};var i={chart:{height:160,type:"bar",stacked:!0,stackType:"100%",toolbar:{show:!1}},dataLabels:{enabled:!1},stroke:{show:!0,width:[3,4],curve:"smooth"},colors:["#e2a03f","#e0e6ed"],series:[{name:"Sales",data:[44,55,41,67,22,43,21]},{name:"Last Week",data:[13,23,20,8,13,27,33]}],xaxis:{labels:{show:!1},categories:["Sun","Mon","Tue","Wed","Thur","Fri","Sat"],crosshairs:{show:!1}},yaxis:{show:!1},fill:{opacity:1},plotOptions:{bar:{horizontal:!1,columnWidth:"25%",borderRadius:8}},legend:{show:!1},grid:{show:!1,xaxis:{lines:{show:!1}},padding:{top:-20,right:0,bottom:-40,left:0}},responsive:[{breakpoint:575,options:{plotOptions:{bar:{borderRadius:5,columnWidth:"35%"}}}}]},l={chart:{id:"sparkline1",group:"sparklines",type:"area",height:290,sparkline:{enabled:!0}},stroke:{curve:"smooth",width:2},fill:{type:"gradient",gradient:{type:"vertical",shadeIntensity:1,inverseColors:!1,opacityFrom:.3,opacityTo:.05,stops:[100,100]}},series:[{name:"Sales",data:[28,40,36,52,38,60,38,52,36,40]}],labels:["1","2","3","4","5","6","7","8","9","10"],yaxis:{min:0},grid:{padding:{top:125,right:0,bottom:0,left:0}},tooltip:{x:{show:!1},theme:e},colors:["#00ab55"]},n={chart:{fontFamily:"Nunito, sans-serif",height:365,type:"area",zoom:{enabled:!1},dropShadow:{enabled:!0,opacity:.2,blur:10,left:-7,top:22},toolbar:{show:!1}},colors:["#e7515a","#2196f3"],dataLabels:{enabled:!1},markers:{discrete:[{seriesIndex:0,dataPointIndex:7,fillColor:"#000",strokeColor:"#000",size:5},{seriesIndex:2,dataPointIndex:11,fillColor:"#000",strokeColor:"#000",size:4}]},subtitle:{text:"$10,840",align:"left",margin:0,offsetX:100,offsetY:20,floating:!1,style:{fontSize:"18px",color:"#00ab55"}},title:{text:"Total Profit",align:"left",margin:0,offsetX:-10,offsetY:20,floating:!1,style:{fontSize:"18px",color:"#bfc9d4"}},stroke:{show:!0,curve:"smooth",width:2,lineCap:"square"},series:[{name:"Expenses",data:[16800,16800,15500,14800,15500,17e3,21e3,16e3,15e3,17e3,14e3,17e3]},{name:"Income",data:[16500,17500,16200,17300,16e3,21500,16e3,17e3,16e3,19e3,18e3,19e3]}],labels:["Jan","Feb","Mar","Apr","May","Jun","Jul","Aug","Sep","Oct","Nov","Dec"],xaxis:{axisBorder:{show:!1},axisTicks:{show:!1},crosshairs:{show:!0},labels:{offsetX:0,offsetY:5,style:{fontSize:"12px",fontFamily:"Nunito, sans-serif",cssClass:"apexcharts-xaxis-title"}}},yaxis:{labels:{formatter:function(t,p){return t/1e3+"K"},offsetX:-15,offsetY:0,style:{fontSize:"12px",fontFamily:"Nunito, sans-serif",cssClass:"apexcharts-yaxis-title"}}},grid:{borderColor:"#191e3a",strokeDashArray:5,xaxis:{lines:{show:!0}},yaxis:{lines:{show:!1}},padding:{top:-50,right:0,bottom:0,left:5}},legend:{position:"top",horizontalAlign:"right",offsetY:-50,fontSize:"16px",fontFamily:"Quicksand, sans-serif",markers:{width:10,height:10,strokeWidth:0,strokeColor:"#fff",fillColors:void 0,radius:12,onClick:void 0,offsetX:-5,offsetY:0},itemMargin:{horizontal:10,vertical:20}},tooltip:{theme:e,marker:{show:!0},x:{show:!1}},fill:{type:"gradient",gradient:{type:"vertical",shadeIntensity:1,inverseColors:!1,opacityFrom:.19,opacityTo:.05,stops:[100,100]}},responsive:[{breakpoint:575,options:{legend:{offsetY:-50}}}]},f={chart:{type:"donut",width:370,height:430},colors:["#622bd7","#e2a03f","#e7515a","#e2a03f"],dataLabels:{enabled:!1},legend:{position:"bottom",horizontalAlign:"center",fontSize:"14px",markers:{width:10,height:10,offsetX:-5,offsetY:0},itemMargin:{horizontal:10,vertical:30}},plotOptions:{pie:{donut:{size:"75%",background:"transparent",labels:{show:!0,name:{show:!0,fontSize:"29px",fontFamily:"Nunito, sans-serif",color:void 0,offsetY:-10},value:{show:!0,fontSize:"26px",fontFamily:"Nunito, sans-serif",color:"#bfc9d4",offsetY:16,formatter:function(t){return t}},total:{show:!0,showAlways:!0,label:"Total",color:"#888ea8",formatter:function(t){return t.globals.seriesTotals.reduce(function(p,u){return p+u},0)}}}}}},stroke:{show:!0,width:15,colors:"#0e1726"},series:[985,737,270],labels:["Apparel","Sports","Others"],responsive:[{breakpoint:1440,options:{chart:{width:325}}},{breakpoint:1199,options:{chart:{width:380}}},{breakpoint:575,options:{chart:{width:320}}}]}}else{var e="dark";Apex.tooltip={theme:e};var i={chart:{height:160,type:"bar",stacked:!0,stackType:"100%",toolbar:{show:!1}},dataLabels:{enabled:!1},stroke:{show:!0,width:[3,4],curve:"smooth"},colors:["#e2a03f","#e0e6ed"],series:[{name:"Sales",data:[44,55,41,67,22,43,21]},{name:"Last Week",data:[13,23,20,8,13,27,33]}],xaxis:{labels:{show:!1},categories:["Sun","Mon","Tue","Wed","Thur","Fri","Sat"],crosshairs:{show:!1}},yaxis:{show:!1},fill:{opacity:1},plotOptions:{bar:{horizontal:!1,columnWidth:"25%",borderRadius:8}},legend:{show:!1},grid:{show:!1,xaxis:{lines:{show:!1}},padding:{top:-20,right:0,bottom:-40,left:0}},responsive:[{breakpoint:575,options:{plotOptions:{bar:{borderRadius:5,columnWidth:"35%"}}}}]},l={chart:{id:"sparkline1",group:"sparklines",type:"area",height:290,sparkline:{enabled:!0}},stroke:{curve:"smooth",width:2},fill:{opacity:1},series:[{name:"Sales",data:[28,40,36,52,38,60,38,52,36,40]}],labels:["1","2","3","4","5","6","7","8","9","10"],yaxis:{min:0},grid:{padding:{top:125,right:0,bottom:0,left:0}},tooltip:{x:{show:!1},theme:e},colors:["#00ab55"]},n={chart:{fontFamily:"Nunito, sans-serif",height:365,type:"area",zoom:{enabled:!1},dropShadow:{enabled:!0,opacity:.2,blur:10,left:-7,top:22},toolbar:{show:!1}},colors:["#1b55e2","#e7515a"],dataLabels:{enabled:!1},markers:{discrete:[{seriesIndex:0,dataPointIndex:7,fillColor:"#000",strokeColor:"#000",size:5},{seriesIndex:2,dataPointIndex:11,fillColor:"#000",strokeColor:"#000",size:4}]},subtitle:{text:"$10,840",align:"left",margin:0,offsetX:100,offsetY:20,floating:!1,style:{fontSize:"18px",color:"#4361ee"}},title:{text:"Total Profit",align:"left",margin:0,offsetX:-10,offsetY:20,floating:!1,style:{fontSize:"18px",color:"#0e1726"}},stroke:{show:!0,curve:"smooth",width:2,lineCap:"square"},series:[{name:"Expenses",data:[16800,16800,15500,14800,15500,17e3,21e3,16e3,15e3,17e3,14e3,17e3]},{name:"Income",data:[16500,17500,16200,17300,16e3,21500,16e3,17e3,16e3,19e3,18e3,19e3]}],labels:["Jan","Feb","Mar","Apr","May","Jun","Jul","Aug","Sep","Oct","Nov","Dec"],xaxis:{axisBorder:{show:!1},axisTicks:{show:!1},crosshairs:{show:!0},labels:{offsetX:0,offsetY:5,style:{fontSize:"12px",fontFamily:"Nunito, sans-serif",cssClass:"apexcharts-xaxis-title"}}},yaxis:{labels:{formatter:function(o,h){return o/1e3+"K"},offsetX:-15,offsetY:0,style:{fontSize:"12px",fontFamily:"Nunito, sans-serif",cssClass:"apexcharts-yaxis-title"}}},grid:{borderColor:"#e0e6ed",strokeDashArray:5,xaxis:{lines:{show:!0}},yaxis:{lines:{show:!1}},padding:{top:-50,right:0,bottom:0,left:5}},legend:{position:"top",horizontalAlign:"right",offsetY:-50,fontSize:"16px",fontFamily:"Quicksand, sans-serif",markers:{width:10,height:10,strokeWidth:0,strokeColor:"#fff",fillColors:void 0,radius:12,onClick:void 0,offsetX:-5,offsetY:0},itemMargin:{horizontal:10,vertical:20}},tooltip:{theme:e,marker:{show:!0},x:{show:!1}},fill:{type:"gradient",gradient:{type:"vertical",shadeIntensity:1,inverseColors:!1,opacityFrom:.19,opacityTo:.05,stops:[100,100]}},responsive:[{breakpoint:575,options:{legend:{offsetY:-50}}}]},f={chart:{type:"donut",width:370,height:430},colors:["#622bd7","#e2a03f","#e7515a","#e2a03f"],dataLabels:{enabled:!1},legend:{position:"bottom",horizontalAlign:"center",fontSize:"14px",markers:{width:10,height:10,offsetX:-5,offsetY:0},itemMargin:{horizontal:10,vertical:30}},plotOptions:{pie:{donut:{size:"75%",background:"transparent",labels:{show:!0,name:{show:!0,fontSize:"29px",fontFamily:"Nunito, sans-serif",color:void 0,offsetY:-10},value:{show:!0,fontSize:"26px",fontFamily:"Nunito, sans-serif",color:"#0e1726",offsetY:16,formatter:function(o){return o}},total:{show:!0,showAlways:!0,label:"Total",color:"#888ea8",formatter:function(o){return o.globals.seriesTotals.reduce(function(h,b){return h+b},0)}}}}}},stroke:{show:!0,width:15,colors:"#fff"},series:[985,737,270],labels:["Apparel","Sports","Others"],responsive:[{breakpoint:1440,options:{chart:{width:325}}},{breakpoint:1199,options:{chart:{width:380}}},{breakpoint:575,options:{chart:{width:320}}}]}}var c=new ApexCharts(document.querySelector("#daily-sales"),i);c.render();var s=new ApexCharts(document.querySelector("#total-orders"),l);s.render();var a=new ApexCharts(document.querySelector("#revenueMonthly"),n);a.render();var r=new ApexCharts(document.querySelector("#chart-2"),f);r.render();const d=new PerfectScrollbar(document.querySelector(".mt-container-ra"));document.querySelector(".theme-toggle").addEventListener("click",function(){getcorkThemeObject=localStorage.getItem("theme"),getParseObject=JSON.parse(getcorkThemeObject),ParsedObject=getParseObject,ParsedObject.settings.layout.darkMode?(a.updateOptions({colors:["#e7515a","#2196f3"],subtitle:{style:{color:"#00ab55"}},title:{style:{color:"#bfc9d4"}},grid:{borderColor:"#191e3a"}}),r.updateOptions({stroke:{colors:"#0e1726"},plotOptions:{pie:{donut:{labels:{value:{color:"#bfc9d4"}}}}}}),s.updateOptions({fill:{type:"gradient",gradient:{type:"vertical",shadeIntensity:1,inverseColors:!1,opacityFrom:.3,opacityTo:.05,stops:[100,100]}}})):(a.updateOptions({colors:["#1b55e2","#e7515a"],subtitle:{style:{color:"#4361ee"}},title:{style:{color:"#0e1726"}},grid:{borderColor:"#e0e6ed"}}),r.updateOptions({stroke:{colors:"#fff"},plotOptions:{pie:{donut:{labels:{value:{color:"#0e1726"}}}}}}),s.updateOptions({fill:{type:"gradient",opacity:.9,gradient:{type:"vertical",shadeIntensity:1,inverseColors:!1,opacityFrom:.45,opacityTo:.1,stops:[100,100]}}}))})}catch(d){console.log(d)}});
