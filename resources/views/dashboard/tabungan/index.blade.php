
@extends('layouts.main')

@section('container')

   <center>
	<table border="2" cellpadding="20">
        	<tr>
        		<th colspan="5">
        			<h3><center>History Transaksi {{$nama_pengguna->name}}</center></h3>
        		</th>
        	</tr>
        	<tr>
        		<td><b>Nomor Transaksi</b></td>
        		<td><b>Jenis Transaksi</b></td>
        		<td><b>Nominal Transaksi</b></td>
        		<td><b>Tanggal Transaksi</b></td>
        	</tr>
        
    @foreach( $transaksi as $trans)
    	    
        	<tr>
        		<td><center>{{ $trans->id_transaksi }}</center></td>
        		<td><center>{{ $trans->nama_transaksi }}</center></td>
        		<td>Rp. {{ $trans->jumlah_transaksi }}</td>
        		<td><center>{{ $trans->created_at }}</center></td>
        	</tr>
           
    @endforeach

    </table>
    </center>

@endsection

