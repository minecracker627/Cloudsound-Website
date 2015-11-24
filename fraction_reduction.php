<head>
<link rel="stylesheet" href="/bootstrap.min.css"/>
<link rel="stylesheet" href="/bootstrap-theme.min.css"/>
<script src="/cb=gapi.loaded_1" async=""></script>
<script type="text/javascript" async="" src="/linkid.js"></script>
<script src="/jquery.min.js"></script>
<script src="/gpt.js" async></script>
<script src="/bsa.js" async></script>
<script src="/jquery-1.11.0.min.js"></script>
<script src="/bootstrap.min.js"></script>
<!--start head-->
<title>Fraction Reducer</title>
<!--GSMUT-G042107-->
<Script language="Javascript">
function compute()
{
var val1=document.fractions.variable1.value;
var val2=document.fractions.variable2.value;
var val3=0;
while(val1%2==0 && val2%2==0)
{
val1=val1/2;
val2=val2/2;
val3=val3+1;
}
var counter=3;
while(counter<=val1 && counter<=val2)
{
while(val1%counter==0 && val2%counter==0)
{
val1=val1/counter;
val2=val2/counter;
val3=val3+1;
}
counter=counter+2;
}
var result=val1 + "/" +val2;
if(val3==0)
{
document.fractions.val4.value="The fraction " +val1 +"/" +val2+" cannot be reduced any more!";
}
else
{
document.fractions.val4.value=result;
}
}
</Script>


<div class="jumbotron">
<center>
<h3>Fraction Reducer</h3>
</center>
<form name="fractions" align="center">
<table align="center">
<tr align="center">
<td align="center">

<!--
Here I have chosen "maxlength=6" which only enables the input of a six-figure number. If you have
a slow computer its not recommended to use values higher than 6, because this would lead to very long
calculating times.
-->

Numerator<td><input name="variable1" size=25 maxlength=10></td></tr>
<tr>
<td align="center">Denominator<td><input name="variable2" size=25 maxlength=10></td></tr>


<tr align="center">
<td><input type="button" value="Reduce fraction" onClick="compute()">
<td><input name="val4" size=25>
</td></tr>

</table>
<br><br><center>
<input type="reset" value="Reset">
</center>

</form>
<br><br>

<p align="center">For the input of more than six-figure numbers please read the source code!</p>
</div>
