   google.charts.load('current', {'packages':['corechart']});
     google.charts.setOnLoadCallback(drawChart);

	  //при перезагрузке возвращает к таблице
	  //только январь месяц, остальные нужно объединять, будем думать
      function drawChart(x) {
	 google.charts.load('current', {'packages':['corechart']});

	  if (x==1){
	   var data1 = google.visualization.arrayToDataTable([
          ['Year', 'январь'],
          ['собака',  20],
          ['кот',  100],
          ['пернатые', 120],
          ['грызуны',  50],
          ['другое',  135]
	  ])}
		
		else {
		var data2 = google.visualization.arrayToDataTable([
          ['Year', 'февраль'],
          ['собака',  200],
          ['кот',  250],
          ['пернатые', 30],
          ['грызуны',  10],
          ['другое',  10]
        ]);
		}
        var options = {
          title: '',
          curveType: 'function',
          legend: { position: '' }
        };

        var chart = new google.visualization.LineChart(document.getElementById('curve_chart'));
		if (x==1){
			
        chart.draw(data1, options);
		}
		 else { chart.draw(data2, options);}
      }