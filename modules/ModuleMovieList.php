<?php

namespace ByteSolution;

class ModuleMovieList extends \Module
{
    /**
	* Template
	* @var string
	*/
    protected $strTemplate = 'mod_movielist';
    
    public function generate(){
	return parent::generate();
    }
    protected function compile() {
	$objMovie = \MovieModel::findByPk(2);
	$this->Template->movie = $objMovie;
    }

    

   
}
?>
