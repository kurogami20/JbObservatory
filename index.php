<?php 
require_once 'layout/header.php';
require_once 'maps/nuitees_par_mois/tabMap.php';
require_once 'maps/nuiteesTotale.php';
$mois= ['Janvier', 'Février', 'Mars', 'Avril', 'Mai', 'Juin', 'Juillet', 'Août', 'Septembre', 'Octobre', 'Novembre', 'Décembre'
];
$_COOKIE['mois'] = 'janvier';
// $_COOKIE['departement'] = 'Ariège';
if (isset($_POST['mois'])) {
   $_COOKIE['mois'] = strtolower($_POST['mois']);
};


?>


<h2 class="text-3xl font-bold text-center my-8">
    Analyse des nuitées touristiques de 2018 en Occitanie 
  </h2>
<section class="hidden">
  
    <article class="flex flex-col gap-10 w-full items-center p-4 border border-gray-300 rounded-lg shadow-lg">
    <h1 class="capitalize text-2xl font-bold text-center">Année 2018</h1>
    <div class="w-[50%] flex gap-8 flex-col items-center">
        <h2 class="text-xl font-semibold mb-2">Nombre de nuitées en Occitanie</h2>
        <iframe class="w-full h-100" srcdoc="<?= htmlspecialchars($mapHTMLTotal, ENT_QUOTES | ENT_SUBSTITUTE, 'UTF-8') ?>" frameborder="0"></iframe>
    </div>
    <div class="w-full flex gap-8">
      <span class="w-full flex flex-col items-center gap-5">
      <h2 class="text-xl font-semibold mb-2">Top 3 départements par nuitées :</h2>
  
      <div class="w-full" id="top3"></div>
      
      </span>
      <span class="w-full flex flex-col items-center gap-5 ">
      <h2 class="text-xl font-semibold mb-2">Part des départements en nuitées :</h2>
  
      <div class="w-full" id="partDepartements"></div>
      
      </span>
      <span class="w-full flex flex-col items-center gap-5 ">
      <h2 class="text-xl font-semibold mb-2 capitalize">évolution du nombre de nuitées par département :</h2>
  
      <div class="w-full" id="comparaison"></div>
      </span>
    </div>
     <!--script du graphique bar  -->
<script>

  // top 3 départements nuitées
  function graphTot1(){

    const options = {
    series: [{
      data: [
        <?php foreach ($tabNuiteeParMois['Total_2018'] as $dept): ?>
          <?= htmlspecialchars(ucfirst($dept["nuitees"]), ENT_QUOTES | ENT_SUBSTITUTE, 'UTF-8') ?>,
        <?php endforeach; ?>
      ]
    }],
     
    chart: {
      type: 'bar',
      height: 500,
      zoom: {
        enabled: true
      },
      animations: {
        enabled: true,
        speed: 600,
        animateGradually: {
        enabled: true,
        delay: 150
        },
        dynamicAnimation: {
        enabled: true,
        speed: 350
        }
      }
    },
    plotOptions: {
      bar: {
        distributed: true,
      borderRadius: 4,
      borderRadiusApplication: 'end',
      horizontal: true,
        dataLabels: {
              position: 'center'
            },
      } ,
      
    },
   fill: {
    colors: ['#b10026', '#e31a1c', '#fc4e2a', '#fd8d3c', '#feb24c', '#fed976', '#fed976','#fed976','#fed976','#fed976','#fed976','#fed976','#fed976',]
    },
   
    xaxis: {
      categories: [
        <?php $depName=array_keys($tabNuiteeParMois['Total_2018']);  foreach ( $depName as $dept): ?>
          '<?= htmlspecialchars(ucfirst($dept), ENT_QUOTES | ENT_SUBSTITUTE, 'UTF-8') ?>',
        <?php endforeach; ?>
      ],
    
      title:{
        text: 'Nombre de nuitées (en milliers)',
        style: {
          fontSize: '14px',
          fontWeight: 'bold',
          color: '#263238'
        }
      },  
      labels: {
        formatter: function (value) {
          return value/1000 + 'K';
        }
      }
    },
       legend: {
          show: true,
          showForSingleSeries: true,
          markers: {
            fillColors: ['#bd0026', '#f03b20', '#fd8d3c']
          }
        }
   
    }

    const chart = new ApexCharts(document.querySelector("#top3"), options);

    chart.render();
  }
  
  
  graphTot1();
  
</script>
</article>



</section>

<form action="" method="post" class="flex flex-col items-center mb-8">
  <p class="text-xl font-bold text-center my-8 mb-4">Sélectionnez le mois</p>
  <span class="flex gap-4">
  <select name="mois" id="mois-select" class="select">
    <option value="<?= htmlspecialchars(ucfirst($_COOKIE['mois']), ENT_QUOTES | ENT_SUBSTITUTE, 'UTF-8') ?>"><?= htmlspecialchars(ucfirst($_COOKIE['mois']), ENT_QUOTES | ENT_SUBSTITUTE, 'UTF-8') ?></option>
    <?php foreach ($mois as $m): ?>
      <?php if ($m === ucfirst($_COOKIE['mois'])) continue; ?>
      <option name="mois" value="<?= htmlspecialchars(ucfirst($m), ENT_QUOTES | ENT_SUBSTITUTE, 'UTF-8') ?>"><?= htmlspecialchars(ucfirst($m), ENT_QUOTES | ENT_SUBSTITUTE, 'UTF-8') ?></option>
    <?php endforeach; ?>
  </select>
  <input type="submit" class="btn" value="Voir les données">
  </span>
</form>

<section class="flex flex-col gap-8 items-center">
  <?php $moisData = $tabMap[htmlspecialchars($_COOKIE['mois'], ENT_QUOTES | ENT_SUBSTITUTE, 'UTF-8')]  ?> 
   <article class="flex flex-col gap-10 w-full items-center p-4 border border-gray-300 rounded-lg shadow-lg">
    <h1 class="capitalize text-2xl font-bold text-center"><?= htmlspecialchars(ucfirst($moisData['mois']), ENT_QUOTES | ENT_SUBSTITUTE, 'UTF-8') ?></h1>
    <div class="w-[50%] flex gap-8 flex-col items-center">
        <h2 class="text-xl font-semibold mb-2">Nombre de nuitées en Occitanie</h2>
        <iframe class="w-full h-100" srcdoc="<?= htmlspecialchars($moisData['carte'], ENT_QUOTES | ENT_SUBSTITUTE, 'UTF-8') ?>" frameborder="0"></iframe>
    </div>
    <div class="w-full  grid grid-cols-2 gap-8">
      <span class="w-full flex flex-col items-center gap-5">
      <h2 class="text-xl font-semibold mb-2">Top 3 départements par nuitées :</h2>
  
      <div class="w-full" id="<?= htmlspecialchars(ucfirst($moisData['mois']), ENT_QUOTES | ENT_SUBSTITUTE, 'UTF-8') ?>"></div>
      
      </span>
      <span class="w-full flex flex-col items-center gap-5 ">
      <h2 class="text-xl font-semibold mb-2">Part des départements en nuitées :</h2>
  
      <div class="w-full" id="<?= htmlspecialchars(ucfirst($moisData['mois']), ENT_QUOTES | ENT_SUBSTITUTE, 'UTF-8') . "2" ?>"></div>
      
      </span>
      <span class="w-full flex flex-col items-center gap-5  ">
      <h2 class="text-xl font-semibold mb-2">Comparaison nuitées/capacité d'hébergement :</h2>
  
      <div class="w-full" id="<?= htmlspecialchars(ucfirst($moisData['mois']), ENT_QUOTES | ENT_SUBSTITUTE, 'UTF-8') . "3" ?>"></div>
      </span>
        <span class="w-full flex flex-col items-center gap-5 ">
      <h2 class="text-xl font-semibold mb-2 uppercase" id="part">é<span class="normal-case">volution du nombre de nuitées par département :</span> </h2>
      
          <form>
            <?php foreach (array_keys($donnees_tourisme_2018['Janvier']['2018-01-01']) as $data): ?>
              <?php if ($data !== 'Total Occitanie'): ?>
                <?php if ($data === $_COOKIE['departement']): ?>
            <input class="btn filter" type="radio" name="frameworks" aria-label="<?= htmlspecialchars(ucfirst($data), ENT_QUOTES | ENT_SUBSTITUTE, 'UTF-8') ?>" checked="checked" value="<?= htmlspecialchars(ucfirst($data), ENT_QUOTES | ENT_SUBSTITUTE, 'UTF-8')  ?>"/>  
               <?php else: ?>
            <input class="btn filter" type="radio" name="frameworks" aria-label="<?= htmlspecialchars(ucfirst($data), ENT_QUOTES | ENT_SUBSTITUTE, 'UTF-8') ?>" value="<?= htmlspecialchars(ucfirst($data), ENT_QUOTES | ENT_SUBSTITUTE, 'UTF-8') ?>"/>
                <?php endif; ?>
                <?php endif; ?>
            <?php endforeach; ?>
            <!-- <input class="btn btn-square" type="reset" value="×"/> -->
          </form>
     
 
      <div class="w-full" id="<?= htmlspecialchars(ucfirst($moisData['mois']), ENT_QUOTES | ENT_SUBSTITUTE, 'UTF-8') . "4" ?>"></div>
      </span>
    </div>
     <!--script du graphique bar  -->
  <script>

    // top 3 départements nuitées
    function graph1(){

      const options = {
      series: [{
        data: [<?= htmlspecialchars(ucfirst($moisData['1']['nuitées']), ENT_QUOTES | ENT_SUBSTITUTE, 'UTF-8') ?>, <?= htmlspecialchars(ucfirst($moisData['2']['nuitées']), ENT_QUOTES | ENT_SUBSTITUTE, 'UTF-8') ?>, <?= htmlspecialchars(ucfirst($moisData['3']['nuitées']), ENT_QUOTES | ENT_SUBSTITUTE, 'UTF-8') ?>]
      }],
      
      chart: {
        type: 'bar',
        height: 500,
        animations: {
          enabled: true,
          speed: 600,
          animateGradually: {
          enabled: true,
          delay: 150
          },
          dynamicAnimation: {
          enabled: true,
          speed: 350
          }
        }
      },
      plotOptions: {
        bar: {
          distributed: true,
        borderRadius: 4,
        borderRadiusApplication: 'end',
        horizontal: true,
          dataLabels: {
                position: 'center'
              },
        } ,
        
      },
      fill: {
      colors: ['#bd0026', '#f03b20', '#fd8d3c']
      },
    
      xaxis: {
        categories: ['<?= htmlspecialchars(ucfirst($moisData['1']['département']), ENT_QUOTES | ENT_SUBSTITUTE, 'UTF-8') ?>', '<?= htmlspecialchars(ucfirst($moisData['2']['département']), ENT_QUOTES | ENT_SUBSTITUTE, 'UTF-8') ?>', '<?= htmlspecialchars(ucfirst($moisData['3']['département']), ENT_QUOTES | ENT_SUBSTITUTE, 'UTF-8') ?>'],
      
        title:{
          text: 'Nombre de nuitées (en milliers)',
          style: {
            fontSize: '14px',
            fontWeight: 'bold',
            color: '#263238'
          }
        },  
        labels: {
          formatter: function (value) {
            return value/1000 + 'K';
          }
        }
      },
        legend: {
            show: true,
            showForSingleSeries: true,
            markers: {
              fillColors: ['#bd0026', '#f03b20', '#fd8d3c']
            }
          }
    
      }

      const chart = new ApexCharts(document.querySelector("#<?= htmlspecialchars(ucfirst($moisData['mois']), ENT_QUOTES | ENT_SUBSTITUTE, 'UTF-8') ?>"), options);

      chart.render();
    }
    // part des départements en nuitées
    function graph2(){
    
      <?php $nuiteeMois = $tabNuiteeParMois[ htmlspecialchars(ucfirst($moisData['mois']), ENT_QUOTES | ENT_SUBSTITUTE, 'UTF-8') ]; ?>
      <?php $departementNum = array_keys($nuiteeMois);  ?>
      const options = {
        series: [
          <?php foreach ($nuiteeMois as $nuitee): ?>

          <?= htmlspecialchars(ucfirst($nuitee['nuitees'])) ?>,

          <?php endforeach; ?>
        ],
          chart: {
            width: 550,
            type: 'donut',
            height: 500,
            animations: {
          enabled: true,
          speed: 600,
          animateGradually: {
          enabled: true,
          delay: 150
          },
          dynamicAnimation: {
          enabled: true,
          speed: 350
          }
        }
          },
          
          labels:[
          <?php foreach ($departementNum as $deptNum): ?>
          '<?= htmlspecialchars(ucfirst($deptNum), ENT_QUOTES | ENT_SUBSTITUTE, 'UTF-8') ?>',
          <?php endforeach; ?>
          ],
          theme: {
            monochrome: {
              enabled: true,
              color: '#bd0026',
              shadeTo: 'light',
              shadeIntensity: 0.65
            },
          },
          responsive: [{
            breakpoint: 480,
            options: {
            chart: {
            width: 200
            },
            legend: {
            position: 'bottom'
            }
            }
          }],
          
        };
        

      const chart = new ApexCharts(document.querySelector("#<?= htmlspecialchars(ucfirst($moisData['mois']), ENT_QUOTES | ENT_SUBSTITUTE, 'UTF-8') . "2" ?>"), options);
      chart.render();
    }
    function graph3(){
    
      <?php $nuiteeMois = $tabNuiteeParMois[ htmlspecialchars(ucfirst($moisData['mois']), ENT_QUOTES | ENT_SUBSTITUTE, 'UTF-8') ]; ?>
      <?php $departementNum = array_keys($nuiteeMois);  ?>
      const options = {
        series: [{
        name: 'Nuitées',  
        data: [
          <?php foreach ($nuiteeMois as $nuitee): ?>

          <?= htmlspecialchars(ucfirst($nuitee['nuitees'])) ?>,

          <?php endforeach; ?>
        ]
        },
        {
          name: 'Capacité d\'hébergement',
          data: [
            <?php foreach ($nuiteeMois as $nuitee): ?>
              <?= htmlspecialchars(ucfirst($nuitee["hebergement"]["total"])) ?>,
          <?php endforeach; ?>
          ],
          
        },
        
        ],
          chart: {
            type: 'bar',
            height: 500,
            zoom: {
              enabled: true
            },
            animations: {
          enabled: true,
          speed: 600,
          animateGradually: {
          enabled: true,
          delay: 150
          },
          dynamicAnimation: {
          enabled: true,
          speed: 350
          }
        }
          },
          plotOptions: {
            bar: {
              
              horizontal: false,
              columnWidth: '55%',
              borderRadius: 5,
              borderRadiusApplication: 'end'
            },
          },
          colors: ['#bd0026', '#f03b20'],
          labels:[
          <?php foreach ($departementNum as $deptNum): ?>
          '<?= htmlspecialchars(ucfirst($deptNum), ENT_QUOTES | ENT_SUBSTITUTE, 'UTF-8') ?>',
          <?php endforeach; ?>
          ],
          yaxis: {
            labels: {
                    formatter: function (value) {
                      return value/1000 + 'K';
                    }
        }
          },
       
          dataLabels: {
            enabled: false
          },
            stroke: {
            show: true,
            width: 2,
            colors: ['transparent']
          },
        tooltip: {
            y: {
              formatter: function (val) {
                return   val 
              }
            }
          }
        
          
        };
        

      const chart = new ApexCharts(document.querySelector("#<?= htmlspecialchars(ucfirst($moisData['mois']), ENT_QUOTES | ENT_SUBSTITUTE, 'UTF-8') . "3" ?>"), options);
      chart.render();
    }
    function graph4(){
    
      <?php $nuiteeMois = $tabNuiteeParMois[ htmlspecialchars(ucfirst($moisData['mois']), ENT_QUOTES | ENT_SUBSTITUTE, 'UTF-8') ]; ?>
      <?php $moisSemaine = $donnees_tourisme_2018[htmlspecialchars(ucfirst($moisData['mois']), ENT_QUOTES | ENT_SUBSTITUTE, 'UTF-8')] ?>
      <?php $departementNum = array_keys($nuiteeMois);  ?>
      const options = {
          series: [{
          name: 'Total de nuitées',
          type: 'area',
          data: [<?php foreach ($moisSemaine as $semaineData): ?>
            <?= htmlspecialchars(ucfirst($semaineData['Total Occitanie']), ENT_QUOTES | ENT_SUBSTITUTE, 'UTF-8') ?>,
          <?php endforeach; ?>]
        }, {
          name: 'Nuitées <?= htmlspecialchars(ucfirst($_COOKIE['departement']), ENT_QUOTES | ENT_SUBSTITUTE, 'UTF-8') ?>',
          type: 'line',
          data: [<?php foreach ($moisSemaine as $semaineData): ?>
            <?= htmlspecialchars(ucfirst($semaineData[$_COOKIE['departement']]), ENT_QUOTES | ENT_SUBSTITUTE, 'UTF-8') ?>,
          <?php endforeach; ?>]
        }],
          chart: {
          height: 500,
          type: 'line',
        },
        stroke: {
          curve: 'smooth'
        },
        fill: {
          type:'solid',
          opacity: [0.10, 1],
        },
        labels: [
          <?php foreach (array_keys($moisSemaine) as $semaine): ?>
            '<?= htmlspecialchars(ucfirst($semaine), ENT_QUOTES | ENT_SUBSTITUTE, 'UTF-8') ?>', 
          <?php endforeach; ?>
        ],
        markers: {
          size: 0
        },
        yaxis: [
          
          {
            title: {
              text: 'Total de nuitées',
            },
            labels: {
          formatter: function (value) {
            return value/1000 + 'K';
          }
        }
          },
          {
            opposite: true,
            title: {
              text: 'Nuitées <?= htmlspecialchars(ucfirst($_COOKIE['departement']), ENT_QUOTES | ENT_SUBSTITUTE, 'UTF-8') ?>',
            },
            labels: {
          formatter: function (value) {
            return value/1000 + 'K';
          }
        }
          },
          {
           
             
          },
        ],
        tooltip: {
          shared: true,
          intersect: false,
          y: {
            formatter: function (y) {
              if(typeof y !== "undefined") {
                return  y.toFixed(0) + " nuitées";
              }
              return y;
            }
          }
        },
        colors: ['#bd0026', '#f08f20ff', ]
        };

        

      const chart = new ApexCharts(document.querySelector("#<?= htmlspecialchars(ucfirst($moisData['mois']), ENT_QUOTES | ENT_SUBSTITUTE, 'UTF-8') . "4" ?>"), options);
      chart.render();
    }
    graph1();
    graph2();
    graph3();
    graph4();
  </script>

</article>

</section>

<script>

  function updateGraph() {

    const radios = document.querySelectorAll('.filter');

    radios.forEach(radio => {
      radio.addEventListener('change', () => {
      document.cookie = `departement=${radio.value}; path=/`;
         
         window.location.reload();
         
       onload(window.scrollTo(0, radio.offsetTop - 100));
        console.log('Selected department:', radio.value);
        
      });
    });


  }
  updateGraph();

</script>
<?php 
require_once 'layout/footer.php';
?>