@include('carteira.includes.header')

      <!-- Assets of Fullcalendar -->
     
      <!-- End of Assets of Fullcalendar -->

<!-- comment-->
    <!-- Page Wrapper -->
<div id="wrapper">
       <!-- Sidebar -->
        @include('carteira.includes.sidebar')
    <!-- End of Sidebar -->

    <div id="content-wrapper" class="d-flex flex-column">

                    <!-- Main Content -->
                    <div id="content">

                        <!-- Topbar -->
                            @include('carteira.includes.top-bar')
        
                        <!-- End of Topbar -->

                        <div class="container-fluid">
                            <div class="card shadow">
                                <div class="card-header text-white" style="background: #3d2822">
                                    <h4> Calendário de Eventos  </h4>
                                </div>
                                <div class="card-body">

                                    <div class="col-md-11 container">
                                        <div id="calendar"></div>
                                    </div>

                                    
                                </div>
                            </div>

                        </div>
                    </div>
    </div>
</div>

<style>
    .fc-center{
        text-transform: capitalize !important;
    }
</style>


<script>
    $(document).ready(function () {
        var calendar = $('#calendar').fullCalendar({
            editable:true,
            header:{
                left:'prev,next today',
                right:'month,agendaWeek,agendaDay',
                center: 'title'
            },

            defaultView: 'month',
            events:'/carteira/artista/ver/calendario/'+{{$id}},
            selectable:true,
            selectHelper: true,
            select:function(start, end, allDay)
            {

                //var title = prompt('Event Title:');

                $("#formSaveEvent").modal('show');

                if(title){

                    $('#start').val($.fullCalendar.formatDate(start, 'YYYY-MM-DD hh:mm:ss'));
                    $('#end').val($.fullCalendar.formatDate(end, 'YYYY-MM-DD hh:mm:ss'));

                    //var start = $.fullCalendar.formatDate(start, 'YYYY-MM-DD hh:mm:ss');
                    //var end = $.fullCalendar.formatDate(end, 'YYYY-MM-DD hh:mm:ss');

                    $.ajax({
                        url:"{{route('event.store.house.event') }}",
                        type:"POST",
                        headers:{
                            'X-CSRF-TOKEN' : $('meta[name="csrf-token"]').attr('content')
                        },
                        data:{
                            title: title,
                            start: start,
                            end: end,
                            type: 'add'
                        },
                        success:function(data){
                            calendar.fullCalendar('refetchEvents');
                            alert("Event created");
                        }
                    })
                }
            },
            editable:true,
            eventResize: function(event, delta)
            {
                var start = $.fullCalendar.formatDate(event.start, 'Y-MM-DD HH:mm:ss');
                var end = $.fullCalendar.formatDate(event.end, 'Y-MM-DD HH:mm:ss');
                var title = event.title;
                var id = event.id;
                $.ajax({
                    url:"{{ route('event.store.house.event') }}",
                    type:"POST",
                    headers:{
                        'X-CSRF-TOKEN' : $('meta[name="csrf-token"]').attr('content')
                    },
                    data:{
                        title: title,
                        start: start,
                        end: end,
                        id: id,
                        type: 'update'
                    },
                    success:function(response)
                    {
                        calendar.fullCalendar('refetchEvents');
                        alert("Event updated");
                    }
                })
            },
            eventDrop: function(event, delta)
            {
                // var start = $.fullCalendar.formatDate(event.start, 'Y-MM-DD HH:mm:ss');
                 var start = moment().format(event.start,'YYYY-MM-DD h:mm');
                 var start = moment().format(event.end,'YYYY-MM-DD h:mm');
                // var end = $.fullCalendar.formatDate(event.end, 'Y-MM-DD HH:mm:ss');
                var title = event.title;
                var id = event.id;
                $.ajax({
                    url:"{{ route('event.store.house.event') }}",
                    type:"POST",
                    headers:{
                        'X-CSRF-TOKEN' : $('meta[name="csrf-token"]').attr('content')
                    },
                    data:{
                        title: title,
                        start: start,
                        end: end,
                        id: id,
                        type: 'update'
                    },
                    success:function(response)
                    {
                        calendar.fullCalendar('refetchEvents');
                        alert("Event updated");
                    }
                })
            },
            eventClick:function(event)
            {
                if(confirm("Deseja remover o evento?"))
                {
                    var id = event.id;
                    $.ajax({
                        url:"{{route('event.store.house.event') }}",
                        type:"POST",
                        headers:{
                            'X-CSRF-TOKEN' : $('meta[name="csrf-token"]').attr('content')
                        },
                        data:{
                            id:id,
                            type:"delete"
                        },
                        success:function(response){
                            calendar.fullCalendar('refetchEvents');
                            alert("Event deleted");
                        }
                    })
                }
            }

        });
    });

    


</script>

