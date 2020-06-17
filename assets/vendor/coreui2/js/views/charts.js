$(function () {
  'use strict';

  	//tendik - start
  	//Indikator 5.1.1 - start//
  	var dataPendidikan = [];
    $.getJSON(baseUrl + '/home/getPendidikanGuru', {}, function(data) {
	    $.each(data, function(index, element) {
	        dataPendidikan[0] = element.sma; 
	        dataPendidikan[1] = element.d1; 
	        dataPendidikan[2] = element.d2; 
	        dataPendidikan[3] = element.d3; 
	        dataPendidikan[4] = element.s1; 
	        dataPendidikan[5] = element.s2; 
	        dataPendidikan[6] = element.s3; 
	    });

	  	//render chart
		var barChartPendidikanData = {
			labels : ["SMA/SMK", "D1", "D2", "D3", "D4/S1", "S2", "S3"],
			datasets : [
			  {
			    label: 'Standar 5.1.1 Berkualifikasi Minimal S1 / D4',
				backgroundColor : ['rgba(255, 17, 35, 0.5)',
				'rgba(255, 17, 35, 0.5)',
				'rgba(255, 17, 35, 0.5)',
				'rgba(255, 17, 35, 0.5)',
				'rgba(17, 255, 19, 0.5)',
				'rgba(17, 255, 19, 0.5)',
				'rgba(17, 255, 19, 0.5)',],
			    borderColor : 'rgba(17, 255, 19, 1.0)',
			    highlightFill : 'rgba(151,187,205,0.75)',
			    highlightStroke : 'rgba(151,187,205,1)',
			    data : dataPendidikan
			  }
			]
		}
		var ctxTendikPendidikanGuru = document.getElementById('canvas-pendidikan');
		var chartPendidikan = new Chart(ctxTendikPendidikanGuru, {
			type: 'bar',
			data: barChartPendidikanData,
			options: {
			  responsive: true,
			  scales: {
			        yAxes: [{
			            ticks: {
			                beginAtZero: true,
			                // Include a dollar sign in the ticks
			                callback: function(value, index, values) {
			                	return value += '%';
			                }
			            }
			        }]
			    }
			}
		});
	});
	//Indikator 5.1.1 - end//

	//Indikator 5.1.4 - start//
  	var dataSertifikasi = [];
    $.getJSON(baseUrl + '/home/getGuruSertified', {}, function(data) {
	    $.each(data, function(index, element) {
	        dataSertifikasi[0] = element.sertified; 
	        dataSertifikasi[1] = element.notsertified;
	    });

	  	//render chart
		var barChartSertifikasiData = {
			labels : ["Bersertfikat Pendidik", "Tidak Bersertfikat Pendidik"],
			datasets : [
			  {
			    label: 'Standar 5.1.4 Bersertfikat Pendidik',
			    backgroundColor : ['rgba(17, 255, 19, 0.5)',
							'rgba(255, 17, 35, 0.5)',],
			    borderColor : 'rgba(151,187,205,0.8)',
			    highlightFill : 'rgba(151,187,205,0.75)',
			    highlightStroke : 'rgba(151,187,205,1)',
			    data : dataSertifikasi
			  }
			]
		}
		var ctxTendikSertified = document.getElementById('canvas-sertifikasi');
		var chartSertifikasi = new Chart(ctxTendikSertified, {
			type: 'bar',
			data: barChartSertifikasiData,
			options: {
			  responsive: true,
			  scales: {
			        yAxes: [{
			            ticks: {
			                beginAtZero: true,
			                // Include a dollar sign in the ticks
			                callback: function(value, index, values) {
			                	return value += '%';
			                }
			            }
			        }]
			    }
			}
		});
	});
	//Indikator 5.1.4 - end//

	//Indikator 5.1.5 - start//
  	var dataPedagogik = [];
    $.getJSON(baseUrl + '/home/getStatusPedagogik', {}, function(data) {
	    $.each(data, function(index, element) {
	        dataPedagogik[0] = element.sangatkurang; 
	        dataPedagogik[1] = element.kurang;
	        dataPedagogik[2] = element.cukup;
	        dataPedagogik[3] = element.baik;
	        dataPedagogik[4] = element.sangatbaik;
	    });

	  	//render chart
		var barChartPedagogikData = {
			labels : ["Sangat Kurang", "Kurang", "Cukup", "Baik", "Sangat Baik"],
			datasets : [
			  {
			    label: 'Standar 5.1.5 Berkompetensi Pedagogik Minimal Baik',
			    backgroundColor : ['rgba(255, 17, 35, 0.5)',
				'rgba(255, 126, 39, 0.5)',
				'rgba(255, 251, 36, 0.5)',
				'rgba(0, 231, 249, 0.5)',
				'rgba(17, 255, 19, 0.5)',],
			    borderColor : 'rgba(151,187,205,0.8)',
			    highlightFill : 'rgba(151,187,205,0.75)',
			    highlightStroke : 'rgba(151,187,205,1)',
			    data : dataPedagogik
			  }
			]
		}
		var ctxTendikPedagogik = document.getElementById('canvas-pedagogik');
		var chartPedagogik = new Chart(ctxTendikPedagogik, {
			type: 'bar',
			data: barChartPedagogikData,
			options: {
			  responsive: true,
			  scales: {
			        yAxes: [{
			            ticks: {
			                beginAtZero: true,
			                // Include a dollar sign in the ticks
			                callback: function(value, index, values) {
			                	return value += '%';
			                }
			            }
			        }]
			    }
			}
		});
	});
	//Indikator 5.1.5 - end//

	//Indikator 5.1.6 - start//
  	var dataProfesional = [];
    $.getJSON(baseUrl + '/home/getStatusProfesional', {}, function(data) {
	    $.each(data, function(index, element) {
	        dataProfesional[0] = element.sangatkurang; 
	        dataProfesional[1] = element.kurang;
	        dataProfesional[2] = element.cukup;
	        dataProfesional[3] = element.baik;
	        dataProfesional[4] = element.sangatbaik;
	    });

	  	//render chart
		var barChartProfesionalData = {
			labels : ["Sangat Kurang", "Kurang", "Cukup", "Baik", "Sangat Baik"],
			datasets : [
			  {
			    label: 'Standar 5.1.6 Berkompetensi Profesional',
			    backgroundColor : ['rgba(255, 17, 35, 0.5)',
				'rgba(255, 126, 39, 0.5)',
				'rgba(255, 251, 36, 0.5)',
				'rgba(0, 231, 249, 0.5)',
				'rgba(17, 255, 19, 0.5)',],
			    borderColor : 'rgba(151,187,205,0.8)',
			    highlightFill : 'rgba(151,187,205,0.75)',
			    highlightStroke : 'rgba(151,187,205,1)',
			    data : dataProfesional
			  }
			]
		}
		var ctxTendikProfesional = document.getElementById('canvas-profesional');
		var chartProfesional = new Chart(ctxTendikProfesional, {
			type: 'bar',
			data: barChartProfesionalData,
			options: {
			  responsive: true,
			  scales: {
			        yAxes: [{
			            ticks: {
			                beginAtZero: true,
			                // Include a dollar sign in the ticks
			                callback: function(value, index, values) {
			                	return value += '%';
			                }
			            }
			        }]
			    }
			}
		});
	});
	//Indikator 5.1.6 - end//

  	//get data labels
	var labelsTendik0 = [];
	var dataTendik0 = [];
    $.getJSON(baseUrl + '/home/getChartLabels', {idstandar : '5a'}, function(data) {
    	var i = 0;
	    $.each(data, function(index, element) {
	        labelsTendik0[i] = element.no_indikator; 
	        dataTendik0[i] = element.kondisi; 
	        i++;
	    });

	    //render chart
		var barChartTendikData = {
			labels : labelsTendik0,
			datasets : [
			  {
			    label: 'Standar 5',
			    backgroundColor : 'rgba(151,187,205,0.5)',
			    borderColor : 'rgba(151,187,205,0.8)',
			    highlightFill : 'rgba(151,187,205,0.75)',
			    highlightStroke : 'rgba(151,187,205,1)',
			    data : dataTendik0
			  }
			]
		}
		var ctxTendik0 = document.getElementById('canvas-0');
		var chartTendik = new Chart(ctxTendik0, {
		type: 'bar',
		data: barChartTendikData,
		options: {
		  responsive: true,
		  scales: {
		        yAxes: [{
		            ticks: {
		                beginAtZero: true,
		                // Include a dollar sign in the ticks
		                callback: function(value, index, values) {
		                	return value += '%';
		                }
		            }
		        }]
		    }
		}
		});

		ctxTendik0.onclick = function(evt) {
			var activePoints = chartTendik.getElementsAtEvent(evt);
			if (activePoints[0]) {
				var chartData = activePoints[0]['_chart'].config.data;
				var idx = activePoints[0]['_index'];

				var label = chartData.labels[idx];
				var value = chartData.datasets[0].data[idx];

				var val_array = [];
				$.getJSON(baseUrl + '/home/getDetail', {noindikator : label}, function(data) {
					$("#table-tendik0").find("tr:gt(0)").remove();
				    $.each(data, function(index, element) {
				    	val_array[0] = element.no_indikator;
				        val_array[1] = element.nama_indikator; 
				        val_array[2] = element.kondisi_saat_ini; 
				        val_array[3] = element.kondisi_ideal; 
				        val_array[4] = element.masalah; 
				        val_array[5] = element.akar_masalah; 
				        val_array[6] = element.rekomendasi; 
				    });

				    var markup = "<tr><td>"+val_array[0]+"</td><td>"+val_array[1]+"</td><td>"+val_array[2]+"</td><td>"+val_array[3]+"</td><td>"+val_array[4]+"</td><td>"+val_array[5]+"</td><td>"+val_array[6]+"</td></tr>";
            		$("#table-tendik0 tbody").append(markup);
			    });
			}
		};
	});
	//get data values

	//get data labels
	//get data list tendik
	var markup_sarpras = "";
	$.getJSON(baseUrl + '/home/getKesesuaianIndikator', {idstandar : '5'}, function(data) {
		$("#table-tendik").find("tr:gt(0)").remove();
	    $.each(data, function(index, element) {
	    	markup_sarpras = "<tr><td>"+element.no_indikator+"</td><td>"+element.nama_indikator+"</td><td>"+element.sesuai+"</td><td>"+element.tidaksesuai+"</td></tr>";
			$("#table-tendik tbody").append(markup_sarpras);
	    });
    });
    //end get data list tendik

	var labelsTendik = [];
	var dataTendik = [];
    $.getJSON(baseUrl + '/home/getChartLabels', {idstandar : '5b'}, function(data) {
    	var i = 0;
	    $.each(data, function(index, element) {
	        labelsTendik[i] = element.no_indikator; 
	        dataTendik[i] = element.kondisi; 
	        i++;
	    });

	    //render chart
		var barChartTendikData = {
			labels : labelsTendik,
			datasets : [
			  {
			    label: 'Standar 5',
			    backgroundColor : 'rgba(151,187,205,0.5)',
			    borderColor : 'rgba(151,187,205,0.8)',
			    highlightFill : 'rgba(151,187,205,0.75)',
			    highlightStroke : 'rgba(151,187,205,1)',
			    data : dataTendik
			  }
			]
		}
		var ctxTendik = document.getElementById('canvas-1');
		var chartTendik = new Chart(ctxTendik, {
		type: 'bar',
		data: barChartTendikData,
		options: {
		  responsive: true,
		  scales: {
		        yAxes: [{
		            ticks: {
		                beginAtZero: true,
		                // Include a dollar sign in the ticks
		                callback: function(value, index, values) {
		                    if (value == 1)
		                    	return 'Tidak';
		                    else if (value == 2)
		                    	return 'Ya';
		                    else
		                    	return '';
		                }
		            }
		        }]
		    }
		}
		});

		ctxTendik.onclick = function(evt) {
			var activePoints = chartTendik.getElementsAtEvent(evt);
			if (activePoints[0]) {
				var chartData = activePoints[0]['_chart'].config.data;
				var idx = activePoints[0]['_index'];

				var label = chartData.labels[idx];
				var value = chartData.datasets[0].data[idx];

				var val_array = [];
				$.getJSON(baseUrl + '/home/getDetail', {noindikator : label}, function(data) {
					$("#table-tendik1").find("tr:gt(0)").remove();
				    $.each(data, function(index, element) {
				    	val_array[0] = element.no_indikator;
				        val_array[1] = element.nama_indikator; 
				        val_array[2] = element.kondisi_saat_ini; 
				        val_array[3] = element.kondisi_ideal; 
				        val_array[4] = element.masalah; 
				        val_array[5] = element.akar_masalah; 
				        val_array[6] = element.rekomendasi; 
				    });

				    var markup = "<tr><td>"+val_array[0]+"</td><td>"+val_array[1]+"</td><td>"+val_array[2]+"</td><td>"+val_array[3]+"</td><td>"+val_array[4]+"</td><td>"+val_array[5]+"</td><td>"+val_array[6]+"</td></tr>";
            		$("#table-tendik1 tbody").append(markup);
			    });
			}
		};
	});
	//get data values
	//tendik - end

	/*sarpras - start*/
	//get data list sarpras
	var markup_sarpras = "";
	$.getJSON(baseUrl + '/home/getKesesuaianIndikator', {idstandar : '6'}, function(data) {
		$("#table-sapras").find("tr:gt(0)").remove();
	    $.each(data, function(index, element) {
	    	markup_sarpras = "<tr><td>"+element.no_indikator+"</td><td>"+element.nama_indikator+"</td><td>"+element.sesuai+"</td><td>"+element.tidaksesuai+"</td></tr>";
			$("#table-sapras tbody").append(markup_sarpras);
	    });
    });
	//get data labels
	var labelsSarpras = [];
	var dataSarpras = [];
    $.getJSON(baseUrl + '/home/getChartLabels', {idstandar : '6'}, function(data) {
    	var i = 0;
	    $.each(data, function(index, element) {
	        labelsSarpras[i] = element.no_indikator; 
	        dataSarpras[i] = element.kondisi; 
	        i++;
	    });

	    //render chart
		var barChartSarprasData = {
		labels : labelsSarpras,
		datasets : [
		  {
		    label: 'Standar 6',
		    backgroundColor : 'rgba(151,187,205,0.5)',
		    borderColor : 'rgba(151,187,205,0.8)',
		    highlightFill : 'rgba(151,187,205,0.75)',
		    highlightStroke : 'rgba(151,187,205,1)',
		    data : dataSarpras
		  }
		]
		}
		var ctx = document.getElementById('canvas-2');
		var chart = new Chart(ctx, {
		type: 'bar',
		data: barChartSarprasData,
		options: {
		  responsive: true,
		  scales: {
		        yAxes: [{
		            ticks: {
		                beginAtZero: true,
		                // Include a dollar sign in the ticks
		                callback: function(value, index, values) {
		                    if (value == 1)
		                    	return 'Tidak Sesuai';
		                    else if (value == 2)
		                    	return 'Sesuai';
		                    else
		                    	return '';
		                }
		            }
		        }]
		    }
		}
		});

		ctx.onclick = function(evt) {
			var activePoints = chart.getElementsAtEvent(evt);
			if (activePoints[0]) {
				var chartData = activePoints[0]['_chart'].config.data;
				var idx = activePoints[0]['_index'];

				var label = chartData.labels[idx];
				var value = chartData.datasets[0].data[idx];

				/*var url = "http://example.com/?label=" + label + "&value=" + value;
				console.log(url);
				alert(url);*/
				var val_array = [];
				$.getJSON(baseUrl + '/home/getDetail', {noindikator : label}, function(data) {
					$("#table-sapras-det").find("tr:gt(0)").remove();
				    $.each(data, function(index, element) {
				    	val_array[0] = element.no_indikator;
				        val_array[1] = element.nama_indikator; 
				        val_array[2] = element.kondisi_saat_ini; 
				        val_array[3] = element.kondisi_ideal; 
				        val_array[4] = element.masalah; 
				        val_array[5] = element.akar_masalah; 
				        val_array[6] = element.rekomendasi; 
				    });

				    var markup = "<tr><td>"+val_array[0]+"</td><td>"+val_array[1]+"</td><td>"+val_array[2]+"</td><td>"+val_array[3]+"</td><td>"+val_array[4]+"</td><td>"+val_array[5]+"</td><td>"+val_array[6]+"</td></tr>";
            		$("#table-sapras-det tbody").append(markup);
			    });
			}
		};
	});
	//get data values
	//sarpras - end
});
