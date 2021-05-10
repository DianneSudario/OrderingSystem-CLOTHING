@foreach ($products as $product)


<p>{{ $product->description }} </p>
<p>{{ $product->name }}</p>
<p>{{ $product->price }} </p>


@endforeach

