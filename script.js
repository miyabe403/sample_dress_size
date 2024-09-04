document.addEventListener('DOMContentLoaded', function() {
    const sizeButtons = document.querySelectorAll('.size-buttons button');
    const dressSelect = document.getElementById('dress');
    const dressImage = document.getElementById('dress-image');

    // サイズボタンのクリック処理
    sizeButtons.forEach(button => {
        button.addEventListener('click', function() {
            const size = this.getAttribute('data-size');
            dressImage.style.width = `${size}%`;
        });
    });

    // ドレスの種類変更時の処理
    dressSelect.addEventListener('change', function() {
        const dressType = dressSelect.value;
        switch (dressType) {
            case 'aline':
                dressImage.src = 'images/a-line_dress2.png';
                break;
            case 'princess':
                dressImage.src = 'images/Princess_Dress_Drawing4.png';
                break;
            case 'mermaid':
                dressImage.src = 'images/dress3.png';
                break;
            case 'empire':
                dressImage.src = 'images/dress.png';
                break;
            case 'slender':
                dressImage.src = 'images/elegant-slim-dress.webp';
                break;
            case 'mini-mimore':
                dressImage.src = 'images/mi-mollet_Dress_Drawing2.png';
                break;
            default:
                dressImage.src = 'images/a-line_dress2.png';
                break;
        }
        dressImage.style.width = '100%'; // デフォルトサイズ
    });
});
