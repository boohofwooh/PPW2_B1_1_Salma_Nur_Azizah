@yield('content')
<h1>Data Barang</h1>
<table>
    <tr>
        <th>ID Barang</th>
        <th>Nama Barang</th>
        <th>Harga Barang</th>
        <th>Stok Barang</th>
        <th>ID Supplier</th>
    </tr>
    @foreach($data as $barang)
    <tr>
        <td>{{ $barang->id_barang }}</td>
        <td>{{ $barang->nama_barang }}</td>
        <td>{{ $barang->harga }}</td>
        <td>{{ $barang->stok }}</td>
        <td>{{ $barang->id_supplier }}</td>
    </tr>
    @endforeach
</table>
