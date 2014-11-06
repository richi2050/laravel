@extends('layout')


@section('contenido')

<div id="TitEstadisticas"><span class="EstNumeros">&nbsp;01.</span></br>
ESTADÍSTICAS SUPERABOGADO.MX</div>

<div id="estadisticasBor">
<table class="modulo" border="0" cellspacing="0">
  <tr class="campos">
    <td>&nbsp;</td>
    <th scope="col" class="chicasR16">MES ACTUAL</th>
    <th scope="col" class="chicas">MES PASADO</th>
    <th scope="col" class="grises">CRECIMIENTO</th>
    <td>&nbsp;</td>
  </tr>
  <tr>
    <th scope="row" class="BordesUsuario">USUARIOS REGISTRADOS</th>
    <td class="rojasBds"><table width="100%" border="0" cellspacing="0">
  <tr>
    <td class="bd">2135</td>
  </tr>
</table>
</td>
    <td class="BordesFstd"><table width="100%" border="0" cellspacing="0">
  <tr>
    <td class="bd">1731</td>
  </tr>
</table>
</td>
    <td class="grisesBds">23.33%</td>
    <td class="grafica">
        <div id="mas">
            <a href="#">
                <img src="{{ asset('super/images/masGraf.gif') }}" alt="Ver completo" width="14" height="14" border="0" />
            </a>
        </div>
        <div id="menos">
            <a href="#">
                <img src="{{ asset('super/images/menosGraf.gif') }}" alt="Minimizar" width="14" height="14" border="0" />
            </a>
         </div>
     </td>
  </tr>
  </table>
<table class="modulo" border="0" cellspacing="0">
  <tr class="campos">
    <td>&nbsp;</td>
    <th scope="col" class="chicasR16">MES ACTUAL</th>
    <th scope="col" class="chicas">MES PASADO</th>
    <th scope="col" class="grises">CRECIMIENTO</th>
    <td>&nbsp;</td>
  </tr>
  <tr>
    <th scope="row" class="BordesUsuario">USUARIOS REGISTRADOS</th>
    <td class="rojasBds"><table width="100%" border="0" cellspacing="0">
  <tr>
    <td class="bd">2135</td>
  </tr>
</table>
</td>
    <td class="BordesFstd"><table width="100%" border="0" cellspacing="0">
  <tr>
    <td class="bd">1731</td>
  </tr>
</table>
</td>
    <td class="grisesBds">23.33%</td>
    <td class="grafica">
        <div id="mas">
            <a href="#">
                <img src="{{ asset('super/images/masGraf.gif') }}" alt="Ver completo" width="14" height="14" border="0" />
            </a>
        </div>
        <div id="menos">
            <a href="#">
                <img src="{{ asset('super/images/menosGraf.gif') }}" alt="Minimizar" width="14" height="14" border="0" />
            </a>
        </div>
    </td>
  </tr>
  </table>

</div>
<div id="TitEstadisticas2"><span class="EstNumeros">&nbsp;02.</span></br>
INGRESOS</div>
<div id="TitEstadisticas3"><span class="EstNumeros">&nbsp;03.</span></br>
TRÁFICO</div>
<div id="estadisticasBorSS">
<table class="modulo" border="0" cellspacing="0">
  <tr class="campos">
    <td>&nbsp;</td>
    <th scope="col" class="chicasR16">MES ACTUAL</th>
    <th scope="col" class="chicas">MES PASADO</th>
    <th scope="col" class="grises">CRECIMIENTO</th>
    <td>&nbsp;</td>
  </tr>
  <tr>
    <th scope="row" class="BordesUsuario">USUARIOS REGISTRADOS</th>
    <td class="rojasBds"><table width="100%" border="0" cellspacing="0">
  <tr>
    <td class="bd">2135</td>
  </tr>
</table>
</td>
    <td class="BordesFstd"><table width="100%" border="0" cellspacing="0">
  <tr>
    <td class="bd">1731</td>
  </tr>
</table>
</td>
    <td class="grisesBds">23.33%</td>
    <td class="grafica">
    <div id="mas"><a href="#">
    <img src="{{asset('super/images/masGraf.gif')}}" alt="Ver completo" width="14" height="14" border="0" /></a>
    </div><div id="menos"><a href="#"><img src="{{ asset('super/images/menosGraf.gif') }}" alt="Minimizar" width="14" height="14" border="0" /></a></div></td>
  </tr>
  </table>

<table class="modulo" border="0" cellspacing="0">
  <tr class="campos">
    <td>&nbsp;</td>
    <th scope="col" class="chicasR16">MES ACTUAL</th>
    <th scope="col" class="chicas">MES PASADO</th>
    <th scope="col" class="grises">CRECIMIENTO</th>
    <td>&nbsp;</td>
  </tr>
  <tr>
    <th scope="row" class="BordesUsuario">USUARIOS REGISTRADOS</th>
    <td class="rojasBds"><table width="100%" border="0" cellspacing="0">
  <tr>
    <td class="bd">2135</td>
  </tr>
</table>
</td>
    <td class="BordesFstd"><table width="100%" border="0" cellspacing="0">
  <tr>
    <td class="bd">1731</td>
  </tr>
</table>
</td>
    <td class="grisesBds">23.33%</td>
    <td class="grafica">
    <div id="mas"><a href="#"><img src="{{ asset('super/images/masGraf.gif') }}" alt="Ver completo" width="14" height="14" border="0" />
    </a></div><div id="menos"><a href="#">
    <img src="{{ asset('super/images/menosGraf.gif') }}" alt="Minimizar" width="14" height="14" border="0" /></a></div></td>
  </tr>
  </table>


</div>

@stop