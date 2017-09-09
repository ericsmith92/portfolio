 /*FIXED HEADER/SHRINK HEADER*/
//debounce function
    function debounce(func, wait = 10, immediate = true) {
        var timeout;
        return function () {
            var context = this, args = arguments;
            var later = function () {
                timeout = null;
                if (!immediate) func.apply(context, args);
            };
            var callNow = immediate && !timeout;
            clearTimeout(timeout);
            timeout = setTimeout(later, wait);
            if (callNow) func.apply(context, args);
        };
    }

//grab header
    const header = document.querySelector('#header');

    function toggleFixedHeader() {
        let scrollPoint = Math.floor(window.scrollY);
        if (scrollPoint >= 100) {
            header.classList.add('fixed-header');
            //add 100px to top of body to remove jankyness
            document.body.style.marginTop = 100 + 'px';
        } else {
            header.classList.remove('fixed-header');
            //reset back to 8px
            document.body.style.marginTop = 8 + 'px';
        }
    }

//listener
    window.addEventListener('scroll', debounce(toggleFixedHeader));

    /*TOGGLE NAVIGATION*/
//grab menu
    const menu = document.querySelector('.toggleNav');
//grab menu items
    const menuItems = document.querySelector('.main_nav__items');
//functionality
    function toggleMenu() {
        menuItems.classList.toggle('show_nav');

        if (menuItems.classList.contains('show_nav')) {
            menu.style.backgroundImage = "url('./images/navToggleHover.svg')";
        } else {
            menu.style.backgroundImage = "url('./images/navToggle.svg')";
        }
    }

//listeners
    menu.addEventListener('click', toggleMenu);

    /*ANIMATE SCROLL*/
    /*get height of header*/
    var headerHeight = $('#header').outerHeight();

    $('.nav-link').click(function (e) {
        e.preventDefault();
        var linkHref = $(this).attr('href');

        $('html, body').animate({
            scrollTop: $(linkHref).offset().top - headerHeight
        }, 1000);
    });

    /*SLIDE SHOW*/
//grab all slides
    const slideOne = document.querySelector('#slide-one');
    const slideTwo = document.querySelector('#slide-two');
    const slideThree = document.querySelector('#slide-three');
    const slideFour = document.querySelector('#slide-four');
    /*const slideFive = document.querySelector('#slide-five');*/

//put into array
    const slideArray = [slideOne, slideTwo, slideThree, slideFour];

//grab buttons
    const btns = document.querySelectorAll('.button');

//counter for index
    let idx = 0;

//functionality

    function moveSlide() {
        //remove class of current from image being shown
        slideArray[idx].classList.remove('current');
        slideArray[idx].classList.remove('slide_transition');

        if (this.id === 'prev') {
            idx--;
            if (idx < 0) {
                idx = slideArray.length - 1;
            }
            slideArray[idx].classList.add('current');
            slideArray[idx].classList.add('slide_transition');
        }

        if (this.id === 'next') {
            idx++;
            if (idx > slideArray.length - 1) {
                idx = 0;
            }
            slideArray[idx].classList.add('current');
            slideArray[idx].classList.add('slide_transition');
        }

    }//end moveSlide


//listeners
//buttons
    btns.forEach(btn => btn.addEventListener('click', moveSlide));

    /*CONTACT FORM*/
//grab submit button
    const submitBtn = document.querySelector('#mybtn');
    const status = document.querySelector('#status');

//functionality
    function addPlane() {
        status.innerHTML = "<i class='fa fa-paper-plane' aria-hidden='true'></i>";
        //console.log('plane');
    }

    function removePlane() {
        status.innerHTML = '';
    }

//listener
    submitBtn.addEventListener('mouseenter', addPlane);
    submitBtn.addEventListener('mouseleave', removePlane);

 /*SEND MAIL*/

 //flag
 var myFlag = false;
 //grab form
 var formHandle = document.forms[0];
 formHandle.onsubmit = submitForm;
 //email regex
 var emailRE = /^(([^<>()\[\]\\.,;:\s@"]+(\.[^<>()\[\]\\.,;:\s@"]+)*)|(".+"))@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}])|(([a-zA-Z\-0-9]+\.)+[a-zA-Z]{2,}))$/;

 //grab form container to change display to flex on success
 var formCont = document.querySelector('.form_container');
 //save time/space/repetitiveness with this function to grab elements by id
 function _(id) {
     return document.getElementById(id);
 }

 //submit form function
 function submitForm(){

     //javascript validation
     //name field
     if( _('name').value === '' ){
         _('name-blank').innerHTML = '*Name required';
         myFlag = true;
         return false;
     }else{
         _('name-blank').innerHTML = '';
         myFlag = false;
     }
     //email field, check for blank and regex
     if(_('email').value === '' || emailRE.test(_('email').value) === false ){
         _('email-blank').innerHTML = '*Enter Valid Email';
         myFlag = true;
         return false;
     }else{
         _('email-blank').innerHTML = '';
         myFlag = false;
     }
     //message field
     if(_('message').value === ''){
         _('message-blank').innerHTML = '*Message required';
         myFlag = true;
         return false;
     }else{
         _('message-blank').innerHTML = '';
         myFlag = false;
     }
     //if flag is false, attempt to send mail
     if(!myFlag) {

         //prevent multiple/blank submissions once function is running by disabling submit
         _('mybtn').disabled = true;
         //give user feedback about status of task
         _('name-blank').innerHTML = 'please wait...';

         //instantiate new FromData() object, append new key value pairs
         var formData = new FormData();

         formData.append('name', _('name').value);
         formData.append('email', _('email').value);
         formData.append('message', _('message').value);

         //ajax
         var ajax = new XMLHttpRequest();
         ajax.open("POST", "includes/contact.php");
         ajax.onreadystatechange = function () {
             if (ajax.readyState == 4 && ajax.status == 200) {
                 if (ajax.responseText == "success") {
                     formCont.classList.add("form_container__success");
                     _("my_form").innerHTML = '<div id="thanks-msg">Thanks ' + _("name").value + ', your message has been sent!</div>';
                 } else {
                     _("status").innerHTML = ajax.responseText;
                     //re enable button so user can try again
                     _("mybtn").disabled = false;
                 }
             }
         }
         ajax.send(formData);
     }
     return false;
 }//end submitForm


