<?php
/**
 * Fuel is a fast, lightweight, community driven PHP5 framework.
 *
 * @package    Fuel
 * @version    1.8
 * @author     Fuel Development Team
 * @license    MIT License
 * @copyright  2010 - 2016 Fuel Development Team
 * @link       http://fuelphp.com
 */

/**
 * The Welcome Controller.
 *
 * A basic controller example.  Has examples of how to set the
 * response body and status.
 *
 * @package  app
 * @extends  Controller
 */
class Controller_Welcome extends Controller_Base
{
	public function action_before(){
		parent::before();
	}
	/**
	 * The basic welcome message
	 *
	 * @access  public
	 * @return  Response
	 */
	public function action_index()
	{
		$this->template->title="Welcome";
		$this->template->content = View::forge('welcome/index');
	}

	/**
	 * A typical "Hello, Bob!" type example.  This uses a Presenter to
	 * show how to use them.
	 *
	 * @access  public
	 * @return  Response
	 */
	public function action_hello()
	{
		return Response::forge(Presenter::forge('welcome/hello'));
	}

	/**
	 * The 404 action for the application.
	 *
	 * @access  public
	 * @return  Response
	 */
	public function action_404()
	{
		$this->template->title="Page not found";
		$this->template->content=View::forge('welcome/404');
		// return Response::forge(Presenter::forge('welcome/404'), 404);
	}

	public function action_galleries()
	{
		return View::forge('welcome/galleries');
		// return Response::forge(Presenter::forge('welcome/404'), 404);
	}

	public static function action_autostyle($i=0){
		switch($i%4){
			case 0 :
				return 'default'; break;
			case 1 :
				return 'info'; break;
			case 2 :
				return 'warning'; break;
			case 3 :
				return 'success'; break;
			case 4 :
				return 'danger'; break;
			default:
			return 'primary';
		}
	}
}
