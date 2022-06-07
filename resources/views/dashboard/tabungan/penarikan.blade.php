@extends('layouts.main')

@section('container')

<center>
    
    <h1 class="h2">Penarikan Tabungan</h1>

    @if ($message = Session::get('warning'))
 <div class="alert alert-warning alert-block">
   <button type="button" class="close" data-dismiss="alert">×</button> 
   <strong>{{ $message }}</strong>
 </div>
  @endif
<div class="col-lg-2">
   <form method="POST" action="/penarikan" class="mb-5" enctype="multipart/form-data">
        @method('patch')

        @csrf
         <div class="mb-3">
          <label for="title" class="form-label">Jumlah Yang Ingin Ditarik: </label>
        
          <div class="col-auto">
            <div class="input-group mb-2">
              <div class="input-group-prepend">
                <div class="input-group-text">Rp. </div>
              </div>
              <input type="number" class="form-control @error('saldo') is-invalid @enderror" id="saldo" name="saldo" placeholder="Nominal" value="">
              @error('saldo') 
                  <div class="invalid-feedback">
                     {{ $message }}
                  </div>
              @enderror
            </div>
          </div>
          
          </div>
          <div class="col-auto">
            <button type="submit" class="btn btn-primary mb-2" onclick="return confirm('Yakin mau narik?')">Tarik</button>
          </div>
        </div>
      </form>
</div>





</center>

@endsection