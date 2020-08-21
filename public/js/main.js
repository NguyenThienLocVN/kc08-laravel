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

  // Click toggle show map control
  $("#btn-toggle-map").click(function() {
    // $('.map-control').animate({width: 'toggle'});
    $('.map-control').toggle();
    $(this).find('i').toggleClass('fa-chevron-left fa-chevron-right');
    $(this).toggleClass('btn-hide-map btn-show-map');
    var toggleWidth;
    console.log($(".map-control").css('display'));
    if($(".map-control").css('display') == 'none'){
        toggleWidth = "100%";
    }
    else {
        toggleWidth = "75%";
    }
    $('#mapid').animate({ width: toggleWidth });
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
    success:function(data){console.log(window.location.href+"/"+id)
    //  Show station name
    $('#rainfallModalLabel').html("Biểu đồ lưu lượng bùn cát tại trạm "+data.station[0].Station_Name);

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

     $('#container').highcharts({
      title: {
        text: 'BIỂU ĐỒ SỐ LIỆU BÙN CÁT'
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
      var filterArrayByInput = data.muddySand.slice(indexOfInputFrom, indexOfInputTo);

      var filterMuddySandByInput = [];
      filterArrayByInput.forEach(function(e){
        filterMuddySandByInput.push(e.Result);
      })

      var filterDateByInput = [];
      filterArrayByInput.forEach(function(e){
        filterDateByInput.push(e.Date_Time);
      })

      var chart = $('#container').highcharts();
      chart.series[0].setData(filterMuddySandByInput);
      chart.xAxis[0].setCategories(filterDateByInput);
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
