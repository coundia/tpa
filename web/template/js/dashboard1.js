

// Dashboard 1 Morris-chart

Morris.Area({
        element: 'morris-area-chart',
        data: [{
            period: '2010',
            arachide: 50,
            mangue: 80,
            ble: 20
        }, {
            period: '2011',
            arachide: 130,
            mangue: 100,
            ble: 80
        }, {
            period: '2012',
            arachide: 80,
            mangue: 60,
            ble: 70
        }, {
            period: '2013',
            arachide: 70,
            mangue: 200,
            ble: 140
        }, {
            period: '2014',
            arachide: 180,
            mangue: 150,
            ble: 140
        }, {
            period: '2015',
            arachide: 105,
            mangue: 100,
            ble: 80
        },
         {
            period: '2016',
            arachide: 250,
            mangue: 150,
            ble: 200
        }],
        xkey: 'period',
        ykeys: ['arachide', 'mangue', 'ble'],
        labels: ['arachide', 'mangue', 'ble'],
        pointSize: 3,
        fillOpacity: 0,
        pointStrokeColors:['#aec9cb', '#cbb2ae', '#85b4d0'],
        behaveLikeLine: true,
        gridLineColor: '#e0e0e0',
        lineWidth: 3,
        hideHover: 'auto',
        lineColors: ['#aec9cb', '#cbb2ae', '#85b4d0'],
        resize: true
        
    });

Morris.Area({
        element: 'morris-area-chart2',
        data: [{
            period: '2010',
            SiteA: 0,
            SiteB: 0,
            
        }, {
            period: '2011',
            SiteA: 130,
            SiteB: 100,
            
        }, {
            period: '2012',
            SiteA: 80,
            SiteB: 60,
            
        }, {
            period: '2013',
            SiteA: 70,
            SiteB: 200,
            
        }, {
            period: '2014',
            SiteA: 180,
            SiteB: 150,
            
        }, {
            period: '2015',
            SiteA: 105,
            SiteB: 90,
            
        },
         {
            period: '2016',
            SiteA: 250,
            SiteB: 150,
           
        }],
        xkey: 'period',
        ykeys: ['SiteA', 'SiteB'],
        labels: ['Site A', 'Site B'],
        pointSize: 0,
        fillOpacity: 0.7,
        pointStrokeColors:['#ccc', '#cbb2ae'],
        behaveLikeLine: true,
        gridLineColor: '#e0e0e0',
        lineWidth: 0,
        smooth: false,
        hideHover: 'auto',
        lineColors: ['#ccc', '#cbb2ae'],
        resize: true
        
    });

 
 $('.vcarousel').carousel({
            interval: 3000
         })
$(".counter").counterUp({
        delay: 100,
        time: 1200
    });

$(document).ready(function() {
    
   var sparklineLogin = function() { 
        $('#sales1').sparkline([20, 40, 30], {
            type: 'pie',
            height: '120',
            resize: true,
            sliceColors: ['#aec9cb', '#7d6f82', '#ffffff']
        });
        $('#sparkline2dash').sparkline([6, 10, 9, 11, 9, 10, 12], {
            type: 'bar',
            height: '154',
            barWidth: '4',
            resize: true,
            barSpacing: '10',
            barColor: '#fff'
        });
        
   }
    var sparkResize;
 
        $(window).resize(function(e) {
            clearTimeout(sparkResize);
            sparkResize = setTimeout(sparklineLogin, 500);
        });
        sparklineLogin();

});