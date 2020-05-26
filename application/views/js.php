
  <!-- container section start -->

  <!-- javascripts -->
  <script src="<?php echo base_url()?>aset/js/jquery.js"></script>
  <script src="<?php echo base_url()?>aset/js/jquery-ui-1.10.4.min.js"></script>
  <script src="<?php echo base_url()?>aset/js/jquery-1.8.3.min.js"></script>
  <script type="<?php echo base_url()?>aset/text/javascript" src="js/jquery-ui-1.9.2.custom.min.js"></script>
  <!-- bootstrap -->
  <script src="<?php echo base_url()?>aset/js/bootstrap.min.js"></script>
  <!-- nice scroll -->
  <script src="<?php echo base_url()?>aset/js/jquery.scrollTo.min.js"></script>
  <script src="<?php echo base_url()?>aset/js/jquery.nicescroll.js" type="text/javascript"></script>
  <!-- charts scripts -->
  <script src="<?php echo base_url()?>aset/assets/jquery-knob/js/jquery.knob.js"></script>
  <script src="<?php echo base_url()?>aset/js/jquery.sparkline.js" type="text/javascript"></script>
  <script src="<?php echo base_url()?>aset/assets/jquery-easy-pie-chart/jquery.easy-pie-chart.js"></script>
  <script src="<?php echo base_url()?>aset/js/owl.carousel.js"></script>
  <!-- jQuery full calendar -->
  <<script src="<?php echo base_url()?>aset/js/fullcalendar.min.js"></script>
    <!-- Full Google Calendar - Calendar -->
    <script src="<?php echo base_url()?>aset/assets/fullcalendar/fullcalendar/fullcalendar.js"></script>
    <!--script for this page only-->
    <script src="<?php echo base_url()?>aset/js/calendar-custom.js"></script>
    <script src="<?php echo base_url()?>aset/js/jquery.rateit.min.js"></script>
    <!-- custom select -->
    <script src="<?php echo base_url()?>aset/js/jquery.customSelect.min.js"></script>
    <script src="<?php echo base_url()?>aset/assets/chart-master/Chart.js"></script>

    <!--custome script for all page-->
    <script src="<?php echo base_url()?>aset/js/scripts.js"></script>
    <!-- custom script for this page-->
    <script src="<?php echo base_url()?>aset/js/sparkline-chart.js"></script>
    <script src="<?php echo base_url()?>aset/js/easy-pie-chart.js"></script>
    <script src="<?php echo base_url()?>aset/js/jquery-jvectormap-1.2.2.min.js"></script>
    <script src="<?php echo base_url()?>aset/js/jquery-jvectormap-world-mill-en.js"></script>
    <script src="<?php echo base_url()?>aset/js/xcharts.min.js"></script>
    <script src="<?php echo base_url()?>aset/js/jquery.autosize.min.js"></script>
    <script src="<?php echo base_url()?>aset/js/jquery.placeholder.min.js"></script>
    <script src="<?php echo base_url()?>aset/js/gdp-data.js"></script>
    <script src="<?php echo base_url()?>aset/js/morris.min.js"></script>
    <script src="<?php echo base_url()?>aset/js/sparklines.js"></script>
    <script src="<?php echo base_url()?>aset/js/charts.js"></script>
    <script src="<?php echo base_url()?>aset/js/jquery.slimscroll.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/chart.js@2.8.0"></script>

    <script>
      //knob
      $(function() {
        $(".knob").knob({
          'draw': function() {
            $(this.i).val(this.cv + '%')
          }
        })
      });

      //carousel
      $(document).ready(function() {
        $("#owl-slider").owlCarousel({
          navigation: true,
          slideSpeed: 300,
          paginationSpeed: 400,
          singleItem: true

        });


        var ctx = document.getElementById('myChart').getContext('2d');
        var chart = new Chart(ctx, {
            // The type of chart we want to create
            type: 'line',

            // The data for our dataset
            data: {
                labels: <?php echo $grafik['labels']?>,
                datasets: [{
                    label: 'Grafik Hasil Peramalan',
                    backgroundColor: 'rgb(255, 99, 132)',
                    borderColor: 'rgb(255, 99, 132)',
                    data: <?php echo $grafik['data']?>
                }]
            },

            // Configuration options go here
            options: {}
        });
      });

      //custom select box

      $(function() {
        $('select.styled').customSelect();
      });

      /* ---------- Map ---------- */
      $(function() {
        $('#map').vectorMap({
          map: 'world_mill_en',
          series: {
            regions: [{
              values: gdpData,
              scale: ['#000', '#000'],
              normalizeFunction: 'polynomial'
            }]
          },
          backgroundColor: '#eef3f7',
          onLabelShow: function(e, el, code) {
            el.html(el.html() + ' (GDP - ' + gdpData[code] + ')');
          }
        });
      });
    </script>
