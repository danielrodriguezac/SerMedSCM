<?php
class View_Alertdiv extends ViewModel
{
	public function view()
	{
            $this->addclasses = '';
        }
        public function info()
	{
            $this->addclasses = ' alert-info';
        }
        public function success()
	{
            $this->addclasses = 'alert-success';
        }
        public function error()
	{
            $this->addclasses = 'alert-error';
        }
}