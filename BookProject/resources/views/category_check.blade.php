<?php $title = "DTGBOOK【書籍一覧】";?>
<?php $csspath = "css/category_check.css";?>

@extends("common.header")
@section('body')

<main>
    <div id="category">
        <p>カテゴリ情報表示</p>
    </div>
    <div id="text">
        <p>カテゴリ変更の内容はこちらでよろしいですか？</p>
    </div>
    <div id="button_p">
        <div id="button">
            <button type="button" class="btn btn-outline-secondary" onclick="location.href='https://www-cf.dtg-shosekikanri2020-test.tk/category'">
                キャンセル
            </button>
        </div>
        <div id="button">
            <button type="button" class="btn btn-outline-secondary" onclick="location.href='https://www-cf.dtg-shosekikanri2020-test.tk/completion'">
                確定
            </button>
        </div>
    </div>
</main>

@endsection