<?php

class FavoritesList extends ModuleFrontController
{
    public function initContent()
    {
        parent::initContent();
        
        if (!$this->context->customer->isLogged()) {
            Tools::redirect('index.php?controller=authentication&back=module-MyFav-favoriteslist');
        }
        
        $id_customer = $this->context->customer->id;
        
        
        $favoritesList = $this->module->getFavoritesListForCustomer($id_customer);
        
        
        $this->context->smarty->assign('favorites', $favoritesList);
        
       
        $this->setTemplate('module:MyFav/views/templates/front/favoriteslist.tpl');
    }
}
