<?php $title = "DTGBOOK【書籍一覧】";?>
<?php $csspath = "css/list_of_books.css";?>
<?php $jspath = "js/dropdown.js";?>

@extends("common.header")
@section('body')

<main>
<!-- 検索機能コメントアウト（実際はvalueのkeywordは変数） -->
<!-- <form action="http://54.248.141.223/list_of_books" method="GET">
  <div id="search">
    <input id="sbox" name="s" type="text" value=keyword placeholder="キーワードを入力" />
  
  <div class="dropdown">
    <button type="button" id="dropdown" id="search"
      class="btn btn-outline-secondary dropdown-toggle"
      data-toggle="dropdown"
      aria-haspopup="true"
      aria-expanded="false">
    カテゴリ検索
    </button>
    <ul class="dropdown-menu">
      <li><button class="dropdown-item" value="RPA">RPA</button></li>
      <li><button class="dropdown-item" value="統計学">統計学</button></li>
      <li><button class="dropdown-item" value="AI">AI</button></li>
    </ul>
  </div>
  
  <div class="dropdown">
    <button type="button"  id="dropdown" id="search"
      class="btn btn-outline-secondary dropdown-toggle"
      data-toggle="dropdown"
      aria-haspopup="true"
      aria-expanded="false">
    並び替え
    </button>
    <ul class="dropdown-menu">
      <li><button class="dropdown-item" value="発行年">発行年</button></li>
      <li><button class="dropdown-item" value="著者">著者</button></li>
      <li><button class="dropdown-item" value="タイトル">タイトル</button></li>
    </ul>
  </div>
  
  <input id="sbtn" id="search" type="submit" value="検索" /></div>
  </form> -->

  @foreach($data as $d)
  <div id="book_p">
    <div id="book">
      <img src="image/book_001.png" id="image" alt="表紙画像" width="135" height="135" />
    </div>
    
    <div id="book">
      <div id="text">
        <p id="category">RPA</p>
        <p id="title">タイトル：{{$d->title}}</p>
        <p>発行年：{{$d -> year_of_issue}}</p>
        <p>出版社：{{$d -> publisher}}</p>
        <p>貸出状況：貸出可</p>
      </div>
    </div>
  </div>
  <div id="button_p">
    <div id="button">

    <form action="http://54.248.141.223/information_of_book" method="post">
    @csrf
    <input type = "hidden" name="number" value="{{$d->book_number}}">
      <button type="submit" class="btn btn-outline-secondary">
        詳細表示
      </button>
      </form>
    </div>
    <div id="button">
      <button type="button" class="btn btn-outline-danger">
        書籍編集
      </button>
    </div>
  </div>
  @endforeach

  <div id="button_p">
    <div id="button" id="next">
      <button type="button" class="btn btn-outline-success" onclick="location.href='https://www-cf.dtg-shosekikanri2020-test.tk/information_of_book'">
        前
      </button>
    </div>
    <div id="button" id="next">
      <button type="button" class="btn btn-outline-success">
        次
      </button>
    </div>
  </div>
</main>

@endsection