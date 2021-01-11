<?php

class session
{

    private $begin_session = false;
    private $session_destroy;


    /**
     * start_session function
     * start session
     * @return void
     */
    public function start_session()
    {
        if ($this->begin_session == false) {
            session_start();
            $this->begin_session = true;
        }
    }


    // $_SESSION[$key] = $value;
    public function set_session($key, $value)
    {
        $_SESSION[$key] = $value;
    }

    /**
     * get_session function
     *
     * @param [type] $key  = normal sessio
     * @param boolean $second_key  = array - value
     * @return void
     * 
     * example array
     * $katorymnd_session->set_session('name', array(
     * 'name' => 'john',
     *  'number' => '123',
     *    )); 
     * 
     * call the session
     * 
     * $katorymnd_session->get_session('name', 'number'); [123]
     * 
     * 
     * normal example
     * $katorymnd_session->set_session('names', 'smith'); // set session
     * 
     * call the session
     * $katorymnd_session->get_session('name'); [smith]
     * 
     * check session  to retrict page access
     * 
     *  if($katorymnd_session->get_session('name') == true){
     * 
     * // login user
     * 
     *   }else{
     * 
     * //no user session
     * 
     * }
     */
    public function get_session($key, $second_key = false)
    {

        if ($second_key == true) {

            if (isset($_SESSION[$key][$second_key])) {

                return  $_SESSION[$key][$second_key];
            }
        } else {
            if (isset($_SESSION[$key])) {
                return $_SESSION[$key];
            }
        }

        return false;
    }

    /**
     * display_session function
     *
     * will display any available session if called 
     * this will help to know if the session is set or not
     * @return void
     */
    public function display_session()
    {
        print '<pre>';
        print_r($_SESSION);
        print '</pre>';
    }

    /**
     * destroy_session function
     * delete or clear any available session
     * @return void
     */
    public function destroy_session()
    {
        if ($this->begin_session == true) {
            session_unset();
            session_destroy();
        }
    }
}




$katorymnd_session = new session(); // intiatiate
$katorymnd_session->start_session();

