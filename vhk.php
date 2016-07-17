<?php 

class App5 implements Appendix {


	public function daysOffRequirement($data)
	{
		
		var_dump(' App5 = 5 ');
	}
}
class App6 implements Appendix {
	public function daysOffRequirement($data)
	{
        var_dump( ' App6 = 6 ');
	}
}

class App {
	public function daysOffRequirement($data, Appendix $appendix)
	{
		$appendix->daysOffRequirement($appendix);
	}
}

$app = new App;

$app->daysOffRequirement('The Appendix Option is specified here',new App6);



interface Appendix {
	public function daysOffRequirement($data);
}
