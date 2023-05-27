@extends('layouts.app')

@section('content')

    <div class="top">
      <p class="text-light top_title">Cheers</p>
    </div>
    

    <div class="top_menu text-center mt-5 text-light hover:#212529 font-semibold" id="page-link">

      <button type="button" class="btn btn-neutral btn-lg text-light mx-2" onclick="location.href='{{route ('cocktails')}}'">Cocktail Recipe</button>
      <button type="button" class="btn btn-neutral btn-lg text-light mx-2" onclick="location.href='{{route ('posts.index')}}'">Timeline</button>
      <button type="button" class="btn btn-neutral btn-lg text-light mx-2" onclick="location.href='#'">Master Talk</button>
      <a href="#about_title"><button type="button" class="btn btn-neutral btn-lg text-light mx-2">About Cheers</button></a>

    </div>

    

    <div class="about">

        <div class="top" id="about_top">
          <p class="text-light top_title" id="about_title">Cheers</p>
        </div>

        <div class="introduction">
            <p class="text-light" id="int">あなたが飲んだことのない、奇妙なカクテルがここにある… 当サイトでは、普通のカクテルとは一味違った、不思議なカクテルレシピをご紹介しています。<br/>
                猫の鳴き声が聞こえる、月が赤く染まる、花火が上がる…そんな不思議な体験ができるカクテルたちです。<br/>
                一度飲んでみると、そこには別世界の扉が開かれるかもしれません。しかしその扉を開けた後、あなたが何者になってしまうのかは分かりません。<br/>
                是非当サイトで、不思議なカクテルの世界に足を踏み入れてみてください。後悔はさせません…かもしれません。</p><br/><br/>
            <p class="text-light aphorism" id="int">酒は度を超さなければ、人にとってほとんど生命そのものに等しい ----- [旧約聖書]</p><br/>
            <p class="text-light aphorism" id="int">酒と女と歌を愛さぬ者は一生阿呆で過ごすのだ ----- [マルチン・ルター]</p><br/>
            <p class="text-light aphorism" id="int">勤労は日々を豊かにし、酒は日曜日を幸福にする ----- [シャルル・ボードレール]</p><br/><br/>

            <p class="text-light" id="int">様々な格言があるようにお酒は人生や日々の生活をちょっと幸せに、色鮮やかに変えられるものかもしれません。
                そのお手伝いをこのサイトでさせていただければと思います。
            </p>

            <p class="text-light h1">～このサイトを使えるシチュエーション例～</p>

            <div class="card mx-2" style="width: 18rem;">
              <img class="card-img-top" src="{{ asset('img/takunomi.png') }}" alt="Card image cap">
             <div class="card-body">
               <p class="card-text text-light" id="int">1人飲みのマンネリ化や<br/>いつもと違うものを、<br/>オシャレにいきたいときに</p></p>
             </div>
            </div>

            <div class="card mx-2" style="width: 18rem;">
              <img class="card-img-top" src="{{ asset('img/couple.png') }}" alt="Card image cap">
             <div class="card-body">
               <p class="card-text text-light" id="int">デートをよりオシャレに<br/>スマートにこなすための<br/>準備や参考に</p>
             </div>
            </div>

            <div class="card mx-2" style="width: 18rem;">
              <img class="card-img-top" src="{{ asset('img/kidori.png') }}" alt="Card image cap">
             <div class="card-body">
               <p class="card-text text-light" id="int">あまり詳しくないのに<br/>少しイキったかっこつけや<br/>誰かに教えてあげたい時に</p>
             </div>
            </div>

            <div class="card mx-2" style="width: 18rem;">
              <img class="card-img-top" src="{{ asset('img/kanpai.png') }}" alt="Card image cap">
             <div class="card-body">
               <p class="card-text text-light" id="int">友人や同僚との飲みの場で<br/>落ち着いて飲みたいなど<br/>普段と違う場面に</p>
             </div>
            </div>

        </div>

    </div>



    
@endsection