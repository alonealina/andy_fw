@extends('layouts.app_fw')

@section('header_page')
<div class="header_page_name">
Shop List
</div>

@endsection

@section('content')

<div class="contents-wrapper top">
    <main class="contents-main">
        <div class="main area-scroll" data-scroll-container data-horizontal="true">
            <section class="section scroll-section" data-scroll-section id="shop_list_section1">
                <div class="store_list header_margin">
                    <div class="store_pref">OFFICIAL SHOP</div>
                    <div class="store_list_flex">
                        <a href="http://www.andy-dress.com/?utm_source=andy-inc&utm_medium=shoplist" class="store_a" target="_blank">Andy 公式通販</a>
                    </div>

                    <div class="store_pref">北海道</div>
                    <div class="store_list_flex">
                        <a href="https://www.andy-dress.com/fs/andy/c/st_hokkaido" class="store_a" target="_blank">オレンジハウス(本店)</a>
                        <a href="https://www.andy-dress.com/fs/andy/c/st_hokkaido" class="store_a" target="_blank">オレンジハウス(ススキノ店)</a>
                        <a href="https://www.andy-dress.com/fs/andy/c/st_hokkaido" class="store_a" target="_blank">SPUR</a>
                        <a href="https://www.andy-dress.com/fs/andy/c/st_hokkaido" class="store_a" target="_blank">JAM</a>
                    </div>

                    <div class="store_pref">東北</div>
                    <div class="store_list_flex">
                        <a href="https://www.andy-dress.com/fs/andy/c/st_touhoku" class="store_a" target="_blank">ブリリアント</a>
                        <a href="https://www.andy-dress.com/fs/andy/c/st_touhoku" class="store_a" target="_blank">PB1 仙台</a>
                        <a href="https://www.andy-dress.com/fs/andy/c/st_touhoku" class="store_a" target="_blank">LOUFER</a>
                    </div>

                    <div class="store_pref">北陸/上信越</div>
                    <div class="store_list_flex">
                        <a href="https://www.andy-dress.com/fs/andy/c/st_hokuriku" class="store_a" target="_blank">sugar 古町店</a>
                        <a href="https://www.andy-dress.com/fs/andy/c/st_hokuriku" class="store_a" target="_blank">PEARL</a>
                        <a href="https://www.andy-dress.com/fs/andy/c/st_hokuriku" class="store_a" target="_blank">make cat</a>
                        <a href="https://www.andy-dress.com/fs/andy/c/st_hokuriku" class="store_a" target="_blank">make cat matsumoto</a>
                        <a href="https://www.andy-dress.com/fs/andy/c/st_hokuriku" class="store_a" target="_blank">RODEO DRIVE 掛尾店</a>
                    </div>

                    <div class="store_pref">関東</div>
                    <div class="store_list_flex">
                        <a href="https://www.andy-dress.com/fs/andy/c/st_kanto" class="store_a" target="_blank">ZEST</a>
                        <a href="https://www.andy-dress.com/fs/andy/c/st_kanto" class="store_a" target="_blank">COSMO</a>
                        <a href="https://www.andy-dress.com/fs/andy/c/st_kanto" class="store_a" target="_blank">Bay-B-Club 大宮</a>
                        <a href="https://www.andy-dress.com/fs/andy/c/st_kanto" class="store_a" target="_blank">ange</a>
                        <a href="https://www.andy-dress.com/fs/andy/c/st_kanto" class="store_a" target="_blank">Bay-B-Club 柏</a>
                        <a href="https://www.andy-dress.com/fs/andy/c/st_kanto" class="store_a" target="_blank">Bay-B-Club 千葉MIO本店</a>
                        <a href="https://www.andy-dress.com/fs/andy/c/st_kanto" class="store_a" target="_blank">BINOMA</a>
                        <a href="https://www.andy-dress.com/fs/andy/c/st_kanto" class="store_a" target="_blank">Black Cat</a>
                        <a href="https://www.andy-dress.com/fs/andy/c/st_kanto" class="store_a" target="_blank">Bay-B-Club 横浜</a>
                        <a class="store_a" target="_blank">Macllyz 関内</a>
                    </div>

                </div>

            </section>

            <section class="section scroll-section" data-scroll-section id="shop_list_section2">
                <div class="store_list header_margin">

                <div class="store_pref">首都圏</div>
                    <div class="store_list_flex">
                        <a href="https://www.andy-dress.com/fs/andy/c/st_tokyo" class="store_a" target="_blank">SHIRAI</a>
                        <a href="https://www.andy-dress.com/fs/andy/c/st_tokyo" class="store_a" target="_blank">sugar 歌舞伎町店</a>
                        <a href="https://www.andy-dress.com/fs/andy/c/st_tokyo" class="store_a" target="_blank">Dazzy 新宿サブナート</a>
                        <a href="https://www.andy-dress.com/fs/andy/c/st_tokyo" class="store_a" target="_blank">ニュースソース</a>
                        <a href="https://www.andy-dress.com/fs/andy/c/st_tokyo" class="store_a" target="_blank">プログレス</a>
                        <a href="https://www.andy-dress.com/fs/andy/c/st_tokyo" class="store_a" target="_blank">Bay-B-Club 池袋</a>
                        <a href="https://www.andy-dress.com/fs/andy/c/st_tokyo" class="store_a" target="_blank">Bay-B-Club 池袋アルタ</a>
                        <a href="https://www.andy-dress.com/fs/andy/c/st_tokyo" class="store_a" target="_blank">Bay-B-Club 新宿アルタ</a>
                        <a href="https://www.andy-dress.com/fs/andy/c/st_tokyo" class="store_a" target="_blank">Bay-B-Club 新宿サブナード</a>
                        <a href="https://www.andy-dress.com/fs/andy/c/st_tokyo" class="store_a" target="_blank">Bay-B-Club 町田</a>
                        <a href="https://www.andy-dress.com/fs/andy/c/st_tokyo" class="store_a" target="_blank">Bay-B-Club 上野</a>
                        <a href="https://www.andy-dress.com/fs/andy/c/st_tokyo" class="store_a" target="_blank">Le Dione</a>
                        <a class="store_a" target="_blank">RIGEL</a>
                    </div>

                    <div class="store_pref">東海</div>
                    <div class="store_list_flex">
                        <a href="https://www.andy-dress.com/fs/andy/c/st_toukai" class="store_a" target="_blank">DC-1</a>
                        <a href="https://www.andy-dress.com/fs/andy/c/st_toukai" class="store_a" target="_blank">PB-1 錦 Ⅰ号店</a>
                        <a href="https://www.andy-dress.com/fs/andy/c/st_toukai" class="store_a" target="_blank">Moon</a>
                        <a href="https://www.andy-dress.com/fs/andy/c/st_toukai" class="store_a" target="_blank">Cupid Dress coection</a>
                        <a class="store_a" target="_blank">DRESS SHOP UNICORN</a>
                    </div>

                    <div class="store_pref">関西</div>
                    <div class="store_list_flex">
                        <a href="https://www.andy-dress.com/fs/andy/c/st_osaka" class="store_a" target="_blank">Bay-B-Club 心斎橋店</a>
                        <a href="https://www.andy-dress.com/fs/andy/c/st_kansai"class="store_a" target="_blank">Galle</a>
                        <a href="https://www.andy-dress.com/fs/andy/c/st_kansai"class="store_a" target="_blank">コルテ・デ・モード</a>
                        <a href="https://www.andy-dress.com/fs/andy/c/st_kansai"class="store_a" target="_blank">Macllyz 京都</a>
                        <a href="https://www.andy-dress.com/fs/andy/c/st_osaka" class="store_a" target="_blank">Attachment</a>
                        <a href="https://www.andy-dress.com/fs/andy/c/st_osaka" class="store_a" target="_blank">Gaudi</a>
                        <a class="store_a" target="_blank">be milano 北新地店</a>
                        <a href="https://www.andy-dress.com/fs/andy/c/st_osaka" class="store_a" target="_blank">TIARA</a>
                        <a class="store_a" target="_blank">Vanity ME. 北新地</a>
                        <a href="https://www.andy-dress.com/fs/andy/c/st_osaka" class="store_a" target="_blank">LiLLion</a>
                        <a href="https://www.andy-dress.com/fs/andy/c/st_osaka" class="store_a" target="_blank">an by Vanity ME.</a>
                        <a href="https://www.andy-dress.com/fs/andy/c/st_osaka" class="store_a" target="_blank">Vanity ME. 心斎橋</a>
                        <a href="https://www.andy-dress.com/fs/andy/c/st_osaka" class="store_a" target="_blank">Vanity ME. 八幡筋</a>
                    </div>

                    <div class="store_pref">中国/四国</div>
                    <div class="store_list_flex">
                        <a href="https://www.andy-dress.com/fs/andy/c/st_chugoku" class="store_a" target="_blank">VIARU</a>
                        <a href="https://www.andy-dress.com/fs/andy/c/st_chugoku" class="store_a" target="_blank">TOP CHIC</a>
                        <a href="https://www.andy-dress.com/fs/andy/c/st_chugoku" class="store_a" target="_blank">クラウンジュエル</a>
                        <a href="https://www.andy-dress.com/fs/andy/c/st_chugoku" class="store_a" target="_blank">PB-1 広島3号店</a>
                    </div>

                </div>
            </section>

            <section class="section scroll-section" data-scroll-section id="shop_list_section3">
                <div class="store_list header_margin">

                    <div class="store_pref">九州</div>
                    <div class="store_list_flex">
                        <a href="https://www.andy-dress.com/fs/andy/c/st_kyusyu" class="store_a" target="_blank">A♥cloth</a>
                        <a href="https://www.andy-dress.com/fs/andy/c/st_kyusyu" class="store_a" target="_blank">Cinderella</a>
                        <a href="https://www.andy-dress.com/fs/andy/c/st_kyusyu" class="store_a" target="_blank">HITSUJIYA</a>
                        <a href="https://www.andy-dress.com/fs/andy/c/st_kyusyu" class="store_a" target="_blank">be milano 川丈店</a>
                        <a href="https://www.andy-dress.com/fs/andy/c/st_kyusyu" class="store_a" target="_blank">be milano 大通り店</a>
                        <a href="https://www.andy-dress.com/fs/andy/c/st_kyusyu" class="store_a" target="_blank">ヒロクロージング</a>
                        <a href="https://www.andy-dress.com/fs/andy/c/st_kyusyu" class="store_a" target="_blank">ラビリンス</a>
                        <a href="https://www.andy-dress.com/fs/andy/c/st_kyusyu" class="store_a" target="_blank">1 Million</a>
                        <a class="store_a" target="_blank">ドレスショップ　ヴォーグ</a>
                        <a href="https://www.andy-dress.com/fs/andy/c/st_kyusyu" class="store_a" target="_blank">Pareo</a>
                        <a href="https://www.andy-dress.com/fs/andy/c/st_kyusyu" class="store_a" target="_blank">LOVES.ME</a>
                        <a href="https://www.andy-dress.com/fs/andy/c/st_kyusyu" class="store_a" target="_blank">Linda 本店</a>
                        <a href="https://www.andy-dress.com/fs/andy/c/st_kyusyu" class="store_a" target="_blank">ALACARTE</a>
                        <a href="https://www.andy-dress.com/fs/andy/c/st_kyusyu" class="store_a" target="_blank">KINA 宮崎</a>
                        <a href="https://www.andy-dress.com/fs/andy/c/st_kyusyu" class="store_a" target="_blank">ドレスのフルタ</a>
                        <a href="https://www.andy-dress.com/fs/andy/c/st_kyusyu" class="store_a" target="_blank">sugar 鹿児島店</a>
                        <a href="https://www.andy-dress.com/fs/andy/c/st_kyusyu" class="store_a" target="_blank">Dazzy 沖縄</a>
                        <a href="https://www.andy-dress.com/fs/andy/c/st_kyusyu" class="store_a" target="_blank">BELLESOI 松山店</a>
                    </div>
                </div>

            </section>

        </div>
    </main>
</div>

@endsection

@section('header_page_sp')
<div class="header_page_name_sp">
Shop List
</div>
@endsection

@section('content_sp')
<div style="padding:0px 10px 100px;">
    <div class="page_title">STORE LIST</div>
    <a href="#!" class="store_pref_sp" onclick="clickStorePref1();">
        OFFICIAL SHOP<img src="{{ asset('img/down_black.png') }}" id="down1" class="down"><img src="{{ asset('img/up_black.png') }}" id="up1" class="up">
    </a>
    <div class="store_list_flex_sp" id="store1">
        <a href="http://www.andy-dress.com/?utm_source=andy-inc&utm_medium=shoplist" class="store_a_sp" target="_blank">Andy 公式通販</a>
    </div>

    <a href="#!" class="store_pref_sp" onclick="clickStorePref2();">
        北海道<img src="{{ asset('img/down_black.png') }}" id="down2" class="down"><img src="{{ asset('img/up_black.png') }}" id="up2" class="up">
    </a>
    <div class="store_list_flex_sp" id="store2">
        <a href="https://www.andy-dress.com/fs/andy/c/st_hokkaido" class="store_a_sp" target="_blank">オレンジハウス(本店)</a>
        <a href="https://www.andy-dress.com/fs/andy/c/st_hokkaido" class="store_a_sp" target="_blank">オレンジハウス(ススキノ店)</a>
        <a href="https://www.andy-dress.com/fs/andy/c/st_hokkaido" class="store_a_sp" target="_blank">SPUR</a>
        <a href="https://www.andy-dress.com/fs/andy/c/st_hokkaido" class="store_a_sp" target="_blank">JAM</a>
    </div>

    
    <a href="#!" class="store_pref_sp" onclick="clickStorePref3();">
    東北<img src="{{ asset('img/down_black.png') }}" id="down3" class="down"><img src="{{ asset('img/up_black.png') }}" id="up3" class="up">
    </a>
    <div class="store_list_flex_sp" id="store3">
        <a href="https://www.andy-dress.com/fs/andy/c/st_touhoku" class="store_a_sp" target="_blank">ブリリアント</a>
        <a href="https://www.andy-dress.com/fs/andy/c/st_touhoku" class="store_a_sp" target="_blank">PB1 仙台</a>
        <a href="https://www.andy-dress.com/fs/andy/c/st_touhoku" class="store_a_sp" target="_blank">LOUFER</a>
    </div>


    <a href="#!" class="store_pref_sp" onclick="clickStorePref4();">
    北陸/上信越<img src="{{ asset('img/down_black.png') }}" id="down4" class="down"><img src="{{ asset('img/up_black.png') }}" id="up4" class="up">
    </a>
    <div class="store_list_flex_sp" id="store4">
        <a href="https://www.andy-dress.com/fs/andy/c/st_hokuriku" class="store_a_sp" target="_blank">sugar 古町店</a>
        <a href="https://www.andy-dress.com/fs/andy/c/st_hokuriku" class="store_a_sp" target="_blank">PEARL</a>
        <a href="https://www.andy-dress.com/fs/andy/c/st_hokuriku" class="store_a_sp" target="_blank">make cat</a>
        <a href="https://www.andy-dress.com/fs/andy/c/st_hokuriku" class="store_a_sp" target="_blank">make cat matsumoto</a>
        <a href="https://www.andy-dress.com/fs/andy/c/st_hokuriku" class="store_a_sp" target="_blank">RODEO DRIVE 掛尾店</a>
    </div>

    <a href="#!" class="store_pref_sp" onclick="clickStorePref5();">
    首都圏<img src="{{ asset('img/down_black.png') }}" id="down5" class="down"><img src="{{ asset('img/up_black.png') }}" id="up5" class="up">
    </a>
    <div class="store_list_flex_sp" id="store5">
        <a href="https://www.andy-dress.com/fs/andy/c/st_tokyo" class="store_a_sp" target="_blank">SHIRAI</a>
        <a href="https://www.andy-dress.com/fs/andy/c/st_tokyo" class="store_a_sp" target="_blank">sugar 歌舞伎町店</a>
        <a href="https://www.andy-dress.com/fs/andy/c/st_tokyo" class="store_a_sp" target="_blank">Dazzy 新宿サブナート</a>
        <a href="https://www.andy-dress.com/fs/andy/c/st_tokyo" class="store_a_sp" target="_blank">ニュースソース</a>
        <a href="https://www.andy-dress.com/fs/andy/c/st_tokyo" class="store_a_sp" target="_blank">プログレス</a>
        <a href="https://www.andy-dress.com/fs/andy/c/st_tokyo" class="store_a_sp" target="_blank">Bay-B-Club 池袋</a>
        <a href="https://www.andy-dress.com/fs/andy/c/st_tokyo" class="store_a_sp" target="_blank">Bay-B-Club 池袋アルタ</a>
        <a href="https://www.andy-dress.com/fs/andy/c/st_tokyo" class="store_a_sp" target="_blank">Bay-B-Club 新宿アルタ</a>
        <a href="https://www.andy-dress.com/fs/andy/c/st_tokyo" class="store_a_sp" target="_blank">Bay-B-Club 新宿サブナード</a>
        <a href="https://www.andy-dress.com/fs/andy/c/st_tokyo" class="store_a_sp" target="_blank">Bay-B-Club 町田</a>
        <a href="https://www.andy-dress.com/fs/andy/c/st_tokyo" class="store_a_sp" target="_blank">Bay-B-Club 上野</a>
        <a href="https://www.andy-dress.com/fs/andy/c/st_tokyo" class="store_a_sp" target="_blank">Le Dione</a>
        <a class="store_a_sp" target="_blank">RIGEL</a>
    </div>

    <a href="#!" class="store_pref_sp" onclick="clickStorePref6();">
    東海<img src="{{ asset('img/down_black.png') }}" id="down6" class="down"><img src="{{ asset('img/up_black.png') }}" id="up6" class="up">
    </a>
    <div class="store_list_flex_sp" id="store6">
        <a href="https://www.andy-dress.com/fs/andy/c/st_toukai" class="store_a_sp" target="_blank">DC-1</a>
        <a href="https://www.andy-dress.com/fs/andy/c/st_toukai" class="store_a_sp" target="_blank">PB-1 錦 Ⅰ号店</a>
        <a href="https://www.andy-dress.com/fs/andy/c/st_toukai" class="store_a_sp" target="_blank">Moon</a>
        <a href="https://www.andy-dress.com/fs/andy/c/st_toukai" class="store_a_sp" target="_blank">Cupid Dress coection</a>
        <a class="store_a_sp" target="_blank">DRESS SHOP UNICORN</a>
    </div>

    <a href="#!" class="store_pref_sp" onclick="clickStorePref7();">
    関西<img src="{{ asset('img/down_black.png') }}" id="down7" class="down"><img src="{{ asset('img/up_black.png') }}" id="up7" class="up">
    </a>
    <div class="store_list_flex_sp" id="store7">
        <a href="https://www.andy-dress.com/fs/andy/c/st_osaka" class="store_a_sp" target="_blank">Bay-B-Club 心斎橋店</a>
        <a href="https://www.andy-dress.com/fs/andy/c/st_kansai"class="store_a_sp" target="_blank">Galle</a>
        <a href="https://www.andy-dress.com/fs/andy/c/st_kansai"class="store_a_sp" target="_blank">コルテ・デ・モード</a>
        <a href="https://www.andy-dress.com/fs/andy/c/st_kansai"class="store_a_sp" target="_blank">Macllyz 京都</a>
        <a href="https://www.andy-dress.com/fs/andy/c/st_osaka" class="store_a_sp" target="_blank">Attachment</a>
        <a href="https://www.andy-dress.com/fs/andy/c/st_osaka" class="store_a_sp" target="_blank">Gaudi</a>
        <a class="store_a_sp" target="_blank">be milano 北新地店</a>
        <a href="https://www.andy-dress.com/fs/andy/c/st_osaka" class="store_a_sp" target="_blank">TIARA</a>
        <a class="store_a_sp" target="_blank">Vanity ME. 北新地</a>
        <a href="https://www.andy-dress.com/fs/andy/c/st_osaka" class="store_a_sp" target="_blank">LiLLion</a>
        <a href="https://www.andy-dress.com/fs/andy/c/st_osaka" class="store_a_sp" target="_blank">an by Vanity ME.</a>
        <a href="https://www.andy-dress.com/fs/andy/c/st_osaka" class="store_a_sp" target="_blank">Vanity ME. 心斎橋</a>
        <a href="https://www.andy-dress.com/fs/andy/c/st_osaka" class="store_a_sp" target="_blank">Vanity ME. 八幡筋</a>
    </div>

    <a href="#!" class="store_pref_sp" onclick="clickStorePref8();">
    中国/四国<img src="{{ asset('img/down_black.png') }}" id="down8" class="down"><img src="{{ asset('img/up_black.png') }}" id="up8" class="up">
    </a>
    <div class="store_list_flex_sp" id="store8">
        <a href="https://www.andy-dress.com/fs/andy/c/st_chugoku" class="store_a_sp" target="_blank">VIARU</a>
        <a href="https://www.andy-dress.com/fs/andy/c/st_chugoku" class="store_a_sp" target="_blank">TOP CHIC</a>
        <a href="https://www.andy-dress.com/fs/andy/c/st_chugoku" class="store_a_sp" target="_blank">クラウンジュエル</a>
        <a href="https://www.andy-dress.com/fs/andy/c/st_chugoku" class="store_a_sp" target="_blank">PB-1 広島3号店</a>
    </div>

    <a href="#!" class="store_pref_sp" onclick="clickStorePref9();">
    九州<img src="{{ asset('img/down_black.png') }}" id="down9" class="down"><img src="{{ asset('img/up_black.png') }}" id="up9" class="up">
    </a>
    <div class="store_list_flex_sp" id="store9">
        <a href="https://www.andy-dress.com/fs/andy/c/st_kyusyu" class="store_a_sp" target="_blank">A♥cloth</a>
        <a href="https://www.andy-dress.com/fs/andy/c/st_kyusyu" class="store_a_sp" target="_blank">Cinderella</a>
        <a href="https://www.andy-dress.com/fs/andy/c/st_kyusyu" class="store_a_sp" target="_blank">HITSUJIYA</a>
        <a href="https://www.andy-dress.com/fs/andy/c/st_kyusyu" class="store_a_sp" target="_blank">be milano 川丈店</a>
        <a href="https://www.andy-dress.com/fs/andy/c/st_kyusyu" class="store_a_sp" target="_blank">be milano 大通り店</a>
        <a href="https://www.andy-dress.com/fs/andy/c/st_kyusyu" class="store_a_sp" target="_blank">ヒロクロージング</a>
        <a href="https://www.andy-dress.com/fs/andy/c/st_kyusyu" class="store_a_sp" target="_blank">ラビリンス</a>
        <a href="https://www.andy-dress.com/fs/andy/c/st_kyusyu" class="store_a_sp" target="_blank">1 Million</a>
        <a class="store_a_sp" target="_blank">ドレスショップ　ヴォーグ</a>
        <a href="https://www.andy-dress.com/fs/andy/c/st_kyusyu" class="store_a_sp" target="_blank">Pareo</a>
        <a href="https://www.andy-dress.com/fs/andy/c/st_kyusyu" class="store_a_sp" target="_blank">LOVES.ME</a>
        <a href="https://www.andy-dress.com/fs/andy/c/st_kyusyu" class="store_a_sp" target="_blank">Linda 本店</a>
        <a href="https://www.andy-dress.com/fs/andy/c/st_kyusyu" class="store_a_sp" target="_blank">ALACARTE</a>
        <a href="https://www.andy-dress.com/fs/andy/c/st_kyusyu" class="store_a_sp" target="_blank">KINA 宮崎</a>
        <a href="https://www.andy-dress.com/fs/andy/c/st_kyusyu" class="store_a_sp" target="_blank">ドレスのフルタ</a>
        <a href="https://www.andy-dress.com/fs/andy/c/st_kyusyu" class="store_a_sp" target="_blank">sugar 鹿児島店</a>
        <a href="https://www.andy-dress.com/fs/andy/c/st_kyusyu" class="store_a_sp" target="_blank">Dazzy 沖縄</a>
        <a href="https://www.andy-dress.com/fs/andy/c/st_kyusyu" class="store_a_sp" target="_blank">BELLESOI 松山店</a>
    </div>


</div>

<script src="{{ asset('js/store_list_sp.js') }}"></script>

@endsection