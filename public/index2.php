<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ドレスサイズの視覚化</title>
    <!-- Bootstrap CSS -->
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
    <style>
        body {
            background-color: #f4f4f4;
            padding-top: 20px;
        }
        .container {
            background-color: #fff;
            padding: 20px;
            border-radius: 8px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        }
        .size-buttons button {
            margin: 5px;
        }
        .size-buttons .btn {
            font-size: 16px;
            padding: 10px 20px;
        }
        .dress-controls {
            margin-top: 20px;
        }
        .dress-controls select {
            width: 100%;
        }
        .dress-container {
            width: 300px;
            height: auto;
            margin: 0 auto;
            border: 1px solid #ddd;
            padding: 10px;
            box-sizing: border-box;
            background-color: #fff;
            display: flex;
            justify-content: center;
            align-items: center;
            position: relative;
            background-image: url('images/style.jpg');
            background-size: cover;
            background-position: center;
            background-position: center 8px;
        }
        .dress-container img {
            max-width: 100%;
            height: auto;
        }
　　　　.btn-top {
            background-color: #28a745;
            color: #fff;
            margin-top: 20px;
            display: block;
            width: 100%;
            text-align: center;
        }
        .btn-top:hover {
            background-color: coral;
        }
    </style>
</head>
<body>
    <div class="container">
        <h1 class="text-center">ドレスサイズの視覚化</h1>

        <!-- サイズ調整ボタン -->
        <div class="text-center size-buttons">
            <button class="btn btn-primary" data-size="90">XS</button>
            <button class="btn btn-primary" data-size="92">S</button>
            <button class="btn btn-primary" data-size="94">M</button>
            <button class="btn btn-primary" data-size="96">L</button>
            <button class="btn btn-primary" data-size="98">XL</button>
            <button class="btn btn-primary" data-size="100">2L</button>
        </div>

        <!-- ドレスの種類選択 -->
        <div class="dress-controls">
            <label for="dress">ドレスの種類:</label>
            <select id="dress" class="form-control">
                <option value="aline">Aライン</option>
                <option value="princess">プリンセス</option>
                <option value="mermaid">マーメイド</option>
                <option value="empire">エンパイア</option>
                <option value="slender">スレンダー</option>
                <option value="mini-mimore">ミニミモレ</option>
            </select>
        </div>

        <!-- ドレス画像表示 -->
        <div class="dress-container">
            <img id="dress-image" src="images/a-line_dress2.png" alt="Selected dress">
        </div>

　　　　<!-- TOPページに戻るボタン -->
        <a href="index.html" class="btn btn-top">TOPページに戻る</a>
    </div>

    <!-- Bootstrap JS and dependencies -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.3/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    
    <script src="script.js"></script>
</body>
</html>
