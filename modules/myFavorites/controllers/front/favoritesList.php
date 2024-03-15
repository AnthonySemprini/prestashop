<?php

class FavoriteslistModuleFrontController extends ModuleFrontController
{
    public function initContent()
    {
        parent::initContent();
        
        if (!$this->context->customer->isLogged()) {
            Tools::redirect('index.php?controller=authentication&back=module-myFav-favoriteslist');
        }
        
        $id_customer = $this->context->customer->id;
        
        
        $favoritesList = $this->module->getFavoritesListForCustomer($id_customer);
        
        
        $this->context->smarty->assign('favorites', $favoritesList);
        
       
        $this->setTemplate('module:myFav/views/templates/front/favoriteslist.tpl');
    }
}
