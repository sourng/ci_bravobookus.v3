<!DOCTYPE html>
<html lang="en">
<head>


<?php include_once('inc/head_script.php'); ?>
<link rel="shortcut icon" href="<?php echo base_url() ?>public/img/favicon.ico" type="image/x-icon">
<!-- DateTime -->
<link rel="stylesheet" href="https://formden.com/static/cdn/bootstrap-iso.css" /> 

 <!-- Main Style -->
 <link rel="stylesheet" href="<?php echo base_url(); ?>front/assets/css/main-style.css">
<!-- Bus -->
<script type="text/javascript">
  $(document).ready(function () {
    <?php 
      echo "directions=".$origins;
    ?>    
  
   for (var i = 0; i < directions.length; i++)
    {
        // directions[i].value = directions[i].firstName + " " + directions[i].lastName + " " + directions[i].origin;
    
        // $img='<img src="'+ directions[i].imgUrl +'"/>';
        // if(directions[i].origin !="Batman"){
            directions[i].value = directions[i].origin  ;
            $direct_id=directions[i].id ;
        // }
        // alert($direct_id);
        
    }    
      $("#txtBusOrigin").autocomplete({
        source: directions,
        // minLength: 0,
        minLength: 0,
        focus: function (event, ui) {
            $("#txtBusOrigin").val(ui.item.origin) 
            
            return false;
        },
        select: function (event, ui) {
            // location.href = ui.item.imgUrl;
            // return false;

            
            $('#txtBusDestination').focus();
            var id=ui.item.id;            
             $('#bus_from').val(id);
            // alert(ui.item.id);
        },
    }).bind('focus', function(){ $(this).autocomplete("search");} )
    .autocomplete("instance")._renderItem = function (ul, item) {
        var $li = $("<li>");

        var BusDestination=$('#txtBusDestination').val(); //Get Value from Destination
        if(item.origin !=BusDestination){    // Selected Item destination not show          
        $li.addClass("searchItem");

        $outerDiv = $("<div>");
        $outerDiv.appendTo($li);

        // $imageDiv = $("<div>");
        // $imageDiv.addClass("contactImageDiv");
        // $imageDiv.appendTo($outerDiv);

        // $img = $("<img>");
        // $img.addClass("contactImage");
        // $img.attr("src", item.imgUrl);
        // $img.appendTo($imageDiv);
        
        $name = $("<div>");
        $name.addClass("nameDiv");
        // $name.append(item.firstName + " " + item.lastName + "<br/><span style='font-style:italic'>" + item.origin + "</span>");
        $name.append(item.origin + "<br><span class='fa fa-map-marker' style='color:green;font-style:italic; font-size:12px; padding-top:30xp;'>"+ " " + item.country + "</span>");
        $name.appendTo($outerDiv);        
        }     

        $li.appendTo(ul);
        
        return  $li;
    };


    // Destinations
    $("#txtBusDestination").autocomplete({
        source: directions,
        minLength: 0,
        focus: function (event, ui) {
            $("#txtBusDestination").val(ui.item.origin)

            return false;
        },
        select: function (event, ui) {
            // location.href = ui.item.imgUrl;
            // return false;
             $('#txtBusDate').focus() //set forcus to Date

              var id=ui.item.id;            
             $('#bus_to').val(id);
        },
    }).bind('focus', function(){ $(this).autocomplete("search"); } )
    .autocomplete("instance")._renderItem = function (ul, item) {
        var $li = $("<li>");
        var BusOrigin=$('#txtBusOrigin').val(); //Get Value from Destination
        if(item.origin !=BusOrigin){    // Selected Item destination not show 
            $li.addClass("searchItem");

        $outerDiv = $("<div>");
        $outerDiv.appendTo($li);

        // $imageDiv = $("<div>");
        // $imageDiv.addClass("contactImageDiv");
        // $imageDiv.appendTo($outerDiv);

        // $img = $("<img>");
        // $img.addClass("contactImage");
        // $img.attr("src", item.imgUrl);
        // $img.appendTo($imageDiv);

        $name = $("<div>");
        $name.addClass("nameDiv");
        // $name.append(item.firstName + " " + item.lastName + "<br/><span style='font-style:italic'>" + item.origin + "</span>");
        $name.append(item.origin + "<br><span style='color:green;font-style:italic; font-size:12px; padding-top:30xp;'>" + item.country + "</span>");
        
        $name.appendTo($outerDiv);
        }
        
        $li.appendTo(ul);
        return $li;
    };    
})
</script>
<!-- // Bus -->
<!-- Private Taxies -->
<script type="text/javascript">
  $(document).ready(function () {
    <?php 
      echo "directions=".$origins;
    ?>    
  
   for (var i = 0; i < directions.length; i++)
    {
        // directions[i].value = directions[i].firstName + " " + directions[i].lastName + " " + directions[i].origin;
    
        // $img='<img src="'+ directions[i].imgUrl +'"/>';
        // if(directions[i].origin !="Batman"){
            directions[i].value = directions[i].origin ;
            // directions[i].value=directions[i].id;
        // }
        // alert(directions[i].value);
        
    }    
      $("#txtPrivateTaxiOrigin").autocomplete({
        source: directions,
        // minLength: 0,
        minLength: 0,
        focus: function (event, ui) {
            $("#txtPrivateTaxiOrigin").val(ui.item.origin) 
            // $("#bus_from").val(ui.item.id)

            return false;
        },
        select: function (event, ui) {
            // location.href = ui.item.imgUrl;
            // return false;
            
            $('#txtPrivateTaxiDestination').focus() 
        },
    }).bind('focus', function(){ $(this).autocomplete("search");} )
    .autocomplete("instance")._renderItem = function (ul, item) {
        var $li = $("<li>");

        var BusDestination=$('#txtPrivateTaxiDestination').val(); //Get Value from Destination
        if(item.origin !=BusDestination){    // Selected Item destination not show          
        $li.addClass("searchItem");

        $outerDiv = $("<div>");
        $outerDiv.appendTo($li);

        // $imageDiv = $("<div>");
        // $imageDiv.addClass("contactImageDiv");
        // $imageDiv.appendTo($outerDiv);

        // $img = $("<img>");
        // $img.addClass("contactImage");
        // $img.attr("src", item.imgUrl);
        // $img.appendTo($imageDiv);
        
        $name = $("<div>");
        $name.addClass("nameDiv");
        // $name.append(item.firstName + " " + item.lastName + "<br/><span style='font-style:italic'>" + item.origin + "</span>");
        $name.append(item.origin + "<br><span class='fa fa-map-marker' style='color:green;font-style:italic; font-size:12px; padding-top:30xp;'>"+ " " + item.country + "</span>");
        $name.appendTo($outerDiv);        
        }     

        $li.appendTo(ul);
        
        return  $li;
    };


    // Destinations
    $("#txtPrivateTaxiDestination").autocomplete({
        source: directions,
        minLength: 0,
        focus: function (event, ui) {
            $("#txtPrivateTaxiDestination").val(ui.item.origin)
            $("#bus_to").val(ui.item.id)

            return false;
        },
        select: function (event, ui) {
            // location.href = ui.item.imgUrl;
            // return false;
             $('#txtPrivateTaxiDate').focus() //set forcus to Date
        },
    }).bind('focus', function(){ $(this).autocomplete("search"); } )
    .autocomplete("instance")._renderItem = function (ul, item) {
        var $li = $("<li>");
        var BusOrigin=$('#txtPrivateTaxiOrigin').val(); //Get Value from Destination
        if(item.origin !=BusOrigin){    // Selected Item destination not show 
            $li.addClass("searchItem");

        $outerDiv = $("<div>");
        $outerDiv.appendTo($li);

        // $imageDiv = $("<div>");
        // $imageDiv.addClass("contactImageDiv");
        // $imageDiv.appendTo($outerDiv);

        // $img = $("<img>");
        // $img.addClass("contactImage");
        // $img.attr("src", item.imgUrl);
        // $img.appendTo($imageDiv);

        $name = $("<div>");
        $name.addClass("nameDiv");
        // $name.append(item.firstName + " " + item.lastName + "<br/><span style='font-style:italic'>" + item.origin + "</span>");
        $name.append(item.origin + "<br><span style='color:green;font-style:italic; font-size:12px; padding-top:30xp;'>" + item.country + "</span>");
        
        $name.appendTo($outerDiv);
        }
        
        $li.appendTo(ul);
        return $li;
    };    
})
</script>
<!-- // Private taxies -->


</head>
<body>
 
<!-- Nav -->
<?php include_once('inc/nav.php'); ?>
<!-- End Nav -->
<div class="container"> 
     <?php     
    include_once('inc/search.php');
     ?>
</div>
 


<div class="container">
<div class="row">
	<div class="col-md-12">
		<ul class="breadcrumb">
		<li><?php echo $this->lang->line('breadcrumb_here'); ?></li>
		<li><a href="<?php echo site_url();?>"><?php echo $this->lang->line('breadcrumb_home'); ?></a></li>
		<!-- <li><a href="#">Summer 15</a></li> -->
		<li><?php echo substr($this->uri->segment(1),0,-5); ?></li>
	</ul>
	</div>


 <div class="col-sm-8" style="margin-top: 0px;">  
 	<?php 
  echo "<h1 class='breadcrumb'>". $page_detail[0]['page_description']."</h1>";
 // echo "<h3>". $this->session->userdata('site_lang') ."</h3>"; // Call Session Name
  //echo "<h3>". $langs ."</h3>";

	// echo $page_detail[0]['page_description'];
	echo $page_detail[0]['page_detail'];

  ?>
    <img src="<?php echo base_url(); ?>front/images/standard_bookmebus-home-page-cover-limited.png" alt="Norway" style="width:100%;">    
  </div>

<div class="col-sm-4" style="color: black;text-align: left; margin-top: 10px;">
        <section class="links tips">
          <h3 class="section-heading text-highlight">
          <div class="section-content">
          	<div id="fb-root"></div>
<script>(function(d, s, id) {
  var js, fjs = d.getElementsByTagName(s)[0];
  if (d.getElementById(id)) return;
  js = d.createElement(s); js.id = id;
  js.src = 'https://connect.facebook.net/en_US/sdk.js#xfbml=1&version=v2.12&appId=1664205676971856&autoLogAppEvents=1';
  fjs.parentNode.insertBefore(js, fjs);
}(document, 'script', 'facebook-jssdk'));</script>

            <div class="fb-page" data-href="https://www.facebook.com/sengsourng/" data-tabs="messages" data-width="330" data-small-header="false" data-adapt-container-width="true" data-hide-cover="false" data-show-facepile="true"><blockquote cite="https://www.facebook.com/sengsourng/" class="fb-xfbml-parse-ignore"><a href="https://www.facebook.com/sengsourng/">Seng Sourng</a></blockquote></div>
        </section><!--//links-->
</div>

</div>
</div>
<!--  Main Rood -->

<div class="container">
  <hr>
  <?php
  include_once('inc/main_road.php');
  ?>
</div>
<!-- End main Road -->


<div class="m-t-3"></div>

<footer class="mainfooter" role="contentinfo" style="background-color: #002663;color: white;">
 
  <div class="footer-middle" >
  <div class="container">
    <div class="row">
      <div class="col-md-3 col-sm-6">
        <!--Column1-->
        <div class="footer-pad">
          <h4>Address</h4>
          <address style="color:#146eb4;">
                <ul >
                  <div>
                    Siem Reap City,
                    Road #6<br>
                    Krong Siem Reap 17251,<br>
                    Kingdom of Cambodia<br>
                  </div>
                  <div>
                    Phone: (855)92 77 12 44
                  </div>
                </ul>
              </address>
        </div>
      </div>
      <div class="col-md-3 col-sm-6">
        <!--Column1-->
        <div class="footer-pad">
          <h4>Popular Services</h4>
          <ul >           
            <li><a href="#">Payment Center</a></li>
            <li><a href="#">Contact Directory</a></li>
            <li><a href="#">Forms</a></li>
            <li><a href="#">News and Updates</a></li>
            <li><a href="#">FAQs</a></li>
          </ul>
        </div>
      </div>
      <div class="col-md-3 col-sm-6">
        <!--Column1-->
        <div class="footer-pad">
          <h4>Website Information</h4>
          <ul>
            <li><a href="#">Website Tutorial</a></li>
            <li><a href="#">Accessibility</a></li>
            <li><a href="#">Disclaimer</a></li>
            <li><a href="#">Privacy Policy</a></li>
            <li><a href="#">FAQs</a></li>
            <li><a href="#">Webmaster</a></li>
          </ul>
        </div>
      </div>
      <div class="col-md-3 col-sm-6">
        <!--Column1-->
        <div class="footer-pad">
          <h4>Popular Routes</h4>
          <ul >
            <li><a href="#">Phnom Penh - Battambang</a></li>
            <li><a href="#">Phnom Penh - Siem Reap</a></li>
            <li><a href="#">Phnom Penh - Sihanuk</a></li>
            <li><a href="#">Phnom Penh - Kompong Cham</a></li>
            <li><a href="#">Phnom Penh - Hanoi</a></li>
          
          </ul>
        </div>
      </div>
    </div>
  </div>
  </div>

</footer>
 <div class="footer-bottom" style="background-color: #0B5345; padding-bottom: 15px; padding-top: 15px; color: white;">
    <div class="container">
      <div class="row">
        <div class="col-xs-12">
          <!--Footer Bottom-->
          <p class="text-xs-center" style="color:white;">&copy; Copyright 2016 - City of USA.  All rights reserved.</p>
        </div>
      </div>
    </div>
  </div>




  <script>
function openCity(cityName,elmnt,color) {
    var i, tabcontent, tablinks;
    tabcontent = document.getElementsByClassName("tabcontent");
    for (i = 0; i < tabcontent.length; i++) {
        tabcontent[i].style.display = "none";
    }
    tablinks = document.getElementsByClassName("tablink");
    for (i = 0; i < tablinks.length; i++) {
        tablinks[i].style.backgroundColor = "";
    }
    document.getElementById(cityName).style.display = "block";
    elmnt.style.backgroundColor = color;

}
// Get the element with id="defaultOpen" and click on it
document.getElementById("defaultOpen").click();
</script>
<!-- Script Slide -->
<script>
var slideIndex = 1;
showSlides(slideIndex);

function plusSlides(n) {
  showSlides(slideIndex += n);
}

function currentSlide(n) {
  showSlides(slideIndex = n);
}

function showSlides(n) {
  var i;
  var slides = document.getElementsByClassName("mySlides");
  var dots = document.getElementsByClassName("dot");
  if (n > slides.length) {slideIndex = 1}    
  if (n < 1) {slideIndex = slides.length}
  for (i = 0; i < slides.length; i++) {
      slides[i].style.display = "none";  
  }
  for (i = 0; i < dots.length; i++) {
      dots[i].className = dots[i].className.replace(" active", "");
  }
  slides[slideIndex-1].style.display = "block";  
  dots[slideIndex-1].className += " active";
}
</script>



<script type="text/javascript">
  // Switch Option
    $('#btnBusSwap').on('click',function (){
        // var id=$(this).attr('datasearch');
        var dd =$('#txtBusOrigin').val();
        var to=$('#txtBusDestination').val();
        var tmp='';
        //alert(dd);
        tmp=to;
        $('#txtBusDestination').val($('#txtBusOrigin').val());
        $('#txtBusOrigin').val(tmp);
  });

  $('#btnBusRemoveOrigin').on('click',function(){
    var emp='';
    $('#txtBusOrigin').val(emp);
    // alert("Remove");
  });

   $('#btnBusRemoveDestination').on('click',function(){
    var emp='';
    $('#txtBusDestination').val(emp);
    // alert("Remove");
  });


</script>


<!-- Date Time -->
<!-- Include jQuery -->
<script type="text/javascript" src="https://code.jquery.com/jquery-1.11.3.min.js"></script>

<!-- Include Date Range Picker -->
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.4.1/js/bootstrap-datepicker.min.js"></script>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.4.1/css/bootstrap-datepicker3.css"/>

<script>
  $(document).ready(function(){
    var date_input=$('input[name="date"]'); //our date input has the name "date"
    var container=$('.bootstrap-iso form').length>0 ? $('.bootstrap-iso form').parent() : "body";
    date_input.datepicker({
      // format: 'dd/mm/yyyy',
      format: 'yyyy-mm-dd',
      container: container,
      todayHighlight: true,
      autoclose: true,
    })
  });

    $(document).ready(function(){
    var date_input=$('input[name="txtBusDate"]'); //our date input has the name "date"
    var container=$('.bootstrap-iso form').length>0 ? $('.bootstrap-iso form').parent() : "body";


    date_input.datepicker({
      format: 'yyyy-mm-dd',
      container: container,
      todayHighlight: true,
      autoclose: true,
      startDate: truncateDate(new Date()) // <-- THIS WORKS
    })

    $('#date').datepicker('setStartDate', truncateDate(new Date())); // <-- SO DOES THIS


  });

   

    // Icon click
    $('#btnBusShowCalendar').on('click',function(){ 
      $('#txtBusDate').focus()  
       
    });


    // `Private Taxi Date
   $(document).ready(function(){
    var date_input_PrivateTaxiDate=$('input[name="txtPrivateTaxiDate"]'); //our date input has the name "date"
    var container=$('.bootstrap-iso form').length>0 ? $('.bootstrap-iso form').parent() : "body";
    date_input_PrivateTaxiDate.datepicker({
      format: 'yyyy-mm-dd',
      container: container,
      todayHighlight: true,
      autoclose: true,
      startDate: truncateDate(new Date()) // <-- THIS WORKS
    })

    $('#txtPrivateTaxiDate').datepicker({
      format: "yyyy-mm-dd"
    }).on('change', function(){
        $('.datepicker').hide();
    });

    $('#txtPrivateTaxiDate').datepicker('setStartDate', truncateDate(new Date())); // <-- SO DOES THIS
  });

   

    // txtPrivateTaxiDate Icon Click
    $('#btnPrivateTaxiShowCalendar').on('click',function(){ 
          $('#txtPrivateTaxiDate').focus()    
      });

function truncateDate(date) {
  return new Date(date.getFullYear(), date.getMonth(), date.getDate());
}

</script>

<script src="<?php echo base_url(); ?>front/assets/search/js/jquery-ui.min.js"></script>

  
<script>

// Carousel Auto-Cycle
  $(document).ready(function() {
    $('.carousel').carousel({
      interval: 6000
    })
  });



// News
$(document).ready(function(ev){
    $('#custom_carousel').on('slide.bs.carousel', function (evt) {
      $('#custom_carousel .controls li.active').removeClass('active');
      $('#custom_carousel .controls li:eq('+$(evt.relatedTarget).index()+')').addClass('active');
    })
});

$(document).ready(function(){
    $('[data-toggle="tooltip"]').tooltip(); 
});

</script>


<!-- Popup Form -->
<script>
// Get the modal
var modal = document.getElementById('myLogin');

// Get the button that opens the modal
var btn = document.getElementById("myLogin");

// Get the <span> element that closes the modal
var span = document.getElementsByClassName("close")[0];

// When the user clicks the button, open the modal 
btn.onclick = function() {
    modal.style.display = "block";
}

// When the user clicks on <span> (x), close the modal
span.onclick = function() {
    modal.style.display = "none";
}

// When the user clicks anywhere outside of the modal, close it
window.onclick = function(event) {
    if (event.target == modal) {
        modal.style.display = "none";
    }
}
</script>
<!-- End Popup Form -->

</body>
</html>
