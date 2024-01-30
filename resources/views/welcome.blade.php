<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.3.2/css/bootstrap.min.css"
        integrity="sha512-b2QcS5SsA8tZodcDtGRELiGv5SaKSk1vDHDaQRda0htPYWZ6046lr3kJ5bAAQdpV2mmA/4v0wQF9MyU6/pDIAg=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
</head>

<body>
    <div class="container p-5">
        {{-- <div class="table-responsive">
            <table class="table table-hover stripped">
                <thead>
                    <tr>
                        <th>
                            ID
                        </th>
                        <th>
                            Price
                        </th>
                        <th>
                            Description (title)
                        </th>
                        <th>
                            ComparePrice
                        </th>
                        <th>
                            Shipping Mode
                        </th>
                        <th>
                            Image
                        </th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($produits as $produit)
                        <tr>
                            <td>{{ $produit->id }}</td>
                            <td>{{ $produit->variantPrice }}</td>
                            <td>{{ $produit->title }}</td>
                            <td>{{ $produit->VarianteCompareAtPrice }}</td>
                            <td>{{ $produit->Shipping }}</td>
                            <td><img src="{{ $produit->imagesrc }}" class="w-50 rounded-circle" alt=""></td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div> --}}

        <div class="row">
            @foreach ($produits as $produit)
                <div class="col-md-3 my-1">
                    <div class="card">
                        <div class="card-header bg-dark">
                            <img src="{{ $produit->imagesrc }}" class="w-100 rounded-2" alt="">
                        </div>
                        <div class="card-body">
                            {{ $produit->title }}
                            <hr>
                            <div class=" d-flex h-25">
                                <span class="bg-info p-2 rounded-5 border border-warning border-2 fs-5">prix : {{ $produit->variantPrice }} DH</span> &nbsp;&nbsp;&nbsp;
                                {{-- <span class="bg-info p-1 rounded-5 border border-warning border-2">{{ $produit->VarianteCompareAtPrice }} $</span> --}}
                            </div>
                        </div>
                    </div>
                </div>
            @endforeach


        </div>



    </div>



    <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.3.2/js/bootstrap.min.js"
        integrity="sha512-WW8/jxkELe2CAiE4LvQfwm1rajOS8PHasCCx+knHG0gBHt8EXxS6T6tJRTGuDQVnluuAvMxWF4j8SNFDKceLFg=="
        crossorigin="anonymous" referrerpolicy="no-referrer"></script>
</body>

</html>
