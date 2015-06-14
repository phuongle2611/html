<?php
/**
* 
*/
class AnimatebannerPage extends Page {
    
    
}

class AnimatebannerPage_Controller extends Page_Controller {

    public function init(){
        parent::init();
        //Requirements::clear();
        Requirements::javascript("http://ajax.googleapis.com/ajax/libs/angularjs/1.3.14/angular.min.js");
        // Requirements::javascript("https://cdnjs.cloudflare.com/ajax/libs/angular.js/1.3.15/angular-route.js");
        Requirements::javascript("https://code.createjs.com/easeljs-0.8.0.min.js");
        Requirements::javascript("https://code.createjs.com/preloadjs-0.6.0.min.js");

        Requirements::javascript(ANIMATEBANNER_DIR.'/javascript/app/app.js');
        Requirements::javascript(ANIMATEBANNER_DIR.'/javascript/app/directives/spriteSheetCanvas.js');

        Requirements::javascript(ANIMATEBANNER_DIR.'/javascript/app/services/loaderSvc.js');
        


        Requirements::javascript(ANIMATEBANNER_DIR.'/javascript/app/uiClasses/sky.js');
        Requirements::javascript(ANIMATEBANNER_DIR.'/javascript/app/uiClasses/ground.js');
        Requirements::javascript(ANIMATEBANNER_DIR.'/javascript/app/uiClasses/hill.js');
        Requirements::javascript(ANIMATEBANNER_DIR.'/javascript/app/uiClasses/character.js');
        
    }

    // public function index(){

    // }

}
