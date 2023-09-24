@if(session('success'))
<div class="alert alert-success" role="alert">
    <h4 class="alert-heading">Berhasil!</h4>
    {{ session('success') }}
    <hr>
</div>
@endif