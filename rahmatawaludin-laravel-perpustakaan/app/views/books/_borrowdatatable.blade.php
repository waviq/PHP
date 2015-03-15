{{ Datatable::table()
    ->addColumn('id','title', 'author', 'amount', 'stock', '')
    ->setOptions('aoColumnDefs',array(
        array(
            'bVisible' => false,
            'aTargets' => [0]),
        array(
            'sTitle' => 'Judul',
            'aTargets' => [1]),
        array(
            'sTitle' => 'Jumlah',
            'aTargets' => [2]),
        array(
            'sTitle' => 'Stok',
            'aTargets' => [3]),
        array(
            'sTitle' => 'Penulis',
            'aTargets' => [4]),
        array(
            'bSortable' => false,
            'aTargets' => [5])
        ))
    ->setOptions('bProcessing', true)
    ->setUrl(route('datatable.books.borrow'))
    ->render('datatable.uikit') }}