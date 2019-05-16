<!-- pagina principal home : include('pages.home')-> include('includes.tarefapp')-->
<!-- pagina principal home : include('pages.home')-> include('includes.modal')-->

    <!-- Modal Adicionar tarefas-->
    <div class="modal fade bd-example-modal-lg small lh-125" id="modal-default" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel"
        aria-hidden="true">
        <div class="modal-dialog modal-lg">
            <div class="modal-content">

                <!-- titulo -->
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalCenterTitle">Sinopse</h5>
                   
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>

                </div>
                <!-- corpo -->
                <div class="modal-body">
				<h4 class="modal-title" >Criatividade</h4>
                    <p>A força da criatividade </p>
					<p>Ser criativo  </p>
				<h4 class="modal-title" >Pensamento concreto e pensamento difuso Paradigmas</h4>
                    <p>Quebra de paradigmas </p>
				<h4 class="modal-title" >Como estimular a mente criativa</h4>
                    <p>Associação</p>
					<p>Organização </p>
 

O mundo da magia e a criatividade 
                        
                    </div>
                </div>
            </div>
        </div>
    </div>
@section('js')


<script> 


$('.date').datepicker({  

    format: 'yyyy-mm-dd'

});  


$( document ).ready(function() {

    $('#typeProject').on('change', function(e){

        document.getElementById("area").innerHTML = "";
        $('#area').append(new Option("Selecione uma opçao", "a"));

        var typeProject_id = e.target.value;
        $.ajax({
            'processing': true,
            'serverSide': false,
            type: "GET",
            url: "/typeprojects/"+typeProject_id+"/areas",
            success: function(s) {
                $.each(s, function(index,area){
                    var option = new Option(area.name,area.id);
                    $('#area').append(option);
                });
            }
        });
    });

    $('#area').on('change', function(e){

        console.log(`teste`);
        document.getElementById("projeto").innerHTML = "";
        $('#projeto').append(new Option("Selecione uma opçao", "a"));

        var areaProject_id = e.target.value;
        $.ajax({
            'processing': true,
            'serverSide': false,
            type: "GET",
            url: "/areaprojects/"+areaProject_id+"/projects",
            success: function(s) {
                $.each(s, function(index,projeto){
                    var option = new Option(projeto.name,projeto.id);
                    $('#projeto').append(option);
                });
            }
        });
    });

})


</script>
    @stop
    <!-- Calendário boostrap 4 https://investmentnovel.com/how-to-use-bootstrap-datepicker-in-laravel/ -->
