<script src="{{ asset('js/sweetalert2.all.min.js') }}"></script>

@if (session('doacao'))
<script>
    Swal.fire(
        'Doação realizada com sucesso!',
        '',
        'success'
    )
</script>
@endif
@if (session('doacao.error'))
<script>
Swal.fire(
    'Error ao realizar Doação!',
    '',
    'error'
)
</script>
@endif