/*altgraph, written by Rajkrishnan R*/

function fade(ob,s)
{
	if(s!=1)
	{
op=2;
var t=setInterval(function(){
document.getElementById(ob).style.opacity=op;
op=op-0.01;
pos++;
if(op<=0)
{
	window.clearInterval(t);
	document.getElementById(ob).style.display=none;
}
		},1);
	}
else
{
	op=0;
var t=setInterval(function(){
document.getElementById(ob).style.opacity=op;
op=op+0.01;
pos++;
if(op<=0)
{
	window.clearInterval(t);
	document.getElementById(ob).style.display=none;
}
		},1);
	}
}
