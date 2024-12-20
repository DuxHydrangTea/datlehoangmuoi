window.addEventListener('scroll', e=>{
    const button = document.getElementById('scroll-to-top')
   
    button.addEventListener('click', e =>{
        document.documentElement.scrollTo({
            top:0,
            behavior: "smooth",
    })
    })
})

