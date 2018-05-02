<?php 

class ViewsController {
    
    private $viewsDir = './views/';
    private $initViewsDir = './views/cars.php';
    private $viewsRegistered = ["cars"];

    public function getView(){
        $content = $this->initViewsDir;
        
        if (isset($_GET['view'])) {
            $route = explode("/", $_GET['view']);
            $viewName = $route[0];
            $viewFile = $this->viewsDir.$viewName.".php";
            
            if(in_array($viewName, $this->viewsRegistered) && is_file($viewFile)){
                $content = $viewFile;
            }
        }
        
        return $content;
    }
    
}

?>