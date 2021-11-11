<table border="1">
    <th>название</th>
    <th>ценa</th>
    <th>наличие на складе</th>
    <th>описание продукта</th>
    <th>азвание категории</th>
    <tr>
        <td>{{ $product['name'] }}</td>
        <td>{{ $product['cost'] }}</td>
        @if($product['inStock'] === true)
            <td>есть в наличии</td>
        @elseif($product['inStock'] === false)
            <td>нет в наличии</td>
        @endif
        <td>{{ $product['desc'] }}</td>
        <td><a href="/product/{{{ $category_id }}}/">{{ $name }}</a></td>
    </tr>
</table>
