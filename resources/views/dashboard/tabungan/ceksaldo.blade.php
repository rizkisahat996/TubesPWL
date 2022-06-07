@extends('layouts.main')

@section('container')

   <center>

      <table>
         <tr>
            <th colspan="5">
              <h2>
               <p>TABUNGAN SISWA SEKOLAH DASAR</p>    
            </h2>
            </th>
         </tr>
         
         <tr>
            <td>
               
               <h5> <p>Nama Pemilik: </p> </h5>  
                  <p>{{ $user->name }}</p>
               
            </td>
         </tr>
         <tr>
            <td>
               
               <h5> <p>Saldo: </p> </h5>  
                  <p>Rp. {{ $user->saldo }}</p>
               
            </td>
         </tr>
         
      </table>
	
      
    </center>
    

@endsection