<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class book_a_table extends Controller
{
    public function store(Request $request){


    $book_a_table->add_message( $_POST['name'], 'Name');
    $book_a_table->add_message( $_POST['email'], 'Email');
    $book_a_table->add_message( $_POST['phone'], 'Phone', 4);
    $book_a_table->add_message( $_POST['date'], 'Date', 4);
    $book_a_table->add_message( $_POST['time'], 'Time', 4);
    $book_a_table->add_message( $_POST['people'], '# of people', 1);
    $book_a_table->add_message( $_POST['message'], 'Message');

    echo $book_a_table->send();
    }

}
