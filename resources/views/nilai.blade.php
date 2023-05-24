@php
$nama = "ilmy";
$nilai = 90.00;
@endphp 
{{--- struktur kendali if ---}}
<!-- sturktur kendali id -->
@if ($nilai >=90)
@php $ket = "lulus"; @endphp
@else
@php  $ket = "gagal"; @endphp
@endif
<p>siswa {{$nama}} dengan nilai {{$nilai}}</p>
<h1>dinyatakan {{$ket}}</h1>
