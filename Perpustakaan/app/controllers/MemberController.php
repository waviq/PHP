<?php

class MemberController extends BaseController {

    public function books() {
        
        return View::make('books.borrow')->withTitle('Pilih buku');
    }

}
