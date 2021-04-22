var App_charts = function () {
    let first = function(){
        $.ajax({
            //busca eventos
            url: APP_URL + '/charts/first',
            dataType: 'json',
            type : "GET",
            success: function (response) {
                Highcharts.chart('first', {
                    colors:['#28a745','#dc3545'],
                    chart: {
                        type: 'column'
                    },
                    title: {
                        text: ''
                    },
                    xAxis: {
                        categories: response.labels,
                        crosshair: true
                    },
                    yAxis: {
                        min: 0,
                        title: {
                            text: 'R$ '
                        }
                    },
                    tooltip: {
                        formatter: function () {
                            return '<b>' + this.series.name + '</b><br/>R$ ' +
                                parseFloat(this.point.y).toFixed(2).replace('.', ','); + ' ' + this.point.name.toLowerCase();
                        }
                    },
                    plotOptions: {
                        column: {
                            pointPadding: 0.2,
                            borderWidth: 0
                        }
                    },
                    series: [{
                        name: 'Receitas',
                        data: response.enter

                    }, {
                        name: 'Despesas',
                        data: response.out
                    }]
                });
            }
        })
    }
    let second = function(){
        $.ajax({
            //busca eventos
            url: APP_URL + '/charts/second',
            dataType: 'json',
            type : "GET",
            success: function (response) {
                console.log(response)
                Highcharts.chart('second', {
                    chart: {
                        type: 'column'
                    },
                    title: {
                        text: ''
                    },
                    accessibility: {
                        announceNewData: {
                            enabled: true
                        }
                    },
                    xAxis: {
                        type: 'category'
                    },
                    yAxis: {
                        title: {
                            text: 'Locações por ambiente'
                        }

                    },
                    legend: {
                        enabled: false
                    },
                    plotOptions: {
                        series: {
                            borderWidth: 0,
                            dataLabels: {
                                enabled: true,
                                format: '{point.y:.1f}%'
                            }
                        }
                    },

                    tooltip: {
                        headerFormat: '<span style="font-size:11px">{series.name}</span><br>',
                        pointFormat: '<span style="color:{point.color}">{point.name}</span>: <b>{point.y:.2f}%</b> of total<br/>'
                    },

                    series: [
                        {
                            name: "Ambiente",
                            colorByPoint: true,
                            data: response.data
                        }
                    ],
                });

            },
            error: function (response) {
                console.log(response)
            }
        })
    }
    let third = function(){
        $.ajax({
            //busca eventos
            url: APP_URL + '/charts/third',
            dataType: 'json',
            type : "GET",
            success: function (response) {
                Highcharts.chart('third', {
                    colors:response.color,
                    chart: {
                        plotBackgroundColor: null,
                        plotBorderWidth: null,
                        plotShadow: false,
                        type: 'pie'
                    },
                    title: {
                        text: ''
                    },
                    tooltip: {
                        pointFormat: '{series.name}: <b>{point.percentage:.1f}%</b>'
                    },
                    accessibility: {
                        point: {
                            valueSuffix: '%'
                        }
                    },
                    plotOptions: {
                        pie: {
                            allowPointSelect: true,
                            cursor: 'pointer',
                            dataLabels: {
                                enabled: true,
                                format: '<b style="font-size:8pt;">{point.name}</b>: {point.percentage:.1f} %'
                            }
                        }
                    },
                    series: [{
                        name: 'Porcentagem',
                        colorByPoint: true,
                        data: response.name
                    }]
                });
            },
        })
    }
    let four = function(){
        $.ajax({
            //busca eventos
            url: APP_URL + '/charts/four',
            dataType: 'json',
            type : "GET",
            success: function (response) {
                console.log(response)
                Highcharts.chart('four', {
                    chart: {
                        plotBackgroundColor: null,
                        plotBorderWidth: null,
                        plotShadow: false,
                        type: 'pie'
                    },
                    title: {
                        text: ''
                    },
                    tooltip: {
                        pointFormat: '{series.name}: <b>{point.percentage:.1f}%</b>'
                    },
                    accessibility: {
                        point: {
                            valueSuffix: '%'
                        }
                    },
                    plotOptions: {
                        pie: {
                            allowPointSelect: true,
                            cursor: 'pointer',
                            dataLabels: {
                                enabled: true,
                                format: '<b style="font-size:8pt;">{point.name}</b>: {point.percentage:.1f} %'
                            }
                        }
                    },
                    series: [{
                        name: 'Porcentagem',
                        colorByPoint: true,
                        data: response.name
                    }]
                });
            },
            error: function (response) {
                console.log(response)
            }
        })
    }
    return{
      init: function(){
        first()
        second()
        third()
        four()
      }
    }
  }()

  jQuery(document).ready(function(){
    App_charts.init();
  })
