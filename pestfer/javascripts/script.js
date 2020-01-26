var list;
var box;
var prices = [
	/*Institute of Plant Protection*/
	/*bio*/
	["0","Standard scheme, three variants",2630],
	["1","Additional variant of application rates",720],
	["2","Additional treatment",490],
	["3","Infection background, three variants (for fungicides)",1510],
	["4","Each further variant (for fungicides)",570],
	["5","Samples of disease-treated seeds",390],
	["6","Ultralow spraying",3110],
	["7","Demonstration experiment",1870],
	/*residues*/
	["8","Residue determination LDP, one active ingredient, one object",942],
	/*hygiene*/
	["9","Carrying out of hygiene of work",1200],
	/*Center of Hygiene*/
	["10","The research of hygienic of work",5000],
	["11","Adaptation of the methods of active ingredients determination in soil, water and air, plant material, one active ingredient",800],
	["12","Research about fish",1000],
	["13","The Act of toxicology-hygiene examination of the pesticide",1800],
	["14","The Act of toxicology-hygiene examination of the pesticide-expansion",500],
	["15","The Act of toxicology-hygiene examination of the pesticide-re-registration",1400],
	["16","Toxicological dossier",4800,200],	
	["17","The development of MRLs, one active ingredient (if necessary)",300],
	/*Institute of Vetenary*/
	["18","Research about  bees",1200],			
	/*The Main Inspection of seed-breading, carantine and plant protection*/
	["19","Adaptation of the methods of active ingredients determination in formulation, one active ingredient",1759,201],
	["20","Adaptation of the methods of determination of completeness of treatment (for seed treatment)",1429,201],
	["21","State registration of pesticide",300],
	["22","State registration of pesticide-expansion",300],
	["23","State hygienic registration (in the case of registration in PSF)",200]
];
var cropsNames = [
	["0","пшеница озимая"], 
	["1","пшеница яровая"], 
	["2","ячмень озимый"], 
	["3","ячмень яровой"], 
	["4","рожь озимая"], 
	["5","рожь яровая"], 
	["6","тритикале озимая"],
	["7","тритикале яровая"],
	["8","рапс озимый"], 
	["9","рапс яровой"], 
	["10","кукуруза"], 
	["11","картофель"], 
	["12","свекла сахарная и кормовая"], 
	["13","лен"], 
	["14","подсолнечник"], 
	["15","яблоня"],
	["16","капуста"], 
	["17","морковь"], 
	["18","огурец"], 
	["19","томат"]
];
var applicationRatesQuantity = [
	["0","1"], 
	["1","2"], 
	["2","3"], 
	["3","4"]
];
var treatmentsQuantity = [
	["0","1"], 
	["1","2"], 
	["2","3"]
];	

window.onload =	function ()
{
	list = document.getElementById("contacts");
	box = document.getElementById("box");
	addContact();
}

/*Добавление строчки в форме*/			
function addContact()
{
	var line = document.createElement("tr");
	var col1 = document.createElement("td");
	var col2 = document.createElement("td");
	var col3 = document.createElement("td");
	var col4 = document.createElement("td");
	var minus = document.createElement("img");
	var pole1 = document.createElement("select");
	var pole2 = document.createElement("select");
	var pole3 = document.createElement("select");
				
	list.appendChild(line);
	list.lastChild.appendChild(col1);
	list.lastChild.appendChild(col2);
	list.lastChild.appendChild(col3);
	list.lastChild.appendChild(col4);
	line.childNodes[0].appendChild(minus);
	
	/*select crops*/
	line.childNodes[1].appendChild(pole1);
	line.childNodes[1].firstChild.setAttribute("name", "crops");
	for (var i=0; i<cropsNames.length; i++) //добавление options
	{
		//формируем пункты выпадающего меню select из массива cropsNames
		var opt1 = new Option(
			cropsNames[i][1],	//свойство text
			cropsNames[i][1],    //свойство value
			false, 				//свойство defaultChecked
			false ); 			//свойство checked
		
		//записываем данное свойство в форму	
		line.childNodes[1].firstChild.options[i] = opt1;
		line.childNodes[1].firstChild.options[0].setAttribute("selected", "selected");
	}
				
	/*select applicationRates*/			
	line.childNodes[2].appendChild(pole2);
	line.childNodes[2].firstChild.setAttribute("name", "applicationRates");
	for (var i=0; i<applicationRatesQuantity.length; i++) //добавление options
	{
		//формируем пункты выпадающего меню select из массива applicationRatesQuantity
		var opt2 = new Option(
			applicationRatesQuantity[i][1],	//свойство text
			applicationRatesQuantity[i][1],    //свойство value
			false, 				//свойство defaultChecked
			false ); 			//свойство checked
			
		//записываем данное свойство в форму	
		line.childNodes[2].firstChild.options[i] = opt2;
	}		

	/*select treatments*/			
	line.childNodes[3].appendChild(pole3);
	line.childNodes[3].firstChild.setAttribute("name", "treatments");
	for (var i=0; i<treatmentsQuantity.length; i++) //добавление options
	{
		//формируем пункты выпадающего меню select из массива treatmentsQuantity
		var opt3 = new Option(
			treatmentsQuantity[i][1],	//свойство text
			treatmentsQuantity[i][1],    //свойство value
			false, 				//свойство defaultChecked
			false ); 			//свойство checked
			
		//записываем данное свойство в форму	
		line.childNodes[3].firstChild.options[i] = opt3;
	}

	
	/*чтобы не отображался пустой img*/
	document.querySelector("#contacts img:first-child").style.display = "none"; 
				
	var contactLines = document.querySelectorAll("#contacts tr")
	if (contactLines.length >2)
	{
		var del = line.childNodes[0].firstChild
		del.setAttribute("src","images/del.jpg");
		del.addEventListener("click",removeContact);
	}
};

/*Удаление строчки в форме*/			
function removeContact()
{
	this.parentNode.parentNode.remove();
};

/*Раскрытие и скрытие блока рассчетов калькулятора*/			
function show(element) {
    element.style.display = "block";
};
function hide(element) {
    element.style.display = "none";
};

/*Cброс формы*/
function myReset() {
	document.getElementById("pesticideCalculator").reset();
	z = document.querySelectorAll("#contacts tr");
	for(var i=0; i<=(z.length-3); i++)
	{
		document.getElementById("contacts").lastChild.remove();
	}
	document.getElementById("itog").innerHTML = "";
};

/*Печать-рабочий вариант*/		
function divPrint() {
	document.querySelector("header").style.display = "none";
	document.querySelector(".slider").style.display = "none";
	document.querySelector(".services").style.display = "none";
	document.querySelector(".advantages").style.display = "none";
	document.querySelector(".customers").style.display = "none";
	document.querySelector(".form").style.display = "none";
	document.querySelector("footer").style.display = "none";
	document.querySelector(".calculators h1").style.display = "none";
	document.querySelector(".calculators .calc_links").style.display = "none";
	document.querySelector(".calculators .tabs").style.display = "none";
	document.querySelector("#pesticideCalculator p:first-child").style.display = "block";	

	window.print(); 
	
	document.querySelector("header").style.display = "block";
	document.querySelector(".slider").style.display = "block";
	document.querySelector(".services").style.display = "block";
	document.querySelector(".advantages").style.display = "block";
	document.querySelector(".customers").style.display = "block";
	document.querySelector(".form").style.display = "block";
	document.querySelector("footer").style.display = "block";
	document.querySelector(".calculators h1").style.display = "block";
	document.querySelector(".calculators .calc_links").style.display = "block";
	document.querySelector(".calculators .tabs").style.display = "block";
	document.querySelector("#pesticideCalculator p:first-child").style.display = "none";
	
	document.querySelector("#calculators .calc_links a:first-child").onclick;
	
};	

/*Печать-не работает такой вариант, надо дорабатывать			
function divPrint() {
	var prtContent = document.getElementById("pesticideCalculator");
	var WinPrint = window.open();
	WinPrint.document.write(prtContent.innerHTML);
	WinPrint.document.close();
	WinPrint.focus();
	WinPrint.print();
};*/

/*Проведение вычислений*/
function okno() { 
	var itog = document.getElementById("itog");//доступ к диву, где будет выводится сумма стоимости регистрации
	var myForm = document.getElementById("pesticideCalculator"); 
	var NameOfProduct = myForm.productName.value; //1 значение - имя продукта NameOfProduct!
	var AI = myForm.quantityOfAI.options; 
	var x = AI.selectedIndex;
	var quantityOfAIs = +AI[x].value; //2 значение - количество действующих веществ в препарате quantityOfAIs!
	//console.log(quantityOfAIs);
	
	var fullToxDossier = +myForm.toxDossier.value; //3 значение - необходимость делать токсикологическое досье fullToxDossier, 1 - надо делать, 0 -не надо и при умножении на ноль результат будет ноль и в общей сумме не произойдут изменения!
	//console.log(fullToxDossier);
	
	var fullToxBees = +myForm.toxBees.value; //4 значение - необходимость делать токсикологическое досье fullToxBees, 1 - надо делать, 0 -не надо!
	//console.log(fullToxBees);
	
	var fulltoxFish = +myForm.toxFish.value; //5 значение - необходимость делать токсикологическое досье fulltoxFish, 1 - надо делать, 0 -не надо!
	//console.log(fulltoxFish);
	
	//crops 
	var AllCrops = document.getElementById("pesticideCalculator").crops;
	if (document.querySelectorAll("#contacts tr").length <3){
		var AllCropsQuantity = 1; //6 значение - количество всех культур 
	}
	else {
			var AllCropsQuantity = document.getElementById("pesticideCalculator").crops.length; //6 значение - количество всех культур 
	}
	//console.log(AllCropsQuantity);
	
	//РАССЧЕТ: Total_BIO_for_all_crops_year_2_year
	var Total_BIO_for_all_crops_year_2_year = 0;
	if (AllCropsQuantity == 1){
		var myForm = document.getElementById("pesticideCalculator"); //повтор
		var applicationRatesSelect = myForm.elements.applicationRates;
		for (var n=0; n < applicationRatesSelect.options.length; n++){
			var applicationRatesOption = applicationRatesSelect.options[n];
			if (applicationRatesOption.selected){
				var applicationRatesQty = +applicationRatesOption.value; // 7 значение 
				//console.log(applicationRatesQty);
			}
		}
		var treatmentsSelect = myForm.elements.treatments;
		for (var r=0; r < treatmentsSelect.options.length; r++){
			var treatmentsOption = treatmentsSelect.options[r];
			if (treatmentsOption.selected){
				var treatmentsQty = +treatmentsOption.value; // 8 значение 
				//console.log(treatmentsQty);
			}
		}
			
		var Cost_of_standard_scheme_three_variants_for_1_crop = prices[0][2];
		var Cost_of_additional_variant_of_application_rates_in_scheme_for_1_crop = ((applicationRatesQty*2+1)-3)*prices[1][2];
		var Cost_of_additional_variant_of_treatment_in_scheme_for_1_crop = ((treatmentsQty*2+1)-3)*prices[2][2];
		var Total_BIO_for_1_crops_1_year = Cost_of_standard_scheme_three_variants_for_1_crop + Cost_of_additional_variant_of_application_rates_in_scheme_for_1_crop + Cost_of_additional_variant_of_treatment_in_scheme_for_1_crop;
				
		Total_BIO_for_all_crops_year_2_year = 2 * Total_BIO_for_1_crops_1_year; //всех культур - одна культура
	}

	else {
		for (var m=0; m < AllCropsQuantity; m++)
		{
			var applicationRatesSelect = myForm.elements.applicationRates[m];
			for (var n=0; n < applicationRatesSelect.options.length; n++){
				var applicationRatesOption = applicationRatesSelect.options[n];
				if (applicationRatesOption.selected){
					var applicationRatesQty = +applicationRatesOption.value; // 7 значение 
					//console.log(applicationRatesQty);
				}
			}

			var treatmentsSelect = myForm.elements.treatments[m];
			for (var r=0; r < treatmentsSelect.options.length; r++){
				var treatmentsOption = treatmentsSelect.options[r];
				if (treatmentsOption.selected){
					var treatmentsQty = +treatmentsOption.value; // 8 значение 
					//console.log(treatmentsQty);
				}
			}
			
			var Cost_of_standard_scheme_three_variants_for_1_crop = prices[0][2];
			var Cost_of_additional_variant_of_application_rates_in_scheme_for_1_crop = ((applicationRatesQty*2+1)-3)*prices[1][2];
			var Cost_of_additional_variant_of_treatment_in_scheme_for_1_crop = ((treatmentsQty*2+1)-3)*prices[2][2];
			var Total_BIO_for_1_crops_1_year = Cost_of_standard_scheme_three_variants_for_1_crop + Cost_of_additional_variant_of_application_rates_in_scheme_for_1_crop + Cost_of_additional_variant_of_treatment_in_scheme_for_1_crop;
				
			Total_BIO_for_1_crops_year_2_year = 2 * Total_BIO_for_1_crops_1_year;
			Total_BIO_for_all_crops_year_2_year += Total_BIO_for_1_crops_year_2_year
		}
	}
	
	//РАССЧЕТ: Total_trials_without_BIO
	var cost_toxicological_dossier = (prices[16][2] + quantityOfAIs * prices[16][3]) * fullToxDossier;
	var total_cost_of_residue_LDP = quantityOfAIs * prices[8][2] * AllCropsQuantity;
	var cost_of_method_from_center_of_hygiene = quantityOfAIs * prices[11][2];
	var cost_of_method_from_KTL = quantityOfAIs * prices[19][2] + prices[19][3];
		
	var Total_trials_without_BIO = prices[9][2] + prices[10][2] + prices[13][2] + cost_toxicological_dossier + prices[21][2] + total_cost_of_residue_LDP + cost_of_method_from_center_of_hygiene + cost_of_method_from_KTL + prices[12][2] + prices[18][2];

	//РАССЧЕТ:
	var costOfRegistration = Total_BIO_for_all_crops_year_2_year + Total_trials_without_BIO;
	itog.innerHTML = costOfRegistration + " USD";
};


