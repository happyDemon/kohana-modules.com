<?php defined('SYSPATH') or die('No direct script access.');

class Controller_Webhook extends Controller
{
    public function before()
    {
        Kohana_Log::instance()->add('INFO', 'Webhook action called: :action',
            array(':action' => $this->request->action));   
    }

    public function action_import()
    {
        Minion_Task::factory('module:import')->execute(array());
    }
}