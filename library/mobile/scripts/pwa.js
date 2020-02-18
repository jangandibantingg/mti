//Loading the Service Worker
if ('serviceWorker' in navigator) {
  window.addEventListener('load', function() {
    navigator.serviceWorker.register('_service-worker.js');
  });
}

$(document).ready(function(){      
    'use strict'	
    
    var pwaVersion = '1.0';
    $('[data-pwa-version]').data('pwa-version', pwaVersion)
    
    //Creating Cookie System for PWA Hide
    function createCookie(e, t, n) {if (n) {var o = new Date;o.setTime(o.getTime() + 48 * n * 60 * 60 * 1e3);var r = "; expires=" + o.toGMTString()} else var r = "";document.cookie = e + "=" + t + r + "; path=/"}
    function readCookie(e) {for (var t = e + "=", n = document.cookie.split(";"), o = 0; o < n.length; o++) {for (var r = n[o];" " == r.charAt(0);) r = r.substring(1, r.length);if (0 == r.indexOf(t)) return r.substring(t.length, r.length)}return null}
    function eraseCookie(e) {createCookie(e, "", -1)}
    
    //Enabling dismiss button
    setTimeout(function(){
        $('.pwa-dismiss').on('click',function(){
            console.log('User Closed Add to Home / PWA Prompt')
            createCookie('Asterial_pwa_rejected_install', true, 1);
            $('body').find('#menu-install-pwa-android, #menu-install-pwa-ios, .menu-hider').removeClass('menu-active'); 
        });
    },1500);
    
    //Add To Home Banners
    var simulateAndroidBadge = $('.simulate-android-badge');
    var simulateiPhonesBadge = $('.simulate-iphones-badge');
    var simulateAndroidBanner = $('.simulate-android-banner');
    var simulateiPhonesBanner = $('.simulate-iphones-banner');
    var addToHome = $('.add-to-home');
    var addToHomeIOS = 'add-to-home-ios';
    var addToHomeAndroid = 'add-to-home-android';
    var addToHomeIOSBanner = $('#menu-install-pwa-ios, .menu-hider')
    var addToHomeAndroidBanner = $('#menu-install-pwa-android, .menu-hider')
    var addToHomeVisible = 'add-to-home-visible';

    addToHome.on('click',function(){
        setTimeout(function(){addToHome.removeClass(addToHomeIOS).removeClass(addToHomeAndroid);},250);
        addToHome.removeClass(addToHomeVisible)
    });
    simulateAndroidBadge.on('click',function(){
        addToHome.addClass(addToHomeVisible).addClass(addToHomeAndroid).removeClass(addToHomeIOS);
    });
    simulateiPhonesBadge.on('click',function(){
        addToHome.addClass(addToHomeVisible).addClass(addToHomeIOS).removeClass(addToHomeAndroid);
    });
    simulateAndroidBanner.on('click',function(){
        addToHomeIOSBanner.addClass('menu-active');
    });
    simulateiPhonesBanner.on('click',function(){
        addToHomeAndroidBanner.addClass('menu-active');
    });
        
    //Detecting Mobile Operating Systems
    var isMobile = {
        Android: function() {return navigator.userAgent.match(/Android/i);},
        iOS: function() {return navigator.userAgent.match(/iPhone|iPad|iPod/i);},
        any: function() {return (isMobile.Android() || isMobile.iOS() || isMobile.Windows());}
    };
    var isInWebAppiOS = (window.navigator.standalone == true);
    var isInWebAppChrome = (window.matchMedia('(display-mode: standalone)').matches);
    
    //Firing PWA prompts for specific versions and when not on home screen.    
    if (isMobile.Android()) {
        console.log('Android Detected');
        function showInstallPromotion(){
            console.log('Triggering PWA Prompt for Android');
            if($('#menu-install-pwa-android, .add-to-home').length){
                if (!readCookie('Asterial_pwa_rejected_install')) {
                    setTimeout(function(){
                        $('.add-to-home').addClass('add-to-home-visible add-to-home-android');
                        $('#menu-install-pwa-android, .menu-hider').addClass('menu-active')
                    },1500);
                }
            }
        }
        let deferredPrompt;
        window.addEventListener('beforeinstallprompt', (e) => {
            e.preventDefault();
            deferredPrompt = e;
            showInstallPromotion();
            if($('#menu-install-pwa-android, .add-to-home').length){
                if (!readCookie('Asterial_pwa_rejected_install')) {
                    setTimeout(function(){
                        $('.add-to-home').addClass('add-to-home-visible add-to-home-android');
                        $('#menu-install-pwa-android').addClass('menu-active');
                        $('.menu-hider').addClass('menu-active');
                    },1500);
                }
            }
        });
        $('.pwa-install').on('click',function(e){
          deferredPrompt.prompt();
          deferredPrompt.userChoice
            .then((choiceResult) => {
              if (choiceResult.outcome === 'accepted') {
                //console.log('User accepted the A2HS prompt');
              } else {
                //console.log('User dismissed the A2HS prompt');
              }
              deferredPrompt = null;
            });
        });
        window.addEventListener('appinstalled', (evt) => {
            $('#menu-install-pwa-android, .menu-hider').removeClass('menu-active')
        });
    }  
    
    if (isMobile.iOS()) {
        if(!isInWebAppiOS){
            console.log('iOS Detected');
            if($('#menu-install-pwa-ios, .add-to-home').length){
                if (!readCookie('Asterial_pwa_rejected_install')) {
                    console.log('Triggering PWA / Add to Home Screen Prompt for iOS');
                    setTimeout(function(){
                        $('.add-to-home').addClass('add-to-home-visible add-to-home-ios');
                        $('#menu-install-pwa-ios, .menu-hider').addClass('menu-active');
                    },1500);
                };
            }
        }
    }    

    
    //Creating Update Modal
    function updateModal(){
        var body = $('body');
        var updateModal = $('#menu-update');
        if(!updateModal.length){
           body.append('<div id="menu-update"></div>');
           setTimeout(function(){
               body.find('#menu-update').load('menu-update.html');   
           },250);
        }
    };
                    
    //Update Version in 5 Seconds After New Version Detected
    function updateButton(){
        var counter = 5;
        var interval = setInterval(function() {
            counter--;
            console.log(counter);
            $('.page-update').html('Updating in ... '+ counter + ' seconds');
            if (counter == 0) {
                $('.page-update').trigger('click');
                clearInterval(interval);
            }
        }, 1000);
    };
        
    //Check Version    
    function check_version(){
        if($('link[data-pwa-version]').length){
            function versionCheck(){        
                var dt = new Date();
                var maniTimeVersion = dt.getHours() + ":" + dt.getMinutes() + ":" + dt.getSeconds();
                var localVersionNumber = $('link[rel="manifest"]').data('pwa-version');
                var onlineVersionJSON = "_manifest.json?ver=" + maniTimeVersion;
                var onlineVersionNumber = "Connection Offline. Waiting to Reconect";
                $.getJSON(onlineVersionJSON, function(onlineData) {onlineVersionNumber = onlineData.version;}); 
                setTimeout(function(){
                    //console.log('Online Version: ' + onlineVersionNumber + '\n' + ' Local Version: ' + localVersionNumber);
                    if(onlineVersionNumber != localVersionNumber && onlineVersionNumber != "Connection Offline. Waiting to Reconect"){
                        updateModal();
                        setTimeout(function(){
                            $('body').find('#menu-update').addClass('menu-active');
                            $('.menu-hider').addClass('menu-active-no-click');    
                            updateButton();
                        },500);
                    }     
                    if(onlineVersionNumber == localVersionNumber){/*No Update Available*/}    
                    if(onlineVersionNumber === "undefined"){/*Error Checking for Updates*/}    
                    if(onlineVersionNumber === "Finding Online Version..."){
                        $('.reloadme').addClass('disabled'); 
                        $('body').find('#menu-update').removeClass('menu-active');
                        $('.menu-hider').removeClass('menu-active-no-click');                
                    }
                },3000);
            }
            //Checking for new version every 60 seconds
            setInterval(function(){versionCheck()}, 57000);
            //Initial Load Version Check in 1 Second After Load
            setTimeout(function(){versionCheck();}, 1000);
        }
    }
    
    //Reload To Clear Button    
    $('body').on('click', '.page-update, .reloadme', function() {
        location.reload();
    });
    
    //Check for Version Change if Online If not Kill the Function
    if (navigator.onLine) {check_version();} else {function check_version(){}}
    
    //Adding Offline Alerts
    var offlineAlerts = $('.offline-message');

    if(!offlineAlerts.length){
        $('body').append('<p class="offline-message bg-red2-dark color-white center-text uppercase ultrabold">No internet connection detected</p> ');
        $('body').append('<p class="online-message bg-green1-dark color-white center-text uppercase ultrabold">You are back online</p>');
    }
    
    //Offline Function Show
    function isOffline(){
        $('.offline-message').addClass('offline-message-active');
        $('.online-message').removeClass('online-message-active');
        setTimeout(function(){$('.offline-message').removeClass('offline-message-active');},2000);
    }
    
    //Online Function Show
    function isOnline(){
        $('.online-message').addClass('online-message-active');
        $('.offline-message').removeClass('offline-message-active');
        setTimeout(function(){$('.online-message').removeClass('online-message-active');},2000);
    }    
    
    $('.simulate-offline').on('click',function(){isOffline();})
    $('.simulate-online').on('click',function(){isOnline();})
        
    //Check if Online / Offline
    function updateOnlineStatus(event) {
    var condition = navigator.onLine ? "online" : "offline";
        isOnline();
        console.log( 'Connection: Online');
        $("a").off( "click", returnFalse );
    }
    function updateOfflineStatus(event) {
        isOffline();
        $("a").on( "click", returnFalse );
        console.log( 'Connection: Offline');
    }
    window.addEventListener('online',  updateOnlineStatus);
    window.addEventListener('offline', updateOfflineStatus);
    
    //Disable links to other pages if offline.
    //Warning! Enabling offline for iOS can cause issues
    //To allow offline functionality delete the next 7 lines
    function returnFalse(){
        var detectHREF = $(this).attr('href');
        if(detectHREF.match(/.html/)){
            isOffline();
            return false;
        }  
    }   
    
 
}); 
