console.clear();

const{ gsap, CircleType } = window;

const cursorOuter = document.querySelector('.cursor--large');
const cursorInner = document.querySelector('.cursor--small');
const cursorTextContainerEl = document.querySelector('.cursor--text');
const cursorText = cursorTextContainerEl.querySelector('.text');

const hoverItems = document.querySelectorAll('a')
const hoverEffectDuration = 0.3;
let isHovered = false;

let mouse = {
    x: -100,
    y: -100
}

hoverItems.forEach(items =>{
    items.addEventListener('pointerenter', handlePointerEnter)
    items.addEventListener('pointerleave', handlePointerLeave)
})

const circletype = new CircleType(cursorText);

document.body .addEventListener('pointermove', updateCursorPosition)

function updateCursorPosition(e){
    mouse.x = e.pageX;
    mouse.y = e.pageY;
}

function updateCursor(){
    gsap.set([cursorInner, cursorTextContainerEl],{
        x: mouse.x,
        y: mouse.y,
    })

    gsap.to(cursorOuter, 0.15,{
        x: mouse.x,
        y: mouse.y 
    })

    if(!isHovered){
        gsap.to(cursorTextContainerEl, hoverEffectDuration, {
            opacity: 0,
            scale: 1.2,
        })
    }
    requestAnimationFrame(updateCursor)
}

updateCursor();

function handlePointerEnter(){
isHovered =true;
gsap.to(cursorInner, hoverEffectDuration, {
    scale: 2,
});
gsap.to(cursorOuter, hoverEffectDuration, {
    scale: 1.2,
    opacity: 0,
});
gsap.to(cursorInner, hoverEffectDuration, {
    scale: 1,
    opacity: 1,
});
}

function handlePointerLeave(){
    isHovered = false;
    gsap.to([cursorInner, cursorOuter],hoverEffectDuration,{
        scale: 1,
        opacity: 1,
    });
}