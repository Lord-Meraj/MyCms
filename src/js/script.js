function RemoveMenu(menuId) {
  var xmlhttp = new XMLHttpRequest();
  xmlhttp.onreadystatechange = function () {
    $("#remove"+menuId).modal("toggle");
    // $(".Menu-"+menuId).addClass("d-none");
    $(".Menu-"+menuId).remove();
  };
  xmlhttp.open("GET", "/MYCMS/Admin/Action/RemoveMenu.php?id="+menuId);
  xmlhttp.send();
}


$('.owl-carousel').owlCarousel({
  rtl:true,
  center: true,
  items:2,
  loop:true,
  margin:50,
});