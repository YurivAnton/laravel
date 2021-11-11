<table border="1">
    <th></th>
    <th>название продукта</th>
    <th>цена</th>
    @foreach($products as $product)
        <tr>
            <td>{{ $loop->iteration }}</td>
            <td><a href="/product/{{{ $category_id }}}/{{{ $loop->iteration }}}/">{{ $product['name'] }}</a></td>
            <td>{{ $product['cost'] }}</td>
        </tr>
    @endforeach
</table>
