<?php

namespace App\Controller;
use Src\Classes\ClassRender;
use Src\Interfaces\InterfaceView;

class ControllerHome extends ClassRender implements InterfaceView{
    public function __construct()
    {
        $this->setTitle("Página Inicial");
        $this->setDescription("Programador full-stack, apaixonado pelas
        melhores tecnologias de desenvolvimento back-end, front-end de modo
        especifico na modelagem de dados...");
        $this->setKeywords("Java, C#, SQL, UML, HTML, CSS, JavaScript, React,
        Node.JS");
        $this->setDir("home");
        $this->renderLayout();
    }
}

?>