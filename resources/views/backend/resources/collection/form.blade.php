@extends('backend.pages.base')

@section("heads")
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&amp;display=fallback">
    <link rel="stylesheet" href="{{ asset('assets/backend/plugins/fontawesome-free/css/all.min.css')}}">
    <link rel="stylesheet" href="{{ asset('assets/backend/dist/css/adminlte.min2167.css?v=3.2.0')}}">
    <script nonce="677aa08b-50ff-4093-9409-9f9322a7957e">(function(w,d){!function(L,M,N,O){L[N]=L[N]||{};L[N].executed=[];L.zaraz={deferred:[],listeners:[]};L.zaraz.q=[];L.zaraz._f=function(P){return async function(){var Q=Array.prototype.slice.call(arguments);L.zaraz.q.push({m:P,a:Q})}};for(const R of["track","set","debug"])L.zaraz[R]=L.zaraz._f(R);L.zaraz.init=()=>{var S=M.getElementsByTagName(O)[0],T=M.createElement(O),U=M.getElementsByTagName("title")[0];U&&(L[N].t=M.getElementsByTagName("title")[0].text);L[N].x=Math.random();L[N].w=L.screen.width;L[N].h=L.screen.height;L[N].j=L.innerHeight;L[N].e=L.innerWidth;L[N].l=L.location.href;L[N].r=M.referrer;L[N].k=L.screen.colorDepth;L[N].n=M.characterSet;L[N].o=(new Date).getTimezoneOffset();if(L.dataLayer)for(const Y of Object.entries(Object.entries(dataLayer).reduce(((Z,$)=>({...Z[1],...$[1]})),{})))zaraz.set(Y[0],Y[1],{scope:"page"});L[N].q=[];for(;L.zaraz.q.length;){const ba=L.zaraz.q.shift();L[N].q.push(ba)}T.defer=!0;for(const bb of[localStorage,sessionStorage])Object.keys(bb||{}).filter((bd=>bd.startsWith("_zaraz_"))).forEach((bc=>{try{L[N]["z_"+bc.slice(7)]=JSON.parse(bb.getItem(bc))}catch{L[N]["z_"+bc.slice(7)]=bb.getItem(bc)}}));T.referrerPolicy="origin";T.src="../../../../cdn-cgi/zaraz/sd0d9.js?z="+btoa(encodeURIComponent(JSON.stringify(L[N])));S.parentNode.insertBefore(T,S)};["complete","interactive"].includes(M.readyState)?zaraz.init():L.addEventListener("DOMContentLoaded",zaraz.init)}(w,d,"zarazData","script");})(window,document);</script>

    <!-- SELECT2 -->
    <link href="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/css/select2.min.css" rel="stylesheet" />

    <link rel="stylesheet" href="{{ asset('assets/backend/plugins/summernote/summernote-bs4.min.css')}}">
    <style>
        .el-btns-controls{
            display: flex;
            align-items: center;
            gap: 1rem;
            width: fit-content;
            margin: 0 0 1.25rem 0;
        }
        .el-btns-controls a{
            margin: 0 !important;
        }

        .el-container-grid-column-document{
            display: flex;
            flex-direction: column;
            gap: 2rem;
            margin-bottom: 1rem;
        }
        .el-container-grid-column-document .el-container{
            margin-bottom: 0rem;
        }
        .el-container{
            position: relative;
            width: fit-content;
        }
        .el-container .el-remove{
            position: absolute;
            background: red;
            color: #F2F2F2;
            font-weight: bold;
            border-radius: 50%;
            width: 20px;
            height: 20px;
            display: flex;
            justify-content: center;
            align-items: center;
            box-shadow: 0 0 10px rgba(0, 0, 0, .2);
            top: 0;
            right: 0;
        }
        .filepond--list {
            display: grid !important;
            grid-template-columns: repeat(3, 1fr) !important;
            height: 500px;
        }
        .filepond--item{
            width: 30% !important;
        }
        .filepond--root.picture.filepond--hopper{
            width: 100%;
        }
        .el-select2{
            margin-bottom: 1rem;
            min-height: 38px;
        }
        #select2--container,
        .select2-container--default .select2-selection--single .select2-selection__arrow{
            position: absolute;
            top: 50% !important;
            transform: translateY(-50%);
        }.select2-container--default .select2-selection--single,
         .select2-container,
         .ts-control{
             min-height: 40px!important;
         }
    </style>
@endsection

@section('main-content')
    <div class="card card-warning">
        <div class="card-header">
            <h3 class="card-title">General Elements</h3>
        </div>
        <div class="card-body">
            <form action="{{ $collection->exists ? route('collection.update', $collection) : route('collection.store') }}" method="post" enctype="multipart/form-data">
                @csrf
                @method($collection->exists ? 'PUT' : 'POST')

                <div class="row">
                    <div class="col-sm-6">
                        <div class="form-group">
                            <input type="text" class="form-control is-valid" name="name" id="name" placeholder="Nom ..." value="{{ $collection->exists ? $collection->name : old('name') }}">
                        </div>
                    </div>
                    <div class="col-sm-6">
                        <div class="el-select2">
                            <select id="brand_id" name="brand_id"  class="form-control el-select">
                                <option value="">Marque</option>
                                @foreach($brands as $brand)
                                    @if($collection->exists && $collection->brand && ($collection->brand->id === $brand->id || $collection->brand->id === old('brand_id')))
                                        <option selected value="{{ $brand->id }}">{{ $brand->name }}</option>
                                    @else
                                        <option value="{{ $brand->id }}">{{ $brand->name }}</option>
                                    @endif
                                @endforeach
                            </select>
                        </div>
                    </div>
                </div>

                <div class="row">
                    <div class="col-12">
                        <textarea id="summernote" name="content"> {{ $collection->content ?? old('content') }} </textarea>
                    </div>
                </div>

                <div style="padding: 0" class="card-footer">
                    <button type="submit" class="btn btn-primary">
                        @if($collection->exists)
                            Update
                        @else
                            Submit
                        @endif
                    </button>
                </div>
                {{--<div class="form-group">
                    <label class="col-form-label" for="inputWarning"><i class="far fa-bell"></i> Input with
                        warning</label>
                    <input type="text" class="form-control is-warning" id="inputWarning" placeholder="Enter ...">
                </div>
                <div class="form-group">
                    <label class="col-form-label" for="inputError"><i class="far fa-times-circle"></i> Input with
                        error</label>
                    <input type="text" class="form-control is-invalid" id="inputError" placeholder="Enter ...">
                </div>
                <div class="row">
                    <div class="col-sm-6">
                        <div class="form-group">
                            <div class="form-check">
                                <input class="form-check-input" type="checkbox">
                                <label class="form-check-label">Checkbox</label>
                            </div>
                            <div class="form-check">
                                <input class="form-check-input" type="checkbox" checked>
                                <label class="form-check-label">Checkbox checked</label>
                            </div>
                            <div class="form-check">
                                <input class="form-check-input" type="checkbox" disabled>
                                <label class="form-check-label">Checkbox disabled</label>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-6">
                        <div class="form-group">
                            <div class="form-check">
                                <input class="form-check-input" type="radio" name="radio1">
                                <label class="form-check-label">Radio</label>
                            </div>
                            <div class="form-check">
                                <input class="form-check-input" type="radio" name="radio1" checked>
                                <label class="form-check-label">Radio checked</label>
                            </div>
                            <div class="form-check">
                                <input class="form-check-input" type="radio" disabled>
                                <label class="form-check-label">Radio disabled</label>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-sm-6">
                        <div class="form-group">
                            <label>Select</label>
                            <select class="form-control">
                                <option>option 1</option>
                                <option>option 2</option>
                                <option>option 3</option>
                                <option>option 4</option>
                                <option>option 5</option>
                            </select>
                        </div>
                    </div>
                    <div class="col-sm-6">
                        <div class="form-group">
                            <label>Select Disabled</label>
                            <select class="form-control" disabled>
                                <option>option 1</option>
                                <option>option 2</option>
                                <option>option 3</option>
                                <option>option 4</option>
                                <option>option 5</option>
                            </select>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-sm-6">
                        <div class="form-group">
                            <label>Select Multiple</label>
                            <select multiple class="form-control">
                                <option>option 1</option>
                                <option>option 2</option>
                                <option>option 3</option>
                                <option>option 4</option>
                                <option>option 5</option>
                            </select>
                        </div>
                    </div>
                    <div class="col-sm-6">
                        <div class="form-group">
                            <label>Select Multiple Disabled</label>
                            <select multiple class="form-control" disabled>
                                <option>option 1</option>
                                <option>option 2</option>
                                <option>option 3</option>
                                <option>option 4</option>
                                <option>option 5</option>
                            </select>
                        </div>
                    </div>
                </div>--}}
            </form>
        </div>
    </div>
@endsection

@section('scripts')
    <script src="{{ asset('assets/backend/plugins/jquery/jquery.min.js')}}"></script>
    <script src="{{ asset('assets/backend/plugins/bootstrap/js/bootstrap.bundle.min.js')}}"></script>
    <script src="{{ asset('assets/backend/plugins/bs-custom-file-input/bs-custom-file-input.min.js')}}"></script>
    <script src="{{ asset('assets/backend/dist/js/adminlte.min2167.js?v=3.2.0')}}"></script>
    <script src="{{ asset('assets/backend/plugins/summernote/summernote-bs4.min.js')}}"></script>
    <script>
        $(function () {
            bsCustomFileInput.init();
        });
    </script>
    <!-- SELECT2 -->
    <script src="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/js/select2.min.js"></script>
    <!-- SWEET ALERT -->
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <script>
        $(document).ready(function() {

            $('select#brand_id').select2({
                placeholder: 'Marque ?'
            });
            $('#summernote').summernote();

        });

    </script>
    @if(session()->has('success'))
        <script>
            Swal.fire({
                icon: 'success',
                title: 'Valide',
                text: "{!! session('success') !!}"
            });
        </script>
    @elseif(session()->has('error'))
        <script>
            Swal.fire({
                icon: 'error',
                title: 'Erreur',
                text: "{!! session('error') !!}"
            });
        </script>
    @elseif(session()->has('warning'))
        <script>
            Swal.fire({
                icon: 'warning',
                title: 'Votre attention',
                text: "{!! session('warning') !!}"
            });
        </script>
    @elseif(session()->has('info'))
        <script>
            Swal.fire({
                icon: 'info',
                title: 'Information',
                text: "{!! session('info') !!}"
            });
        </script>
    @elseif($errors->any())
        <script>
            var errorMessages = "<ul>";
            @foreach ($errors->all() as $error)
                errorMessages += "<li>{{ $error }}</li>";
            @endforeach
                errorMessages += "</ul>";

            Swal.fire({
                icon: 'error',
                title: 'Erreur',
                html: errorMessages
            });
        </script>
    @endif
@endsection
