
$("#calc1").show();
$("#calc2").hide();
$("#calc3").hide();
$("#calc4").hide();
$("#calc5").hide();

$("#nav1").click(function(){ 
$("#calc1").show();
$("#calc2").hide();
$("#calc3").hide();
$("#calc4").hide();
$("#calc5").hide();
});

$("#nav2").click(function(){ 
$("#calc1").hide();
$("#calc2").show();
$("#calc3").hide();
$("#calc4").hide();
$("#calc5").hide();
});

$("#nav3").click(function(){ 
$("#calc1").hide();
$("#calc2").hide();
$("#calc3").show();
$("#calc4").hide();
$("#calc5").hide();
});

$("#nav4").click(function(){ 
$("#calc1").hide();
$("#calc2").hide();
$("#calc3").hide();
$("#calc4").show();
$("#calc5").hide();
});

$("#nav5").click(function(){ 
$("#calc1").hide();
$("#calc2").hide();
$("#calc3").hide();
$("#calc4").hide();
$("#calc5").show();
});

// Function for Calculator 1
document.getElementById("submitbutton1").addEventListener("click",function(){
	var l =document.getElementById("lumpsum1").value;
	var m =document.getElementById("monthly1").value;
	var t =document.getElementById("tenor1").value;
	var r =document.getElementById("rate1").value;
    invCalc(l, m, t, r);
});

function invCalc(l,m,t,r) {

	var resultLumpSum = (l * Math.pow((1+(r/100)),t)) ;

	 var resultMonthly = m * ((Math.pow((1+(r/100)/12),(12*t))-1)/((r/100)/12))
	 
	 var result = resultLumpSum + resultMonthly;

	document.getElementById("result1").innerHTML= "<h3>RESULT</h3>" + "The future value of your investment is N" + "<strong>"+Math.round(result,2)+"</strong>";
}

// Function for Calculator 2

document.getElementById("submitbutton2").addEventListener("click",function(){
	var fv1 =document.getElementById("futureVal1").value;
	var t2 =document.getElementById("tenor2").value;
	var r2 =document.getElementById("rate2").value;
    invCalc2(fv1, t2, r2);
});

function invCalc2 (fv1, t2, r2) {

	var resultCalc2 = fv1 / Math.pow((1 + (r2/100)),t2);

	document.getElementById("result2").innerHTML= "<h3>RESULT</h3>" + "The amount you need to invest now to achieve your target is N"+"<strong>"+Math.round(resultCalc2,2)+"</strong>";
}

// Function for Calculator 3
document.getElementById("submitbutton3").addEventListener("click",function(){
	var fv2 =document.getElementById("futureVal2").value;
	var t3 =document.getElementById("tenor3").value;
	var r3 =document.getElementById("rate3").value;
    invCalc3(fv2, t3, r3);
});

function invCalc3 (fv2, t3, r3) {

	var resultCalc3 = fv2 / ((Math.pow((1 + ((r3/100)/12)),(t3*12))-1)/((r3/100)/12));

	document.getElementById("result3").innerHTML= "<h3>RESULT</h3>" + "The amount you need to invest monthly in order to achieve your target is N"+"<strong>"+Math.round(resultCalc3)+"</strong>";
}

// Function for Calculator 4

document.getElementById("submitbutton4").addEventListener("click",function(){
	var fv3 =document.getElementById("futureVal3").value;
	var l2 =document.getElementById("lumpsum2").value;
	var r4 =document.getElementById("rate4").value;
    invCalc4(fv3, l2, r4);
});

function invCalc4 (fv3, l2, r4) {

    var numerator = Math.log10(fv3/l2);
    var denominator = Math.log10(1+(r4/100));
	var resultCalc4 = numerator/denominator;

	document.getElementById("result4").innerHTML= "<h3>RESULT</h3>" + "It will take you " + resultCalc4 + "Year(s) to achieve your target";
}

// Function for calculator 5 
document.getElementById("submitbutton5").addEventListener("click",function(){
	var fv4 =document.getElementById("futureVal4").value;
	var m2 =document.getElementById("monthly2").value;
	var r5 =document.getElementById("rate5").value;
    invCalc5(fv4, m2, r5);
});

function invCalc5 (fv4, m2, r5) {

    var numerator2 = (fv4 * ((r5/100)/12));
    var numerator3 = Math.log10(((numerator2*1)+(m2*1))/m2);   
    var denominator2 = Math.log10(1+((r5/100)/12));
	var resultCalc5 = (numerator3/denominator2)*(1/12);

	document.getElementById("result5").innerHTML= "<h3>RESULT</h3>" + "It will take you " + resultCalc5 + " Year(s) to achieve your target";
}