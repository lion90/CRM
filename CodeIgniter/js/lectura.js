function graphic1(a1,a2,a3,a4,a5,a6){
  $.jqplot.config.enablePlugins = true;
	a1= parseInt(a1);
	a2= parseInt(a2);
	a3= parseInt(a3);
	a4= parseInt(a4);
	a5= parseInt(a5);
	a6= parseInt(a6);

        var data = [
        ['Radio', a1],['Prensa', a2],['Carteleras',a3],['Visitas',a4],['TV',a5],['Otras',a6]
        ];
         
      var  plot1 = $.jqplot('chart', [data], {
            // Only animate if we're not using excanvas (not in IE 7 or IE 8)..
/*		animate: !$.jqplot.use_excanvas,
*/		title:"COMPARACION MEDIOS PUBLICITARIOS CON CLIENTES UDB",	    
		seriesDefaults:{
                renderer:$.jqplot.PieRenderer,
                rendererOptions:{
                  
                  showDataLabels:true,
                  /*sliceMargin:4,
                  fill: false,
                  lineWidth:5*/
            }
          },
             legend: {show:true,location:'e'}
	    /*axesDefaults: {tickOptions: {
             fontSize: '14pt'}},
			 
			 axes: {
                xaxis: {
                    renderer: $.jqplot.CategoryAxisRenderer,
                    ticks: ticks
                }
            },*/
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
                 
      var  plot1 = $.jqplot('chart', [[['Open House y Paquete',a1],['Paquete y Matricula',a2]]], {
            // Only animate if we're not using excanvas (not in IE 7 or IE 8)..
    /*animate: !$.jqplot.use_excanvas,*/
    title:"COMPARACION PROCESOS REALIZADOS ENTRE ESTUDIANTES",      
    seriesDefaults:{
                /*renderer:$.jqplot.BarRenderer,*/
                renderer:$.jqplot.PieRenderer,
                rendererOptions:{
                  
                  showDataLabels:true,
                  sliceMargin:4,
                  fill: false,
                  lineWidth:5
                }
              },
               legend: {show:true,location:'e'}

               /*pointLabels: { show: true, location: 'wo', edgeTolerance: -5,   angle: 30,},
            },
      axesDefaults: {tickOptions: {
             fontSize: '14pt'}},
       */
      /* axes: {
                xaxis: {
                    renderer: $.jqplot.CategoryAxisRenderer,
                    ticks: ticks
                }
            },*/
        });
}

$(document).ready(function() 
{
  //GRAFICAS
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


  //EMAILS
  $("#x_facultad").click(function()
    {
      $("#content").load("lector/emails_facultad");
    

   });
   $("#x_carrera").click(function()
    {
      $("#content").load("lector/emails_carrera");
   });
   $("#x_etapa").click(function()
    {
      $("#content").load("lector/emails_etapa");
   });


   $("#load_email").click(function()
    {
      var facultad =$("#select_facultades").val();
      $("#load_emails").load("lector/get_emails_facultad/"+facultad);
   });

   $("#load_email_etapa").click(function()
    {
      var etapa =$("#select_etapas").val();
      $("#load_emails").load("lector/get_emails_etapa/"+etapa);
   });

    $("#send1").click(function()
    { 

      var facultad =$("#select_facultades").val();
      var asunto =$("#asunto").val();
      if(asunto=="Agregar Asunto..."){
        asunto="Sin Asunto";
      }
      var oEditor = CKEDITOR.instances.msj;
      var contenido = oEditor.getData();
      asunto=asunto.replace(/\s/g,'-');
      asunto=asunto.replace(/[.]/g,'_');
      var mensaje =$("#msj").val();
      mensaje=mensaje.replace(/\s/g,'-');
      mensaje=mensaje.replace('[.]','_');
      $("#aux").load("lector/send_emails_facultad/"+facultad+"/"+asunto+"/"+contenido);
   });
  $("#send").click(function()
    { 
      var oEditor = CKEDITOR.instances.msj;
      var contenido = oEditor.getData();
      $('#msj').val(contenido);
      alert("Enviando Mensaje");
   });
    $("#adjuntar").click(function(){
      $("#div_adjuntar").fadeToggle(1500);
    });
  });

