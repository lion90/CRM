function graphic1(a1,a2,a3,a4,a5,a6){
  $.jqplot.config.enablePlugins = true;
	a1= parseInt(a1);
	a2= parseInt(a2);
	a3= parseInt(a3);
	a4= parseInt(a4);
	a5= parseInt(a5);
	a6= parseInt(a6);

        var ticks = ['Radio', 'Prensa', 'Carteleras','Visitas','TV','Otras'];
         
        plot1 = $.jqplot('chart', [[a1,a2,a3,a4,a5,a6]], {
            // Only animate if we're not using excanvas (not in IE 7 or IE 8)..
		animate: !$.jqplot.use_excanvas,
		title:"COMPARACION MEDIOS PUBLICITARIOS CON CLIENTES UDB",	    
		seriesDefaults:{
                renderer:$.jqplot.BarRenderer,
               pointLabels: { show: true, location: 'wo', edgeTolerance: -5,   angle: 30,},
            },
	    axesDefaults: {tickOptions: {
             fontSize: '14pt'}},
			 
			 axes: {
                xaxis: {
                    renderer: $.jqplot.CategoryAxisRenderer,
                    ticks: ticks
                }
            },
        });
}
function graphic2(a1,a2,a3){
  var s1=a1.split(",");
  var s2=a2.split(",");
  var s3=a3.split(",");

  var i;
  for(i=0;i<s1.length;i++){
  s1[i]=parseInt(s1[i]);
  s2[i]=parseInt(s2[i]);

  }

  $.jqplot('chart', [s1,s2], {
    animate: !$.jqplot.use_excanvas,
              seriesColors: ["#4D86C1" ,"#E7734A"],
   title:"Preferencia de Estudiantes hacia Carreras UDB",
    stackSeries: true,
    captureRightClick: true,
     seriesDefaults:{

      
       renderer:$.jqplot.BarRenderer,
     rendererOptions: {
          // Put a 30 pixel margin between bars.
  barDirection: 'horizontal',         

          // Highlight bars when mouse button pressed.
          // Disables default highlighting on mouse over.
            
      },
      pointLabels: { show: true, location: 'e', edgeTolerance: -5},
    },
     axesDefaults: {
        tickRenderer: $.jqplot.CanvasAxisTickRenderer ,
        tickOptions: {
          angle: 30,
          fontSize: '8pt'
        }
    },  
       
       
       
                    axes: {
      xaxis:  {autoscale:true,
      
      },
      yaxis: {
         ticks:s3,
 renderer: $.jqplot.CategoryAxisRenderer
      }
    }   ,    legend: {
      show: true,
      location: 'we',
      placement: 'outside',
       labels:['OPCION 1','OPCION 2']
    } 
          
                });
}

function graphic3(a1,a2,a3){
  var s1=a1.split(",");
  var s2=a2.split(",");
  var s3=a3.split(",");

  var i;
  for(i=0;i<s1.length;i++){
  s1[i]=parseInt(s1[i]);
  s2[i]=parseInt(s2[i]);

  }

  $.jqplot('chart', [s1,s2], {
    animate: !$.jqplot.use_excanvas,
              seriesColors: ["#4D86C1" ,"#E7734A"],
   title:"Preferencia de Estudiantes hacia Universidades",
    stackSeries: true,
    captureRightClick: true,
     seriesDefaults:{

      
       renderer:$.jqplot.BarRenderer,
     rendererOptions: {
          // Put a 30 pixel margin between bars.
    barDirection: 'horizontal',         

          // Highlight bars when mouse button pressed.
          // Disables default highlighting on mouse over.
            
      },
      pointLabels: { show: true, location: 'e', edgeTolerance: -5},
    },
     axesDefaults: {
        tickRenderer: $.jqplot.CanvasAxisTickRenderer ,
        tickOptions: {
          angle: 30,
          fontSize: '8pt'
        }
    },  
       
       
       
                    axes: {
      xaxis:  {autoscale:true,
      
      },
      yaxis: {
         ticks:s3,
 renderer: $.jqplot.CategoryAxisRenderer
      }
    }   ,    legend: {
      show: true,
      location: 'we',
      placement: 'outside',
       labels:['OPCION 1','OPCION 2']
    } 
          
                });
}
function graphic4(a1,a2){
  $.jqplot.config.enablePlugins = true;
  a1= parseInt(a1);
  a2= parseInt(a2);
        var ticks = ['Open House y Paquete', 'Paquete y Matricula'];
         
        plot1 = $.jqplot('chart', [[a1,a2]], {
            // Only animate if we're not using excanvas (not in IE 7 or IE 8)..
    animate: !$.jqplot.use_excanvas,
    title:"COMPARACION PROCESOS REALIZADOS ENTRE ESTUDIANTES",      
    seriesDefaults:{
                renderer:$.jqplot.BarRenderer,
               pointLabels: { show: true, location: 'wo', edgeTolerance: -5,   angle: 30,},
            },
      axesDefaults: {tickOptions: {
             fontSize: '14pt'}},
       
       axes: {
                xaxis: {
                    renderer: $.jqplot.CategoryAxisRenderer,
                    ticks: ticks
                }
            },
        });
}

$(document).ready(function() 
{
  $("#howenc").click(function()
    {
      $("#content").load("lector/graph1_model");
   });
$("#opcarreras").click(function()
    {
      $("#content").load("lector/graph2_model");
   });
$("#opuniv").click(function()
    {
      $("#content").load("lector/graph3_model");
   });
$("#howopen").click(function()
    {
      $("#content").load("lector/graph4_model");
   });
  });

