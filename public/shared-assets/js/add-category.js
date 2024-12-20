function closeBlock(idBtn, idForm){
    const btn = document.getElementById(idBtn);
    const block = document.getElementById(idForm);

    btn.addEventListener('click', e =>{
        block.classList.toggle('hidden-form')
    })

}
function openBlock(idBtn, idForm){
    const btn = document.getElementById(idBtn);
    const block = document.getElementById(idForm);

    btn.addEventListener('click', e =>{
        block.classList.remove('hidden-form')
    })
}
closeBlock(
    'cancel-add-category',
    'add-category-form'
)
openBlock('button-add-category',  'add-category-form')