
function flashy(message, link) {
        var template = $($("#flashy-template").html());
        $(".flashy").remove();
        template.find(".flashy__body").html(message).attr("href", link || "#").end()
         .appendTo("body").hide().fadeIn(1000).delay(4000).animate({
            marginRight: "-100%"
        }, 2000, "swing", function() {
            $(this).remove();
        });
    }

$(document).ready(function(){
  $("#flip").click(function(){
    $("#panel").slideToggle("slow");
    $("#panel2").slideUp("slow");
    $("#panel3").slideUp("slow");

  });
});

$(document).ready(function(){
  $("#flip2").click(function(){
    $("#panel2").slideToggle("slow");
    $("#panel").slideUp("slow");
    $("#panel3").slideUp("slow");

  });
});
$(document).ready(function(){
  $('table').attr('class','table-hover table table-striped table-bordered')
});
$(document).ready(function(){
  $("#flip3").click(function(){
    $("#panel3").slideToggle("slow");
    $("#panel").slideUp("slow");
    $("#panel2").slideUp("slow");

  });
});
function openOnglet(ongletName) {
  var i;
  var x = document.getElementsByClassName("onglet");
  for (i = 0; i < x.length; i++) {
    x[i].style.display = "none";  
  }
  document.getElementById(ongletName).style.display = "block";  
}
 // function show_nav() {
 //      document.getElementById("accordionSidebar").style.marginLeft="0px"
 //      document.getElementById("accordionSidebar").style.Transition="5s all";
 //    }
    
 //    document.getElementById("load" ).addEventListener("click", displayLoader);
 //    function displayLoader() {
 //        document.querySelector('#ajaxLoader').style.display="flex";
 //    }


