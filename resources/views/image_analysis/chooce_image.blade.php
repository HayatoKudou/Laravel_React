<head>
    <meta charset="utf-8">
    <title>Image Analysis</title>
    <link rel="stylesheet" type="text/css" href="/css/image_analysis/CloudVision.css">
</head>
<body>
    <h3 id='title'>Image Analysis</h3>
    <!--- 画像をアップロードさせるためのボタンのあるエリア --->
    <div id="uploadArea"><l>Choose an image file (.jpg or .png or whatever) : </l><input type="file" id="uploader"></div>
    <hr>
    <!--- Google Cloud Vision APIに画像ファイルを送り、得られた結果を表示するエリア　--->
    <!--- 初期状態ではクラス"hidden"を付与し、CSSでhiddenクラスは表示されないよう記述します --->
    <div class="resultArea hidden">
        <!--- アップロードされた画像を表示 --->
        <div id="showPic"></div>
        <!--- ラベル検出の結果を表示 --->
        <table id="resultTable">
            <thead><tr><td><b>This picture may be about...</b></td></tr></thead>
            <tbody id="resultBox"></tbody>
        </table>
    </div>
    <div class="resultArea hidden">
        <!--- 人物の表情に関する結果をレーダーチャートで表示 --->
        <div id="chartArea"></div>
        <!--- テキスト解読の結果を表示 --->
        <table id="textTable">
            <thead><tr><td><b>This picture may contain following word(s)</b></td></tr></thead>
            <tbody id="textBox"></tbody>
        </table>
    </div>
</body>


<script src="//code.jquery.com/jquery-1.10.1.min.js"></script>
<!--- 表情分析の結果をレーダーチャートで表すために以下の二つを用います --->
<script src="//code.highcharts.com/highcharts.js"></script>
<script src="//code.highcharts.com/highcharts-more.js"></script>
<script type="text/javascript" src="/js/CloudVision.js"></script>
