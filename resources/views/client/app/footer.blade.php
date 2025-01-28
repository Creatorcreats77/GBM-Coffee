<footer class="bg-primary text-light">
    <div class="container py-2">
        <div class="row">
            <div class="col-md-4 py-3 py-lg-1">
                <h5>Satyjy üçin</h5>
                <div >
                    <a href="{{route('create')}}" class="text-decoration-none text-light">Önüm goşmak</a><br>
                    <a href="{{route('createCat')}}" class="text-decoration-none text-light">Bölüm goşmak</a><br>
                    <a href="{{route('deliveryList')}}" class="text-decoration-none text-light">Dastawka</a><br>
                    <a href="{{route('ordersList')}}" class="text-decoration-none text-light">Sargytlar</a>
                </div>
            </div>
            <div class="col-md-4 py-3 py-lg-1">
                <h5>Alyjy üçin</h5>
                <div>
                    @foreach($categories as $category)
                        <div>
                            <a href="{{ route('category', $category->id) }}" class="text-decoration-none text-light">{{ $category->name }}</a>
                        </div>
                    @endforeach
                </div>
            </div>
            <div class="col-md-4 py-3 py-lg-1">
                <h5>GBM</h5>
                <ul class="list-inline">
                    <a href="https://gujurly.edu.tm/" class="text-decoration-none text-light">Gujurly Bilim Merkezi</a><br>
                    <a href="https://gnbookstore.com.tm/" class="text-decoration-none text-light">Gujurly Kitaphana</a>
                </ul>
            </div>
        </div>
    </div>
</footer>
