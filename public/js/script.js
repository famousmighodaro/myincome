
function hideDates(dates){
		dates[0].style.display="none";
		dates[1].style.display="none";	
		dates[2].style.display="none";
		dates[3].style.display="none";

}

function select()
{



	var x = document.getElementById('budgetAndIncomeType');
	var dates = document.getElementsByClassName('dates');
	var months = document.getElementsByClassName('receivedMonth');
	var paid=document.getElementsByClassName('paid');
	x.addEventListener("change", function(){
		if (x.value==='3' || x.value==='4') {
			hideDates(dates);
			dates[0].style.display="block";
			dates[1].style.display="block";
		}else if(x.value==='5'){
			months[0].style.display="block";
			dates[0].style.display="block";
			dates[1].style.display="block";
			dates[3].style.display="block";		
		}else if(x.value==='2'){
			hideDates(dates);
			dates[0].style.display="block";
			dates[1].style.display="block";
			dates[3].style.display="block";	
		}else if(x.value==='1'){
			paid[0].style.display="block";
		}  else{
			hideDates(dates);
			paid[0].style.display="none";
		}
	});
}


/*unction receivedDay()
{
	var receivedDays = document.getElementById('receivedDays');
	
	var ti=[];

	for(i=1; i<32; i++){
		var createDays =document.createElement('option');
		createDays.value=i;
		createDays.text=i;
		receivedDays.options.add(createDays);
		ti[i]=i;
	}

	return ti;
}*/

var paid=document.getElementsByClassName('paid');
var x = document.getElementById('budgetAndIncomeType');
	var dates = document.getElementsByClassName('dates');
	var months = document.getElementsByClassName('receivedMonth');
if (x.value==='3' || x.value==='4') {
			hideDates(dates);
			dates[0].style.display="block";
			dates[1].style.display="block";
		}else if(x.value==='5'){
			months[0].style.display="block";
			dates[0].style.display="block";
			dates[1].style.display="block";
			dates[3].style.display="block";		
		}else if(x.value==='2'){
			hideDates(dates);
			dates[0].style.display="block";
			dates[1].style.display="block";
			dates[3].style.display="block";	
		}else if(x.value==='1'){
			paid[0].style.display="block";
		} else{
			hideDates(dates);
			paid[0].style.display="none";
		}
select();
receivedDay();

