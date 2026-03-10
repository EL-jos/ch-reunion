@extends('backend.pages.base')

@section("heads")
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&amp;display=fallback">
    <link rel="stylesheet" href="{{ asset('assets/backend/plugins/fontawesome-free/css/all.min.css')}}">
    <link rel="stylesheet" href="{{ asset('assets/backend/dist/css/adminlte.min2167.css?v=3.2.0')}}">
    <script nonce="677aa08b-50ff-4093-9409-9f9322a7957e">(function(w,d){!function(L,M,N,O){L[N]=L[N]||{};L[N].executed=[];L.zaraz={deferred:[],listeners:[]};L.zaraz.q=[];L.zaraz._f=function(P){return async function(){var Q=Array.prototype.slice.call(arguments);L.zaraz.q.push({m:P,a:Q})}};for(const R of["track","set","debug"])L.zaraz[R]=L.zaraz._f(R);L.zaraz.init=()=>{var S=M.getElementsByTagName(O)[0],T=M.createElement(O),U=M.getElementsByTagName("title")[0];U&&(L[N].t=M.getElementsByTagName("title")[0].text);L[N].x=Math.random();L[N].w=L.screen.width;L[N].h=L.screen.height;L[N].j=L.innerHeight;L[N].e=L.innerWidth;L[N].l=L.location.href;L[N].r=M.referrer;L[N].k=L.screen.colorDepth;L[N].n=M.characterSet;L[N].o=(new Date).getTimezoneOffset();if(L.dataLayer)for(const Y of Object.entries(Object.entries(dataLayer).reduce(((Z,$)=>({...Z[1],...$[1]})),{})))zaraz.set(Y[0],Y[1],{scope:"page"});L[N].q=[];for(;L.zaraz.q.length;){const ba=L.zaraz.q.shift();L[N].q.push(ba)}T.defer=!0;for(const bb of[localStorage,sessionStorage])Object.keys(bb||{}).filter((bd=>bd.startsWith("_zaraz_"))).forEach((bc=>{try{L[N]["z_"+bc.slice(7)]=JSON.parse(bb.getItem(bc))}catch{L[N]["z_"+bc.slice(7)]=bb.getItem(bc)}}));T.referrerPolicy="origin";T.src="../../../../cdn-cgi/zaraz/sd0d9.js?z="+btoa(encodeURIComponent(JSON.stringify(L[N])));S.parentNode.insertBefore(T,S)};["complete","interactive"].includes(M.readyState)?zaraz.init():L.addEventListener("DOMContentLoaded",zaraz.init)}(w,d,"zarazData","script");})(window,document);</script>
    <!-- FILEPOND -->
    <link href="https://unpkg.com/filepond@4.26.0/dist/filepond.css" rel="stylesheet">
    <link href="https://unpkg.com/filepond-plugin-image-preview/dist/filepond-plugin-image-preview.css" rel="stylesheet" />
    <link href="https://unpkg.com/filepond-plugin-image-edit/dist/filepond-plugin-image-edit.css" rel="stylesheet"/>
    <!-- SELECT2 -->
    <link href="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/css/select2.min.css" rel="stylesheet" />

    <!-- SORTABLE -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/Sortable/1.14.0/Sortable.min.js"></script>
    <!-- AXIOS -->
    <script src="https://cdn.jsdelivr.net/npm/axios/dist/axios.min.js"></script>

    <style>
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
    </style>
@endsection

@section('main-content')
    <div class="card card-warning">
        <div class="card-header">
            <h3 class="card-title">General Elements</h3>
        </div>
        <div class="card-body">
            <form action="{{ $variant->exists ? route('variant.update', $variant) : route('variant.store') }}" method="post" enctype="multipart/form-data">
                @csrf
                @method($variant->exists ? 'PUT' : 'POST')
                {{--<div class="row">
                    <div class="col-sm-6">
                        <div class="form-group">
                            <label>Text</label>
                            <input type="text" class="form-control" placeholder="Enter ...">
                        </div>
                    </div>
                    <div class="col-sm-6">
                        <div class="form-group">
                            <label>Text Disabled</label>
                            <input type="text" class="form-control" placeholder="Enter ..." disabled>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-sm-6">
                        <div class="form-group">
                            <label>Textarea</label>
                            <textarea class="form-control" rows="3" placeholder="Enter ..."></textarea>
                        </div>
                    </div>
                    <div class="col-sm-6">
                        <div class="form-group">
                            <label>Textarea Disabled</label>
                            <textarea class="form-control" rows="3" placeholder="Enter ..." disabled></textarea>
                        </div>
                    </div>
                </div>--}}

                <div class="row">
                    <div class="col-lg-12">
                        <div class="form-group">
                            @if(isset($errors))
                                <label class="col-form-label" for="name">
                                    <i class="fas fa-check"></i> Input with success
                                </label>
                            @endif
                            <input type="text" class="form-control is-valid" name="ugs" id="ugs" placeholder="UGS ..." value="{{ $variant->exists ? $variant->ugs : old('ugs') }}">
                        </div>
                    </div>
                </div>

                <div class="row">
                    <div class="col-sm-4">
                        <div class="el-select2">
                            <select id="menu_id" name="menu_id"  class="form-control el-select">
                                <option value="">Menu ?</option>
                                @foreach($menus as $menu)
                                    @if($variant->exists && $variant->article->categories->first()->menu && $variant->article->categories->first()->menu->id === $menu->id)
                                        <option selected value="{{ $menu->id }}">{{ $menu->name }}</option>
                                    @else
                                        <option value="{{ $menu->id }}">{{ $menu->name }}</option>
                                    @endif
                                @endforeach
                            </select>
                        </div>
                    </div>
                    <div class="col-sm-4">
                        <div class="el-select2">
                            <select id="category_id" name="category_id"  class="form-control el-select">
                                <option value="">Category ?</option>
                            </select>
                        </div>
                    </div>
                    <div class="col-sm-4">
                        <div class="el-select2">
                            <select id="article_id" name="article_id"  class="form-control el-select">
                                @if($variant->exists)
                                    <option value="{{ $variant->article->id }}">{{ $variant->article->name }}</option>
                                @else
                                    <option value="">Article ?</option>
                                @endif

                            </select>
                        </div>
                    </div>
                </div>

                <div class="row">
                    <div class="col-sm-12">
                        <div class="el-select2">
                            <select id="color_id" name="color_id"  class="form-control el-select">
                                <option value="">Couleur ?</option>
                                @foreach($colors as $color)
                                    @if($variant->exists && $variant->color && $variant->color->id === $color->id)
                                        <option selected value="{{ $color->id }}">{{ $color->name }}</option>
                                    @else
                                        <option value="{{ $color->id }}">{{ $color->name }}</option>
                                    @endif
                                @endforeach
                            </select>
                        </div>
                    </div>
                </div>

                <div class="row">
                    <div class="col-sm-3">
                        <div class="el-select2">
                            <select id="dimension_id" name="dimension_id"  class="form-control el-select">
                                <option value="">Dimension ?</option>
                                @foreach($dimensions as $dimension)
                                    @if($variant->exists && $variant->dimension && $variant->dimension->id === $dimension->id)
                                        <option selected value="{{ $dimension->id }}">{{ $dimension->value }}</option>
                                    @else
                                        <option value="{{ $dimension->id }}">{{ $dimension->value }}</option>
                                    @endif
                                @endforeach
                            </select>
                        </div>
                    </div>
                    <div class="col-sm-3">
                        <div class="el-select2">
                            <select id="power_id" name="power_id"  class="form-control el-select">
                                <option value="">Puissance ?</option>
                                @foreach($powers as $power)
                                    @if($variant->exists && $variant->power && $variant->power->id === $power->id)
                                        <option selected value="{{ $power->id }}">{{ $power->value }}</option>
                                    @else
                                        <option value="{{ $power->id }}">{{ $power->value }}</option>
                                    @endif
                                @endforeach
                            </select>
                        </div>
                    </div>
                    <div class="col-sm-3">
                        <div class="el-select2">
                            <select id="temperature_id" name="temperature_id"  class="form-control el-select">
                                <option value="">Temperature ?</option>
                                @foreach($temperatures as $temperature)
                                    @if($variant->exists && $variant->temperature && $variant->temperature->id === $temperature->id)
                                        <option selected value="{{ $temperature->id }}">{{ $temperature->value }}</option>
                                    @else
                                        <option value="{{ $temperature->id }}">{{ $temperature->value }}</option>
                                    @endif
                                @endforeach
                            </select>
                        </div>
                    </div>
                    <div class="col-sm-3">
                        <div class="el-select2">
                            <select id="volt_id" name="volt_id"  class="form-control el-select">
                                <option value="">Voltage ?</option>
                                @foreach($volts as $volt)
                                    @if($variant->exists && $variant->volt && $variant->volt->id === $volt->id)
                                        <option selected value="{{ $volt->id }}">{{ $volt->value }}</option>
                                    @else
                                        <option value="{{ $volt->id }}">{{ $volt->value }}</option>
                                    @endif
                                @endforeach
                            </select>
                        </div>
                    </div>
                </div>

                <div class="row">
                    <div class="col-sm-6">
                        <div class="form-group">
                            <input type="number" class="form-control" name="price" placeholder="Price..." value="{{ $variant->exists ? $variant->price : old('price') }}">
                        </div>
                    </div>
                    <div class="col-sm-6">
                        <div class="el-select2">
                            <select id="promotion_id" name="promotion_id"  class="form-control el-select">
                                <option value="">Promotion ?</option>
                                @foreach($promotions as $promotion)
                                    @if($variant->exists && $variant->promotion && $variant->promotion->id === $promotion->id)
                                        <option selected value="{{ $promotion->id }}">{{ $promotion->formatted_percentage }}%</option>
                                    @else
                                        <option value="{{ $promotion->id }}">{{ $promotion->formatted_percentage }}%</option>
                                    @endif
                                @endforeach
                            </select>
                        </div>
                    </div>
                </div>

                @if($variant->exists)
                    @if($variant->document)
                        <div class="el-container-grid-column-document">
                            <div id="el-container-picture" style="width: 100%;">
                                <div class="el-container">
                                    <img src="{{ asset($variant->document->path) }}" alt="..." class="img-thumbnail">
                                    <button class="el-remove"
                                            hx-delete="{{ route('document.destroy', ['document' => $variant->document, 'isMultiple' => 0]) }}"
                                            hx-target="#el-container-picture"
                                            hx-trigger="click">
                                        X
                                    </button>
                                </div>
                            </div>
                        </div>
                    @else
                        @include('backend.layouts.file', ['isMultiple' => false])
                    @endif
                @else
                    @include('backend.layouts.file', ['isMultiple' => false])
                @endif

                <div style="padding: 0" class="card-footer">
                    <button type="submit" class="btn btn-primary">
                        @if($variant->exists)
                            Update
                        @else
                            Submit
                        @endif
                    </button>
                </div>
            </form>
        </div>
    </div>
@endsection

@section('scripts')
    <script src="{{ asset('assets/backend/plugins/jquery/jquery.min.js')}}"></script>
    <script src="{{ asset('assets/backend/plugins/bootstrap/js/bootstrap.bundle.min.js')}}"></script>
    <script src="{{ asset('assets/backend/plugins/bs-custom-file-input/bs-custom-file-input.min.js')}}"></script>
    <script src="{{ asset('assets/backend/dist/js/adminlte.min2167.js?v=3.2.0')}}"></script>
    <!-- SELECT2 -->
    <script src="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/js/select2.min.js"></script>
    <!-- SWEET ALERT -->
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <!-- HTMLX -->
    <script src="https://unpkg.com/htmx.org@1.9.4" integrity="sha384-zUfuhFKKZCbHTY6aRR46gxiqszMk5tcHjsVFxnUo8VMus4kHGVdIYVbOYYNlKmHV" crossorigin="anonymous"></script>
    <script>
        $(function () {
            bsCustomFileInput.init();
        });

        $(document).ready(function() {

            $('select#menu_id').select2({
                placeholder: 'Menu ?'
            }).on('change', (e) => {

                let menuId = e.target.options.selectedIndex;

                // Activer le sélecteur de catégorie et récupérer les catégories
                $('#category_id').prop('disabled', false).trigger('change');

                $.ajax({
                    url: '{{ route('nuancier-facade.getCategories') }}',
                    type: 'GET',
                    data: {
                        menu_id: menuId
                    },
                    success: (data) => {

                        let $categorySelect = $('select#category_id');
                        $categorySelect.select2('destroy');
                        $categorySelect.empty();
                        $categorySelect.append($('<option>', {
                            value: '',
                            text: 'Category ?'
                        }));

                        $.each(data, function (index, category) {
                            $categorySelect.append($('<option>', {
                                value: category.id,
                                text: category.name
                            }));
                        });

                        $categorySelect.select2({
                            placeholder: 'Category ?'
                        });

                        // Réinitialiser le sélecteur d'articles lorsque le menu change
                        $('#article_id').select2('destroy').empty().append($('<option>', {
                            value: '',
                            text: 'Article ?'
                        })).select2({
                            placeholder: 'Article ?'
                        });

                    },
                    error: (xhr, status, error) => {
                        console.log('Error: ', error);
                    }
                })

                // Désactiver le sélecteur d'articles
                @if($variant->exists)
                    $('#article_id').prop('disabled', false).val(null).trigger('change');
                @else
                    $('#article_id').prop('disabled', true).val(null).trigger('change');
                @endif


            });

            $('select#category_id').select2({
                placeholder: 'Category ?',
                disabled: true,
            }).on('change', (e) => {

                let categoriyId = e.target.options.selectedIndex;
                // Activer le sélecteur d'articles et récupérer les articles
                $('#article_id').prop('disabled', false).trigger('change');

                $.ajax({
                    url: '{{ route('nuancier-facade.getArticles') }}',
                    type: 'GET',
                    data: {
                        category_id: categoriyId,
                    },
                    success: (data) => {

                        let $articleSelect = $('select#article_id');
                        $articleSelect.select2('destroy');
                        $articleSelect.empty();
                        $articleSelect.append($('<option>', {
                            value: '',
                            text: ''
                        }));

                        $.each(data, (index, article) => {

                            $articleSelect.append($('<option>', {
                                value: article.id,
                                text: article.name
                            }));

                        });

                        $articleSelect.select2({
                            placeholder: 'Article ?'
                        });


                    }
                })

            });
            @if($variant->exists)
                $('select#article_id').select2({
                    placeholder: 'Article ?',
                    disabled:  false,
                });
            @else
                $('select#article_id').select2({
                    placeholder: 'Article ?',
                    disabled:  true,
                });
            @endif
            $('select#color_id').select2({
                placeholder: 'Couleur ?',
                //disabled: true,
            });
            $('select#dimension_id').select2({
                placeholder: 'Dimension ?',
                //disabled: true,
                tags: true,
            });
            $('select#power_id').select2({
                placeholder: 'Puissance ?',
                //disabled: true,
                tags: true,
            });
            $('select#temperature_id').select2({
                placeholder: 'Temperature ?',
                //disabled: true,
                tags: true,
            });
            $('select#volt_id').select2({
                placeholder: 'Voltage ?',
                //disabled: true,
                tags: true,
            });

            $('select#promotion_id').select2({
                placeholder: 'Promotion ?',
                //disabled: true,
                tags: true,
            });

        });
    </script>
    @if($variant->exists)
        <!-- FILEPOND -->
        <script src="https://unpkg.com/filepond-plugin-image-edit/dist/filepond-plugin-image-edit.js"></script>
        <script src="https://unpkg.com/filepond-plugin-image-preview/dist/filepond-plugin-image-preview.js"></script>
        <script src="https://unpkg.com/filepond@4.26.0/dist/filepond.js"></script>
        <script>
            FilePond.registerPlugin(FilePondPluginImagePreview, FilePondPluginImageEdit);
            document.addEventListener('DOMContentLoaded', function () {
                // Sélectionnez l'élément de téléchargement par sa classe
                const inputElement = document.querySelector('.picture');

                // Initialisation de FilePond dans le formulaire
                const pond = FilePond.create(inputElement, {
                    labelFileProcessingComplete: 'Votre Photo a bien été mise à jour, Veillez actualiser la page',
                    labelFileProcessingError: 'Impossible de mettre à jour votre Photo',
                    labelIdle: 'Glisser-déposer votre image ou <span class="filepond--label-action"> Parcourir </span>',
                    server: {
                        process: {
                            url: '{{ route("nuancier-facade.uploadDocument", $variant) }}', // Remplacez par l'URL de votre action Laravel pour l'upload
                            method: 'POST',
                            withCredentials: false,
                            headers: {
                                'X-CSRF-TOKEN': '{{ csrf_token() }}' // Ajoutez le jeton CSRF dans les headers de la requête
                            }
                        },
                    }
                });
                // Charger l'aperçu de l'image actuelle
            });
        </script>
    @endif
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
