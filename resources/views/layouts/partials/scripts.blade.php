<!-- jQuery 3 -->
<script src="{{ asset ('js/jquery.min.js') }}"></script>
<script src="{{ asset ('js/jquery-ui.min.js') }}"></script>
<!-- Bootstrap -->
<script src="{{ asset ('js/bootstrap.js') }}"></script>
<!-- Toastr -->
<script src="{{'js/toastr.min.js'}}"></script>
<!-- datepicker -->
<script src="{{ asset ('js/bootstrap-datepicker/prettify.js') }}"></script>
<script src="{{ asset ('js/bootstrap-datepicker/bootstrap-datepicker.min.js') }}"></script>
<script src="{{ asset ('js/bootstrap-timepicker/bootstrap-timepicker.js') }}"></script>
<!-- Dashbord -->
<script type="text/javascript" src="{{asset('js/chart/Chart.js')}}"></script>
<script type="text/javascript" src="{{asset('js/myjs.js')}}"></script>
<div style="float: center;"> @include('flashy::message')</div>
<script>
	//Confirmation suppression cheque
	function confirmSup(){
	 var x = confirm("êtes vous sûr de vouloir supprimer cet élément ?");
      if (x){
          return true;
      }else{
          return false;	    
      }
	 }
	$(document).ready(function(){

   //Date picker
    $('#datePayeCheq').datepicker({
		format: 'dd/mm/yyyy',
		weekStart: 1,
		autoclose: true
    });
	
});
/*
        'Bar',
        'Bubble',
        'Doughnut',
        'Line',
        'PolarArea',
        'Radar',
        'Scatter'
        'pie'
*/
$(document).ready(function(){
var ctx = document.getElementById('myChart3');
var bfv = $("#bfv").val();
var boa = $("#boa").val();
var bni = $("#bni").val();
var myChart = new Chart(ctx, {
    type: 'pie',
    data: {
        labels: ['BFV-SG','BOA','BNI'],
        datasets: [{
            label: '# of Votes',
            data: [bfv, boa, bni],
           backgroundColor:[
                            '#bb0b0b',
                            '#126d43',
                            '#005edc'
                            ],
            borderColor:[
                            '#bb0b0b',
                            '#126d43',
                            '#005edc'
                            ],
            borderWidth: 1
        }],
         
    },
    options: {
        scales: {
            yAxes: [{
                ticks: {
                    beginAtZero: true
                }
            }]
        }
    }
});

});

</script>