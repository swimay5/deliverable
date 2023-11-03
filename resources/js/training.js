const btn = document.getElementById('switching-btn');

if(btn){
    const form = document.getElementById('input-kind');
    btn.addEventListener('click', ()=>{
        if(btn.textContent === 'トレーニング新規作成'){
            form.classList.remove('hidden');
            form.classList.add('block');
            btn.textContent = '非表示';
        }else{
            form.classList.remove('block');
            form.classList.add('hidden');
            btn.textContent = 'トレーニング新規作成';
        }
    })
}