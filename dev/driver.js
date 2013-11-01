////////Designed Exclusively to Drive all the components in ///////
/*
Written : RAJKRISHNAN R
rakkannannasa@gamil.com
17/10/2013 - India || V1.05 || With Fadeoout
*/
const swidth = window.innerWidth;
const sheight = window.innerHeight;
const state = new Array();
function dragnote()
{
event.dataTransfer.setData("Text",event.target.id);
}
function bfordrop()
{
event.preventDefault();
}
function dropon()
{
event.preventDefault();
var data=event.dataTransfer.getData("Text");
var JSONObject = data;
alert(JSONObject);
var t = JSONObject.t;
var d = JSONObject.d;
msgbox('Do ',d)
//event.target.appendChild(document.getElementById(data));
}
function addstate(c)
{
	var slot = document.getElementById('slot').innerHTML;
	state[++slot]=c;
	document.getElementById('slot').innerHTML=slot;
}
function back()
{
	var slot=document.getElementById('slot').innerHTML;
	//con(state[--slot],'Going Back...');
		if(slot<=0)
	{
		document.getElementById('contentainer').innerHTML="";
	}
	else
	{
	document.getElementById('contentainer').innerHTML=state[--slot];
	document.getElementById('slot').innerHTML=slot;
}}
function hd()
{
	document.getElementById('contentainer').style.display='none';
	document.getElementById('sh').style.display='block';
	document.getElementById('hd').style.display='none';


	}
	function sh()
{
	document.getElementById('contentainer').style.display='block';
	document.getElementById('sh').style.display='none';
	document.getElementById('hd').style.display='block';
	}
	function con(l,t)
	{
	
		document.getElementById('contentainer').innerHTML='<img class="load" src="http://www.pg.site88.net/load.gif" alt="Loading..."/>';
			loadc(l);	
	}
	function loadc(l)
	{
	$.get(l,function(data,status){
	document.getElementById('contentainer').innerHTML=data;
	addstate(data);

});
	}

function drop()
{
	var item = document.getElementById('drop').value;
	if(item!='')
	{
		//alert("<img width = 15px; height = 20px; src = \""+item+"\"/>");
		document.getElementById('dimage').innerHTML="<img width = 100%; height = 100%; src = \""+item+"\"/>";
		document.getElementById('drop').value='';
		var h="Image Added";
		var d = "You can now use image anywhere.";
notify(h,d);
		
	}
}
function notify(h,d)
{
    $.notific8(d, {
      life: 3000,
      heading: h,
      theme: 'default',
      sticky: false,
      horizontalEdge: 'top',
      verticalEdge: 'right',
      zindex: 1500
    });
}

function nil()
{
notify('Type Something and Save','');
}
function sav()
{
    $.notific8('', {
      life: 1500,
      heading: 'Note Saved !',
      theme: 'amethyst',
      sticky: false,
      horizontalEdge: 'top',
      verticalEdge: 'right',
      zindex: 1500
    });
}

function send()
{
var c=document.getElementById('re').value;
if(c!="")
{
/*var ctimer = setInterval(function()
{	
    $.notific8('It took long to save this stuff, Re-saving once more in : <span id="t">10</span>', {
      life: 13000,
      heading: 'Hanged a bit long...:(',
      theme: 'default',
      sticky: false,
      horizontalEdge: 'top',
      verticalEdge: 'right',
      zindex: 1500
    });
autocall();
return;},15000);*/
document.getElementById('load').style.display='block';
document.getElementById('save').value='Saving...';
$.post("note_processor_ajax.php",
    {
      notes:c,
      time:"sample",
	  date:"date"
    },
    function(data,status){
			 if(data=='ConnIssue')
			 {
				 msgbox('Unable save Note !','Some un-expected error occured at the server that denied the note from getting saved. This might be temporary and please try again after a moment.');
			 }
			 else
			 {
	 if(status=='success')
	 {
sav();
document.getElementById('re').value="";	
document.getElementById('load').style.display='none';
document.getElementById('save').value='Save Note';
	 }
			 }
	 	});

}
else
{
nil();}
}
//////////////////////////////HANG OVER//////////////////////////////////////////////////
function ni()
{
    $.notific8('It took long to save this stuff, Re-saving once more in : <span id="t">10</span>', {
      life: 13000,
      heading: 'Hanged a bit long...:(',
      theme: 'default',
      sticky: false,
      horizontalEdge: 'top',
      verticalEdge: 'right',
      zindex: 1500
    });
autocall();
}
//////////////////////////////////////////////////////////////////////ADDED ON////////////////////////////////
// JavaScript Document
//Author : Rajkrishnan, rakkannannasa@gmail.com 2013
function link(x)
{
	window.location="/"+x;
}
function frameloader(l,t)
{
	document.getElementById('tit').innerHTML="Loading...";
	document.getElementById("contentframe").src=l;
	document.getElementById('tit').innerHTML=t;
}
function page(t)
{
document.getElementById('tit').innerHTML=t;
}
function refresh(l)
{
	window.location=l;
}
function timer()
{
window.setInterval("hour()",1000);
}
function hour()
{
var d = new Date();
var h=d.getHours();
document.getElementById('t').innerHTML=h;
}

function wish()
{
window.setInterval("h()",500);
}
function h()
{
var d = new Date();
var h=d.getHours();
if(h<04||h>=21)
{
document.getElementById('wish').innerHTML="Good Night";
}
if(h>=04 && h<12)
{
document.getElementById('wish').innerHTML="Good Morning";
}
if(h>=12 && h<18)
{
document.getElementById('wish').innerHTML="Good Afternoon";
}
if(h>=18 && h<21)
{
document.getElementById('wish').innerHTML="Good Evening";
}
}
function display(d)
{
	return d;
}
////Count Down // Invoker // Written by Rajkrishnan
function autocall()
{
document.getElementById('save').removeAttribute('disabled');
document.getElementById('load').style.display='none';
document.getElementById('save').value='Save Note';
var q=window.setInterval(function count()
{
var t = document.getElementById('t').innerHTML;
t--;
document.getElementById('t').innerHTML=t;
if(t==0)
{
	send();
}
},1000);
window.clearInterval(q);
return;
}
///////////////////////////GETS THE TIME_
function t(type)
{
var d = new Date(hours);
var date = d.getDate();
var month = d.getMonth()+1;
var year = d.getFullYear();
var time = d.getHours();
alert(time);
if(month<10)
{
	month='0'+month;
}
if(type=='undefined'||1)
{
var currentt = ''+date+'/'+month+'/'+year+'';
}
if(type==2)
{
var currentt = ''+month+'/'+date+'/'+year+'';
	
}
return currentt;
}
function hidemsg()
{
	fade('msg',0);
}
///22/10/2013
function msgbox(h,c)
{
	document.getElementById('msg').style.opacity='2';
	document.getElementById('msg').style.display='block';
var msg = '<span class="msgbox-close" onclick="hidemsg()" title="Click to close">close</span><span class="msgbox-heading">'+h+'</span><span class="msgbox-content">'+c+'</span>';
document.getElementById('msg').innerHTML=msg;
}
function fade(ob,s)
{
const obj = ob;
	if(s!=1)
	{
var op=2;
var ttt=setInterval(function(){
document.getElementById(obj).style.opacity=op;
op=op-0.1;
if(op<0)
{
	document.getElementById(obj).style.display='none';
	clearInterval(ttt);
}
		},5);
	}
else
{
var op=0;
var ttt=setInterval(function(){
document.getElementById(obj).style.opacity=op;
op=op+0.1;
if(op>2)
{
	clearInterval(ttt);
	document.getElementById(obj).style.display='block';

}
		},5);
	}
}