<?php
namespace controllers;

 use Ubiquity\orm\DAO;

 /**
 * Controller Question
 **/
class Question extends ControllerBase{
	public function index(){
        $user=DAO::getById(\models\Question::class, 4);
        echo($user->getCaption());
        echo($user->getCkcontent());
        var_dump($user->getAnswers());

    }
}
