jQuery(function($){
  // Click to show menu on mobile
  $('.fa-align-justify').click(function(){
    $("#sidebar-left-mobile").slideToggle();
  })

  // Click to show submenu on mobile
  $('.has-sub').click(function(){
    var target = $(this).next(".submenu");
    $(target).slideToggle();
  });

  // Click to show sub-submenu on mobile
  $('.has-sub-sub').click(function(){
    var target = $(this).next(".sub-submenu");
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
})

function loadRainfall(id){
  
  $.ajax({
    url:"danh-sach-tram/"+id, // đường dẫn khi gửi dữ liệu đi 'search' là tên route mình đặt bạn mở route lên xem là hiểu nó là cái j.
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
    $('#station-name').html(data.station[0].Station_Name);

    var arrayDate = [];

    // Get array of all date
     data.rainFall.forEach(function(e){
      arrayDate.push(e.Date_Time);
     })

    // Get the last date in data, and retrieved 90 days earlier
    var fromDate = arrayDate[arrayDate.length - 90];
    var toDate = arrayDate[arrayDate.length - 1];

    // Set that values for input
    document.getElementById('start-picker').value = fromDate;
    document.getElementById('end-picker').value = toDate;

    // Get index of this date in data
    var indexOfFrom = arrayDate.indexOf(fromDate);
    var indexOfTo = arrayDate.indexOf(toDate) + 1;
  
    // Filter data by fromDate and toDate
    var filterArray = data.rainFall.slice(indexOfFrom, indexOfTo)

    var filterRain = [];
    filterArray.forEach(function(e){
      filterRain.push(e.Result);
     })
    
    var filterDate = [];
    filterArray.forEach(function(e){
      filterDate.push(e.Date_Time);
     })

     $('#container').highcharts({
      title: {
        text: 'BIỂU ĐỒ LƯỢNG MƯA TRẠM'
      },

      yAxis: {
          title: {
              text: 'Lượng mưa (mm)'
          }
      },

      xAxis: {
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
              name: 'Nước mưa',
              data: filterRain
          },
      ],

      responsive: {
          rules: [{
              condition: {
                  maxWidth: 500
              },
              chartOptions: {
                  legend: {
                      layout: 'horizontal',
                      align: 'center',
                      verticalAlign: 'bottom'
                  }
              }
          }]
      }
    });

    // Filter by date picker
    document.getElementById('search-rain-btn').addEventListener('click', function(){
      var inputFrom = document.getElementById('start-picker').value;
      var inputTo = document.getElementById('end-picker').value;

      // Get index
      var indexOfInputFrom = arrayDate.indexOf(inputFrom);
      var indexOfInputTo = arrayDate.indexOf(inputTo) + 1;

      // Filter data
      var filterArrayByInput = data.rainFall.slice(indexOfInputFrom, indexOfInputTo);

      var filterRainByInput = [];
      filterArrayByInput.forEach(function(e){
        filterRainByInput.push(e.Result);
      })
      
      var filterDateByInput = [];
      filterArrayByInput.forEach(function(e){
        filterDateByInput.push(e.Date_Time);
      })

      var chart = $('#container').highcharts();
      chart.series[0].setData(filterRainByInput);
      chart.xAxis[0].setCategories(filterDateByInput);
    })
   }
 });
}

function openForm(id) {
  loadRainfall(id);

  $("#myForm").show();
  $("#overlay").show();
}

function closeForm() {
  $("#myForm").hide();
  $("#overlay").hide();
}