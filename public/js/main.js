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

  $('[data-toggle="season-info"]').popover();
})