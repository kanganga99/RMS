@extends('layouts.app')

@section('content')

    <div>
        <livewire:student-show>
    </div>

@endsection

@section('script')
<script>
    window.addEventListener('close-modal', event => {

        $('#vacantroomModal').modal('hide');
        $('#updateVacantroomModal').modal('hide');
        $('#deleteVacantroomModal').modal('hide');
    })
</script>
@endsection