jQuery(function($){
  // Click to show menu on mobile
  $('.fa-align-justify').click(function(){
    $("#sidebar-left-mobile").slideToggle();
  })

  // Click to show submenu on mobile
  $('.has-sub').click(function(){
    const target = $(this).next(".submenu");
    $(target).slideToggle();
  });

  // Click to show sub-submenu on mobile
  $('.has-sub-sub').click(function(){
    const target = $(this).next(".sub-submenu");
    $(target).slideToggle();
  });

  // Hide column title of danh sach tram
  $('.list-station table tbody .row:first-child td:last-child').empty();

  // Change caret when click
  $("#sidebar-left-mobile .has-sub").click(function(){
    $(this).find('i').toggleClass('fa-caret-down fa-caret-right');
  })
  $("#sidebar-left-mobile .has-sub-sub").click(function(){
    $(this).find('i').toggleClass('fa-caret-down fa-caret-right');
  })

  // Click toggle show map control
  $("#btn-toggle-map").click(function() {
    // $('.map-control').animate({width: 'toggle'});
    $('.map-control').toggle();
    $(this).find('i').toggleClass('fa-chevron-left fa-chevron-right');
    $(this).toggleClass('btn-hide-map btn-show-map');
    let toggleWidth;
    if ($(".map-control").css('display') === 'none') {
      toggleWidth = "100%";
      toggleLeft = "0";
    } else {
      toggleWidth = "75%";
      toggleLeft = "25%";
    }
    $('#mapid').animate({ left: toggleLeft });
    $('#mapid').animate({ width: toggleWidth });

  });

  $('#start-picker').datepicker({
    showOn: "button",
    dateFormat: 'dd/mm/yy',
    buttonText: '<i class="fa fa-calendar" aria-hidden="true"></i>'
  });

  $('#end-picker').datepicker({
    showOn: "button",
    dateFormat: 'dd/mm/yy',
    buttonText: '<i class="fa fa-calendar" aria-hidden="true"></i>'
  });
})

const loadMuddySand = (id) => {
    $.ajax({
    url:window.location.href+"/"+id, // đường dẫn khi gửi dữ liệu đi 'search' là tên route mình đặt bạn mở route lên xem là hiểu nó là cái j.
    method:"GET", // phương thức gửi dữ liệu.
    // beforeSend: function () {
    //   $(".loading-gif").show();
    //   $('#overlay').show();
    // },
    // complete:function(data){
    //   $(".loading-gif").hide();
    // },
    data:{id:id},
    success:function(data){
    //  Show station name
    $('#rainfallModalLabel').html("TỔNG HỢP SỐ LIỆU BÙN CÁT TRẠM "+data.station[0].Station_Name);
    $('#station-value').html(data.station[0].Station_Name);
    $('#longitude-value').html(data.station[0].Longitude);
    $('#latitude-value').html(data.station[0].Latitude);
    $('#river-value').html(data.station[0].Basin_Name);

    const arrayDate = [];
    // Get array of all date
     data.muddySand.forEach(function(e){
      arrayDate.push(e.Date_Time);
     })

    // Get the last date in data, and retrieved 90 days earlier
    const fromDate = arrayDate[arrayDate.length - 90];
    const toDate = arrayDate[arrayDate.length - 1];

    // Set that values for input
    document.getElementById('start-picker').value = fromDate;
    document.getElementById('end-picker').value = toDate;

    // Get index of this date in data
    const indexOfFrom = arrayDate.indexOf(fromDate);
    const indexOfTo = arrayDate.indexOf(toDate) + 1;

    // Filter data by fromDate and toDate
    const filterArray = data.muddySand.slice(indexOfFrom, indexOfTo);

    const filterMuddySand = [];
    filterArray.forEach(function(e){
      filterMuddySand.push(e.Result);
    })

    const filterDate = [];
    filterArray.forEach(function(e){
      filterDate.push(e.Date_Time);
    })

    //  Max do duc trong thang
     function maxOfMonth(month){
       return Math.max.apply(Math, month);
     }

     //  Min do duc trong thang
     function minOfMonth(month){
      return Math.min.apply(Math, month);
    }

     // Do duc trung binh cua thang
      function averageOfMonth(month){
        var sum = 0;
        var avg;

        for(var i = 0; i < month.length; i++)
        {
          sum += parseFloat(month[i]);
          avg = sum / month.length;
        } return avg;
      }

      // Get data of month by index
      var JanuaryTurbidity, FebruaryTurbidity, MarchTurbidity, AprilTurbidity, MayTurbidity, JuneTurbidity, JulyTurbidity, AugustTurbidity, SeptemberTurbidity, OctorberTurbidity, NovemberTurbidity, DecemberTurbidity;
      var muddySandOfYear = [], arrayDateOfYear = [];
      function getMonthData(year){
        var indexOfFirstDay = arrayDate.indexOf("01/01/"+year);
        var indexOfLastDay = arrayDate.indexOf("31/12/"+year)+1;
        const filterArray = data.muddySand.slice(indexOfFirstDay, indexOfLastDay);

        filterArray.forEach(function(e){
          muddySandOfYear.push(e.Result);
        })

        filterArray.forEach(function(e){
          arrayDateOfYear.push(e.Date_Time);
        })

        JanuaryTurbidity = muddySandOfYear.slice(0,31);

        if(startYear % 4 === 0){
          FebruaryTurbidity = muddySandOfYear.slice(31, 60);
          MarchTurbidity = muddySandOfYear.slice(60, 91);
          AprilTurbidity = muddySandOfYear.slice(91, 121);
          MayTurbidity = muddySandOfYear.slice(121, 152);
          JuneTurbidity = muddySandOfYear.slice(152, 182);
          JulyTurbidity = muddySandOfYear.slice(182, 213);
          AugustTurbidity = muddySandOfYear.slice(213, 244);
          SeptemberTurbidity = muddySandOfYear.slice(244, 274);
          OctorberTurbidity = muddySandOfYear.slice(274, 305);
          NovemberTurbidity = muddySandOfYear.slice(305, 335);
          DecemberTurbidity = muddySandOfYear.slice(335, 366);
        }
        else
        {
          FebruaryTurbidity = muddySandOfYear.slice(31, 59);
          MarchTurbidity = muddySandOfYear.slice(59, 90);
          AprilTurbidity = muddySandOfYear.slice(90, 120);
          MayTurbidity = muddySandOfYear.slice(120, 151);
          JuneTurbidity = muddySandOfYear.slice(151, 181);
          JulyTurbidity = muddySandOfYear.slice(181, 212);
          AugustTurbidity = muddySandOfYear.slice(212, 243);
          SeptemberTurbidity = muddySandOfYear.slice(243, 273);
          OctorberTurbidity = muddySandOfYear.slice(273, 304);
          NovemberTurbidity = muddySandOfYear.slice(304, 334);
          DecemberTurbidity = muddySandOfYear.slice(334, 365);
        }
      }

      // Do duc trung binh nam
     function averageTurbidityOfYear(year){
      getMonthData(year);
      var avgMonth = [averageOfMonth(JanuaryTurbidity).toFixed(1), averageOfMonth(FebruaryTurbidity).toFixed(1),
        averageOfMonth(MarchTurbidity).toFixed(1), averageOfMonth(AprilTurbidity).toFixed(1), averageOfMonth(MayTurbidity).toFixed(1),
        averageOfMonth(JuneTurbidity).toFixed(1), averageOfMonth(JulyTurbidity).toFixed(1), averageOfMonth(AugustTurbidity).toFixed(1),
        averageOfMonth(SeptemberTurbidity).toFixed(1), averageOfMonth(OctorberTurbidity).toFixed(1), averageOfMonth(NovemberTurbidity).toFixed(1),
        averageOfMonth(DecemberTurbidity).toFixed(1) ];

      var avgTurbidityOfYear = [];
      avgMonth.forEach(function(e){
        avgTurbidityOfYear.push(parseFloat(e))
      })
      return avgTurbidityOfYear;
     }

     function indexOfMaxInMonth(month, value){
      return month.indexOf(value);
     }

    //  Do duc lon nhat nam
     function maxTurbidityOfYear(year){
      getMonthData(year);
      var maxMonth = [maxOfMonth(JanuaryTurbidity).toFixed(1), maxOfMonth(FebruaryTurbidity).toFixed(1),
        maxOfMonth(MarchTurbidity).toFixed(1), maxOfMonth(AprilTurbidity).toFixed(1), maxOfMonth(MayTurbidity).toFixed(1),
        maxOfMonth(JuneTurbidity).toFixed(1), maxOfMonth(JulyTurbidity).toFixed(1), maxOfMonth(AugustTurbidity).toFixed(1),
        maxOfMonth(SeptemberTurbidity).toFixed(1), maxOfMonth(OctorberTurbidity).toFixed(1), maxOfMonth(NovemberTurbidity).toFixed(1),
        maxOfMonth(DecemberTurbidity).toFixed(1) ]

        var maxValue = Math.max.apply(Math, maxMonth);
        var indexOfMaxValue = muddySandOfYear.indexOf(maxValue);
        var dateMaxOfYear = arrayDateOfYear[indexOfMaxValue];

        $('#max-value').html(maxValue);
        $('#max-date').html(dateMaxOfYear);

        var maxxTurbidityOfYear = [];
        maxMonth.forEach(function(e){
          maxxTurbidityOfYear.push(parseFloat(e))
        });

        return maxxTurbidityOfYear;
     }

    //  Do duc nho nhat nam
     function minTurbidityOfYear(year){
      getMonthData(year);
      var minMonth = [minOfMonth(JanuaryTurbidity).toFixed(1), minOfMonth(FebruaryTurbidity).toFixed(1),
        minOfMonth(MarchTurbidity).toFixed(1), minOfMonth(AprilTurbidity).toFixed(1), minOfMonth(MayTurbidity).toFixed(1),
        minOfMonth(JuneTurbidity).toFixed(1), minOfMonth(JulyTurbidity).toFixed(1), minOfMonth(AugustTurbidity).toFixed(1),
        minOfMonth(SeptemberTurbidity).toFixed(1), minOfMonth(OctorberTurbidity).toFixed(1), minOfMonth(NovemberTurbidity).toFixed(1),
        minOfMonth(DecemberTurbidity).toFixed(1) ];

        var minValue = Math.min.apply(Math, minMonth);
        var indexOfMinValue = muddySandOfYear.indexOf(minValue);
        var dateMinOfYear = arrayDateOfYear[indexOfMinValue];

        $('#min-value').html(minValue);
        $('#min-date').html(dateMinOfYear);

        var minnTurbidityOfYear = [];
        minMonth.forEach(function(e){
          minnTurbidityOfYear.push(parseFloat(e))
        });

        return minnTurbidityOfYear;
     }

    var startYear = document.getElementById('start-picker').value.slice(-4);
    var endYear = document.getElementById('end-picker').value.slice(-4);
    
    if(startYear == endYear)
    {
      averageTurbidityOfYear(startYear);
      maxTurbidityOfYear(startYear);
      minTurbidityOfYear(startYear);
    }

    // Draw line chart 
     $('#muddy-sand-container').highcharts({
      title: {
        text: 'BIỂU ĐỒ ĐỘ ĐỤC BÙN CÁT NGÀY'
      },

      yAxis: {
          title: {
              text: '(g/m3)'
          }
      },

      xAxis: {
          gridLineWidth: 1,
          categories: filterDate,
      },

      legend: {
          layout: 'vertical',
          align: 'right',
          verticalAlign: 'middle'
      },

      plotOptions: {
          series: {
              label: {
                  connectorAllowed: false
              },
          }
      },

      series: [{
              name: 'Độ đục',
              data: filterMuddySand
          },
      ],

      responsive: {
          rules: [{
              condition: {
                  maxWidth: 550
              }
          }]
      }
    });

    // Draw avg colummn chart
    $('#avg-chart').highcharts({
      chart: {
        type: 'column'
      },
      title: {
        text: 'BIỂU ĐỒ ĐỘ ĐỤC TRUNG BÌNH THÁNG / NĂM'
      },
    xAxis: {
        categories: [
            'I',
            'II',
            'III',
            'IV',
            'V',
            'VI',
            'VII',
            'VIII',
            'IX',
            'X',
            'XI',
            'XII'
        ],
        crosshair: true
    },
    series: [{
        name: "Độ đục",
        data: averageTurbidityOfYear(startYear)
    }]
    })

    // Draw max colummn chart
    $('#max-chart').highcharts({
      chart: {
        type: 'column'
    },
    title: {
      text: 'BIỂU ĐỒ ĐỘ ĐỤC LỚN NHẤT THÁNG NĂM'
    },
    xAxis: {
        categories: [
          'I',
          'II',
          'III',
          'IV',
          'V',
          'VI',
          'VII',
          'VIII',
          'IX',
          'X',
          'XI',
          'XII'
      ],
        crosshair: true
    },
    series: [{
        name: "Độ đục",
        data: maxTurbidityOfYear(startYear)
    }]
    })

    // Draw min colummn chart
    $('#min-chart').highcharts({
      chart: {
        type: 'column'
    },
    title: {
      text: 'BIỂU ĐỒ ĐỘ ĐỤC NHỎ NHẤT THÁNG NĂM'
    },
    xAxis: {
        categories: [
          'I',
          'II',
          'III',
          'IV',
          'V',
          'VI',
          'VI',
          'VII',
          'IX',
          'X',
          'XI',
          'XII'
      ],
        crosshair: true
    },
    series: [{
        name: "Độ đục",
        data: minTurbidityOfYear(startYear)
    }]
    })

    // Filter by date picker
    document.getElementById('search-rain-btn').addEventListener('click', function(){
      var inputFrom = document.getElementById('start-picker').value;
      var inputTo = document.getElementById('end-picker').value;

      // Get index
      var indexOfInputFrom = arrayDate.indexOf(inputFrom);
      var indexOfInputTo = arrayDate.indexOf(inputTo) + 1;

      // Filter data
      var filterArrayByInput = data.muddySand.slice(indexOfInputFrom, indexOfInputTo);

      var filterMuddySandByInput = [];
      filterArrayByInput.forEach(function(e){
        filterMuddySandByInput.push(e.Result);
      })

      var filterDateByInput = [];
      filterArrayByInput.forEach(function(e){
        filterDateByInput.push(e.Date_Time);
      })

      var chart = $('#muddy-sand-container').highcharts();
      chart.series[0].setData(filterMuddySandByInput);
      chart.xAxis[0].setCategories(filterDateByInput);


    var startTime = new Date(inputFrom)
    var endTime = new Date(inputTo)
    var startYear = startTime.getFullYear();
    var endYear = endTime.getFullYear();
    if(startYear === endYear)
    {
      averageTurbidityOfYear(startYear);
      maxTurbidityOfYear(startYear);
    }
    else {
      var sum = [0,0,0,0,0,0,0,0,0,0,0,0];
      var avg = [];
      for(var j = 0; j < 12; j++)
      {
        for(var i=startYear; i<=endYear; i++)
        {
          sum[j] += parseFloat(averageTurbidityOfYear(i)[j])
        }
        avg[j] = (sum[j] / (endYear - startYear + 1)).toFixed(1)
      }


      // Max
      var max = [0,0,0,0,0,0,0,0,0,0,0,0];
      for(var j = 0; j < 12; j++)
      {
        for(var i=startYear; i<=endYear; i++)
        {
          if(max[j] < parseFloat(maxTurbidityOfYear(i)[j]))
          {
            max[j] = parseFloat(maxTurbidityOfYear(i)[j])
          }
        }
      }
      console.log(max);
    }
    })
   }
 });
}

const openMuddySand = (id) => {
  loadMuddySand(id);

  // $("#myForm").show();
  // $("#overlay").show();
}

function closeForm() {
  $("#myForm").hide();
  $("#overlay").hide();
}
