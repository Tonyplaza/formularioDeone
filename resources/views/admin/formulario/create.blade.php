@extends('admin.layouts.admin')

@section('title', 'Registro PYMES')


@section('content')
    <form method="POST" enctype="multipart/form-data" action="{{ route('formulario.store') }}">
        <div class="row">
            @include('admin.formulario._form', [
                'txtTitle' => 'Registro PYMES',
                'btnTitle' => 'Guardar',
                'btnColor' => 'btn-success',
            ])
        </div>
    </form>
@endsection


@push('scripts')
    <script>
        $(document).ready(function() {
            $(".inputlogo").click(function(event) {
                var valor = $(event.target).val();
                if (valor == "Si") {
                    $("#logo").show();
                } else if (valor == "No") {
                    $("#logo").hide();

                } else {
                    // Otra cosa
                }
            });
        });

        $(document).ready(function() {
            $(".inputexterior").click(function(event) {
                var valor = $(event.target).val();
                if (valor == "Si") {
                    $("#exterior").show();
                } else if (valor == "No") {
                    $("#exterior").hide();

                } else {
                    // Otra cosa
                }
            });
        });

        $(document).ready(function() {
            $(".inputcapacitaciones").click(function(event) {
                var valor = $(event.target).val();
                if (valor == "Si") {
                    $("#capacitaciones").show();
                } else if (valor == "No") {
                    $("#capacitaciones").hide();

                } else {
                    // Otra cosa
                }
            });
        });

        $(document).ready(function() {
            $(".inputpagina").click(function(event) {
                var valor = $(event.target).val();
                if (valor == "Si") {
                    $("#pagina").show();
                } else if (valor == "No") {
                    $("#pagina").hide();

                } else {
                    // Otra cosa
                }
            });
        });

        $(document).ready(function() {
            $(".inputredes").click(function(event) {
                var valor = $(event.target).val();
                if (valor == "Si") {
                    $("#redes").show();
                } else if (valor == "No") {
                    $("#redes").hide();

                } else {
                    // Otra cosa
                }
            });
        });
    </script>
@endpush
