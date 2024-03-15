<?php

class FavoritesModuleFrontController extends ModuleFrontController
{
    public function postProcess()
    {
        if ($action = Tools::getValue('action')) {
            switch ($action) {
                case 'add':
                    $this->processAddFavorite();
                    break;
                
            }
        }
    }

    protected function processAddFavorite()
    {
        $id_product = (int)Tools::getValue('id_product');
        $id_customer = (int)$this->context->customer->id;
        
        if ($id_product && $id_customer) {
            
            $sql = new DbQuery();
            $sql->select('*');
            $sql->from('myFav');
            $sql->where('id_customer = '.(int)$id_customer);
            $sql->where('id_product = '.(int)$id_product);
            $exists = Db::getInstance()->getRow($sql);
            
          
            if (!$exists) {
                $result = Db::getInstance()->insert('myFav', [
                    'id_customer' => (int)$id_customer,
                    'id_product' => (int)$id_product,
                    'date_add' => date('Y-m-d H:i:s'),
                ]);
            } else {
                
                $result = true;
            }
    
            die(json_encode(['success' => $result]));
        }
    }
    
}
