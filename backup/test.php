<html>
<head>
<title>calculate</title>
<script language="javascript">
function calculate(operator) {
var var1 = frmcal.var1.value;
var var2 = frmcal.var2.value;
if (operator=='+') {
var result = parseFloat(var1) + parseFloat(var2);
}
if (operator=='-') {
var result = parseFloat(var1) - parseFloat(var2);
}
if (operator=='*') {
var result = parseFloat(var1) * parseFloat(var2);
}
if (operator=='/') {
var result = parseFloat(var1) / parseFloat(var2);
}
if (operator=='%') {
var result = parseFloat(var1) % parseFloat(var2);
}
frmcal.result.value = result;
return false;
}
</script>
</head>

<body>
<form id="frmcal">
<input id="var1" type="text" />
<input id="var2" type="text" /><br><br>
<input type="button" value="+" onClick="return calculate('+');" />
<input type="button" value="-" onClick="return calculate('-');" />
<input type="button" value="*" onClick="return calculate('*');" />
<input type="button" value="/" onClick="return calculate('/');" />
<input type="button" value="%" onClick="return calculate('%');" /><br><br>
<input id="result" type="text" />
</form>
</body>
</html>
