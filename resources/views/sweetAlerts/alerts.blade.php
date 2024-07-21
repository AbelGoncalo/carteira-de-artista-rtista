<!-- Success Sweet-Alert-Message -->
@if(session('message'))
    <script>
    Swal.fire({
       title: 'Atenção!',
       text: "{!!session('message')!!}",
       position: 'center',
       icon: 'success',
       //iconColor: '#AB6364',
       showCloseButton: true,
       showConfirmButton: false,

    })
    </script>
@endif


<!-- Success Sweet-Alert-Comprovativo enviado -->
@if(session('receptionPaimentReceipt'))
    <script>
    Swal.fire({
       title: 'Atenção!',
       text: "{!!session('receptionPaimentReceipt')!!}",
       position: 'center',
       icon: 'success',
       //iconColor: '#AB6364',
       showCloseButton: true,
       showConfirmButton: false,

    })
    </script>
@endif
<!-- End session comprovativo enviado -->



@if(session('sucesso'))
    <script>
    Swal.fire({
       title: 'Sucesso!',
       text: "{!!session('sucesso')!!}",
       position: 'center',
       icon: 'success',
       //iconColor: '#AB6364',
       showCloseButton: true,
       showConfirmButton: false,

    })
    </script>
    
@endif

@if(session('sentContrato'))
    <script>
    Swal.fire({
       title: 'Sucesso!',
       text: "{!!session('sentContrato')!!}",
       position: 'center',
       icon: 'success',
       //iconColor: '#AB6364',
       showCloseButton: true,
       showConfirmButton: false,

    })
    </script>
    
@endif

@if(session('teste'))
    <script>
    Swal.fire({
       title: 'Sucesso!',
       text: "{!!session('teste')!!}",
       position: 'center',
       icon: 'success',
       //iconColor: '#AB6364',
       showCloseButton: true,
       showConfirmButton: false,

    })
    </script>
    
@endif






@if(session('catch'))
    <script>
    Swal.fire({
       title: 'Erro!',
       text: "{!!session('catch')!!}",
       position: 'center',
       icon: 'error',
       iconColor: '#AB6364',
       showCloseButton: true,
       showConfirmButton: false,

    })
    </script>
@endif
    <!-- Success Sweet-Alert-Message -->

@if(session('inviteDone'))
    <script>
    Swal.fire({
       title: 'Sucesso!',
       text: "{!!session('inviteDone')!!}",
       position: 'center',
       icon: 'success',
       iconColor: '#AB6364',
       showCloseButton: true,
       showConfirmButton: false,

    })
    </script>
@endif
    <!-- Success Sweet-Alert-Message -->


<!-- Success Sweet-Alert-Message -->
@if(session('sentMessage'))
    <script>
    Swal.fire({
       title: 'Atenção!',
       text: "{!!session('sentMessage')!!}",
       position: 'center',
       icon: 'success',
       iconColor: '#AB6364',
       showCloseButton: true,
       showConfirmButton: false,

    })
    </script>
@endif
<!-- Success Sweet-Alert-Message -->


<!-- Success Sweet-Alert-Message -->
@if(session('eventCreated'))
    <script>
    Swal.fire({
       title: 'Atenção!',
       text: "{!!session('eventCreated')!!}",
       position: 'center',
       icon: 'success',
       iconColor: '#AB6364',
       showCloseButton: true,
       showConfirmButton: false,

    })
    </script>
@endif
<!-- Success Sweet-Alert-Message -->

<!-- Success Sweet-Alert-Message To create UserAdminToCarteira -->
@if(session('successToCreateUserAdminCarteira'))
    <script>
    Swal.fire({
       title: 'Atenção!',
       text: "{!!session('successToCreateUserAdminCarteira')!!}",
       position: 'center',
       icon: 'success',
       iconColor: '#AB6364',
       showCloseButton: true,
       showConfirmButton: false,

    })
    </script>
@endif
<!-- End of Success Sweet-Alert-Message To create UserAdminToCarteira -->


<!-- Success Sweet-Alert-Message -->
@if(session('houseOfEventCreatedByPromotor'))
    <script>
    Swal.fire({
       title: 'Atenção!',
       text: "{!!session('houseOfEventCreatedByPromotor')!!}",
       position: 'center',
       icon: 'success',
       iconColor: '#AB6364',
       showCloseButton: true,
       showConfirmButton: false,

    })
    </script>
@endif
<!-- Success Sweet-Alert-Message -->



<!-- Success Sweet-Alert Apresenta a mensagem quando a casa de evento cria a sua conta -->
@if(session('messageCasaEvento'))
    <script>
    Swal.fire({
       title: 'Atenção!',
       text: "{!!session('messageCasaEvento')!!}",
       position: 'center',
       icon: 'success',
       //iconColor: '#AB6364',
       showCloseButton: true,
       showConfirmButton: false,

    })
    </script>
@endif
<!-- Success Sweet-Alert Apresenta a mensagem quando a casa de evento cria a sua conta -->


<!-- Success Sweet-Alert-Message -->
@if(session('userStatusPendent'))
    <script>
    Swal.fire({
       title: 'Atenção!',
       text: "{!!session('userStatusPendent')!!}",
       position: 'center',
       icon: 'warning',
       iconColor: '#AB6364',
       showCloseButton: true,
       showConfirmButton: false,

    })
    </script>
@endif
    <!-- Success Sweet-Alert-Message -->

<!-- Success Sweet-Alert-Message -->
@if(session('errInviteArtist'))
    <script>
    Swal.fire({
       title: 'Atenção!',
       text: "{!!session('errInviteArtist')!!}",
       position: 'center',
       icon: 'warning',
       iconColor: '#AB6364',
       showCloseButton: true,
       showConfirmButton: false,

    })
    </script>
@endif
    <!-- Success Sweet-Alert-Message -->

    <!-- Error Sweet-Alert-Message -->
    @if(session('errorStoreCasaEventoByPromotor'))
        <script>
        Swal.fire({
           title: 'Atenção!',
           text: "{!!session('errorStoreCasaEventoByPromotor')!!}",
           position: 'center',
           icon: 'error',
           iconColor: '#AB6364',
           showCloseButton: true,
           showConfirmButton: false,

        })
        </script>
    @endif
        <!-- Error Sweet-Alert-Message -->

    <!-- Error Sweet-Alert-Message Error to create UserAdmin to carteira -->
    @if(session('ErrToCreateUserAdminCarteira'))
        <script>
        Swal.fire({
           title: 'Atenção!',
           text: "{!!session('ErrToCreateUserAdminCarteira')!!}",
           position: 'center',
           icon: 'error',
           iconColor: '#AB6364',
           showCloseButton: true,
           showConfirmButton: false,

        })
        </script>
    @endif
    <!-- End Error Sweet-Alert-Message Error to create UserAdmin to carteira -->


    <!-- Error Sweet-Alert-Message -->
    @if(session('inviteErr'))
        <script>
        Swal.fire({
           title: 'Atenção!',
           text: "{!!session('inviteErr')!!}",
           position: 'center',
           icon: 'warning',
           //iconColor: '#AB6364',
           showCloseButton: true,
           showConfirmButton: false,

        })
        </script>
    @endif
        <!-- Error Sweet-Alert-Message -->

    <!-- Error Sweet-Alert-Message -->
@if(session('authenticationError'))
    <script>
    Swal.fire({
       title: 'Lamentamos!',
       text: "{!!session('authenticationError')!!}",
       position: 'center',
       icon: 'error',
       showCloseButton: false,
       showConfirmButton: false,
       timer:'3000',
    })
    </script>

@endif
    <!-- Error Sweet-Alert-Message -->
