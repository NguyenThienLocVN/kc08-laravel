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
    

    var arrayDate = [];
    var indexOfFrom;

     data.rainFall.forEach(function(e){
      arrayDate.push(e.Date_Time);
     })

    var fromDate = arrayDate[arrayDate.length - 90];
    var toDate = arrayDate[arrayDate.length - 1];

    document.getElementById('start-picker').value = fromDate;
    document.getElementById('end-picker').value = toDate;

     indexOfFrom = arrayDate.indexOf('2004-12-31');
     console.log(indexOfFrom)

     var rain = [];
     data.rainFall.forEach(function(e){
      rain.push(e.Result);
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
          categories: arrayDate,
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
              data: rain
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

    //  Show station name
     $('#station-name').html(data.station[0].Station_Name);
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