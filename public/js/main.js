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
    success:function(data){ //dữ liệu nhận về
      
    // Get date and send to input hidden
    var date = "";
     data.filterRain.forEach(function(e){
      console.log(e.Date_Time)
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
          categories: ['1/1/1961', '1/1/1962', '1/1/1963', '1/1/1964', '1/1/1965', '1/1/1966', '1/1/1967', '1/1/1968', '1/1/1969', '1/1/1970', '1/1/1971', '1/1/1972'],
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
              data: [0, 1.2, 2, 3.8, 1, 2, 5, 3]
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