document.addEventListener("DOMContentLoaded",function(event){function checkDateTime(){const days=["sun","mon","tue","wed","thu","fri","sat"];var d=new Date(),day=days[d.getDay()],time=d.getHours(),minutes=d.getMinutes();var wh=document.querySelectorAll('.wh'),oh=document.querySelectorAll('.oh');if(wh.length>0&&oh.length>0){if(day!='sat'&&day!='sun'){if(day=='fri'){if(time>7&&time<15){for(var i=0;i<wh.length;i++){if(wh[i].classList.contains('hidden')){wh[i].classList.remove('hidden')}}
for(var j=0;j<oh.length;j++){if(!oh[j].classList.contains('hidden')){oh[j].classList.add('hidden')}}}else{for(var i=0;i<wh.length;i++){if(!wh[i].classList.contains('hidden')){wh[i].classList.add('hidden')}}
for(var j=0;j<oh.length;j++){if(oh[j].classList.contains('hidden')){oh[j].classList.remove('hidden')}}}}else{if(time>7&&time<17){for(var i=0;i<wh.length;i++){if(wh[i].classList.contains('hidden')){wh[i].classList.remove('hidden')}}
for(var j=0;j<oh.length;j++){if(!oh[j].classList.contains('hidden')){oh[j].classList.add('hidden')}}}else{for(var i=0;i<wh.length;i++){if(!wh[i].classList.contains('hidden')){wh[i].classList.add('hidden')}}
for(var j=0;j<oh.length;j++){if(oh[j].classList.contains('hidden')){oh[j].classList.remove('hidden')}}}}}else{for(var i=0;i<wh.length;i++){if(!wh[i].classList.contains('hidden')){wh[i].classList.add('hidden')}}
for(var j=0;j<oh.length;j++){if(oh[j].classList.contains('hidden')){oh[j].classList.remove('hidden')}}}}}
checkDateTime()})