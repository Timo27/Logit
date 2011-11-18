<?php
<<<<<<< HEAD
class Timelinecontroller extends Zend_Controller_Action {
=======
class TimelineController extends Zend_Controller_Action {
>>>>>>> ae78481d54e2628fdbe7fb4e38470941053a3bbb
	
	public function init()
    {
       
    }
<<<<<<< HEAD

   
	public function indexAction()
	{
		$this->_helper->viewRenderer->setNoRender(true);
		echo '<a href="/ajax/logout">logout</a>';
	}
=======
    
    public function index(){
    	
    }

   
>>>>>>> ae78481d54e2628fdbe7fb4e38470941053a3bbb
	
}