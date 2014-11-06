@extends('layout')
@section('title')
Usuarios
@stop
@section('contenido')


<div class="breadcrumbs">
    <a href="/superabogado/admin/home">HOME</a>
    USUARIOS
</div>
<a class="main-aciton icon-left icon-user" href="{{ URL::to('admin/user/new')}}">CREAR USUARIO</a>
<table class="item-list" cellspacing="0" cellpadding="0">
    <tbody>
    @foreach ($users as $user)
    <tr>
        <td class="">{{ $user->first_name.' '.$user->last_name; }}</td>
        <td class="actions edit"><a href="{{URL::to('admin',[$user->username,'edit',$user->id] )}}">EDITAR</a></td>
        <td class="actions delete"><a href="#popDelete" class="delete" data-id="27"
                                      data-name="Ricardo lugo">ELIMINAR</a></td>
    </tr>
    @endforeach
    <tr>
        <td colspan="3"> {{$users->links()}}</td>
    </tr>
    </tbody>
</table>
<div id="popDelete" class="fancybox-inline" style="display:none;">
    <p>CONFIRMAR ELIMINAR</p>

    <p>¿ESTAS SEGURO DE ELIMINAR USUARIO <span class="name"></span>?</p>
    <a class="no" href="#">NO, REGRESAR</a>
    <a class="si" href="#" data-href="/superabogado/admin/usuario-eliminar?id=27">SI, ELIMINAR</a>
    <span class="clear">&nbsp;</span>
</div>
<script>
    $(document).ready(function () {
        $('.fancybox-inline .no').on('click', function (event) {
            event.preventDefault();
            $.fancybox.close();
            return false;
        });
        $('.delete').on('click', function (event) {
            event.preventDefault();
            $('#popDelete .name').html($(this).attr('data-name'));
            $('#popDelete a.si').attr('href', '/superabogado/admin/actions/usuario-eliminar.php?id=' + $(this).attr('data-id'));
            $.fancybox.open({href: '#popDelete'});
            return false;
        });
    });
</script>


@stop