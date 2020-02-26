<!DOCTYPE html>
<html>
    <head>
        <title>Dana Mantk</title>
        <script src="https://kit.fontawesome.com/3e1fe6ddc7.js" crossorigin="anonymous"></script>
        <link href="https://fonts.googleapis.com/css?family=Oswald&display=swap" rel="stylesheet">
  <style>
* {
    margin: 0;
    padding: 0;
    box-sizing: border-box;
    font-family: 'Oswald', sans-serif;
}

body {
    overflow: hidden;
}



/***** Header ********/


.header
{
    min-height: 100vh;
    max-height: auto;
    width: 100vw;
    background: rgb(26, 60, 88);
    z-index: 50;
    padding: 0 0 10px 0;
    overflow: hidden;
}

.float-header
{
    position: absolute;
    display: grid;
    grid-template-columns: 1fr 1fr 1fr 1fr;
    z-index: 10;
    width: 100vw;
    height: 12%;
}

.float-header > div > a
{
    text-decoration: none;
    color: #fff;
}

.float-header > div
{
    display: flex;
    justify-content: center;
    align-items: center;
    color: #fff;
    text-transform: uppercase;
    font-size: 15px;
}

.design-curve-div
{
    height: 50vh;
    width: 100vw;
    display: flex;
    align-items: center;
    justify-content: center;
    background: #4CBB17;
    flex-direction: column;
}

.identity-div
{
    display: flex;
    justify-content: center;
    align-items: center;
    width: 100%;
    height: auto;
    font-weight: bold;
    //background: red;
    
}

.web-name
{
    font-size: 2.5em;
    text-transform: uppercase;
    color: #fff;
}

.web-icon
{
    height: 50px;
    width: 50px;
    margin: 0 5px;
    transition: all 1s cubic-bezier(0.68, -0.55, 0.265, 1.55);
}

.icon
{
    height: 35px;
    width: 35px;
    cursor: pointer;
}

.tag-line
{
    color: #fff;
    font-style: italic;
    margin: 5px;
    font-size: 0.8em;
    text-align: center;
}

.search-div
{
    height: auto;
    width: 80%;
    display: grid;
    grid-template-columns: 6fr 2fr;
    grid-column-gap: 3.5px;
    margin: 3% 0;
    z-index: 100;
    position: relative;
}

.search
{
    height: 30px;
    width: 100%;
    border-radius: 5px 0 0 5px;
}

.search, .searchBtn
{
    border: none;
    background: #fff;
}

.searchBtn
{
    border-radius: 0 5px 5px 0;
    background: rgb(26, 60, 88);
    color: #fff;
}


.header-content
{
    height: auto;
    width: 100vw;
    padding: 10px 0 0 18px;
    color: #9DACAE;
}


.content-title
{
    margin: 0 0 2px 0;
}

.content
{
    width: 100%;
    font-size: 1em;
    
}

.big-btn
{
    height: 32px;
    width: 105px;
    border: none;
    border-radius: 20px;
    margin: 3% 3% 0 0;
    box-shadow: 0 1px 3px rgba(0,0,0,0.1);
    background: #2A3139;
    border: 1px solid #fff;
    color: #f8f8f8;
    cursor: pointer;
}

.big-btn > a
{
    height: 100%;
    width: 100%;
    text-decoration: none;
    color: #fff;
    display: flex;
    justify-content: center;
    align-items: center;
}

button:focus
{
    outline: none;
}


/*********** Sidebar ***********/


.sidebar
{
    height: 100vh;
    width: 100vw;
    clip-path: circle(0 at 100% 0%);
    background: #03A9F4;
    position: absolute;
    z-index: 20;
    transition: all 0.8s cubic-bezier(0.68, -0.55, 0.265, 1.55);
    
}

#hidden_div
{
    position: absolute;
    z-index: 15;
    background: rgba(0,0,0,0.3);
    height: 100vh;
    width: 100vw;
    display: none;
}

.s-c-holder
{
    height: 100%;
    width: 100%;
    
}

.s-c-holder > .item
{
    position: absolute;
    top: 5%;
    right: 5%;
    height: 8vh;
    background: rgb(26, 60, 88);
    border-radius: 5px;
    cursor: pointer;
    text-transform: uppercase;
    font-size: 0.9em;
    display: flex;
    justify-content: center;
    align-items: center;
    transition: all 0.8s cubic-bezier(0.68, -0.55, 0.265, 1.55);
    color: #fff;
    
}

.item:nth-child(1)
{
    width: 80vw;
}

.item:nth-child(2)
{
    width: 75vw;
}

.item:nth-child(3)
{
    width: 70vw;
}

.item:nth-child(4)
{
    width: 60vw;
}

.item:nth-child(5)
{
    width: 45vw;
}

.item:nth-child(6)
{
    width: 85vw;
}





/****** Svg *********/

#header-svg
{
    position: absolute;
    bottom: 50vh;
}

#myclip
{
    fill: rgb(26, 60, 88);
    
}



/******* Make Title ********/


.main-container
{
    height: auto;
    width: 100%;
    background: #eee;
}

.title-div
{
    min-height: 40vh;
    max-height: auto;
    background: #03A9F4;
    background: #FC2750;
    color: #fff;
    text-align: center;
    display: flex;
    flex-direction: column;
    justify-content: center;
    align-items: center;
    //margin: 10px 0 0 0;
}

.title-tri
{
    height: 20px;
    width: 20px;
    background: inherit;
    transform: rotate(45deg);
    position: relative;
    top: 5px;
    left: 80px;
    transition: all 0.8s cubic-bezier(0.68, -0.55, 0.265, 1.55);
}

.title-div.next
{
    background: #FFC000;
}

.title-div.dev
{
    background: #FB8443;
    
}

.title-div > .icon-holder > i
{
    font-size: 3em;
}

.op-title
{
    text-transform: uppercase;
    font-size: 3.2em;
}

.op-t-tag
{
    font-size: 0.9em;
}

.icon-holder
{
    height: 65px;
    width: 65px;
    border-radius: 50%;
    background: red;
    padding: 15px;
    display: flex;
    justify-content: center;
    align-items: center;
    background: rgba(26, 60, 88, 0.9);
    font-size: 80%;
    transform: rotate(360deg);
    transition: all 0.8s cubic-bezier(0.68, -0.55, 0.265, 1.55);
}




/******** Game Template ********/

.main-game-holder
{
    height: auto;
    width: 100vw;
    display: grid;
    grid-template-columns: 1fr 1.5fr;
    grid-row-gap: 8px;
    //grid-column-gap: 5px;
    padding: 25px 5px 5px 5px;
    overflow: hidden;
}

.main-game-holder > div > button > a
{
    color: #fff;
    text-decoration: none;
    display: block;
    height: 100%;
    width: 100%;
    display: flex;
    justify-content: center;
    align-items: center;
}


.main-game-holder > div > button
{
    border-radius: 5px;
}



.main-game-holder > div
{
    background: #fff;
    min-height: 28vh;
    max-height: auto;
    padding: 20px 0 5px 10px;
    box-shadow: 0 1px 3px rgba(0,0,0,0.2);
    transition: all 0.8s cubic-bezier(0.68, -0.55, 0.265, 1.55);
}

.main-game-holder > .game-img
{
    background: rgba(26, 60, 88, 0.9);
    display: flex;
    justify-content: center;
    align-items: center;
    font-size: 2em;
    text-transform: uppercase;
    color: #9C9CAE;
    padding: 0;
    position: relative;
    left: -100vw;
    //border-radius: 5px 0 0 5px;
}

.main-game-holder > .game-inf
{
    position: relative;
    left: 100vw;
    //border-radius: 0 5px 5px 0;
    cursor: pointer;
}


.main-game-holder > div > p
{
    color: grey;
}

.main-game-holder > div > img
{
    height: 100%;
    width: 100%;
}

.main-game-holder > div > button
{
    height: 30px;
    width: 90%;
    background: #212121;
    color: #fff;
    border: none;
    margin: 10px 0;
    transform: translateX(5%);
    font-size: 1em;
}



/********** Profile ************/


.profile-holder
{
    height: auto;
    width: 100vw;
    padding: 25px 5px 5px 5px;
}

.s-profile
{
    height: auto;
    width: 100%;
    background: #fff;
    box-shadow: 0 1px 3px rgba(0,0,0,0.3);
}

.p-cover-img
{
    display: flex;
    flex-direction: column;
    justify-content: center;
    align-items: center;
}

.c-img
{
    height: 40vh;
    width: 100%;
}

.dp-holder
{
    height: 65px;
    width: 65px;
    background: #eee;
    border-radius: 50%;
    position: relative;
    top: -25px;
    display: flex;
    justify-content: center;
    align-items: center;
    background: #fff;
}

.dp
{
    height: 85%;
    width: 85%;
    border-radius: inherit;
}

.profile-id
{
    height: auto;
    width: 100%;
    display: flex;
    justify-content: center;
    align-items: center;
    flex-direction: column;
    position: relative;
    top: -20px;
    
    
}

.p-name
{
    font-size: 2em;
    color: #03A9F4;
    text-transform: uppercase;
    
}

.profile-info
{
    display: flex;
    justify-content: center;
    align-items: center;
    
}

.p-t
{
    height: 25vw;
    min-width: 25vw;
    margin: 0 10px;
    background: #fff;
    display: flex;
    flex-direction: column;
    justify-content: center;
    align-items: center;
    clip-path: polygon(0% 0%, 0% 0%, 0% 0%, 0% 0%);
    transition: all 0.8s cubic-bezier(0.68, -0.55, 0.265, 1.55);
    font-size: 1.2em;
    font-weight: bold;
    background: #4CBB17;
    color: #fff;
}

.p-t:nth-child(2){

    background: #FFC000;
    
}

.p-t:nth-child(3){
    
    background: #FB8443;
}

.profile-content
{
    height: auto;
    width: 100%;
    display: grid;
    grid-template-columns: 1fr 1fr 1fr;
    grid-gap: 5px;
    padding: 15px 5px 5px 5px;
    
    
}

/*    */

.project
{
    height: 20vh;
    clip-path: inset(40%);
    transition: all 1s cubic-bezier(0.68, -0.55, 0.265, 1.55);
    
    
}

.project1
{
    grid-column: 1/3;
    grid-row: 1/3;
    height: calc(40vh + 5px);
    background: url('https://images.pexels.com/photos/1827212/pexels-photo-1827212.jpeg');
    background-position: center;
    background-size: cover;
}

.project2
{
    background: url('https://images.pexels.com/photos/1508110/pexels-photo-1508110.jpeg?auto=compress&cs=tinysrgb&dpr=2&w=500');
    background-position: center;
    background-size: cover;
}

.project3
{
    background: url('https://images.pexels.com/photos/2098427/pexels-photo-2098427.jpeg?auto=compress&cs=tinysrgb&dpr=2&w=500');
    background-position: center;
    background-size: cover;
}


.project4
{
    background: url('https://images.pexels.com/photos/2570439/pexels-photo-2570439.jpeg?auto=compress&cs=tinysrgb&dpr=2&w=500');
    background-position: center;
    background-size: cover;
}

.project5
{
    grid-column: 2/4;
    background: url('https://images.pexels.com/photos/2440299/pexels-photo-2440299.jpeg');
    background-size: cover;
}

.prj
{
    height: 100%;
    width: 100%;
    background: rgba(0,0,0,0.5);
    color: #fff;
    display: flex;
    flex-direction: column;
    justify-content: center;
    align-items: center;
    cursor: pointer;
}

.prj-name
{
    font-size: 1.1em;
    text-transform: uppercase;
    padding: 8px 0;
}

.prj-tag
{
    font-size: 0.8em;
}


/********** Footer ************/

.footer-holder
{
    height: auto;
    width: 100vw;
    background: #5CBBEB;
    background: #263238;
    
}

.footer-content-holder
{
    height: auto;
    width: 100%;
    display: grid;
    grid-template-columns: 1fr 1fr;
    padding: 10% 0 0 0;
}

.section
{
    display: flex;
    justify-content: center;
    align-items: center;
    flex-direction: column;
}

.section > ul
{
    list-style-type: none;
    height: auto;
    color: #9C9CDE;
    display: flex;
    flex-direction: column;
    justify-content: center;
    align-items: center;
}

.section > ul > li
{
    cursor: pointer;
}

.section > h3
{
    color: #F8F8F8;
    margin: 8px 0;
}


#footer-svg
{
    position: relative;
    margin: 0;
    bottom: -10px;
}


.copy
{
    width: 100%;
    text-align: center;
    color: #fff;
    background: rgb(26, 60, 100);
    height: auto;
    padding: 2px 0;
}


/****** Loader *****/

#loader_div
{
    height: 100vh;
    width: 100vw;
    background: #36454F;
    display: flex;
    justify-content: center;
    align-items: center;
    position: absolute;
    top: 0;
    z-index: 500;
    
}


#loaderIcon
{
    animation: spin 1s infinite cubic-bezier(0.68, -0.55, 0.265, 1.55);
}

@Keyframes spin
{
    from 
    {
        transform: rotate(0deg);
    }
    to
    {
        transform: rotate(360deg);
    }
}
  </style>
  <script>
let information = {
    names : [
        'ئینگلیزی پۆلی ٩',
        'ژمێریاری کوردی',
        'خەجێ',
        'چیڕۆکی منداڵان',
        'لینک کورتکردنەوە',
        'وانەکانم',
        'ڕۆژە خۆشەکانت',
        'تیک تاک تۆی',
        'دۆزەرەوەی ئایپی',
        'کورد گروپ',
        'ژمارەکە بدۆزەرەوە',
        'پی دی ئێف خوێنەرەوە',
        'دابەزاندنی وێنەی ئینستاگرام',
        'وێنە و لۆگۆ'
    ],
    
    links : [
    <!--کار کردنی ئەو یاریانە-->
        'https://play.google.com/store/apps/details?id=englizy.poly.no',
    
        'https://play.google.com/store/apps/details?id=com.kurdishdevloper',
        'https://code.sololearn.com/WIrh0AVgKuyN/?ref=app',
        'https://code.sololearn.com/W7E4tmz96ak9/?ref=app',
        'https://code.sololearn.com/WXwwVAAa4aqH/?ref=app',
        'https://code.sololearn.com/WuC8F3Qyl9LC/?ref=app',
        'https://code.sololearn.com/Wn2kS53Yhwdm/?ref=app',
        'https://code.sololearn.com/W3xVN9374dSn/?ref=app',
        'https://code.sololearn.com/W3w8iJaHLl8S/?ref=app',
        'https://code.sololearn.com/W1fGU6U2Rcpd/?ref=app',
        'https://code.sololearn.com/WdY6C9t0ezdj/?ref=app',
        'https://code.sololearn.com/WzMRLkRGjmND/?ref=app',
        'https://code.sololearn.com/WQbDsfT63RYl/?ref=app',
        'https://code.sololearn.com/W6KFv9QNlkdk/?ref=app'
    ],
        

    
    imageLinks : [
        'https://i.ibb.co/PcsTQzV/pig.png',
        'https://i.ibb.co/C1kGn12/ltl3.jpg',
        'https://i.ibb.co/DK7ZprT/fighting-Mania.jpg',
        'https://i.ibb.co/FJkYg2H/ludo.jpg',
        'https://i.ibb.co/z75577c/spaceshooter.jpg',
        'https://i.ibb.co/Dr8jS9J/ninjarun.jpg',
        'https://i.ibb.co/8Yndtj7/ltl2.jpg',
        'https://i.ibb.co/Zx7nPsc/keytolead.jpg',
        'https://i.ibb.co/pyf0sMx/wonthethrone.jpg',
        'https://i.ibb.co/Mc2xVMt/trapthecrab.jpg',
        'https://i.ibb.co/q5vZrjB/ltl1.jpg',
        'https://i.ibb.co/7KBgxZH/skyrun.jpg',
        'https://i.ibb.co/RBMj9Ry/crazycar.jpg',
        'https://i.ibb.co/zFzHZfd/bubble.jpg'
    ],
    
    
    keywords : [
        'قوتابخانە',
        'یارمەتی',
        'یاری',
        'سوود',
        'یارمەتی',
        'قوتابخانە',
        'خۆشی',
        'یاری',
        'تریک',
        'کۆمەڵگە',
        'مێشک',
        'کتێب',
        'سۆشیاڵ',
        'وێنە'
        
    ]
    
    
}

let upvotes = ['👍 224', '👍 163', '👍 422','👍 230', '👍 223', '👍 217','👍 190', '👍 165', '👍 260', '👍 216', '👍 327', '👍 339', '👍 187', '👍 14'];


let colors = ['#5CBBEB', '#FC2750', '#626EBD', '#3C4784', '#FB8443', '#04BCA4', '#916EBA', '#04947C', '#EB6C93'];


window.onload = () => {
    
    let gnElem = document.getElementsByClassName('game-name');
    let upElem = document.getElementsByClassName('upvote'); 
    let linkElem = document.getElementsByClassName('glink');
    
    let key = document.getElementsByClassName('game-img');
    
    let ginfElem = document.getElementsByClassName('g-play');
    
    
    loader_div.style.display = 'none';
    document.body.style.overflow = 'scroll';
    
    
    for (let i = 0; i < gnElem.length; i++){
        gnElem[i].innerText = information.names[i];
    }
    
    for (let i = 0; i < upElem.length; i++){
        upElem[i].innerText = upvotes[i];
    }
    
    for (let i = 0; i < key.length; i++){
        key[i].innerText = information.keywords[i];
    }
    
    for (let i = 0; i < linkElem.length; i++){
        linkElem[i].setAttribute('href', information.links[i]);
    }
    
    for (let i = 0; i < ginfElem.length; i++){
        ginfElem[i].style.background = colors[Math.floor(Math.random() * colors.length)];
    }
    
    
    open_menu.addEventListener('click', () => {
        sidebar.style.clipPath = 'circle(110vw at 100% 0%)';
        hidden_div.style.display = 'block';
        document.body.style.overflow = 'hidden';
        
        
        
        
        
        setTimeout(() => {
            
            let items = document.getElementsByClassName('item');
            let tops = ['15%', '25%', '35%', '45%', '55%'];
        
            for (let i = 0; i < items.length; i++){
                items[i].style.top = tops[i];
        }
        
        
        }, 800);
        
        
    });
    
    hidden_div.addEventListener('click', () => {
        sidebar.style.clipPath = 'circle(0vw at 100% 0%)';
        hidden_div.style.display = 'none';
        document.body.style.overflow = 'scroll';
        
        
        let items = document.getElementsByClassName('item');
        
        
            for (let i = 0; i < items.length; i++){
                items[i].style.top = '5%';
        }
        
    
        
    });
    
    
    
    
    
    
    
    
}



window.onscroll = () => {
    
    let ws = window.pageYOffset;
    
    
    let gnElem = document.getElementsByClassName('game-img');
    let gfElem = document.getElementsByClassName('game-inf');
    
    let ih = document.getElementsByClassName('icon-holder');
    let tt = document.getElementsByClassName('title-tri');
    
    
    for (let i = 0; i < gnElem.length; i++){
        if (ws > gnElem[i].offsetTop - gnElem[i].offsetHeight*3){
            gnElem[i].style.left = '0';
            gfElem[i].style.left = '0';
            
        }
        else
        {
            gnElem[i].style.left = '-50vw';
            gfElem[i].style.left = '60vw';
        }
    }
    
    
    for (let i = 0; i < ih.length; i++){
        if (ws > ih[i].offsetTop - ih[i].offsetHeight*5){
            ih[i].style.transform = 'rotate(-360deg)';
            tt[i].style.top = '35px';
        }
        else
        {
            ih[i].style.transform = 'rotate(360deg)';
            tt[i].style.top = '5px';
        }
    }
    
    
    let project = document.getElementsByClassName('project');
    let pt = document.getElementsByClassName('p-t');
    
    
    for (let i = 0; i < project.length; i++){
        if (ws > project[2].offsetTop - project[i].offsetHeight*3){
            project[i].style.clipPath = 'inset(0%)';
        }
        else
        {
            project[i].style.clipPath = 'inset(40%)';
        }
    }
    
    for (let i = 0; i < pt.length; i++){
        if (ws > pt[i].offsetTop - pt[i].offsetHeight*4){
            pt[i].style.clipPath = 'polygon(50% 0%, 100% 50%, 50% 100%, 0% 50%)';
        }
        else
        {
            pt[i].style.clipPath = 'polygon(0% 0%, 0% 0%, 0% 0%, 0% 0%)';
        }
    }
    
    if (ws > web.offsetTop){
        webIcon.style.transform = 'rotate(360deg)';
    }
    else
    {
        webIcon.style.transform = 'rotate(0deg)';
    }
    
    
    
}
  </script>
  </head>
    <body>
    
    
        <!------- Sidebar Design ----->
        
        <div class="sidebar" id="sidebar">
            
            <div class="s-c-holder">
                <div class="item">دەربارەی من</div>
                <div class="item">یاریەکانم</div>
                <div class="item">پەیوەندی</div>
                <div class="item">ماڵەوە</div>
            </div>
            
        </div>
        <div id="hidden_div"></div>
        
        <!--------- Header --------->
        
        <div id="web" class="header">
                
            
            
            <div class="float-header">
                <div><a href="#">ماڵەوە</a></div>
                <div><a href="#oldGames">ئەپە کۆنەکان</a></div>
                <div><a href="#newGames">ئەپە نوێیەکان</a></div>
                <div><img src="https://i.ibb.co/GCMBSfN/white-menu-icon-12.png" class="icon" id="open_menu"></div>
            </div>
        
            
            <div class="design-curve-div">
            
                <div class="identity-div">
                <img id="webIcon" class="web-icon" src="https://i.ibb.co/TMfZG8k/mkkk.gif">
                <span class="web-name">Dana Mantk</span>
                
            </div>
            
            <p class="tag-line">ماڵپەڕی سەرەکیم</p>
            
            
             
                
            </div>
            
            <div class="header-content">
                <h1 class="content-title">دەربارە</h1>
                <p class="content">
                
                  وێب سایتی سەرەکی دانا مەنتک کە تیای دا هەموو چالاکیەکان و ئەپڵیکەیشنەکانم تیا دادەنێم
                    
                </p>
                
               <button class="big-btn"><a href="#newGames">دابەزاندن</a></button>
                <button class="big-btn"><a href="#dev">دیفیلۆپەر</a></button>
                
                
            </div>
            
           
            
        </div>
        
        
        <!--- Svg Path --->
        
        <svg id="header-svg" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 320">
            
        <path id="myclip" fill="#f3f4f5" fill-opacity="1" d="M0,256L40,218.7C80,181,160,107,240,96C320,85,400,139,480,181.3C560,224,640,256,720,224C800,192,880,96,960,80C1040,64,1120,128,1200,128C1280,128,1360,64,1400,32L1440,0L1440,320L1400,320C1360,320,1280,320,1200,320C1120,320,1040,320,960,320C880,320,800,320,720,320C640,320,560,320,480,320C400,320,320,320,240,320C160,320,80,320,40,320L0,320Z"></path>
            
        </svg>
        
        
        
        <!--- Main Content ---->
        
        
        <div class="main-container">
        
        
        
        
        
        
            <!--- Title Maker --->
        
            <div id="newGames" class="title-div">
                
                <div class="icon-holder">
                  <i class="fas fa-gamepad"></i>  
                </div>
                <h1 class="op-title">ئەپە نوێیەکان</h1>
                <p class="op-t-tag">هەندێ لە ئەپە نوێیەکانم</p>
                <div class="title-tri"></div>
            </div>
            
            
            
            
            <div class="main-game-holder">
                
                <!---------------->
                
                <div class="game-img">
                    
                    
                </div>
                
                <div class="game-inf">
                
                    <h3 class="game-name">ئینگلیزی پۆلی ٩</h3>
                    <p class="g-s-d">تایبەتە بە قوتابیانی پۆلی ٩ کە تیایدا وانە ڕێزمانیەکان لەخۆ دەگرێ</p>
                    <p class="upvote">👍 200</p>
                    <button class="g-play"><a class="glink" href="https://play.google.com/store/apps/details?id=englizy.poly.no">دابەزاندن</a></button>
                    
                </div>
                
                <!----------------->
                
                
                <div class="game-img">
                    
                    
                </div>
                
                <div class="game-inf">
                
                    <h3 class="game-name">ژمێریاری کوردی</h3>
                    <p class="g-s-d">یەکەمین عاسیبەی کوردیە کە هێما بیرکاری و فیزیایەکان لەخۆ دەگرێ</p>
                    <p class="upvote">👍 200</p>
                    <button class="g-play"><a class="glink" href="https://play.google.com/store/apps/details?id=com.kurdishdevloper">دابەزاندن</a></button>
                    
                </div>
                
                
                
                <!---------------->
                
                <div class="game-img">
                    
                    
                </div>
                
                <div class="game-inf">
                
                    <h3 class="game-name">Infinity War</h3>
                    <p class="g-s-d">This is a short description of the game!</p>
                    <p class="upvote">👍 200</p>
                    <button class="g-play"><a class="glink" href="#">Play Now</a></button>
                    
                </div>
                
                <!----------------->
                
                
                <div class="game-img">
                    
                    
                </div>
                
                <div class="game-inf">
                
                    <h3 class="game-name">Infinity War</h3>
                    <p class="g-s-d">This is a short description of the game!</p>
                    <p class="upvote">👍 200</p>
                    <button class="g-play"><a class="glink" href="#">Play Now</a></button>
                    
                </div>
                
                
                <!---------------->
                
                <div class="game-img">
                    
                    
                </div>
                
                <div class="game-inf">
                
                    <h3 class="game-name">Infinity War</h3>
                    <p class="g-s-d">This is a short description of the game!</p>
                    <p class="upvote">👍 200</p>
                    <button class="g-play"><a class="glink" href="#">Play Now</a></button>
                    
                </div>
                
                <!----------------->
                
                
                <div class="game-img">
                    
                    
                </div>
                
                <div class="game-inf">
                
                    <h3 class="game-name">Infinity War</h3>
                    <p class="g-s-d">This is a short description of the game!</p>
                    <p class="upvote">👍 200</p>
                    <button class="g-play"><a class="glink" href="#">Play Now</a></button>
                    
                </div>
                
                
                
                <!---------------->
                
                <div class="game-img">
                    
                    
                </div>
                
                <div class="game-inf">
                
                    <h3 class="game-name">Infinity War</h3>
                    <p class="g-s-d">This is a short description of the game!</p>
                    <p class="upvote">👍 200</p>
                    <button class="g-play"><a class="glink" href="#">Play Now</a></button>
                    
                </div>
                
                </div>
                
                
                <!--- Title Maker --->
        
            <div id="oldGames" class="title-div next">
                
                <div class="icon-holder">
                  <i class="fas fa-drafting-compass"></i>  
                </div>
                <h1 class="op-title">Old Games</h1>
                <p class="op-t-tag">Explore all my old blockbuster and exclusive games below!</p>
                <div class="title-tri"></div>
            </div>
                
                <div class="main-game-holder">
                
                <!----------------->
                
                
                <div class="game-img">
                    
                    
                </div>
                
                <div class="game-inf">
                
                    <h3 class="game-name">Infinity War</h3>
                    <p class="g-s-d">This is a short description of the game!</p>
                    <p class="upvote">👍 200</p>
                    <button class="g-play"><a class="glink" href="#">Play Now</a></button>
                    
                </div>
                
                
                <!---------------->
                
                <div class="game-img">
                    
                    
                </div>
                
                <div class="game-inf">
                
                    <h3 class="game-name">Infinity War</h3>
                    <p class="g-s-d">This is a short description of the game!</p>
                    <p class="upvote">👍 200</p>
                    <button class="g-play"><a class="glink" href="#">Play Now</a></button>
                    
                </div>
                
                <!----------------->
                
                
                <div class="game-img">
                    
                    
                </div>
                
                <div class="game-inf">
                
                    <h3 class="game-name">Infinity War</h3>
                    <p class="g-s-d">This is a short description of the game!</p>
                    <p class="upvote">👍 200</p>
                    <button class="g-play"><a class="glink" href="#">Play Now</a></button>
                    
                </div>
                
                
                
                <!---------------->
                
                <div class="game-img">
                    
                    
                </div>
                
                <div class="game-inf">
                
                    <h3 class="game-name">Infinity War</h3>
                    <p class="g-s-d">This is a short description of the game!</p>
                    <p class="upvote">👍 200</p>
                    <button class="g-play"><a class="glink" href="#">Play Now</a></button>
                    
                </div>
                
                <!----------------->
                
                
                <div class="game-img">
                    
                    
                </div>
                
                <div class="game-inf">
                
                    <h3 class="game-name">Infinity War</h3>
                    <p class="g-s-d">This is a short description of the game!</p>
                    <p class="upvote">👍 200</p>
                    <button class="g-play"><a class="glink" href="#">Play Now</a></button>
                    
                </div>
                
                
                <!---------------->
                
                <div class="game-img">
                    
                    
                </div>
                
                <div class="game-inf">
                
                    <h3 class="game-name">Infinity War</h3>
                    <p class="g-s-d">This is a short description of the game!</p>
                    <p class="upvote">👍 200</p>
                    <button class="g-play"><a class="glink" href="#">Play Now</a></button>
                    
                </div>
                
                <!----------------->
                
                
                <div class="game-img">
                    
                    
                </div>
                
                <div class="game-inf">
                
                    <h3 class="game-name">Infinity War</h3>
                    <p class="g-s-d">This is a short description of the game!</p>
                    <p class="upvote">👍 200</p>
                    <button class="g-play"><a class="glink" href="#">Play Now</a></button>
                    
                </div>
                
                
                
                
                
                
            </div>
            
            
            <div id="dev" class="title-div dev">
                
                <div class="icon-holder">
                  <i class="fas fa-user"></i>  
                </div>
                <h1 class="op-title">Developer</h1>
                <p class="op-t-tag">Find who has developed all these games and designs!</p>
                <div class="title-tri"></div>
            </div>
            
            
            <!-------- Profile --------->
            
            <div class="profile-holder">
            
                <div class="s-profile">
                
                <div class="p-cover-img">
                    <img class="c-img" src="https://i.ibb.co/MG08nBB/images-5.jpg">
                    <div class="dp-holder">
                        <img class="dp" src="https://api.sololearn.com/Uploads/Avatars/7038378.jpg">
                    </div>
                </div>
                
                
                
                <div class="profile-id">
                    <h3 class="p-name">Arb Rahim Badsa</h3>
                    <p class="p-tag">Learning web designing and development to the peak!</p>
                </div>
                
                <div class="profile-info">
                    <div class="p-t">
                        <i class="fas fa-user"></i>
                        <p class="t-n">7600+</p>
                        
                        
                    </div>
                    <div class="p-t">
                        <i class="fas fa-briefcase"></i>
                        <p class="t-n">150+</p>
                        
                    </div>
                    <div class="p-t">
                        <i class="fas fa-tasks"></i>
                        <p class="t-n">60%</p>
                        
                    </div>
                    
                </div>
                
                
                
                
                <div class="profile-content">
                    
                    
                    <div class="project project1">
                        
                        <div class="prj">
                        
                            <h3 class="prj-name">Sunshine</h3>
                            <p class="prj-tag">Web Design</p>
                            
                        </div>
                        
                    </div>
                    <div class="project project2">
                        <div class="prj">
                        
                            <h3 class="prj-name">Forest Cast</h3>
                            <p class="prj-tag">Web Design</p>
                            
                        </div>
                        
                    </div>
                    <div class="project project3">
                        <div class="prj">
                        
                            <h3 class="prj-name">Uniq Profile</h3>
                            <p class="prj-tag">Web Design</p>
                            
                        </div>
                    </div>
                    <div class="project project4">
                        <div class="prj">
                        
                            <h3 class="prj-name">Sololearn Pfl</h3>
                            <p class="prj-tag">Web Design</p>
                            
                        </div>
                    </div>
                    <div class="project project5">
                        <div class="prj">
                        
                            <h3 class="prj-name">Freelancer Profile</h3>
                            <p class="prj-tag">Web Design</p>
                            
                        </div>
                    </div>
                    
                    
                </div>
                
                
            </div>
            
            </div>
            
            
            
            
            
            <!------- Footer -------->
            
            
            <div class="footer-holder">
                <div class="footer-content-holder">
                    
                    <div class="section">
                        <h3 class="footer-title">About Site</h3>
                        <ul>
                            <li>Make Games Today</li>
                            <li>Earn Money</li>
                            <li>Advertise Now</li>
                            <li>Get Paid Online</li>
                        </ul>
                        
                    </div>
                    
                    
                    
                    <div class="section">
                        <h3 class="footer-title">New Issues</h3>
                        <ul>
                            <li>Make Games Today</li>
                            <li>Earn Money</li>
                            <li>Advertise Now</li>
                            <li>Get Paid Online</li>
                        </ul>
                        
                    </div>
                    
                    
                    
                    <div class="section">
                        <h3 class="footer-title">Publication</h3>
                        <ul>
                            <li>Make Games Today</li>
                            <li>Earn Money</li>
                            <li>Advertise Now</li>
                            <li>Get Paid Online</li>
                        </ul>
                        
                    </div>
                    
                    
                    
                    <div class="section">
                        <h3 class="footer-title">Hire Us</h3>
                        <ul>
                            <li>Make Games Today</li>
                            <li>Earn Money</li>
                            <li>Advertise Now</li>
                            <li>Get Paid Online</li>
                        </ul>
                        
                    </div>
                    
                    
                    
                    
                    
                    
                    
                    
                    
                    
                    
                    
                </div>
                
                <!----- Footer Curve ----->
                
                <div class="footer-curve">
                    
                    
                    
                    <svg id="footer-svg" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 320"><path fill="rgb(26, 60, 100)" fill-opacity="1" d="M0,96L60,85.3C120,75,240,53,360,64C480,75,600,117,720,122.7C840,128,960,96,1080,101.3C1200,107,1320,149,1380,170.7L1440,192L1440,320L1380,320C1320,320,1200,320,1080,320C960,320,840,320,720,320C600,320,480,320,360,320C240,320,120,320,60,320L0,320Z"></path>
                        
                        
                        
                    </svg>
                    
                    
                    <p class="copy">Designer : Dana Mantk</p>
                    
                    
                    
                    
                    
                </div>
                
                
            </div>
            
            
            
            
            
        </div>
        
        
        <div id="loader_div">
            
            <img id="loaderIcon" class="web-icon" src="https://i.ibb.co/tJTMZ7j/20191004-112803.png">
            
        </div>
        
        
        
    </body>
</html>
