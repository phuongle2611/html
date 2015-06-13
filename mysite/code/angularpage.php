<?php
class Angular_Page extends Page {

	private static $db = array(
	);

	private static $has_one = array(
	);

}
class Angular_Page_Controller extends Page_Controller {

	/**
	 * An array of actions that can be accessed via a request. Each array element should be an action name, and the
	 * permissions or conditions required to allow the user to access it.
	 *
	 * <code>
	 * array (
	 *     'action', // anyone can access this action
	 *     'action' => true, // same as above
	 *     'action' => 'ADMIN', // you must have ADMIN permissions to access this action
	 *     'action' => '->checkAction' // you can only access this action if $this->checkAction() returns true
	 * );
	 * </code>
	 *
	 * @var array
	 */
	private static $allowed_actions = array (
	);

	public function init() {
		parent::init();
		// You can include any CSS or JS required by your project here.
		// See: http://doc.silverstripe.org/framework/en/reference/requirements
		//Requirements::css("cms/css/TreeSelector.css");
		
		Requirements::javascript("javascript/app/bower_components/angular/angular.js");
		Requirements::javascript("javascript/app/bower_components/angular-route/angular-route.js");
		//Requirements::javascript("javascript/app/bower_components/angular/angular.js");
		//Requirements::javascript("javascript/app/bower_components/angular/angular.js");
        

	}

	public function index(){

		//return $this->renderWith(array("angulartemplate", "Page"));
		$angular_page = Director::baseURL().'/angularjs/app/';
		return Director::redirect($angular_page);

	}

}
