@extends('master')
@section('content')

{{-- <div class="main-panel"> --}}
    <div class="content ">
        <div class="page-inner">
            {{-- <div class="page-header ">
                <h4 class="page-title">Tables</h4>
                <ul class="breadcrumbs">
                    <li class="nav-home">
                        <a href="#">
                            <i class="flaticon-home"></i>
                        </a>
                    </li>
                    <li class="separator">
                        <i class="flaticon-right-arrow"></i>
                    </li>
                    <li class="nav-item">
                        <a href="#">Tables</a>
                    </li>
                    <li class="separator">
                        <i class="flaticon-right-arrow"></i>
                    </li>
                    <li class="nav-item">
                        <a href="#">Basic Tables</a>
                    </li>
                </ul>
            </div> --}}
            <div class="">
                <div class="">
                    <div class="card">
                        <div class="card-header">
                            <div class="card-title">Edit Peraturan</div>
                        </div>
                        <form action="/edit-peraturan/{{ $peraturan->id }}" method="POST">
                        @csrf
                        @method('PUT')
                        
                            <div class="card-body">
                                
                                <textarea name="peraturan" id="editor" class="form-control input text h-100 @error('peraturan') is-invalid @enderror" class="input" type="text" placeholder="Masukkan Peraturan"  >{{  $peraturan->peraturan  }}</textarea>
                                @error('peraturan')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                                <button class="btn btn-primary mt-2 ms-2" type="submit">Simpan</button> 
                            </div> 
                            
                        </form>
                    </div>

                </div>
            </div>
        </div>
    </div>
@endsection


@section('ck-editor')
    <script src="https://cdn.ckeditor.com/ckeditor5/30.0.0/classic/ckeditor.js"></script>

    <script>
        ClassicEditor
            .create( document.querySelector( '#editor' ) )
            .catch( error => {
                console.error( error );
            } );
    </script>
@endsection