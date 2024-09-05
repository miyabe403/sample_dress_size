<?php
// CORS ヘッダーの設定
header("Access-Control-Allow-Origin: *");
header("Access-Control-Allow-Methods: GET, POST, OPTIONS");
header("Access-Control-Allow-Headers: Content-Type");

// HTTP OPTIONS リクエストに対応する
if ($_SERVER['REQUEST_METHOD'] == 'OPTIONS') {
    header('HTTP/1.1 200 OK');
    exit;
}

// サイズデータの読み込み
$sizes_file = 'dress_sizes.json';
if (!file_exists($sizes_file)) {
    header('HTTP/1.1 404 Not Found');
    echo json_encode(['error' => 'サイズデータファイルが見つかりません']);
    exit;
}

$sizes_data = file_get_contents($sizes_file);
$sizes = json_decode($sizes_data, true);

// JSONエラーチェック
if (json_last_error() !== JSON_ERROR_NONE) {
    header('HTTP/1.1 500 Internal Server Error');
    echo json_encode(['error' => 'サイズデータのJSONエラー']);
    exit;
}

// 入力サイズの取得
$bust = isset($_GET['bust']) ? (int)$_GET['bust'] : 0;
$waist = isset($_GET['waist']) ? (int)$_GET['waist'] : 0;
$hip = isset($_GET['hip']) ? (int)$_GET['hip'] : 0;
$shoulder = isset($_GET['shoulder']) ? (int)$_GET['shoulder'] : 0;

// サイズ判定のロジック
$best_fit = null;
foreach ($sizes as $size) {
    if ($bust <= $size['bust'] && $waist <= $size['waist'] && $hip <= $size['hip'] && $shoulder <= $size['shoulder']) {
        $best_fit = $size;
        break;
    }
}

// 結果の返却
header('Content-Type: application/json');
echo json_encode($best_fit ? $best_fit : ["size" => "合うサイズが見つかりません"]);
?>