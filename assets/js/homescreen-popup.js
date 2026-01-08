/*==========================
 add to home screen popup js
 ==========================*/
 let deferredPrompt = null;

 window.addEventListener('beforeinstallprompt', (e) => {
   deferredPrompt = e;
 });
 
 document.addEventListener('DOMContentLoaded', () => {
 
   const installApp = document.getElementById('installApp');
 
   if (!installApp) {
     return; // button not present on this page (e.g. login)
   }
 
   installApp.addEventListener('click', async () => {
     if (deferredPrompt !== null) {
       deferredPrompt.prompt();
 
       const { outcome } = await deferredPrompt.userChoice;
 
       if (outcome === 'accepted') {
         deferredPrompt = null;
       }
     }
   });
 
 });
 